<?php

namespace App\Http\Controllers;

use App\Mail\SendOtpMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;


class AuthController extends Controller
{
  //form login
  public function showLoginForm()
  {
    return view('auth.login');
  }

  // login process
  public function login(Request $request)
  {
    $request->validate([
      'email' => 'required|email',
      'password' => 'required'
    ]);

    if (Auth::attempt($request->only('email', 'password'))) {
      $request->session()->regenerate();
      // return redirect()->intended('/dashboard');
      return redirect()->route('homepage');
    }  else {
      throw ValidationException::withMessages([
        'email' => 'Email anda salah atau tidak terdaftar',
        'password' => 'Password anda salah'
      ]);
    }
  }

  // form register
  public function showRegisterForm()
  {
    return view('auth.register');
  }

  // register process
  public function register(Request $request)
  {
    $request->validate([
      'name' => 'required|string|max:255',
      'username' => 'required|string|max:255|unique:users',
      'email' => 'required|email|max:225|unique:users',
      'password' => 'required|string|min:8|same:confirmPassword',
      'confirmPassword' => 'required'
    ]);

    $otp_code = random_int(100000, 999999);

    // dd($otp_code);

    if (User::where('email', $request->email)->exists()) {
      return redirect()->back()->withErrors(['email' => 'Email sudah terdaftar']);
    }elseif (User::where('username', $request->username)->exists()) {
      return redirect()->back()->withErrors(['username' => 'Username sudah terdaftar']);
    } elseif (strlen($request->password) < 8) {
      return redirect()->back()->withErrors(['password' => 'Password minimal 8 karakter']);
    } elseif ($request->password !== $request->confirmPassword) {
      return redirect()->back()->withErrors(['password' => 'Password harus sama']);
    } else {

      $user = User::create([
        'name' => $request->name,
        'photo' => 'https://res.cloudinary.com/dqr9vycth/image/upload/v1717192588/profile_dummy.png',
        'username' => $request->username,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role' => 'user',
        'otp_code' => $otp_code,
        'is_verified' => false
      ]);

      // Auth::login($user);
  
      Mail::to($user->email)->send(new SendOtpMail($otp_code));
  
      // return redirect()->route('homepage');
      
      return redirect()->route('otp.verify')->with('message', 'Registrasi berhasil. Periksa email Anda untuk kode OTP.');
    
    }

  }

  // verify otp
  public function showOtpForm()
  {
    return view('auth.verify-otp');
  }

  public function verifyOtp(Request $request)
  {
    $request->validate(['otp_code' => 'required|string']);

    $user = User::where('otp_code', $request->otp_code)->first();

    if ($user) {
      // Set akun sebagai terverifikasi
      $user->is_verified = true;
      $user->otp_code = null; // Hapus OTP setelah verifikasi
      $user->save();

      Auth::login($user);
      
      return redirect('/')->with('message', 'Akun Anda telah terverifikasi.');

    } else {
      return back()->withErrors(['otp_code' => 'Kode OTP salah.']);
    }
  }


  // logout process
  public function logout(Request $request)
  {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
  }
}

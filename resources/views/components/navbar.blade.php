<div class="fixed top-0 left-0 w-full z-50 flex flex-row px-6 py-3 bg-white border-b border-blue-600 items-center justify-between">
  {{-- logo --}}
  <a href="{{ url('/') }}" class="flex gap-2 items-center">
    <img src="{{ asset('img/logo-sika3.png') }}" alt="logo-sika3" class="h-10 w-auto">
    <h1 class="text-4xl text-blue-600 font-black">SIKA<span class="text-green-400">3</span></h1>
  </a>

  {{-- menu --}}
  <div class="flex flex-row justify-between gap-10 text-blue-600">
    <a class="font-semibold hover:font-bold" href="">APD</a>
    <a class="font-semibold hover:font-bold" href="">APAR & P3K</a>
    <a class="font-semibold hover:font-bold" href="">COLOR CODE</a>
    <a class="font-semibold hover:font-bold" href="">RISK REGISTER</a>
  </div>

  {{-- profile --}}
  <div class="flex flex-row items-center gap-2">
    <h3 class="font-bold text-blue-600">Hai, Guests</h3>
    <div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
          <img
            alt="profile"
            src="https://res.cloudinary.com/dqr9vycth/image/upload/v1717192588/profile_dummy.png" />
        </div>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
        <li><a>Login</a></li>
        <li><a>Register</a></li>
      </ul>
    </div>
  </div>
</div>
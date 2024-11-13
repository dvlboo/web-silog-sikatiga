<?php

namespace App\Http\Controllers;

use App\Models\RiskRegister;
use Illuminate\Http\Request;

class RiskRegisterController extends Controller
{
    public function show()
    {
        return view('users.risk-register-page');
    }

    public function view()
    {
        $risks = RiskRegister::all();
        
        return view('admin.risk-register', compact('risks'));
    }

    public function upload(Request $request)
    {
        // Validate the request
        $request->validate([
            'name_reporter' => 'required',
            'name_finding' => 'required',
            'description' => 'required',
            'date' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg', // Validasi foto
            'control' => 'required',
        ]);

        $photoUrl = cloudinary()->upload($request->file('photo')->getRealPath(), [
            'folder' => 'sika3',
            'transformation' => [
                'quality' => 'auto',
                'format' => 'webp',
            ],
        ])->getSecurePath();     

        // Upload the data
        RiskRegister::create([
            'name_reporter' => $request->name_reporter,
            'name_finding' => $request->name_finding,
            'description' => $request->description,
            'date' => $request->date,
            'photo' => $photoUrl,
            'control' => $request->control,
        ]);

        // Redirect to the previous page
        return redirect()->back();
    }
}

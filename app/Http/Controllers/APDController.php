<?php

namespace App\Http\Controllers;

use App\Models\APD;
use Illuminate\Http\Request;

class APDController extends Controller
{
    public function apd()
    {
        // Get all the data from the database
        $apds = APD::all();

        // Return the view
        return view('users.apd', compact('apds'));
    }

    public function view()
    {
        // Get all the data from the database
        $apds = APD::all();

        // Return the view
        return view('admin.apd.show-apd', compact('apds'));

    }

    public function add()
    {
        return view('admin.apd.add-apd');
    }

    public function upload(Request $request)
    {
        // Validate the request
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg', // Validasi foto
            'name' => 'required',
            'size' => 'required',
            'stock' => 'required|numeric',
            'valid_until' => 'required',
        ]);

        $imgUrl = cloudinary()->upload($request->file('image')->getRealPath(), [
            'folder' => 'sika3',
            'transformation' => [
                'quality' => 'auto',
                'format' => 'webp',
            ],
        ])->getSecurePath();

        // dd($request->all());
        // dd($imgUrl);

        // Upload the data
        APD::create([
            'image' => $imgUrl,
            'name' => $request->name,
            'size' => $request->size,
            'stock' => $request->stock,
            'valid_until' => $request->valid_until,
        ]);

        // Redirect to the previous page
        return redirect()->back();
    }



}

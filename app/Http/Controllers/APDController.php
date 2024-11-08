<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APDController extends Controller
{
    public function view()
    {
        // Dummy Data
        $apds = [
            [
                'id' => 1,
                'image' => 'https://via.placeholder.com/150',
                'name' => 'Helm Safety',
                'size' => 'L',
                'stock' => 10,
                'valid_until' => '2025-12-31'
            ],
            [
                'id' => 2,
                'image' => 'https://via.placeholder.com/150',
                'name' => 'Sarung Tangan',
                'size' => 'M',
                'stock' => 25,
                'valid_until' => '2024-08-15'
            ],
            [
                'id' => 3,
                'image' => 'https://via.placeholder.com/150',
                'name' => 'Kacamata Pelindung',
                'size' => 'Universal',
                'stock' => 50,
                'valid_until' => '2026-05-10'
            ],
            [
                'id' => 4,
                'image' => 'https://via.placeholder.com/150',
                'name' => 'Masker Respirator',
                'size' => 'M',
                'stock' => 40,
                'valid_until' => '2024-10-30'
            ]
        ];

        // Pass the dummy data to the view
        return view('admin.apd', compact('apds'));

    }

    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiskRegisterController extends Controller
{
    public function view()
    {
        // Dummy Data
        $risks = [
            [
                'id' => 1,
                'name_reporter' => 'Agus',
                'name_finding' => 'Helm Safety',
                'description' => 'Helmet safety yang digunakan sudah tidak layak pakai',
                'date' => '2024-11-09',
                'photo' => 'https://via.placeholder.com/150',
                'control' => 'Mengganti helm safety yang baru'
            ],
            [
                'id' => 2,
                'name_reporter' => 'Agus',
                'name_finding' => 'Helm Safety',
                'description' => 'Helmet safety yang digunakan sudah tidak layak pakai',
                'date' => '2024-11-09',
                'photo' => 'https://via.placeholder.com/150',
                'control' => 'Mengganti helm safety yang baru'
            ],
            [
                'id' => 3,
                'name_reporter' => 'Agus',
                'name_finding' => 'Helm Safety',
                'description' => 'Helmet safety yang digunakan sudah tidak layak pakai',
                'date' => '2024-11-09',
                'photo' => 'https://via.placeholder.com/150',
                'control' => 'Mengganti helm safety yang baru'
            ],
            [
                'id' => 4,
                'name_reporter' => 'Agus',
                'name_finding' => 'Helm Safety',
                'description' => 'Helmet safety yang digunakan sudah tidak layak pakai',
                'date' => '2024-11-09',
                'photo' => 'https://via.placeholder.com/150',
                'control' => 'Mengganti helm safety yang baru'
            ],
            [
                'id' => 5,
                'name_reporter' => 'Agus',
                'name_finding' => 'Helm Safety',
                'description' => 'Helmet safety yang digunakan sudah tidak layak pakai',
                'date' => '2024-11-09',
                'photo' => 'https://via.placeholder.com/150',
                'control' => 'Mengganti helm safety yang baru'
            ],
            
        ];
        
        return view('admin.risk-register', compact('risks'));
    }
}

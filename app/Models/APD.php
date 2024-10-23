<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class APD extends Model
{
    use HasFactory, SoftDeletes;

    // Tentukan kolom yang dapat diisi (fillable)
    protected $fillable = [
        'image',
        'name',
        'size',
        'stock',
        'valid_until',
    ];

    // Tentukan tipe kolom yang perlu di-cast
    protected $casts = [
        'valid_until' => 'date',
    ];
}

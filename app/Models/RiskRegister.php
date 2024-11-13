<?php

namespace App\Models;

use CloudinaryLabs\CloudinaryLaravel\MediaAlly;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RiskRegister extends Model
{
    use HasFactory, SoftDeletes, MediaAlly;

    protected $fillable = [
        'name_reporter',
        'name_finding',
        'description',
        'date',
        'photo',
        'control',
    ];

    protected $casts = [
        'date' => 'date',
    ];
}
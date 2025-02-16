<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $fillable = [
      'bagan',
      'visi',
      'misi',
      'sejarah',
      'kepala_desa',
      'kejadian',
    ];

    protected $casts = [
      'misi' => 'array',
      'kepala_desa' => 'array',
      'kejadian' => 'array',
  ];
}
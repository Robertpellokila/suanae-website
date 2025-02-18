<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idm extends Model
{
    use HasFactory;

    protected $fillable = [
      'tahun',
      'skor',
      'status',
      'target',
      'skor_iks',
      'skor_ike',
      'skor_ikl',
      'minimal',
      'penambahan',
      'is_active',
      'dasar_hukum',
      'apbd',
      'file_apbd',
    ];
}
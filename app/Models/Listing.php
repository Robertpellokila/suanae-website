<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    
    protected $fillable = [
      'title_satu',  
      'description_satu',
      'data_satu',
      'title_dua',
      'description_dua',
      'data_dua',
    ];

    protected $casts = [
      'data_satu' => 'array',
      'data_dua' => 'array',
  ];

  // Accessor untuk mengambil gambar pertama dari data_satu
  public function getDataSatuGambarAttribute()
  {
      return isset($this->data_satu[0]['gambar']) ? asset('storage/' . $this->data_satu[0]['gambar']) : null;
  }

  // Accessor untuk mengambil gambar pertama dari data_dua
  public function getDataDuaGambarAttribute()
  {
      return isset($this->data_dua[0]['gambar']) ? asset('storage/' . $this->data_dua[0]['gambar']) : null;
  }
}
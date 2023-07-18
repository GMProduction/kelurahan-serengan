<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_id',
      'no_kk',
      'no_ktp',
      'jenis_kelamin',
      'agama',
      'tempat_lahir',
      'tanggal_lahir',
      'kewarganegaraan',
      'pekerjaan',
      'tempat_tinggal',
      'file_ktp',
      'file_kk'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class citizen extends Model
{
    use HasFactory;
    protected $fillable = ['Nama', 'NIK', 'JenisKelamin', 'Usia', 'Alamat'];
}

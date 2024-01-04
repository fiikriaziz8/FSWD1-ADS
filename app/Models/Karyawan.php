<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nomor_Induk',
        'Nama',
        'Alamat',
        'Tanggal_Lahir',
        'Tanggal_Bergabung'
    ];
    public $timestamps = false;


}

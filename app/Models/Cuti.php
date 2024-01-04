<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nomor_Induk',
        'Tanggal_Cuti',
        'Lama_Cuti',
        'Keterangan',
    ];


    public function Karyawan(){
        return $this->belongsTo(Karyawan::class, 'Nomor_Induk', 'Nomor_Induk');
    }
}

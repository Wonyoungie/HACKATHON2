<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_data extends Model
{
    protected $fillable = [
        'nama_lengkap', 'tempat_lahir', 'tanggal_lahir', 'provinsi_ktp',
        'kabupaten_kota_ktp', 'kecamatan_ktp', 'kelurahan_ktp', 'rt_ktp',
        'rw_ktp', 'kode_pos_ktp', 'alamat_domisili'
    ];
}

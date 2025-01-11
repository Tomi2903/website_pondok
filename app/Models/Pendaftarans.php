<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftarans extends Model
{
    use HasFactory;
    protected $fillable = [
        "id",
        "nama_santri_baru",
        "alamat",
        "tgl",
        "nisn",
        "nama_orang_tua",
        "asal_sekolah",
        "nomor_telepon",
        "jenis_kelamin"
    ];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerimaans extends Model
{
    use HasFactory;
    protected $fillable = [
        "id_pendaftaran",
        "nama_santri_baru",
        "status_pendaftaran"
    ];
}

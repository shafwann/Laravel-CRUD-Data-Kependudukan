<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;

    protected $table = "penduduk";
    protected $primaryKey = "id_penduduk";
    protected $fillable = [
        'id_penduduk', 'nik','nama', 'gender', 'alamat', 'status', 'pekerjaan', 'warga', 'asal', 'tanggal', 'darah'
    ];
}

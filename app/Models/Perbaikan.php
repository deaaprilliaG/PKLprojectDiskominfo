<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perbaikan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_instansi', 
        'alamat_pic', 
        'tanggal', 
        'no_hp', 
        'tipe', 
        'id_pelapor', 
        'sumber_internet', 
        'switch_internal', 
        'perangkat_alat', 
        'keterangan_kondisi', 
        'keterangan_perbaikan', 
        'petugas_nama', 
        'petugas_tanda_tangan', 
        'download_speed', 
        'upload_speed'
    ];
}


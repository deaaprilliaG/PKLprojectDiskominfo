<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternetService extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_instansi', 
        'nama_pic', 
        'jabatan', 
        'tanggal', 
        'no_hp', 
        'ttd', 
        'nama_kegiatan', 
        'bandwidth', 
        'jadwal_tgl', 
        'jadwal_jam_mulai', 
        'jadwal_jam_selesai', 
        'petugas_1_nama', 
        'petugas_1_ttd', 
        'petugas_2_nama', 
        'petugas_2_ttd'
    ];
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZoomMeeting extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_instansi', 
        'nama_pic', 
        'jabatan', 
        'nama_topic_meet', 
        'jumlah_participant', 
        'jadwal_tgl', 
        'jadwal_jam_mulai', 
        'jadwal_jam_selesai', 
        'nama_petugas_1', 
        'ttd_petugas_1', 
        'nama_petugas_2', 
        'ttd_petugas_2'
    ];
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitoring extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'nama_instansi',
        'nama_pic',
        'tanggal',
        'no_hp',
        'jabatan',
        'titik_lokasi',
        'isp_backup',
        'router_internal',
        'switch_internal',
        'waktu_uji_coba',
        'jam_internetan',
        'test_speed',
        'test_switch_internal',
        'download_speed',
        'upload_speed',
        'kabel_lan',
        'aksespoint',
        'switch_pembagi',
        'keterangan_kondisi',
        'topologi',
        'monitor_1_name',
        'monitor_2_name',
        'monitor_1_signature',
        'monitor_2_signature',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'tanggal' => 'date',
        'isp_backup' => 'boolean',
        'router_internal' => 'boolean',
        'switch_internal' => 'boolean',
        'waktu_uji_coba' => 'datetime:H:i',
        'jam_internetan' => 'datetime:H:i',
    ];

    /**
     * Define any necessary relationships here.
     * For example, if monitoring belongs to a user:
     */
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}


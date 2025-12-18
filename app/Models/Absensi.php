<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Absensi extends Model
{
    protected $fillable = [
        'user_id',
        'pendaftar_id', // 🆕
        'nama',
        'ekskul',
        'kehadiran',
        'keterangan',
        'foto',
    ];

    public function pendaftar()
    {
        return $this->belongsTo(Pendaftar::class);
    }
}



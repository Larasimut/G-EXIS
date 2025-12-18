<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'pesan',
        'role',
        'pengirim_id',
        'pengirim_nama',
        'ekskul',       // nama ekskul (opsional)
        'ekskul_id',    // relasi ke tabel ekskul
        'pembina_id'    // relasi ke user pembina
    ];

    /**
     * Relasi ke tabel ekskul
     */
    public function ekskul()
    {
        return $this->belongsTo(Ekskul::class);
    }

    /**
     * Relasi ke user pembina (pengirim)
     */
    public function pembina()
    {
        return $this->belongsTo(User::class, 'pembina_id');
    }
}

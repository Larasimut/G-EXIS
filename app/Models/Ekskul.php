<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ekskul extends Model
{
    protected $table = 'ekskuls'; // sesuaikan kalau tabelmu bernama ekskuls

    protected $fillable = [
        'nama',
        'pembina_id'
    ];

    public function siswa()
    {
        return $this->belongsToMany(User::class, 'pendaftar', 'ekskul_id', 'siswa_id');
    }
    public function pendaftar()
{
    return $this->hasMany(Pendaftar::class, 'ekskul_id');
}

}

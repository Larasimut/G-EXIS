<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Pendaftar extends Model
{
    use HasFactory;

    protected $table = 'pendaftar';
    protected $fillable = ['user_id', 'nama', 'kelas', 'ekskul', 'alasan', 'kontak', 'status'];

    // Hubungan dengan user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function absensis()
{
    return $this->hasMany(Absensi::class);
}

}


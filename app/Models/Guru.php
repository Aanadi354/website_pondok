<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';

    protected $fillable = [
        'nama_guru',
        'alamat'
    ];

    // Relasi ke kelas (jika nanti digunakan)
    public function kelas()
    {
        return $this->hasMany(Kelas::class, 'id_guru');
    }
}
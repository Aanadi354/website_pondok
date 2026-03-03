<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $table = 'absensis';

    protected $fillable = [
        'id_kelas',
        'id_user',
        'tanggal',
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    // Relasi ke kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

    // Relasi ke user (guru yang menginput)
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    // Relasi ke detail absensi
    public function details()
    {
        return $this->hasMany(AbsensiDetail::class, 'id_absensi');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sesi extends Model
{
    protected $table = 'sesis';

    protected $fillable = [
        'nama_sesi',
        'jam_mulai',
        'jam_selesai',
        'is_active',
    ];

    protected $casts = [
        'jam_mulai' => 'datetime:H:i',
        'jam_selesai' => 'datetime:H:i',
        'is_active' => 'boolean',
    ];

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    // Relasi ke absensi
    public function absensis()
    {
        return $this->hasMany(Absensi::class, 'id_sesi');
    }
}
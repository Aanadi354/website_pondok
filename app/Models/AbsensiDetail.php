<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AbsensiDetail extends Model
{
    protected $table = 'absensi_details';

    protected $fillable = [
        'id_absensi',
        'id_santri',
        'status',
    ];

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    // Relasi ke header absensi
    public function absensi()
    {
        return $this->belongsTo(Absensi::class, 'id_absensi');
    }

    // Relasi ke santri
    public function santri()
    {
        return $this->belongsTo(ListSantri::class, 'id_santri');
    }
}
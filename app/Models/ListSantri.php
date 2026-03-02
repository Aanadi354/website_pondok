<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListSantri extends Model
{
    protected $table = 'list_santris';

        protected $fillable = [
        'nomor_induk',
        'nama',
        'jenis_kelamin',
        'alamat',
        'orang_tua',
        'nomor',
        'foto',
        'id_kelas'
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }
}
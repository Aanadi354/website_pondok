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
        'nomor'
    ];

    // 🔥 Tambahkan ini
    public function detail()
    {
        return $this->hasOne(DetailSantri::class, 'santri_id');
    }
}
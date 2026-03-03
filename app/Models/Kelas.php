<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';

    protected $fillable = [
        'nama_kelas',
        'id_guru'
    ];

    public function guru()
    {
        return $this->belongsTo(User::class, 'id_guru');
    }
    public function absensis()
    {
        return $this->hasMany(Absensi::class, 'id_kelas');
    }
}
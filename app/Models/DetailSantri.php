<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailSantri extends Model
{
    protected $table = 'detail_santris';

    protected $fillable = [
        'santri_id',
        'foto',
        'kelas'
    ];

    public function santri()
    {
        return $this->belongsTo(ListSantri::class, 'santri_id');
    }
}
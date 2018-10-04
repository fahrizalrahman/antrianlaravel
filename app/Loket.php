<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loket extends Model
{
    //
    protected $fillable = [
        'nama_layanan', 'kode', 'lantai','petugas'
    ];

    // relasi ke user
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'petugas');
    }
}

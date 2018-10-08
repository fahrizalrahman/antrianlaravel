<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sublayanan extends Model
{
    //
        protected $fillable = [
        'id_loket', 'nama_sublayanan'
    ];



    // relasi ke loket
    public function loket()
    {
        return $this->hasOne('App\Loket', 'id', 'id_loket');
    }
}

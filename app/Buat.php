<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buat extends Model
{
    protected $fillable = [
        'nama', 'alamat', 'umur'
    ];
}

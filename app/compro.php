<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class compro extends Model
{
    protected $fillable = ['user_id', 'nama', 'alamat', 'kota', 'kodepos', 'telp', 'email', 'lat', 'long'];
}

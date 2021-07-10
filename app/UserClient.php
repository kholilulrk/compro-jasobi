<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class UserClient extends Authenticatable
{
    // protected $table = 'user_clients';
    protected $fillable = ['username', 'password', 'nama', 'email', 'telp', 'alamat'];
}

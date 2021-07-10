<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    protected $table = 'admins';
    protected $fillable = ['nama', 'email', 'username', 'password'];
}

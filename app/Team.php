<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Team extends Model
{
    protected $fillable = ['nama_lengkap', 'profesi', 'no_telp', 'email', 'img']; 

    public function showImage ()
    {
        if (Storage::exists($this->img)) {
            return "storage/$this->img";
        }
        return asset('assets/admin/img/default.png');
    }
}

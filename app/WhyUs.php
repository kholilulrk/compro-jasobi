<?php

namespace App;

// use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class WhyUs extends Model
{
    protected $table = 'whyuses';
    protected $fillable = ['title','description','icon'];

    public function showImage ()
    {
        if (Storage::exists($this->icon)) {
            return "storage/$this->icon";
        }
        return asset('assets/admin/img/default.png');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Feature extends Model
{
    protected $fillable = ['title', 'description', 'icon'];

    public function showImage ()
    {
        if (Storage::exists($this->icon)) {
            return "storage/$this->icon";
        }
        return asset('assets/admin/img/default.png');
    }
}

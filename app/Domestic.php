<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Domestic extends Model
{
    protected $fillable = ['title', 'short_description', 'description', 'icon', 'url', 'url_website'];

    public function showVideo ()
    {
        $url = str_replace("https://www.youtube.com/watch?v=", "https://www.youtube.com/embed/", $this->url);
        return $url;
    }

    public function showImage ()
    {
        if (Storage::exists($this->icon)) {
            return "storage/$this->icon";
        }
        return asset('assets/admin/img/default.png');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Aboutus extends Model
{
    protected $table = 'abouts';
    protected $fillable = ['title', 'author', 'short_description', 'description', 'url', 'icon', 'logo', 'img_team', 'logo_grayscale', 'logo_feature'];

    public function showVideo ()
    {
        $url = str_replace("https://www.youtube.com/watch?v=", "https://www.youtube.com/embed/", $this->url);
        return $url;
    }

    public function showIcon ()
    {
        if (Storage::exists($this->icon)) {
            return "storage/$this->icon";
        }
        return asset('assets/admin/img/default.png');
    }

    public function showLogo ()
    {
        if (Storage::exists($this->logo)) {
            return "storage/$this->logo";
        }
        return asset('assets/admin/img/default.png');
    }

    public function showImageTeam ()
    {
        if (Storage::exists($this->img_team)) {
            return "storage/$this->img_team";
        }
        return asset('assets/admin/img/default.png');
    }

    public function showLogoGrayscale ()
    {
        if (Storage::exists($this->logo_grayscale)) {
            return "storage/$this->logo_grayscale";
        }
        return asset('assets/admin/img/default.png');
    }

    public function showLogoFeature ()
    {
        if (Storage::exists($this->logo_feature)) {
            return "storage/$this->logo_feature";
        }
        return asset('assets/admin/img/default.png');
    }
}

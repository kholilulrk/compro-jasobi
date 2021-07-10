<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCat extends Model
{
    protected $fillable = ['nama', 'parent'];

    public function children()
    {
        return $this->hasMany(ProductCat::Class, 'parent', 'id');
    }
}

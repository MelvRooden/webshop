<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    public function orderProducts()
    {
        return $this->hasMany('App\OrderProduct');
    }
}
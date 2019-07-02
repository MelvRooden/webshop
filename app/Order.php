<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Category');
    }

    public function orderProducts()
    {
        return $this->hasMany('App\OrderProduct');
    }
}

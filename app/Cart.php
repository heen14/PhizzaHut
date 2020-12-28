<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function pizzas(){
        return $this->belongsTo('App\Pizza','pizza_id');
    }
}

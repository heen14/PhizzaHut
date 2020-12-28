<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    public function Carts(){
        // return $this->hasMany(Carts::class,'pizza_id','id');
        return $this->belongsTo('App\Cart');
    }
}

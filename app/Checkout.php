<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    public function chkuser(){
        return $this->belongsTo('App\User','user_id');
    }
    
}

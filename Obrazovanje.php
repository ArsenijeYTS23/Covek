<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obrazovanje extends Model
{
   function covek(){
        return $this->hasMany('App\Covek');
    }
}

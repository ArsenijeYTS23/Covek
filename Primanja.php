<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Primanja extends Model
{
   function covek(){
        return $this->hasMany('App\Covek');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesto extends Model
{
   function covek(){
        return $this->hasMany('App\Covek');
    }
}

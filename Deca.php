<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deca extends Model
{
    function covek(){
        return $this->hasMany('App\Covek');
    }
}

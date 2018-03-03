<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brak extends Model
{
    function covek(){
        return $this->hasMany('App/Covek');
    }
}

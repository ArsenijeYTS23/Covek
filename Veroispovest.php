<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veroispovest extends Model
{
    function covek(){
        return $this->hasMany('App/Covek');
    }
}

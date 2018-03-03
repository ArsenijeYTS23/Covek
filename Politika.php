<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Politika extends Model
{
    function covek(){
        return $this->hasMany('App\Covek');
    }
}

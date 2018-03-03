<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Godine extends Model
{
    function covek(){
        return $this->hasMany('App\Covek');
    }
}

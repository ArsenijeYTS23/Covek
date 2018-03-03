<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Muzika extends Model
{
    function covek(){
        return $this->belongsToMany('App\Covek', 'covek_muzika',  'muzikas_id', 'covek_id');
    }
}

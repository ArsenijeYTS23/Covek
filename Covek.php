<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Covek extends Model
{
   
    
    function godine(){
        return $this->belongsTo('App\Godine');
    }
    function brak(){
        return $this->belongsTo('App\Brak');
    }
    function muzika(){
        return $this->belongsToMany('App\Muzika', 'covek_muzika',  'covek_id', 'muzikas_id');
    }
    function obrazovanje(){
        return $this->belongsTo('App\Obrazovanje','obrazovanje_id');
    }
    function primanja(){
        return $this->belongsTo('App\Primanja');
    }
    function mesto(){
        return $this->belongsTo('App\Mesto');
    }
    function deca(){
        return $this->belongsTo('App\Deca');
    }
    function veroispovest(){
        return $this->belongsTo('App\Veroispovest');
    }
    function politika(){
        return $this->belongsTo('App\Politika');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zones extends Model
{
    protected $table = 'zones';

    public function cities(){
    	$this->belongsTo('App\City');
    }

    public function states(){
    	$this->belongsTo('App\States');
    }

    public function counties(){
    	$this->belongsTo('App\Country');
    }

    public function shippingCosts(){
    	$this->hasMany('App\ShippingCost');
    }
}

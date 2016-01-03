<?php

namespace MamaManzana;

use Illuminate\Database\Eloquent\Model;

class Zones extends Model
{
    protected $table = 'zones';

    public function city(){
    	$this->belongsTo('MamaManzana\City');
    }

    public function states(){
    	$this->belongsTo('MamaManzana\States');
    }

    public function counties(){
    	$this->belongsTo('MamaManzana\Country');
    }

    public function shippingCosts(){
    	$this->hasOne('MamaManzana\ShippingCost');
    }
}

<?php

namespace MamaManzana;

use Illuminate\Database\Eloquent\Model;

class Zones extends Model
{
    protected $table = 'zones';

    public function city(){
    	return $this->belongsTo('MamaManzana\City');
    }

    public function states(){
    	return $this->belongsTo('MamaManzana\States');
    }

    public function counties(){
    	return $this->belongsTo('MamaManzana\Country');
    }

    public function shippingCosts(){
    	return $this->hasOne('MamaManzana\ShippingCost','zone_id');
    }
}

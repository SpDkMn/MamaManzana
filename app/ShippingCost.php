<?php

namespace MamaManzana;

use Illuminate\Database\Eloquent\Model;

class ShippingCost extends Model
{
    protected $table = 'shipping_cost';

    public function zone(){
    	$this->belongsTo('MamaManzana\Zones');
    }
}

<?php

namespace MamaManzana;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';

    public function zone(){
    	return $this->hasOne('MamaManzana\Zones');
    }
}

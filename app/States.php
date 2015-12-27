<?php

namespace MamaManzana;

use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    protected $table = 'states';

    public function zones(){
    	return $this->hasMany('MamaManzana\Zones');
    }
}

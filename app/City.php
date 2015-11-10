<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';

    public function zones(){
    	return $this->hasMany('App\Zones');
    }
}

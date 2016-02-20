<?php

namespace MamaManzana;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';

    public function zones(){
      return $this->belongsTo('MamaManzana\Zones','zone_id', 'id');
    }

    public function states(){
      return $this->belongsTo('MamaManzana\States','state_id', 'id');
    }

    public function cities(){
      return $this->belongsTo('MamaManzana\City','city_id', 'id');
    }

    public function countries(){
      return $this->belongsTo('MamaManzana\Country','country_id', 'id');
    }

}

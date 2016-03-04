<?php

namespace MamaManzana;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use SoftDeletes;
    protected $table = 'address';
    protected $dates = ['deleted_at'];

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

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function meta()
    {
        return $this->hasOne('App\ProductMeta');
    }

    public function img()
    {
        return $this->hasOne('App\ProductImg');
    }
}

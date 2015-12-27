<?php

namespace MamaManzana;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function meta()
    {
        return $this->hasOne('MamaManzana\ProductMeta');
    }

    public function img()
    {
        return $this->hasOne('MamaManzana\ProductImg');
    }
}

<?php

namespace MamaManzana;

use Illuminate\Database\Eloquent\Model;

class ProductImg extends Model
{
    protected $table = 'products_img';

    public function product()
    {
        return $this->belongsTo('MamaManzana\Product');
    }
}

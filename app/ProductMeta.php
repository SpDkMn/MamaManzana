<?php

namespace MamaManzana;

use Illuminate\Database\Eloquent\Model;

class ProductMeta extends Model
{
    protected $table = 'products_meta';

    public function product()
    {
        return $this->belongsTo('MamaManzana\Product');
    }
}

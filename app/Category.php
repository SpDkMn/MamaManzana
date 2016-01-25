<?php

namespace MamaManzana;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function meta()
    {
        return $this->hasOne('MamaManzana\CategoryMeta');
    }

    public function img()
    {
        return $this->hasOne('MamaManzana\CategoryImg');
    }

    public function products()
    {
      return $this->belongsToMany('MamaManzana\Product','categories_products');
    }

}

<?php

namespace MamaManzana;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    protected $table = 'shopping_carts';

    public function user(){
      return $this->belongsTo('MamaManzana\User','user_id','id');
    }

    public function products(){
      return $this->belongsToMany('MamaManzana\Product','products_shopping_carts','shopping_cart_id','product_id');
    }
}

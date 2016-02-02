<?php
namespace MamaManzana\Composers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth as Auth;
use MamaManzana\ShoppingCart as ShoppingCart;
use DB;

class UserComposer
{

  public function compose(View $view)
  {
    $view->with('currentUser', Auth::user());
    if(!is_null(Auth::user())){
      $cart = ShoppingCart::where('user_id',Auth::user()->id)->where('order',0)->with('products')->first();
      $sum = DB::table('products_shopping_carts')
        ->where('shopping_cart_id', $cart->id)
        ->sum('count');
      $view->with('sumShoppingCart', $sum);
    }
  }

}

<?php
namespace MamaManzana\Composers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth as Auth;
use MamaManzana\ShoppingCart as ShoppingCart;

class UserComposer
{

  public function compose(View $view)
  {
    $view->with('currentUser', Auth::user());
    if(!is_null(Auth::user())){
      $cart = ShoppingCart::where('user_id',Auth::user()->id)->where('order',0)->first();
      foreach($cart->products as $prod_cart){
        dd($prod_cart);
      }
      $view->with('ShoppingCart', $cart);
    }
  }

}

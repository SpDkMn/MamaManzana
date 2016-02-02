<?php

namespace MamaManzana\Http\Controllers;

//use Socialite;
use Laravel\Socialite\Contracts\Factory as Socialite;
use MamaManzana\User as User;
use MamaManzana\ShoppingCart as ShoppingCart;
use Illuminate\Support\Facades\Auth as Auth;

class AuthController extends Controller {

    public function __construct(Socialite $socialite) {
        $this->socialite = $socialite;
    }

    public function getSocialAuth($provider=null)
    {
      if(!config("services.$provider")) abort('404'); //just to handle providers that doesn't exist
      return $this->socialite->with($provider)->redirect();
    }

    public function getSocialAuthCallback($provider = null) {
        if ($user = $this->socialite->with($provider)->user()) {
            $u = User::where('fid', $user->id)->first();
            if (is_null($u)) {
                $u = new User;
                $u->fid = $user->id;
                $u->name = $user->name;
                $u->email = $user->email;
                $u->photo = $user->avatar;
                $u->gender = $user->user['gender'];
                $u->age_range = implode($user->user['age_range']);
                $u->save();
            }
            Auth::login($u);
            $cart = ShoppingCart::where('user_id',$u->id)->where('order',0)->first();
            if(is_null($cart)){
              $cart = new ShoppingCart;
              $cart->user_id = $u->id;
              $cart->sub_total = 0.0;
              $cart->order = 0;
              $cart->save();
            }
            return redirect()->back();
        } else {
            return 'something went wrong';
        }
    }

}

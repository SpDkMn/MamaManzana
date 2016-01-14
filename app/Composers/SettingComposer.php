<?php
namespace MamaManzana\Composers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth as Auth;
use MamaManzana\Setting as Setting;
use MamaManzana\SocialNetwork as SocialNetwork;

class SettingComposer
{

  public function compose(View $view)
  {
    $setting = Setting::findOrFail(1);
    $socialNetwork = SocialNetwork::where('active',1)->get();
    $view->with('setting', $setting);
    $view->with('socialNetwork',$socialNetwork);
  }

}

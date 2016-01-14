<?php
namespace MamaManzana\Composers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth as Auth;

class UserComposer
{

  public function compose(View $view)
  {
    $view->with('currentUser', Auth::user());
  }

}

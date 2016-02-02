<?php
namespace MamaManzana\Composers;

use Illuminate\View\View;
use MamaManzana\Contact as Contact;

class MailComposer
{

  public function compose(View $view)
  {
    $contacts = Contact::where('read',0)->where('trash',0)->where('deleted',0)->get();
    $view->with('contacts', $contacts);
  }

}

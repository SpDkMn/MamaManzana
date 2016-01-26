<?php

namespace MamaManzana\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use Illuminate\Support\Facades\Auth as Auth;
use MamaManzana\Http\Requests;
use MamaManzana\Http\Controllers\Controller;
use MamaManzana\Contact as Contact;
use MamaManzana\Setting as Setting;
use MamaManzana\Category as Category;
use MamaManzana\ContactInformation as ContactInformation;
use MamaManzana\Slider as Slider;
use MamaManzana\AboutMeta as AboutMeta;
use MamaManzana\About as About;
use MamaManzana\City as City;
use MamaManzana\Product as Product;
use MamaManzana\Http\Requests\Contacts\CreateContactRequest as CreateContactRequest;

class FrontController extends Controller
{

  public function index(){
    $metadata = Setting::findOrFail(1);
    $categorias = Category::with('img')->where('active',1)->where('deleted',0)->get();
    $contactInformation = ContactInformation::findOrFail(1);
    $sliders = Slider::where('active',1)->where('deleted',0)->get();
    $productos = Product::where('active', 1)->where('deleted',0)->orderBy('created_at', 'asc')->take(8)->get();
    return view('Site.pages.index',[
      'metadata' => $metadata,
      'categorias'=>$categorias,
      'contactInformation'=>$contactInformation,
      'sliders' => $sliders,
      'productos' => $productos
    ]);
  }

  public function categoriaSlug($slug){
    $categoria = Category::with('img','meta','products')->where('active',1)->where('deleted',0)->where('slug',$slug)->first();
    $metadata = $categoria->meta;
    $productos = $categoria->products;
    return view('Site.pages.productos',['metadata' => $metadata,'categoria'=>$categoria,'productos'=>$productos]);
  }

  public function producto($slug){
    $producto = Product::with('img','meta')->where('active',1)->where('deleted',0)->where('slug',$slug)->first();
    $metadata = $producto->meta;
    $productos = Product::where('active', 1)->where('deleted',0)->orderBy('created_at', 'asc')->take(8)->get();
    return view('Site.pages.producto',['metadata' => $metadata,'producto'=>$producto,'productos'=>$productos]);
  }

  public function about(){
    $metadata = AboutMeta::findOrFail(1);
    $about = About::findOrFail(1);
    return view('Site.pages.nosotros',['metadata' => $metadata,'about'=>$about]);
  }

  public function categorias(){
    $metadata = Setting::findOrFail(1);
    $categorias = Category::with('img')->where('active',1)->where('deleted',0)->get();
    return view('Site.pages.categoria',['metadata' => $metadata,'categorias'=>$categorias]);
  }

  public function contact(){
    $contactInformation = ContactInformation::findOrFail(1);
    $metadata = $contactInformation;
    $cities = City::orderBy('name','asc')->get();
    return view('Site.pages.contacto',['metadata' => $metadata, 'contactInformation' =>$contactInformation,'cities'=> $cities]);
  }

  public function contactPost(CreateContactRequest $request){
    /*$contact = new Contact;
    $contact->name = $request->first_name;
    $contact->email = $request->email;
    $contact->message = $request->message;
    $contact->city_id = $request->city;
    $contact->save();*/
    $contact = new Contact;
    $contactInformation = ContactInformation::find(1);
    $setting = Setting::findOrFail(1);

    if(!is_null(Auth::user())){
      $contact->user_id = Auth::user()->id;
    }

    $contact->city_id = $request->city;
    $contact->from = $request->email;
    $contact->from_name = $request->first_name;
    $contact->to = 'pdiazstam@gmail.com';//$contactInformation->email;
    $contact->to_name =$setting->title . ' - Contacto' ;
    $contact->subject = $setting->title . ' - Mensaje Contacto - Web';
    $contact->message = $request->message;
    $contact->save();

      $to = [
          'address' => 'pdiazstam@gmail.com',//$contactInformation->email,
          'name' => $setting->title . ' - Contacto',
      ];
      $from = [
          'address' => $contact->from,
          'name' => $contact->from_name,
      ];
      $subject = $setting->title . ' - Mensaje Contacto - Web';

      $data = [
          'name' => $contact->from_name,
          'email' => $contact->from,
          'message' => $contact->message,
      ];
      return Mail::send('emails.contact_email', $data, function ($message) use ($to, $from, $subject) {
          $message
                  ->from($from['address'], $from['name'])
                  ->to($to['address'], $to['name'])
                  ->subject($subject);
      });

  }

}

<?php

namespace MamaManzana\Http\Controllers;

use Illuminate\Http\Request;

use DB;
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
use MamaManzana\ShoppingCart as ShoppingCart;
use MamaManzana\City as City;
use MamaManzana\Product as Product;
use MamaManzana\Http\Requests\Contacts\CreateContactRequest as CreateContactRequest;
use MamaManzana\Http\Requests\ProfileEdit as ProfileEdit;
use MamaManzana\Address as Address;
use MamaManzana\Zones as Zones;
use MamaManzana\Http\Requests\AddressCreate as AddressCreate;

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

  public function perfil(){
    $metadata = Setting::findOrFail(1);
    return view('Site.pages.perfil',['metadata' => $metadata]);
  }

  public function perfilPost(ProfileEdit $request){
    $u = Auth::user();
    $u->name = $request->name;
    $u->gender = $request->genre;
    $u->email = $request->email;
    $u->date = $request->date;
    $u->save();
    return redirect()->route('perfil_path');
  }

  public function postPedido(Request $request){
    $producto = Product::findOrFail($request->producto);
    $cart = ShoppingCart::where('user_id',Auth::user()->id)->where('order',0)->with('products')->first();
    if(is_null($cart)){
      $cart = new ShoppingCart;
      $cart->user_id = $u->id;
      $cart->sub_total = 0.0;
      $cart->order = 0;
      $cart->save();
    }
    $productos = $cart->products;
    foreach($productos as $p){
      if($p->id == $producto->id){
        DB::table('products_shopping_carts')
          ->where('product_id', $producto->id)
          ->where('shopping_cart_id', $cart->id)
          ->increment('count', $request->cantidad);
        DB::table('products_shopping_carts')
          ->where('product_id', $producto->id)
          ->where('shopping_cart_id', $cart->id)
          ->increment('amount', $producto->cost*$request->cantidad);
        $cart->sub_total += $producto->cost*$request->cantidad;
        $cart->save();
        return redirect()->route('lista_pedido_path');
      }
    }
    DB::table('products_shopping_carts')->insert([
        'product_id' =>$producto->id,
        'shopping_cart_id'=>$cart->id,
        'count' =>$request->cantidad,
        'cost'=>$producto->cost,
        'amount'=>$producto->cost*$request->cantidad,
    ]);
    $cart->sub_total += $producto->cost*$request->cantidad;
    $cart->save();
    return redirect()->route('lista_pedido_path');
  }

  public function listaPedido(){
    $metadata = Setting::findOrFail(1);
    $cart = ShoppingCart::where('user_id',Auth::user()->id)->where('order',0)->first();
    $query = DB::table('products_shopping_carts as psc')
      ->join('products as p', 'p.id', '=', 'psc.product_id')
      ->join('products_img as pi', 'p.id', '=', 'pi.product_id')
      ->select('psc.product_id','psc.count','psc.cost','psc.amount','p.name','p.slug','pi.name as img')
      ->where('shopping_cart_id',$cart->id)
      ->get();
    return view('Site.pages.lista-pedido',['metadata' => $metadata,'productos'=>$query,'cart'=>$cart]);
  }

  public function checkout(){
    $metadata = Setting::findOrFail(1);
    $cart = ShoppingCart::where('user_id',Auth::user()->id)->where('order',0)->first();
    $query = DB::table('products_shopping_carts as psc')
      ->join('products as p', 'p.id', '=', 'psc.product_id')
      ->join('products_img as pi', 'p.id', '=', 'pi.product_id')
      ->select('psc.product_id','psc.count','psc.cost','psc.amount','p.name','p.slug','pi.name as img')
      ->where('shopping_cart_id',$cart->id)
      ->get();
    return view('Site.pages.pedidos',['metadata' => $metadata,'productos'=>$query,'cart'=>$cart]);
  }

  public function nuevaDireccion(){
    $metadata = Setting::findOrFail(1);
    $zones = Zones::where('actived',1)->where('deleted',0)->get();
    return view('Site.pages.nueva_direccion',['metadata'=>$metadata,'zones'=>$zones]);
  }

  public function nuevaDireccionPost(AddressCreate $request){
    $zone = Zones::findOrFail($request->zona);
    $address = new Address;
    $address->user_id = Auth::user()->id;
    $address->country_id = $zone->country_id;
    $address->state_id = $zone->state_id;
    $address->city_id = $zone->city_id;
    $address->zone_id = $zone->id;
    $address->title = $request->title;
    $address->name_address = $request->name_address;
    $address->last_name_address = $request->last_name_address;
    $address->phone = $request->phone;
    $address->other_phone = $request->other_phone;
    $address->address = $request->address;
    $address->reference = $request->reference;
    $address->save();
    return redirect()->route('direcciones_path');
  }

  public function direcciones(){
    $metadata = Setting::findOrFail(1);
    $addresses = Address::with('zones')->with('states')->with('cities')->with('countries')->where('user_id',Auth::user()->id)->get();
    return view('Site.pages.direcciones',['metadata'=>$metadata,'addresses'=>$addresses]);
  }

  public function deleteAddress(Request $request){
    dd($request);
  }
}

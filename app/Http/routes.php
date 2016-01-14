<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/login/{provider?}',[
    'uses' => 'AuthController@getSocialAuth',
    'as'   => 'auth.getSocialAuth'
]);

Route::get('/login/callback/{provider?}',[
    'uses' => 'AuthController@getSocialAuthCallback',
    'as'   => 'auth.getSocialAuthCallback'
]);

Route::get('/', [
  'as'  =>  'home_path',
  function () {
    $metadata = MamaManzana\Setting::findOrFail(1);
    $categorias = MamaManzana\Category::with('img')->where('active',1)->where('deleted',0)->get();
    $contactInformation = MamaManzana\ContactInformation::findOrFail(1);
    $sliders = MamaManzana\Slider::where('active',1)->where('deleted',0)->get();
    return view('Site.pages.index',['metadata' => $metadata,'categorias'=>$categorias,'contactInformation'=>$contactInformation, 'sliders' => $sliders]);
  }
]);

Route::get('/nosotros', [
  'as'  =>  'nosotros_path',
  function () {
    $metadata = MamaManzana\AboutMeta::findOrFail(1);
    $about = MamaManzana\About::findOrFail(1);
    return view('Site.pages.nosotros',['metadata' => $metadata,'about'=>$about]);
  }
]);

Route::get('/categorias', [
  'as'  =>  'category_path',
  function () {
    return view('Site.pages.categoria');
  }
]);

Route::get('/contacto', [
  'as'  =>  'contact_path',
  function () {
    $contactInformation = MamaManzana\ContactInformation::findOrFail(1);
    $metadata = $contactInformation;
    $cities = MamaManzana\City::orderBy('name','asc')->get();
    return view('Site.pages.contacto',['metadata' => $metadata, 'contactInformation' =>$contactInformation,'cities'=> $cities]);
  }
]);

/** ** */

Route::get('/pedidocateg', function () {
    return view('Site.pages.pedidocateg');
});
Route::get('/pedidos', function () {
    return view('Site.pages.pedidos');
});
Route::get('/perfil', function () {
    return view('Site.pages.perfil');
});
Route::get('/producto', function () {
    return view('Site.pages.producto');
});
Route::get('/productos', function () {
    return view('Site.pages.productos');
});

Route::get('/registrate', function () {
    return view('Site.pages.registrate');
});

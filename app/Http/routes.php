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
  'uses' => 'FrontController@index',
]);

Route::get('/nosotros', [
  'as'  =>  'nosotros_path',
  'uses' => 'FrontController@about',
]);

Route::get('/categorias', [
  'as'  =>  'category_path',
  'uses' => 'FrontController@categorias',
]);

Route::get('/categoria/{slug}',[
  'as' => 'category_slug_path',
  'uses' => 'FrontController@categoriaSlug',
]);

Route::get('/producto/{slug}',[
  'as' => 'productos_path',
  'uses' => 'FrontController@producto',
]);

Route::get('/contacto', [
  'as'  =>  'contact_path',
  'uses' => 'FrontController@contact',
]);

Route::post('contacto',[
  'as' => 'contact_post_path',
  'uses' => 'FrontController@contactPost',
]);

Route::post('pedido',[
  'as' => 'post_pedido_path',
  'uses' => 'FrontController@postPedido'
]);

Route::get('pedido-lista',[
  'as' => 'lista_pedido_path',
  'uses' => 'FrontController@listaPedido'
]);

/** ** */

Route::get('/pedidocateg', function () {
    return view('Site.pages.pedidocateg');
});
Route::get('/pedidos', function () {
    return view('Site.pages.pedidos');
});
Route::get('/perfil', [
  'as' => 'perfil_path',
  'uses' => 'FrontController@perfil',
  ]);

Route::get('/producto', function () {
    return view('Site.pages.producto');
});
Route::get('/productos', function () {
    return view('Site.pages.productos');
});

Route::get('/registrate', function () {
    return view('Site.pages.registrate');
});

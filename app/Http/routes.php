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



/**
 * Middleware de login
 */
Route::group(['middleware' => 'auth'], function () {
Route::post('pedido',[
  'as' => 'post_pedido_path',
  'uses' => 'FrontController@postPedido'
]);

Route::get('pedido-lista',[
  'as' => 'lista_pedido_path',
  'uses' => 'FrontController@listaPedido'
]);

Route::get('checkout',[
  'as' => 'checkout_path',
  'uses' => 'FrontController@checkout',
]);

Route::get('/perfil', [
  'as' => 'perfil_path',
  'uses' => 'FrontController@perfil',
  ]);

Route::post('/perfil',[
  'as' => 'perfil_post_path',
  'uses' => 'FrontController@perfilPost',
]);

Route::get('/perfil/direccion/nueva',[
  'as' => 'nueva_direccion_path',
  'uses' => 'FrontController@nuevaDireccion',
]);

Route::get('/perfil/direcciones',[
  'as' => 'direcciones_path',
  'uses' => 'FrontController@direcciones',
]);

Route::post('/perfil/direccion/nueva',[
  'as' => 'nueva_direccion_post_path',
  'uses' => 'FrontController@nuevaDireccionPost'
]);

Route::post('perfil/direccion/delete',[
  'as' => 'eliminar_direccion_post_path',
  'uses' => 'FrontController@deleteAddress'
]);

Route::post('ajax/address',[
  'as' => 'ajax_address_path',
  'uses' => 'FrontController@ajaxAddress'
]);

Route::post('ajax/date',[
  'as' => 'ajax_date_path',
  'uses' => 'FrontController@ajaxDate'
]);

Route::post('ajax/shopping_cart/product/delete',[
  'as' => 'ajax_delete_shopping_cart_product_path',
  'uses' => 'FrontController@ajaxShoppingCartProductDelete'
]);

Route::post('ajax/shopping_cart/product/update',[
  'as' => 'ajax_update_shopping_cart_product_path',
  'uses' =>'FrontController@ajaxShoppingCartProductUpdate'
]);

Route::post('checkout',[
  'as' => 'post_realizar_pedido_path',
  'uses' => 'FrontController@postCheckout',
]);

});

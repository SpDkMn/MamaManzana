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

Route::get('/',function(){
  return view('Admin.pages.index');
});
Route::get('/inbox',function(){
  return view('Admin.pages.inbox');
});
Route::get('/store/categories',function(){
  return view('Admin.pages.store.categories.index');
});
/*
Route::get('/',function(){});
Route::get('/',function(){});
Route::get('/',function(){});
Route::get('/',function(){});
Route::get('/',function(){});
Route::get('/',function(){});



/*
Route::group(['as' => 'admin::'], function () {
    Route::get('dashboard', ['as' => 'dashboard', function () {
        // Route named "admin::dashboard"
    }]);
});

Route::get('createsetting','SettingController@create');
Route::post('createsetting','SettingController@store');

Route::get('/categoria', function () {
    return view('Site.pages.categoria');
});
Route::get('/contacto', function () {
    return view('Site.pages.contacto');
});
Route::get('/', function () {
    return view('Site.pages.index');
});
Route::get('/login', function () {
    return view('Site.pages.login');
});
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
Route::get('/nosotros', function () {
    return view('Site.pages.nosotros');
});
Route::get('/registrate', function () {
    return view('Site.pages.registrate');
});
*/

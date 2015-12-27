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
use App\Http\Requests;
Route::group(['as' => 'admin_', 'prefix' => 'admin'], function () {

  Route::get('/',[
    'as'  => 'dashboard_path',
    //'uses'=> ''
    function(){return view('Admin.pages.index');}
    //function(){return Request::path();}
  ]);

  /*Route::get('orders',[
    'as'  => 'orders_path',
    'uses'=> ''
  ]);*/

  /*Route::get('orders-status',[
    'as'  => 'orders-status_path',
    'uses'=> ''
  ]);*/

  Route::get('inbox',[
    'as'  => 'inbox_path',
    //'uses'=> ''
    function(){return view('Admin.pages.inbox');}
  ]);

  Route::get('inbox/compose',[
    'as'  => 'inbox_compose_path',
    //'uses'=> ''
    function(){return view('Admin.pages.compose');}
  ]);

  Route::get('inbox/{id}',[
    'as'  => 'inbox_read_path',
    //'uses'=> ''
    function(){return view('Admin.pages.read_mail');}
  ]);

  Route::get('categories',[
    'as'  => 'categories_path',
    //'uses'=> ''
    function(){return view('Admin.pages.store.categories.index');}
  ]);

  /*Route::get('products',[
    'as'  => 'products_path',
    'uses'=> ''
  ]);*/

  Route::get('sliders',[
    'as'  => 'sliders_path',
    //'uses'=> '',
    function(){return view('Admin.pages.sliders');}
  ]);

  /*Route::get('users',[
    'as'  => 'users_path',
    'uses'=> ''
  ]);*/

  Route::get('settings',[
    'as'  => 'settings_path',
    //'uses'=> '',
    function(){return view('Admin.pages.settings');}
  ]);

  Route::get('about-us',[
    'as'  => 'about-us_path',
    //'uses'=> '',
    function(){return view('Admin.pages.about');}
  ]);

  Route::get('contact-information',[
    'as'  => 'contact-information_path',
    //'uses'=> '',
    function(){return view('Admin.pages.contact_information');}
  ]);

  Route::get('social-network',[
    'as'  => 'social-network_path',
    //'uses'=> '',
    function(){return view('Admin.pages.social-network');}
  ]);

  Route::get('menu',[
    'as'  => 'menu_path',
    //'uses'=> '',
    function(){return view('Admin.pages.menu');}
  ]);

});


/*
Route::group(['as' => 'admin::'], function () {
    Route::get('dashboard', ['as' => 'dashboard', function () {
        // Route named "admin::dashboard"
    }]);
});

Route::get('createsetting','SettingController@create');
Route::post('createsetting','SettingController@store');
*/
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

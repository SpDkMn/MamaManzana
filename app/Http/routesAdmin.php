<?php


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

  Route::get('products',[
    'as'  => 'products_path',
    //'uses'=> '',
    function(){return view('Admin.pages.store.products.index');}
  ]);

  Route::get('sliders',[
    'as'  => 'sliders_path',
    //'uses'=> '',
    function(){return view('Admin.pages.sliders');}
  ]);

  Route::get('users',[
    'as'  => 'users_path',
    //'uses'=> '',
    function(){return view('Admin.pages.users');}
  ]);

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

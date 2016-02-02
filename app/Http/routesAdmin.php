<?php
// Authentication routes...
Route::get('auth/login', [
  'as'  =>  'login1_path',
  'uses'=>  'Auth\AuthController@getLogin'
]);
Route::post('auth/login', [
  'as'  =>  'login_path',
  'uses'=>  'Auth\AuthController@postLogin',
]);

Route::get('auth/logout', [
  'as'  =>  'logout_path',
  'uses'=>  'Auth\AuthController@getLogout',
]);

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');


Route::group(['as' => 'admin_', 'prefix' => 'admin', 'middleware' => 'authAdmin'], function () {

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
    'uses'=> 'ContactController@index',
  ]);

  Route::get('inbox/compose',[
    'as'  => 'inbox_compose_path',
    //'uses'=> ''
    function(){return view('Admin.pages.compose');}
  ]);

  Route::get('inbox/{id}',[
    'as'  => 'inbox_read_path',
    'uses'=> 'ContactController@show',
    //function(){return view('Admin.pages.read_mail');}
  ]);

  /**
   *
   * Admin Category
   */
Route::group(['namespace' => 'Category'], function()
{
  Route::get('categories',[
    'as'  => 'categories_path',
    'uses'=> 'CategoryController@index',
    //function(){return view('Admin.pages.store.categories.index');}
  ]);

  Route::get('category-data',[
    'as'  => 'categories_data_path',
    'uses'=> 'CategoryController@anyData',
    //function(){return view('Admin.pages.store.categories.index');}
  ]);

  Route::patch('new-category',[
    'as'  =>  'new_category_path',
    'uses'=>  'CategoryController@store',
    //function(){return "Funciona";}
  ]);

  Route::get('category/{id}/edit',[
    'as'  =>  'edit_category_path',
    'uses'=>  'CategoryController@edit',
  ]);

  Route::patch('{id}/update-category',[
    'as'  =>  'update_category_path',
    'uses'=>  'CategoryController@update',
  ]);

  Route::get('category/delete',[
    'as'  =>  'delete_category_path',
    'uses'=>  'CategoryController@delete'
  ]);

  Route::delete('category/destroy',[
    'as'  =>  'destroy_category_path',
    'uses'=>  'CategoryController@destroy',
  ]);

});
/** */

/**
 *
 * Admin Product
 */
 Route::group(['namespace' => 'Product'], function()
 {
   Route::get('products',[
    'as'  => 'products_path',
    'uses'=>  'ProductController@index',
   ]);

  Route::get('product-data',[
    'as'  => 'product_data_path',
    'uses'=> 'ProductController@anyData',
  ]);

  Route::patch('new-product',[
    'as'  =>  'new_product_path',
    'uses'=>  'ProductController@store',
  ]);

  Route::get('product/{id}/edit',[
    'as'  =>  'edit_product_path',
    'uses'=>  'ProductController@edit',
  ]);

  Route::patch('{id}/update-product',[
    'as'  =>  'update_product_path',
    'uses'=>  'ProductController@update',
  ]);

  Route::get('product/delete',[
    'as'  =>  'delete_product_path',
    'uses'=>  'ProductController@delete'
  ]);

  Route::delete('product/destroy',[
    'as'  =>  'destroy_product_path',
    'uses'=>  'ProductController@destroy',
  ]);
});
/** */

/**
 *
 * Admin Sliders
 */
  Route::get('sliders',[
    'as'  => 'sliders_path',
    'uses'=> 'SliderController@index',
  ]);

  Route::get('sliders-data',[
    'as'  => 'sliders_data_path',
    'uses'=> 'SliderController@anyData',
  ]);

  Route::patch('new-sliders',[
    'as'  => 'new_sliders_path',
    'uses'=> 'SliderController@store',
  ]);

  Route::get('slider/{id}/edit',[
    'as'  => 'edit_sliders_path',
    'uses'=> 'SliderController@edit',
  ]);

  Route::patch('{id}/update-slider',[
    'as'  =>  'update_sliders_path',
    'uses'=>  'SliderController@update',
  ]);

  Route::get('sliders/delete',[
    'as'  =>  'delete_sliders_path',
    'uses'=>  'SliderController@delete'
  ]);

  Route::delete('sliders/destroy',[
    'as'  =>  'destroy_sliders_path',
    'uses'=>  'SliderController@destroy',
  ]);
/** */

  Route::get('zonas',[
    'as'  =>  'zones_path',
    'uses'=>  'ZonesController@index',
  ]);

  Route::get('zonas-data',[
    'as'  =>  'zone_data_path',
    'uses'=>  'ZonesController@anyData',
  ]);

  Route::get('zonas/delete',[
    'as'  =>  'delete_zonas_path',
    'uses'=>  'ZonesController@delete'
  ]);

  Route::delete('zonas/destroy',[
    'as'  =>  'destroy_zonas_path',
    'uses'=>  'ZonesController@destroy',
  ]);

  Route::get('zonas/{id}/edit',[
    'as'  => 'edit_zonas_path',
    'uses'=> 'ZonesController@edit',
  ]);

  Route::patch('{id}/update-zonas',[
    'as'  =>  'update_zonas_path',
    'uses'=>  'ZonesController@update',
  ]);

  Route::post('new-zona',[
    'as'  =>  'new_zone_path',
    'uses'=>  'ZonesController@store',
  ]);

  Route::get('users',[
    'as'  => 'users_path',
    'uses'=> 'UserController@index',
  ]);

  Route::get('users-data',[
    'as'  => 'users_data_path',
    'uses'=> 'UserController@anyData',
  ]);

/**
 *
 * Admin Setting
 */
  Route::get('settings',[
    'as'  => 'settings_path',
    'uses'=> 'SettingController@index',
    //function(){return view('Admin.pages.settings');}
  ]);

  Route::patch('settings',[
    'as'  => 'setting_patch_path',
    'uses'=> 'SettingController@patchSetting',
  ]);

  Route::patch('settings_meta',[
    'as'  => 'setting_meta_patch_path',
    'uses'=> 'SettingController@patchSettingMeta',
  ]);

  Route::patch('settings_logo',[
    'as'  => 'setting_logo_patch_path',
    'uses'=> 'SettingController@patchLogo',
  ]);

  Route::patch('settings_footer',[
    'as'  => 'setting_footer_patch_path',
    'uses'=> 'SettingController@patchFooter',
  ]);

  Route::patch('settings_favicon',[
    'as'  => 'setting_favicon_patch_path',
    'uses'=> 'SettingController@patchFavicon',
  ]);
/** */

/**
 *
 * Admin About
 */
 Route::group(['namespace' => 'About'], function()
 {
   Route::get('about-us',[
     'as'  => 'about-us_path',
     'uses'=> 'AboutController@index',
     //function(){return view('Admin.pages.about');}
   ]);

   Route::patch('about-us',[
     'as'  => 'about-us_patch_path',
     'uses'=> 'AboutController@update',
     //function(){return view('Admin.pages.about');}
   ]);

   Route::patch('about-us_meta',[
     'as'  => 'about-us_meta_patch_path',
     'uses'=> 'AboutMetaController@update',
   ]);

   Route::patch('about-us_img',[
     'as'  => 'about-us_img_patch_path',
     'uses'=> 'AboutImgController@update',
   ]);

 });
/** */

/**
 *
 * Admin Contact Information
 */
  Route::get('contact-information',[
    'as'  => 'contact-information_path',
    'uses'=> 'ContactInformationController@index',
    //function(){return view('Admin.pages.contact_information');}
  ]);

  Route::patch('contact-information',[
    'as'  => 'contact-information_patch_path',
    'uses'=> 'ContactInformationController@update',
    //function(){return view('Admin.pages.contact_information');}
  ]);
/** */

/**
 *
 * Admin Social Network
 */
  Route::get('social-network',[
    'as'  => 'social-network_path',
    'uses'=> 'SocialNetworkController@index',
    //function(){return view('Admin.pages.social-network');}
  ]);

  Route::patch('social-network',[
    'as'  => 'social-network_patch_path',
    'uses'=> 'SocialNetworkController@facebook',
    //function(){return view('Admin.pages.social-network');}
  ]);
/** */


  Route::get('menu',[
    'as'  => 'menu_path',
    //'uses'=> '',
    function(){return view('Admin.pages.menu');}
  ]);

});

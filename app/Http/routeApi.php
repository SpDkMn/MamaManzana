<?php
//Rutas el Api
Route::group(['prefix' => 'API/V1'], function () {
  Route::resource('categories', 'Api\Categories');
});

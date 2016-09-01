<?php 
Route::group(['middleware' => 'checkInstallation'], function(){
  Route::get('/', array('uses'=>'CoreController@index') )->name('landing_page');

  Route::get('about',  array('uses'=>'CoreController@about') )->name('about_us');

  Route::get('contact', array('uses'=>'CoreController@contact') )->name('contact_us');

});
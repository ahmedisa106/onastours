<?php

//Route::group(
//    [
//        'prefix' => LaravelLocalization::setLocale(),
//        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
//    ],


Route::get('/', 'FrontModuleController@index')->name('front.index');
Route::get('/about', 'FrontModuleController@about')->name('front.about');
Route::get('/tours', 'FrontModuleController@tours')->name('front.tours');
Route::get('/destinations', 'FrontModuleController@destinations')->name('front.destinations');
Route::get('/contact', 'FrontModuleController@contact')->name('front.contact');
Route::get('/booking', 'FrontModuleController@booking')->name('front.booking');
Route::get('/booking_now/{id}', 'FrontModuleController@booking_now')->name('front.bookingNow');
Route::post('/booking_now', 'FrontModuleController@book')->name('front.book');
Route::get('/tour/{slug}', 'FrontModuleController@tourItem')->name('front.tourItem');

Route::get('/category/{slug}', 'FrontModuleController@categoryTours')->name('front.categoryTours');

Route::get('/destination/{slug}', 'FrontModuleController@destinationItem')->name('front.destinationItem');
Route::get('/page/{id}', 'FrontModuleController@getPage');


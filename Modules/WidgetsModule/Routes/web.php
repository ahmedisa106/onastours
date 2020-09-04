<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin-panel', 'middleware' => ['auth:admin']], function() {


    Route::prefix('widgets')->group(function () {
        Route::get('/', 'WidgetsModuleController@index');

        Route::group(['middleware' => ['role:superadmin|admin|writer']], function () {
            Route::resource('slider', 'SlidersController')->only(['create', 'store', 'index']);
            Route::resource('partners', 'PartnersController')->only(['create', 'store', 'index']);
            Route::resource('testimonials', 'TestimonialController')->only(['create', 'store', 'index']);
            Route::resource('team', 'TeamController')->only(['create', 'store', 'index']);
            Route::resource('contact_us', 'ContactusController')->only(['create', 'store', 'index', 'show']);
            Route::resource('subscripe', 'SubscripeController')->only('index');
            Route::resource('page', 'PageController')->only(['create', 'store', 'index', 'show']);
            Route::resource('hours', 'WorkHoursController')->only(['create', 'store', 'index']);
        });

        Route::group(['middleware' => ['role:superadmin|admin']], function () {
            Route::resource('slider', 'SlidersController')->only(['edit', 'update']);
            Route::resource('partners', 'PartnersController')->only(['edit', 'update']);
            Route::resource('testimonials', 'TestimonialController')->only(['edit', 'update']);
            Route::resource('team', 'TeamController')->only(['edit', 'update']);
            Route::resource('contact_us', 'ContactusController')->only(['edit', 'update']);
            Route::resource('subscripe', 'SubscripeController')->only(['edit', 'update']);
            Route::resource('page', 'PageController')->only(['edit', 'update']);
            Route::resource('hours', 'WorkHoursController')->only(['edit', 'update']);
        });

        Route::group(['middleware' => ['role:superadmin']], function () {
            Route::resource('slider', 'SlidersController')->only(['destroy']);
            Route::resource('partners', 'PartnersController')->only(['destroy']);
            Route::resource('testimonials', 'TestimonialController')->only(['destroy']);
            Route::resource('team', 'TeamController')->only(['destroy']);
            Route::resource('contact_us', 'ContactusController')->only(['destroy']);
            Route::resource('subscripe', 'SubscripeController')->only(['destroy']);
            Route::resource('page', 'PageController')->only(['destroy']);
            Route::resource('hours', 'WorkHoursController')->only(['destroy']);
        });

    });

});

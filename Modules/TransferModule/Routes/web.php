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

Route::group(['prefix' => 'admin-panel', 'middleware' => ['auth:admin']], function(){

    Route::get('/transfers/ajax', 'TransferController@dataTables');

    # For All Access.
    Route::group(['middleware' => ['role:writer|admin|superadmin|writer']], function () {
        // Route::resource('/trip/category', 'TripCategoryController')->only(['create', 'store', 'index']);

        Route::resource('/transfers', 'TransferController')->only(['create', 'store', 'index']);

    });

    # For Admins only.
    Route::group(['middleware' => ['role:admin|superadmin']], function () {
        // Route::resource('/trip/category', 'TripCategoryController')->only(['edit', 'update']);

        Route::resource('/transfers', 'TransferController')->only(['edit', 'update']);
    });

    # For superadmin only.
    Route::group(['middleware' => ['role:superadmin']], function () {
        // Route::get('/trip/category/delete/{id}', 'TripCategoryController@destroy');

        Route::get('/transfers/delete/{id}', 'TransferController@destroy');

    });
});

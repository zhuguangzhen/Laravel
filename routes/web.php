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
Route::group(['middleware' => 'Everyone'], function(){

    Route::group(['namespace' => 'business'], function(){

        Route::any('/group=business&action={action}&method={method}',function($action, $method, Request $request){

            return routeDispatch($request, 'business', $action, $method);
        });
    });

});
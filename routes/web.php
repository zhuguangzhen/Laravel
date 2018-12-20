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

// Route::get('/', function () {
//     return view('welcome');
// });

    // Route::group(['namespace' => 'business'], function(){
    //     Route::any('/group=admin&action=login&method={method}',function($method, Request $request){

    //         return routeDispatch($request, 'admin', 'login', $method);
    //     });

    //     Route::any('/group=admin&action={action}&method={method}',function($action, $method, Request $request){

    //         return routeDispatch($request, 'admin', $action, $method);
    //     })->middleware('AdminCheckLogin');
    // });

Route::group(['namespace' => 'Business'], function(){
        Route::get('/', 'BusinessController@Index');
       
});
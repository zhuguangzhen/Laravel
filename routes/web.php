<?php
use Illuminate\Http\Request;
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
	// Route::group(['middleware' => 'Everyone'], function(){

	//     Route::group(['namespace' => 'business'], function(){

	//         Route::any('/group=business&action={action}&method={method}',function($action, $method, Request $request){

	//             return routeDispatch($request, 'business', $action, $method);
	//         });
	//     });

	// });

 //    Route::get('/',function(){
 //      return view('/business/index/index');
 //    });


    	Route::group(['middleware' => 'Everyone'], function(){

	    Route::group(['namespace' => 'News'], function(){

	        Route::any('/group=news&action={action}&method={method}',function($action, $method, Request $request){

	            return routeDispatch($request, 'news', $action, $method);
	        });
	    });

	    Route::group(['namespace' => 'Admin'], function(){

	        Route::any('/group=admin&action={action}&method={method}',function($action, $method, Request $request){

	            return routeDispatch($request, 'admin', $action, $method);
	        });
	    });

	});

    Route::get('/',function(Request $request){
    	return Redirect('/group=news&action=index&method=index');
    });
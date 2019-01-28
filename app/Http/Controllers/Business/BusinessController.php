<?php

namespace App\Http\Controllers\Business;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class BusinessController extends Controller
{
    public function Index(Request $request){
    	if(!empty($request->message)){
    		$arr['contents'] = $request->message;
    		$arr['status'] = 0;
    		DB::table('z_leaving_message')->insert($arr);
    	}

    	return view('/business/index/index');
    }

    public function leavingMessages(Request $request){
    	
    	return view('/business/index/index');
    }
}

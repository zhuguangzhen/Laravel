<?php

namespace App\Http\Controllers\Business;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class BusinessController extends Controller
{
    public function Index(Request $request){
        $name = $request->message;
    	if(!empty($name)){
    		$list = DB::table('z_power')
                ->where(function($query) use ($request->message){
                    $query->where('name','=',$request->message)
                        ->orwhere('method','=',$request->message);
                })->whereNull('delete_at')
                ->where('status','1')
                ->where('position','2')
                ->first();
                dd(222);
            if(!empty($list)){
                return redirect('/group='.$list->group.'&action='.$list->action.'&method='.$list->method);
            }else{
                $list = DB::table('z_power')
                    ->whereNull('delete_at')
                    ->where('status','1')
                    ->where('position','2')
                    ->limit(10)
                    ->get();
                    
                $data['list'] = $list;    
                return view('/business/default/index',$data);
            }    
    	}

    	return view('/business/index/index');
    }

    public function leavingMessages(Request $request){
    	
    	return view('/business/index/index');
    }
}

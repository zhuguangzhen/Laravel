<?php

namespace App\Http\Controllers\Business;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class BusinessController extends Controller
{
    public function Index(){
    	$a = DB::table('z_admin')->get();
    	dd($a);
    	return view('/business/index/index');
    }
}

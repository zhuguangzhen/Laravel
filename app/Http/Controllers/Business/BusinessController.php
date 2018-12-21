<?php

namespace App\Http\Controllers\Business;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class BusinessController extends Controller
{
    public function Index(){
    	
    	return view('/business/index/index');
    }
}

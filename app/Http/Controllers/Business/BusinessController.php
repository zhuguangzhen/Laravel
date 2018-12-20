<?php

namespace App\Http\Controllers\Business;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BusinessController extends Controller
{
    public function Index(){
    	$a = test();
    	return view('/business/index/index');
    }
}

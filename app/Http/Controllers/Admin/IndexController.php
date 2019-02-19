<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
   public function login(Request $request){
   		return view('/Admin/index/login');
   }

   public function checklogin(Request $request){
   		$userName = $request->userName;
   		$pass = $request->pass;
      
   }

   public function index(Request $request){

   }
}

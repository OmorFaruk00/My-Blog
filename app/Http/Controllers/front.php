<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class front extends Controller
{
    function home(){
    	$data= DB::table('posts')->get();   	  	
		return view("front.home",['data'=>$data]);
    	
    }
    function post(Request $request,$id){
    	
    	$data= DB::table('posts')->where('id',$id)->get();   	  	
		return view("front/post",['data'=>$data]);
    }
}

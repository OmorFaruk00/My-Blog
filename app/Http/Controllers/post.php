<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class post extends Controller
{
   function show_post(){
   	$data= DB::table('posts')->get();   	  	
   	return view("admin.post.list",['data'=>$data]);
   }
   function store(Request $req){
   	$data = array(
   		'title'=>$req->input('title'),
   		'short_desc'=>$req->input('short_desc'),
   		'long_desc'=>$req->input('long_desc'),
   		'image'=>$req->input('image'),
   		'status'=>1,
   		'added_on'=>$req->input('added_on')
   	);
   	DB::table('posts')->insert($data);
   	return redirect('post');
   	
   }
   function edit_post(Request $request, $id){
   	// $data= DB::table('posts')->where('id',$id)->get(); 
   	// // echo"<pre>";
   	// // print_r($data);  	  	
   	return view("admin.post.update_post");
   }
}

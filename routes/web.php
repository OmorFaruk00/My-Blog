<?php

use Illuminate\Support\Facades\Route;

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



Route::view("admin","admin/login");
Route::post("login_submit","admin@login");


Route::view("page","admin/page/page");

Route::view("about","front/about");
Route::view("contact","front/contact");
Route::get("/","front@home");
Route::get("showpost/{id}","front@post");

Route::group(['middleware'=>['admin_auth']], function(){
	
	Route::get("post/list","post@show_post");
	Route::view("post/add","admin/post/add_post");
	Route::post("post_submit","post@add_post");
	Route::get("post/update/{id}","post@edit_post")->name('post/update');
	Route::post("post_update/{id}","post@update_post");
	Route::get("post/delete/{id}","post@delete_post");
});

Route::get('logout', function () {
	session()->forget('ADMIN_ID');
	return redirect('admin');
});

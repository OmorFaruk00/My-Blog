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

Route::view("add_post","admin/post/add_post");
Route::post("post_submit","post@store");
Route::get("post_update/{id}","post@edit_post")->name('post_update');

Route::group(['middleware'=>['admin_auth']], function(){
Route::get("post","post@show_post");
Route::view("page","admin/page/page");
});

Route::get('logout', function () {
    session()->forget('ADMIN_ID');
    return redirect('admin');
});

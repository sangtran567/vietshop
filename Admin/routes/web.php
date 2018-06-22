<?php

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

Route::get('/', function () {
    return view('admin.home.index');
});

Route::get('category', function(){
   return view('admin.category.index');
});
Route::get('category/add',function(){
    if(DB::connection()->getDatabaseName())
    {
        echo "connected successfully to database ".DB::connection()->getDatabaseName();
    }

   return view('admin.category.add');
})->name('addCategory');
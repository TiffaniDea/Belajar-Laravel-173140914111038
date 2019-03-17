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
    return view('welcome');
});

Route::get('categories', function(){
    return " halaman categories";
});

Route::get('categories/{id}', function($id){
    return "halaman kategori ID".$id;
});

Route::resource('categories', 'CategoriesController')->except(['destroy']);


Route::get('master', function(){
    return view('layouts.master');
});

Route::get('index', function(){
    return view('dashboard.index');
});

Route::get('dashboard', function(){
    return view('dashboard');
});


Route::resource('kategori', 'IndexController');

Route::get('cari', 'IndexController@cari');

Route::get('tambah', 'IndexController@tambah');
Route::post('create', 'IndexController@create');
Route::get('edit/{id}', 'IndexController@edit');
Route::post('/update', 'IndexController@update');
Route::get('hapus/{id}', 'IndexController@hapus');

    


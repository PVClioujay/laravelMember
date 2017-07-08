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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view('Home.index');
});

Route::get('createUser', function(){
    return view('Home.register');
});

Route::post('posterManage', "PosterManagerController@index");
Route::post('register', "HomeController@store");
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

// Route::post('/post', [
//     'uses' => 'PostController@store', 
//     'middleware' => 'auth',
// ]);

// Route::resource('post', 'PostController', [
//     'only' =>['index', 'show'],
// ]);

// Route::resource('post', 'PostController',[
//     'except'=>['create','store','update','destroy'],
// ]);

// Route::group(['prefix'=> 'api/v1']function(){
//     Route::post('/post', [
//         //Route Configuration
//     ]);
//});


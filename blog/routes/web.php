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


//without controller
// Route::get('/', function () {
//     return view('Homepage');
// });


//withcontroller
// Route::get('/home','HomeController@homeIndex');



//url routing
Route::get('/home','HomeController@homeIndex');
Route::get('/about','AboutController@aboutIndex');
Route::get('/contact','ContactController@contactIndex');


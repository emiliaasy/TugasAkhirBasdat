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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     return view('about');
// });



Route::get('/', 'PagesController@dashboard');
Route::get('/about', 'PagesController@about');
Route::get('/members', 'MembersController@index');


//items
Route::get('/items', 'ItemsController@index');
Route::get('/items/{item}', 'ItemsController@show');
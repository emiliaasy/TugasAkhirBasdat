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



Route::get('/about', 'PagesController@about')->middleware('auth');

Route::get('login', 'AuthController@login')->name('login');
Route::post('postlogin', 'AuthController@postlogin');
Route::get('logout', 'AuthController@logout');

//members
// Route::get('/members', 'MembersController@index');
// Route::get('/members/create', 'MembersController@create');
// Route::get('/members/{member}', 'MembersController@show');
// Route::post('/members', 'MembersController@store');
// Route::delete('/members/{member}', 'MembersController@destroy');
// Route::get('/members/{member}/edit', 'MembersController@edit');
// Route::patch('/members/{member}', 'MembersController@update');

Route::resource('members', 'MembersController')->middleware('auth', 'checkRole:admin');

Route::group(['middleware' => ['auth', 'checkRole:admin,siswa']], function(){
    Route::get('/','PagesController@dashboard');
    

Route::get('/bookshelf', 'BooksController@index');
Route::get('/bookshelf/{book}', 'BooksController@show');

Route::get('/cart', 'CartsController@index');
Route::get('/cart/{cart}', 'CartsController@show');

});
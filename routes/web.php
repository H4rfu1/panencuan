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

Route::get('/', 'PagesController@index');
Route::get('/hom', 'PagesController@home')->middleware(['auth', 'verified']);
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});


// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/home', function () {
//     return view('index2');
// });
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

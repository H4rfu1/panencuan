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
Route::get('/', 'PagesController@home');
Route::get('/home', 'PagesController@home');

Route::get('/profil', 'PagesController@profil');
Route::get('/profil/edit', 'PagesController@profiledit');
Route::post('/profil/{id}', 'PagesController@profilupdate');

Route::get('/membership', 'PagesController@membership');
Route::get('/membership/{id}', 'PagesController@purchase')->name('purchase');
Route::post('/purchase', 'PagesController@storepurchase');

Route::get('/admin', 'PagesController@admin');
Route::get('/admin/user', 'PagesController@user');
Route::post('/admin/verif', 'PagesController@memberverif');
Route::get('/admin/pemateri', 'PagesController@pemateri');
Route::get('/admin/userverif', 'PagesController@userverif');
Route::get('/admin/{id}', 'PagesController@detailverif');
Route::get('/batalverif', 'PagesController@batalverif');

//pemateri
Route::get('/pemateri', 'PagesController@dashboard');
Route::get('/video', 'C_VideoPembelajaran@listVideoPembelajaran');
Route::get('/tambahvideo', 'C_VideoPembelajaran@addVideoPembelajaran');
Route::post('/simpanvideo', 'C_VideoPembelajaran@storeVideoPembelajaran');
Route::get('/video/{id}', 'C_VideoPembelajaran@showVideoPembelajaran');
Route::get('/video/{id}/edit', 'C_VideoPembelajaran@editVideoPembelajaran');
Route::post('/video/{id}', 'C_VideoPembelajaran@updateVideoPembelajaran');

//komunitas
Route::get('/komunitas', 'c_GroupKomunitas@listGroupKomunitas')->name('komunitas');

//analisa emiten
Route::get('/emiten', 'c_AnalisaEmiten@AnalisaEmiten');

//auth
Auth::routes();

// Route::get('/login', 'LoginController@login')->name('login');
// Route::get('/register', 'RegisterController@index')->name('register');
// Route::post('/login', 'LoginController@postlogin');
// Route::post('/register', 'RegisterController@store');
// Route::get('/logout', 'LoginController@logout')->name('logout');
// Route::get('/', 'PagesController@index');


// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/home', function () {
//     return view('index2');
// });

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/profil/{id}', 'AkunController@index');

// Route::patch('/profil/{id}', 'AkunController@update');

// Route::get('/profil/{id}/edit', 'AkunController@edit');

// Route::post('/daftarakun', 'AkunController@store');

// Route::get('/buatakun/{role}', 'AkunController@buatakun');

// Route::get('/akun/{role}', 'AkunController@akun');

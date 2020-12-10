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
Route::get('/', 'PagesController@home')->name('home');
Route::get('/home', function () {
    return redirect('/');
});

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
Route::post('/batalverif', 'PagesController@batalverif');

//pemateri
Route::get('/pemateri', 'PagesController@dashboard');
Route::get('/video', 'c_VideoPembelajaran@listVideoPembelajaran')->name('video');
Route::get('/tambahvideo', 'c_VideoPembelajaran@addVideoPembelajaran');
Route::post('/simpanvideo', 'c_VideoPembelajaran@storeVideoPembelajaran');
Route::get('/video/{id}', 'c_VideoPembelajaran@showVideoPembelajaran');
Route::get('/video/{id}/edit', 'c_VideoPembelajaran@editVideoPembelajaran');
Route::post('/video/{id}', 'c_VideoPembelajaran@updateVideoPembelajaran');

//video live kelas / webinar
Route::get('/webinar', 'c_WebinarLiveKelas@listWebinarLiveKelas')->name('webinar');
Route::get('/tambahwebinar', 'c_WebinarLiveKelas@addWebinarLiveKelas');
Route::post('/simpanwebinar', 'c_WebinarLiveKelas@storeWebinarLiveKelas');
Route::get('/webinar/{id}', 'c_WebinarLiveKelas@showWebinarLiveKelas')->name('daftarwebinar');
Route::post('/daftarwebinar', 'c_WebinarLiveKelas@storepurchase');
// Route::get('/ikutwebinar/{id}', 'c_WebinarLiveKelas@editVideoPembelajaran');
// Route::post('/video/{id}', 'c_WebinarLiveKelas@updateVideoPembelajaran');
Route::get('/verifikasiwebinar', 'c_VerifikasiWebinarLiveKelas@VerifikasiWebinarlivekelas');
Route::get('/verifikasiwebinar/{id}', 'c_VerifikasiWebinarLiveKelas@DetailVerifikasiWebinarlivekelas');
Route::post('/tolakverifwebinar', 'c_VerifikasiWebinarLiveKelas@actionTolak');
Route::post('/verifwebinar', 'c_VerifikasiWebinarLiveKelas@actionVerifikasi');

//komunitas
Route::get('/komunitas', 'c_GroupKomunitas@listGroupKomunitas')->name('komunitas');
Route::post('/kirimpesan', 'c_GroupKomunitas@setGroupKomunitas');

//analisa emiten
Route::get('/emiten', 'c_AnalisaEmiten@AnalisaEmiten')->name('emiten');
Route::get('/tambahemiten', 'c_AnalisaEmiten@setFormAnalisaEmiten');
Route::post('/simpanemiten', 'c_AnalisaEmiten@simpanAnalisaEmiten');

//Kalkulator Finansial
Route::get('/kalkulator', 'c_KalkulatorFinansial@KalkulatorFinansial')->name('kalkulator');
Route::get('/tambahemiten', 'c_AnalisaEmiten@setFormAnalisaEmiten');
Route::post('/simpanemiten', 'c_AnalisaEmiten@simpanAnalisaEmiten');

//Diskusi
Route::get('/diskusi', 'c_Diskusi@listDiskusi')->name('diskusi');
Route::post('/buatdiskusi', 'c_Diskusi@actionBuat');
Route::post('/komen', 'c_Diskusi@actionKirim');


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

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

/*Route::get('/', function () {
    return view('index');
});
*/

Route::get('/', 'LoginController@login');
Route::get('/dashboard', 'LoginController@index');
Route::post('/login', 'LoginController@postlogin');
Route::get('/logout', 'LoginController@logout');

//Input Pasien
Route::get('/pasien', 'MasterPasien@index');
Route::get('/formpasien', 'MasterPasien@create');
Route::post('/inputpasien', 'MasterPasien@store');

//Input Instansi
Route::get('/instansi', 'MasterInstansi@index');
Route::get('/forminstansi', 'MasterInstansi@create');
Route::post('/inputinstansi', 'MasterInstansi@store');
Route::get('/editinstansi/{id}', 'MasterInstansi@edit');
Route::post('/updateinstansi', 'MasterInstansi@update');
Route::get('/delete/{id}', 'MasterInstansi@destroy');

//Input Test
Route::get('/test', 'MasterTest@index');
Route::get('/formtest', 'MasterTest@create');
Route::post('/inputtest', 'MasterTest@store');
Route::get('/edit/{id}', 'MasterTest@edit');
Route::post('/update', 'MasterTest@update');
Route::get('/hapus/{id}', 'MasterTest@destroy');

//input Pemeriksaan

Route::get('/pemeriksaan', 'MasterPemeriksaan@index')->name('pemeriksaan');
Route::get('searchajax', ['as'=>'searchajax','uses'=>'MasterPemeriksaan@create']);
Route::post('/inputpemeriksaan', 'MasterPemeriksaan@store');


//input tagihan
Route::get('/tagihan', 'MasterTagihan@index');
Route::get('/filter', 'MasterTagihan@create')->name('filter');
Route::get('/report/{instansi}{daterange}', 'MasterTagihan@store')->name('report');



//input laporan
Route::get('/laporan', 'MasterLaporan@index');
Route::get('/formlaporan', 'MasterLaporan@create');
Route::post('/inputlaporan', 'MasterLaporan@store');
Route::get('/keuangan/{daterange}', 'MasterLaporan@show')->name('keuangan');
Route::get('/filterkeuangan', 'MasterLaporan@filter')->name('filterlaporan');


/*
Auth::routes();

Route::get('/home', 'HomeController@index');
*/
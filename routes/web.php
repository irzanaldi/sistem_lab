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
Route::get('/pasien', 'MasterPasien@index');
Route::get('/inputpasien', 'MasterPasien@create');

Route::get('/instansi', function () {
    return view('instansi');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/pemeriksaan', function () {
    return view('pemeriksaan');
});

Route::get('/tagihan', function () {
    return view('tagihan');
});

Route::get('/laporan', function () {
    return view('laporan');
});

Route::get('/inputtest', function () {
    return view('form/test');
});


Route::get('/inputinstansi', function () {
    return view('form/instansi');
});


/*
Auth::routes();

Route::get('/home', 'HomeController@index');
*/
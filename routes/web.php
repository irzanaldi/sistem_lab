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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/pasien', function () {
    return view('pasien');
});

Route::get('/instansi', function () {
    return view('instansi');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/inputtest', function () {
    return view('form/test');
});

Route::get('/inputpasien', function () {
    return view('form/pasien');
});

Route::get('/inputinstansi', function () {
    return view('form/instansi');
});


/*
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/
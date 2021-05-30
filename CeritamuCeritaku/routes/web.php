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

//test comentt
Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@welcome');
    Route::get('/about_us', 'HomeController@about_us');


    // Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('profile', 'ProfileController');
    Route::resource('cerita', 'CeritaController');

    Route::get('/beranda', 'CeritaController@beranda');
    Route::post('/berikomentar', 'CeritaController@berikomentar');
    Route::post('/berilike', 'CeritaController@berilike');


});


//untuk menampilkan ERD
Route::get('/erd',function(){
    return view('layouts.erd');
});

// Route::resource('profil','ProfileController');

Auth::routes();

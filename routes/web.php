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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::post('/checklogin', 'UserController@checkLoginRole');

Route::post('/logout', function () {
    return view('admin.login');
});

Route::get('/', function () {
    return view('admin.login');
});

Route::prefix('super-admin')->group(function () {

    Route::get('dashboard',  function () {
        return view('admin.super-dashboard');
    });

});

Route::prefix('admin')->group(function () {

    Route::get('dashboard',  'DashboardController@index')->name('admin-dashboard');

    Route::get('laporan',  function () {
        return view('admin.laporan');
    });

    Route::get('bisnis',  function () {
        return view('admin.bisnis');
    });

    Route::get('pengaturan-tiket',  function () {
        return view('admin.pengaturan-tiket');
    });

});

Route::get('test-index', 'DashboardController@index');

// wisatawan
Route::get('wisatawan','WisatawanController@index');
Route::post('/wisatawan/store','WisatawanController@store');
Route::post('/wisatawan/{id}/update','WisatawanController@update');

//UserAdmin
//Route::get('test','DashboardController@index');
Route::get('test','LaporanController@index');

Auth::routes();

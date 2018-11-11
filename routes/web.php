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

// Route::post('/logout', function () {
//     return view('admin.login');
// });

Route::get('/', function () {
    return view('admin.login');
})->name('login-user');

Route::get('admin-mapping', function(){
    if(Auth::user()['role'] == 2)
    {
        return redirect('/admin/dashboard');
    }
    if(Auth::user()['role'] == 3)
    {
        return redirect()->route('superadmin-dashboard');
    }
});

Route::prefix('super-admin')->group(function () {

    Route::get('dashboard', 'SuperAdminController@index')->name('superadmin-dashboard');

});

Route::prefix('admin')->group(function () {

    Route::get('dashboard',  'DashboardController@index')->name('admin-dashboard')->middleware('auth','roleAdmin');

    Route::get('laporan',  'LaporanController@index');

    Route::get('bisnis',  'BigDataController@index');

    Route::get('pengaturan-tiket',  function () {
        return view('admin.pengaturan-tiket');
    });

    Route::prefix('buzzer')->group(function () {
        Route::get('/', function(){
            return view('admin.buzzer.index');
        });

        Route::get('form', function(){
            return view('admin.buzzer.form');
        });

        Route::get('mapping', function(){
            return view('admin.buzzer.form_mapping');
        });
    });

    Route::prefix('tiket')->group(function () {
        Route::get('/', function(){
            return view('admin.tiket.index');
        });
    
        Route::get('form', function(){
            return view('admin.tiket.form');
        });
    });

    Route::prefix('operator')->group(function () {
        Route::get('/', function(){
            return view('admin.operator.index');
        });
    
        Route::get('form', function(){
            return view('admin.operator.form');
        });
    });
 

});

Route::get('test-index', 'PengaturanTiketController@index');

// wisatawan
Route::get('wisatawan','WisatawanController@index');
Route::post('/wisatawan/store','WisatawanController@store');
Route::post('/wisatawan/{id}/update','WisatawanController@update');

//UserAdmin
//Route::get('test','DashboardController@index');
Route::get('test','SuperAdminController@index');

Auth::routes();

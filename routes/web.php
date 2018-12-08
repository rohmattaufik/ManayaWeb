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

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('super-admin')->group(function () {

        Route::get('dashboard', 'SuperAdminController@index')->name('superadmin-dashboard');
    
    });
    
    Route::prefix('admin')->group(function () {
    
        Route::get('dashboard',  'DashboardController@index')->name('admin-dashboard')->middleware('auth','roleAdmin');
    
        Route::get('laporan',  'LaporanController@index');
    
        Route::get('bisnis',  'BigDataController@index');
    
        Route::get('pengaturan-tiket',  "PengaturanTiketController@index");
    
        Route::prefix('buzzer')->group(function () {
            Route::get('form', function(){
                return view('admin.buzzer.form');
            });
    
            Route::get('/', 'LokasiBuzzerController@index')->name('buzzer-mapping');
            Route::get('/mapping', 'LokasiBuzzerController@create')->name('buzzer-mapping-create');
            Route::post('mapping/submit', 'LokasiBuzzerController@store');
            Route::get('mapping/edit/{id}', 'LokasiBuzzerController@edit');
            Route::post('mapping/update/{id}', 'LokasiBuzzerController@update');
            Route::post('mapping/delete', 'LokasiBuzzerController@delete');
    
            Route::get('create', 'BuzzerController@create')->name('buzzer-create');
            Route::post('submit', 'BuzzerController@store');
            Route::get('edit/{id}', 'BuzzerController@edit');
            Route::post('update/{id}', 'BuzzerController@update');
            Route::post('delete', 'BuzzerController@delete');
    
        });
    
        Route::prefix('tiket')->group(function () {
            Route::get('/', 'TiketController@index')->name('tiket');
            Route::get('create', 'TiketController@create')->name('tiket-create');
            Route::post('submit', 'TiketController@submit')->name('tiket-submit');
            Route::get('edit/{id}', 'TiketController@edit')->name('tiket-edit');
            Route::post('update/{id}', 'TiketController@update')->name('tiket-update');
            Route::post('delete', 'TiketController@delete')->name('tiket-delete');
        });
    
        Route::prefix('operator')->group(function () {
            Route::get('/', 'OperatorController@index')->name('operator');
            Route::get('create', 'OperatorController@create')->name('operator-create');
            Route::post('submit', 'OperatorController@store')->name('operator-submit');
            Route::post('delete', 'OperatorController@delete');
            Route::get('edit/{id}', 'OperatorController@edit')->name('operator-edit');
            Route::post('update/{id}', 'OperatorController@update')->name('operator-update');
        });
    
        Route::prefix('diskon')->group(function () {
            Route::get('/', 'DiskonController@index')->name('diskon');
            Route::get('create', 'DiskonController@create')->name('diskon-create');
            Route::post('submit', 'DiskonController@store')->name('diskon-submit');
            Route::get('mapping', 'DiskonController@mapping')->name('diskon-mapping');
            Route::post('mapping/submit', 'DiskonController@mapping_submit')->name('diskon-mapping-submit');
            Route::get('mapping-for', 'DiskonController@mapping_for')->name('diskon-mapping-for');
            Route::post('mapping-for/submit', 'DiskonController@mapping_for_submit')->name('diskon-mapping-for-submit'); 
            Route::get('activate/{id}', 'DiskonController@activate')->name('diskon-activate');
            Route::get('deactive/{id}', 'DiskonController@deactive')->name('diskon-deactive');
        });
    
    
    });
});


Route::get('test-index', 'PengaturanTiketController@index');

// wisatawan
Route::get('wisatawan','WisatawanController@index');
Route::post('/wisatawan/{id}/update','WisatawanController@update');
Route::post('/wisatawan/store','WisatawanController@store');

//Route::get('test','DashboardController@index');
Route::get('test','SuperAdminController@index');

Auth::routes();
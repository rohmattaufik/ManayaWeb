<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');
Route::get('open', 'DataController@open');
Route::post('verify_token', 'UserController@verify_token');
Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('getAuthenticateUser', 'UserController@getAuthenticatedUser');
    Route::get('closed', 'DataController@closed');
    Route::get('transaksi-baru','TransaksiBaruController@index');
    Route::post('transaksi-submit','TransaksiBaruController@store');
});
Route::get('ping', function(){
 return response('success', 200);
});


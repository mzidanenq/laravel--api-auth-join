<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/event/buat', 'EventController@buatEvent');
Route::get('/event', 'EventController@getEvent');

Route::get('/karyawan', 'KaryawanController@getKaryawan');
Route::get('/karyawan/{id}', 'KaryawanController@getKaryawanID');

Route::get('/perusahaan', 'PerusahaanController@getPerusahaan');

Route::get('/semua', 'PerusahaanController@getEventPerusahaanKaryawan');

Route::post('/login', 'AuthController@login');
Route::post('/register', 'AuthController@register');
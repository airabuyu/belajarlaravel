<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/pelajar/create', function () {
    return view('pelajar/create');
});

Route::get('/', 'App\Http\Controllers\PelajarController@index');
Route::get('/pelajar', 'App\Http\Controllers\PelajarController@index');

Route::get('/pelajar/create', 'App\Http\Controllers\PelajarController@create');
Route::post('/pelajar', 'App\Http\Controllers\PelajarController@store');
Route::get('/pelajar/{pelajar}', 'App\Http\Controllers\PelajarController@show');
Route::get('/pelajar/{pelajar}/edit', 'App\Http\Controllers\PelajarController@edit');
// 
Route::patch('/pelajar/{pelajar}', 'App\Http\Controllers\PelajarController@update');
Route::delete('/pelajar/{pelajar}' ,'App\Http\Controllers\PelajarController@destroy');
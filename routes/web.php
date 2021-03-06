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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/daftar', 'DaftarController@index')->middleware('auth');
Route::get('/daftar/create', 'DaftarController@create');
Route::get('/daftar/{id}', 'DaftarController@show')->middleware('auth');
Route::post('/daftar', 'DaftarController@store');

Auth::routes([
    'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');

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

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login')->name('login');
Route::get('/register', 'LoginController@index_register');
Route::post('/register', 'LoginController@register')->name('register');
Route::get('/dashboard', 'LoginController@dashboard');
Route::resource('/dashboard/masyarakat', 'MasyarakatController');
Route::resource('/dashboard/petugas', 'PetugasController');
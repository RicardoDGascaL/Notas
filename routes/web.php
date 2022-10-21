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

Route::get('/', 'PagesController@index')->name('login');
Route::post('/', 'loginController@authenticate')->name('autenticate');

Route::get('/register', 'PagesController@register')->name('registro');
Route::post('/register', 'registerController@store')->name('registro.store');

Route::get('/perfil', 'perfilController@perfil')->name('perfil.index')->middleware('auth');
Route::get('/create', 'perfilController@create')->name('perfil.create')->middleware('auth');

Route::get('/editar/{nota}', 'perfilController@edit')->name('perfil.edit')->middleware('auth');
Route::patch('/editar/{nota}', 'perfilController@update')->name('perfil.update')->middleware('auth');

Route::delete('/perfil/{nota}', 'perfilController@destroy')->name('perfil.destroy');

Route::post('/perfil', 'perfilController@store')->name('notas.store')->middleware('auth');
Route::get('/perfil/{nota}', 'perfilController@show')->name('perfil.show')->middleware('auth');

Route::post('logout', 'LoginController@logout')->name('logout');

//Route::post('/loggearme', 'PagesController@store')->name('loggearme');


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

Route::get('/', function () {
    return view('index');
});

Route::get('/index', 'homeController@index')->name('index');
Route::get('/sobre', 'homeController@sobre')->name('sobre');
Route::get('/contato', 'homeController@contato')->name('contato');
Route::get('/galeria', 'homeController@galeria')->name('galeria');
Route::get('/registrar', 'UsuarioController@registrar')->name('registrar');
Route::get('/login', 'UsuarioController@login')->name('login');
Route::post('logar', 'LoginController@logar')->name('logar');
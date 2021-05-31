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

Route::get('/', 'homeController@index')->name('home');

//Rotas de login
Route::get('login','Auth\LoginController@index')->name('login');
Route::post('login', 'Auth\LoginController@authenticate');
Route::get('logout', 'Auth\LoginController@logout' )->name('logout');

//Rotas de usuários
Route::resource('users', 'userController');

//Rota de dados de usuarios via json
Route::get('dataapi', 'userController@users');

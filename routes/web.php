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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/tasks', 'TasksController@index')->name('tasks');
Route::get('/tasks/due', 'TasksController@due')->name('tasks');
Route::get('/tasks/add', 'TasksController@add')->name('tasks');
Route::post('/tasks/store', 'TasksController@store')->name('tasks');
Route::get('/tasks/edit/{id}', 'TasksController@edit')->name('tasks');
Route::put('/tasks/update/{id}', 'TasksController@update')->name('tasks');


Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/profile/add', 'ProfileController@add')->name('profile');
Route::post('/profile/store', 'ProfileController@store')->name('profile');
Route::get('/profile/edit/{id}', 'ProfileController@edit')->name('profile');
Route::put('/profile/update/{id}', 'ProfileController@update')->name('profile');
Route::put('/profile/ubah-password/{id}', 'ProfileController@update_password')->name('profile');
Route::put('/profile/ubah-password-user/{id}', 'ProfileController@update_password_user')->name('profile');
Route::delete('/profile/delete/{id}', 'ProfileController@delete')->name('profile');
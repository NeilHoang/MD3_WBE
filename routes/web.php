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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list','ManagementController@index')->name('manager.list');
Route::get('/create','ManagementController@create')->name('manager.create');
Route::post('/store','ManagementController@store')->name('manager.store');
Route::get('/delete{id}', 'ManagementController@destroy')->name('manager.destroy');
Route::get('/edit/{id}', 'ManagementController@edit')->name('manager.edit');
Route::post('/update{id}', 'ManagementController@update')->name('manager.update');
Route::get('/search', 'ManagementController@search')->name('manager.search');


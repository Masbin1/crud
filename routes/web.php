<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('users')->group(function () {
    Route::get('/', 'App\Http\Controllers\UsersController@index')->name('users.index');
    Route::get('/create', 'App\Http\Controllers\UsersController@create')->name('users.create');
    Route::post('/', 'App\Http\Controllers\UsersController@store')->name('users.store');
    Route::get('/{user}/edit', 'App\Http\Controllers\UsersController@edit')->name('users.edit');
    Route::post('/{user}', 'App\Http\Controllers\UsersController@update')->name('users.update');
    Route::delete('/{user}', 'App\Http\Controllers\UsersController@destroy')->name('users.destroy');
});

Route::prefix('iot')->group(function () {
    Route::get('/', 'App\Http\Controllers\IotController@index')->name('iot.index');
    Route::get('/create', 'App\Http\Controllers\IotController@create')->name('iot.create');
    Route::post('/', 'App\Http\Controllers\IotController@store')->name('iot.store');
    Route::get('/{user}/edit', 'App\Http\Controllers\IotController@edit')->name('iot.edit');
    Route::post('/{user}', 'App\Http\Controllers\IotController@update')->name('iot.update');
    Route::delete('/{user}', 'App\Http\Controllers\IotController@destroy')->name('iot.destroy');
});

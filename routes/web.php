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

/** CREAREMOS NUESTRAS RUTAS */
/*
Route::get('/', function () {
    return view('welcome');
});
*/

//laravel 8
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class,'index']);
Route::post('users', [UserController::class, 'store'])->name('users.store');
Route::delete('users/{user}', [UserController::class,'destroy'])->name('users.destroy');

/*
Route::get('/', 'UserController@index');
Route::post('/', 'UserController@store')->name('users.store');
Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy');
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

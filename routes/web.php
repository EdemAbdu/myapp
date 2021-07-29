<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\ProjectController;
//use App\Http\Controllers\Auth\RegisterController;
//use App\Http\Controllers\Auth\LoginController;
//use App\Http\Controllers\Auth\ForgotPasswordController;
//use App\Http\Controllers\Auth\ResetPasswordController;

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

//Route::resource('projects', ProjectController::class);

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('home');
});

Route::get('register', [\App\Http\Controllers\Auth\RegisterController::class, 'register']);
Route::post('register', [\App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');

Route::get('login', [\App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('login', [\App\Http\Controllers\Auth\LoginController::class, 'store'])->name('login');
Route::get('logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('home', [\App\Http\Controllers\Auth\LoginController::class, 'home'])->name('home');

Route::get('forget-password', [\App\Http\Controllers\Auth\ForgotPasswordController::class, 'getEmail']);
Route::post('forget-password', [\App\Http\Controllers\Auth\ForgotPasswordController::class, 'postEmail']);
Route::get('reset-password/{token}', [\App\Http\Controllers\Auth\ResetPasswordController::class, 'getPassword']);
Route::post('reset-password', [\App\Http\Controllers\Auth\ResetPasswordController::class, 'updatePassword']);

//Route::namespace('App\Http\Controllers')->group(function () {
//    Auth::routes();
//});

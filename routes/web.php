<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

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
    return view('home');
});

//Route::get('/test/register', function () {
//    return '<h1>this function is OK, register_store</h1>';
//});
//Route::get('/test/login', function () {
//    return '<h1>this function is OK, login</h1>';
//});
//
////Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
//Route::get('/register', [RegisterController::class, 'store']);
//
//Route::get('/login', [LoginController::class, 'loginPage']);
//Route::post('/login', [LoginController::class, 'login']);

Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/auth/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/auth/save', [AuthController::class, 'save'])->name('auth.save');
Route::post('/auth/check', [AuthController::class, 'check'])->name('auth.check');

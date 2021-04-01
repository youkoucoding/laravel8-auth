<?php

use App\Http\Controllers\Auth\AuthController;
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

Route::get('/', function () {
    return view('home');
});

Route::post('/auth/save', [AuthController::class, 'save'])->name('auth.save');
Route::post('/auth/check', [AuthController::class, 'check'])->name('auth.check');
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::group(['middleware' => ['AuthCheck']], function () {
    Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login');
    Route::get('/auth/register', [AuthController::class, 'register'])->name('auth.register');
    Route::get('/admin/dashboard', [AuthController::class, 'dashboard'])->name('admin.dashboard');
});

Route::get('/test', function () {
    return view('order.order');
});

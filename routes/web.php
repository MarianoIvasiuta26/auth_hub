<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
    return view('welcome');
})->name('home');

Route::get('register', [RegisterController::class, 'index'])->name('register.index');
Route::post('register/store', [RegisterController::class, 'store'])->name('register.store');
Route::get('user/show', [RegisterController::class, 'show'])->name('user.show');

Route::get('login', [LoginController::class, 'index'])->name('login.index');
Route::post('user/login', [LoginController::class, 'login'])->name('user.login');

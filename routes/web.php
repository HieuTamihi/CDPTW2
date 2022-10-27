<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/{name?}', function ($name = "index") {
    return view($name);
});
//dang nhap
Route::get('/login', [UserController::class, 'showLogin'])->name('showLogin');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/', [UserController::class, 'index'])->name('showHome');

//dang ky
Route::get('/register', [UserController::class, 'showRegister'])->name('showRegister');
Route::post('/register', [UserController::class, 'register'])->name('register');

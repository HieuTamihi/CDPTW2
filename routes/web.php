<?php

use App\Http\Controllers\EmployerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\jobpostingController;
use App\Http\Controllers\JobpostingController as ControllersJobpostingController;
use App\Models\Job_posting;

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

Route::get('/index', [EmployerController::class, 'index']);

//dang nhap
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::resource('/', EmployerController::class);

//dang ky
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::get('/register', [UserController::class, 'showRegister']);

//admin
Route::resource('listjobPosting', ControllersJobpostingController::class);

//chuyen trang

Route::get('search', [HomeController::class, 'search'])->name('search');

Route::get('createcv', [UserController::class, 'createCV'])->name('createCV');

Route::get('admin', function () {
    return view('DashboardTemplate.dashboard');
});

Route::get('/{name?}', function ($name = "index") {
    return view($name);
});

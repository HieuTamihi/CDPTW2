<?php

use App\Http\Controllers\CRUDEmployer;
use App\Http\Controllers\EmployerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\viewController;
use App\Http\Controllers\HomeController;

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
Route::get('/', [EmployerController::class, 'index'])->name('index');

//dang ky
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::get('/register', [UserController::class, 'Showregister']);
//chuyen trang

Route::get('search', [HomeController::class, 'search'])->name('search');

Route::get('createcv', [UserController::class, 'createCV'])->name('createCV');

Route::get('admin', function () {
    return view('DashboardTemplate.dashboard');
});
Route::get('listpostbyid',[EmployerController::class,'getPostByID']);
Route::resource('employer', EmployerController::class);
Route::get('/detail_page/{id}',[EmployerController::class,'show']);
// get post by id employer
// Route::get('Employser/listpost', [viewController::class,'getListPostByID'])->name('view_employer');

// Manamge Employer by ID
Route::resource('CRUDEmployer',CRUDEmployer::class);


Route::get('/{name?}', function ($name = "index") {
    return view($name);
});

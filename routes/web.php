<?php

use App\Http\Controllers\EmployerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPostsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\VacancisController;
use App\Http\Controllers\AdminEmpolyer;
use App\Http\Controllers\AdminJobpostings;
use App\Http\Controllers\AdminUser;
use PhpParser\Node\Stmt\Return_;

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
//dang ky tai khoan employer
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::get('/register', [UserController::class, 'getUserID']);
//dang ky tai khoan customer
Route::post('/registerCT', [UserController::class, 'registerCT'])->name('registerCT');
Route::get('/registerCT', [UserController::class, 'getCustomerID']);

//admin
Route::resource('listjobPosting', ControllersJobpostingController::class);
Route::resource('employer', EmployerController::class);

//chuyen trang
Route::get('search', [HomeController::class, 'search'])->name('search');

Route::get('createcv', [UserController::class, 'createCV'])->name('createCV');

Route::get('blogSearch', [BlogController::class, 'blogSearch'])->name('blogSearch');


// Route::prefix('admin')->group(function () {
Route::resource('/blog-home', AdminPostsController::class);
Route::resource('/blog-add', AdminPostsController::class);
// Route::resource('/blog-edit', AdminPostsController::class);
// });

Route::prefix('blogit')->group(function () {
    Route::get('/', [BlogController::class, 'featuredPosts'])->name('blogit');
    Route::get('blogDetail/{id}', [BlogController::class, 'blogDetail'])->name('blogDetail');
});
Route::get('admin', function () {
    return view('DashboardTemplate.dashboard');
});
Route::get('/detail_page/{id}',[EmployerController::class,'show']);
Route::get('/{name?}', function ($name = "index") {
    return view($name);
});
<?php

use App\Http\Controllers\EmployerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPostsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminCommentsController;
use App\Http\Controllers\BlogCommentController;

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

Route::get('blogSearch', [BlogController::class, 'blogSearch'])->name('blogSearch');


Route::resource('/admin-blog-home', AdminPostsController::class);
Route::resource('/admin-blog-comment', AdminCommentsController::class);





Route::prefix('blogit')->group(function () {
    Route::get('/', [BlogController::class, 'featuredPosts'])->name('blogit');
    Route::get('blogDetail/{id}', [BlogController::class, 'blogDetail'])->name('blogDetail');
});

Route::get('/{name?}', function ($name = "index") {
    return view($name);
});

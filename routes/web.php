<?php

use App\Http\Controllers\AdminPostsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EmployerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

//chuyen trang

Route::get('search', [HomeController::class, 'search'])->name('search');

Route::get('blogSearch', [BlogController::class, 'blogSearch'])->name('blogSearch');

Route::get('createcv', [UserController::class, 'createCV'])->name('createCV');

// Route::prefix('admin')->group(function () {

Route::resource('/blog-home', AdminPostsController::class);
Route::resource('/blog-add', AdminPostsController::class);
// Route::resource('/blog-edit', AdminPostsController::class);
// });


Route::prefix('blogit')->group(function () {
    Route::get('/', [BlogController::class, 'featuredPosts'])->name('blogit');
    Route::get('blogDetail/{id}', [BlogController::class, 'blogDetail'])->name('blogDetail');
});




Route::get('/{name?}', function ($name = "index") {
    return view($name);
});

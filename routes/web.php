<?php

use App\Http\Controllers\CRUDUserController;
use App\Http\Controllers\CRUDEmloyerController;
use App\Http\Controllers\CRUDJobpostingController;
use App\Http\Controllers\CRUDEmployer;
use App\Http\Controllers\RecruitmentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CRUDListJobController;
use App\Http\Controllers\RUEmployerController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\JobpostingController;
use App\Http\Controllers\RecruimentController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\EmployerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPostsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminCommentsController;

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

//Active tai khoan
Route::get('active/{newUser}/{confirm}', [UserController::class, 'active'])->name('activeAcount');

//customer
Route::get('/ShowEditUser/{id}', [CustomerController::class, 'ShowEditUser'])->name('ShowEditUser');
Route::put('/editUser/{id}', [CustomerController::class, 'editUser'])->name('editUser');

//change password
Route::get('/change_pass_log', [CustomerController::class, 'changePassword'])->name('change_pass_log');
Route::post('/change_pass_log', [CustomerController::class, 'updatePassword'])->name('update-password');

//reset password
Route::get('/reset_pass', [UserController::class, 'resetPass']);
Route::post('/recover_pass', [UserController::class, 'recover_pass']);
Route::get('/update-new-pass', [UserController::class, 'update_new_pass']);
Route::post('/reset-new-pass', [UserController::class, 'reset_new_pass']);

//upload CV
Route::post('/uploadCV', [RecruitmentController::class, 'store']);

//CV
Route::resource('cv', CvController::class);
Route::get('/viewCV/{id}', [CvController::class, 'viewCV'])->name('viewCV');

//tracking work
Route::resource('wishlist', WishlistController::class);

//admin
Route::get('admin', function () {
    return view('DashboardTemplate.dashboard');
});
Route::resource('listjobPosting', JobpostingController::class);
Route::resource('employer', EmployerController::class);
Route::resource('AdminUser', CRUDUserController::class);
Route::resource('AdminJobposting', CRUDJobpostingController::class);
Route::resource('AdminEmloyer', CRUDEmloyerController::class);

// Employer - quan ly job by employer_id
Route::resource('CRUDJobByEmployer', CRUDListJobController::class);

// RU employer 
Route::resource('RUEmployer', RUEmployerController::class);
Route::get('/detail_re/{id}', [RUEmployerController::class, 'detail_recruitment'])->name('detail_recruitment');

// Send mail recruitment
Route::get('recruit/{customer}', [RUEmployerController::class, 'recruit'])->name('recruit');

// Change pass Employer
Route::get('showlayout/{id}', [RUEmployerController::class, 'showlayout'])->name('showlayout');
Route::put('changepass/{id}', [RUEmployerController::class, 'changepass'])->name('changepass');

//chuyen trang
Route::get('search', [HomeController::class, 'search'])->name('search');

//tao CV
Route::get('createcv', [UserController::class, 'createCV'])->name('createCV');

//upload CV
Route::post('/uploadCV', [RecruimentController::class, 'store']);

// tim kiem trang chu va trang search
Route::get('search', [HomeController::class, 'search'])->name('search');
Route::get('blogSearch', [BlogController::class, 'blogSearch'])->name('blogSearch');

// Trang admin chinh sua blog
Route::resource('/admin-blog-home', AdminPostsController::class);
Route::get('/admin-blog-trash', [AdminPostsController::class, 'blogTrash'])->name('blogTrash');
Route::get('/admin-blog-restore/{id}', [AdminPostsController::class, 'blogRestore'])->name('blogRestore');
Route::get('/admin-blog-permanentlyDelete/{id}', [AdminPostsController::class, 'permanentlyDelete'])->name('permanentlyDelete');

// Trang admin chinh sua comment
Route::resource('/admin-blog-comment', AdminCommentsController::class);
Route::get('/admin-comment-status/{id}/{status}', [AdminCommentsController::class, 'commentStatus'])->name('commentStatus');


// Comment trong blog
Route::prefix('comment')->group(function () {
    Route::post('/store-comment/{id}', [BlogController::class, 'storeComments'])->name('storeComments');
});

Route::prefix('blogit')->group(function () {
    Route::get('/', [BlogController::class, 'featuredPosts'])->name('blogit');
    Route::get('blogDetail/{id}', [BlogController::class, 'blogDetail'])->name('blogDetail');
});
//trang chi tiet
Route::get('/detail_page/{id}', [EmployerController::class, 'show']);

Route::get('listpostbyid', [EmployerController::class, 'getPostByID']);
// get post by id employer
// Route::get('Employser/listpost', [viewController::class,'getListPostByID'])->name('view_employer');

// Manamge Employer by ID
Route::resource('CRUDEmployer', CRUDEmployer::class);

//admin
Route::resource('listjobPosting', ControllersJobpostingController::class);

Route::get('/{name?}', function ($name = "index") {
    return view($name);
});

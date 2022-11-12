<?php

<<<<<<< HEAD
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CRUDListJobController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\CRUDUserController;
use App\Http\Controllers\CRUDEmloyerController;
use App\Http\Controllers\CRUDJobpostingController;
=======
use App\Http\Controllers\CRUDEmployer;
>>>>>>> CRUD_Employer_By_ID
use App\Http\Controllers\EmployerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\viewController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobpostingController;
use App\Http\Controllers\RecruimentController;
use App\Http\Controllers\TrackingworkController;
use App\Http\Controllers\WishlistController;
use App\Models\Customer;
use App\Models\Wish_lists;

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

//customer
// Route::resource('/personal_info', CustomerController::class);
Route::get('/ShowEditUser/{id}', [CustomerController::class, 'ShowEditUser'])->name('ShowEditUser');
Route::put('/editUser/{id}', [CustomerController::class, 'editUser'])->name('editUser');

//change password
Route::get('/change_pass_log', [CustomerController::class, 'changePassword'])->name('change_pass_log');
Route::post('/change_pass_log', [CustomerController::class, 'updatePassword'])->name('update-password');

//upload CV
Route::post('/uploadCV', [RecruimentController::class, 'store']);

//CV
Route::resource('cv', CvController::class);

//tracking work
Route::resource('wishlist', WishlistController::class);

//admin
Route::resource('listjobPosting', JobpostingController::class);
Route::resource('employer', EmployerController::class);
<<<<<<< HEAD
Route::resource('AdminUser', CRUDUserController::class);

Route::resource('AdminJobposting', CRUDJobpostingController::class);
Route::resource('AdminEmloyer', CRUDEmloyerController::class);
=======
// Employer - quan ly job by employer_id
Route::resource('CRUDJobByEmployer',CRUDListJobController::class);
>>>>>>> CRUD_Job_By_Emloy_id

//chuyen trang
Route::get('search', [HomeController::class, 'search'])->name('search');
Route::get('createcv', [UserController::class, 'createCV'])->name('createCV');
Route::get('admin', function () {
    return view('DashboardTemplate.dashboard');
});
<<<<<<< HEAD
Route::get('/detail_page/{id}', [EmployerController::class, 'show']);
=======
Route::get('listpostbyid',[EmployerController::class,'getPostByID']);
Route::resource('employer', EmployerController::class);
Route::get('/detail_page/{id}',[EmployerController::class,'show']);
// get post by id employer
// Route::get('Employser/listpost', [viewController::class,'getListPostByID'])->name('view_employer');

// Manamge Employer by ID
Route::resource('CRUDEmployer',CRUDEmployer::class);


>>>>>>> CRUD_Employer_By_ID
Route::get('/{name?}', function ($name = "index") {
    return view($name);
});

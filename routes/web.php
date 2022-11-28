<?php

use App\Http\Controllers\CRUDUserController;
use App\Http\Controllers\CRUDEmloyerController;
use App\Http\Controllers\CRUDJobpostingController;
use App\Http\Controllers\CRUDCustomersController;
use App\Http\Controllers\CRUDEmployer;
use App\Http\Controllers\viewController;
use App\Http\Controllers\RecruitmentController;
use App\Http\Controllers\AdminCommentsController;
use App\Http\Controllers\BlogCommentController;
use App\Http\Controllers\AdminPostsController;
use App\Http\Controllers\BlogController;
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
use App\Http\Controllers\trashUserController;
use App\Http\Controllers\trashEmployerController;
use App\Http\Controllers\trashJobpostingController;
use App\Http\Controllers\trashcustomersController;

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
// Route::resource('/personal_info', CustomerController::class);
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
Route::resource('listjobPosting', JobpostingController::class);
Route::resource('employer', EmployerController::class);
Route::resource('AdminUser', CRUDUserController::class);
Route::resource('AdminJobposting', CRUDJobpostingController::class);
Route::resource('AdminEmloyer', CRUDEmloyerController::class);
Route::resource('AdminCustomers', CRUDCustomersController::class);
//trash
Route::resource('User_Trash', trashUserController::class);
Route::resource('Employer_Trash', trashEmployerController::class);
Route::resource('Jobposting_Trash', trashJobpostingController::class);
Route::resource('Customers_Trash', trashcustomersController::class);

// Employer - quan ly job by employer_id
Route::resource('CRUDJobByEmployer', CRUDListJobController::class);

// Employer - quan ly job by employer_id
Route::resource('CRUDJobByEmployer', CRUDListJobController::class);
// RU employer
Route::resource('RUEmployer', RUEmployerController::class);
Route::get('/detail_re/{id}', [RUEmployerController::class, 'detail_recruitment'])->name('detail_recruitment');

// Employer - quan ly job by employer_id
Route::resource('CRUDJobByEmployer', CRUDListJobController::class);
// RU employer
Route::resource('RUEmployer', RUEmployerController::class);
// detail_recruitment
Route::get('/detail_re/{id}', [RUEmployerController::class, 'detail_recruitment'])->name('detail_recruitment');
// Send mail recruitment
Route::get('recruit/{customer}', [RUEmployerController::class, 'recruit'])->name('recruit');

// Change pass Employer
Route::get('showlayout/{id}', [RUEmployerController::class, 'showlayout'])->name('showlayout');
Route::put('changepass/{id}', [RUEmployerController::class, 'changepass'])->name('changepass');

//chuyen trang
Route::get('search', [HomeController::class, 'search'])->name('search');
Route::get('createcv', [UserController::class, 'createCV'])->name('createCV');
Route::get('admin', function () {
    return view('DashboardTemplate.dashboard');

    Route::get('blogSearch', [BlogController::class, 'blogSearch'])->name('blogSearch');


    Route::resource('/admin-blog-home', AdminPostsController::class);
    Route::resource('/admin-blog-comment', AdminCommentsController::class);

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
    // Employer - quan ly job by employer_id
    Route::resource('CRUDJobByEmployer', CRUDListJobController::class);


    // Employer - quan ly job by employer_id
    Route::resource('CRUDJobByEmployer', CRUDListJobController::class);
    // RU employer
    Route::resource('RUEmployer', RUEmployerController::class);
    // detail_recruitment
    Route::get('/detail_re/{id}', [RUEmployerController::class, 'detail_recruitment'])->name('detail_recruitment');
    // Send mail recruitment
    Route::get('recruit/{customer}', [RUEmployerController::class, 'recruit'])->name('recruit');

    // Change pass Employer
    Route::get('showlayout/{id}', [RUEmployerController::class, 'showlayout'])->name('showlayout');
    Route::put('changepass/{id}', [RUEmployerController::class, 'changepass'])->name('changepass');

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
    Route::get('/detail_page/{id}', [EmployerController::class, 'show']);
    Route::get('listpostbyid', [EmployerController::class, 'getPostByID']);
    Route::resource('employer', EmployerController::class);
    Route::get('/detail_page/{id}', [EmployerController::class, 'show']);
    // get post by id employer
    // Route::get('Employser/listpost', [viewController::class,'getListPostByID'])->name('view_employer');

    // Manamge Employer by ID
    Route::resource('CRUDEmployer', CRUDEmployer::class);
});


//Active
Route::get('active/{newUser}/{confirm}', [UserController::class, 'active'])->name('activeAcount');

Route::get('createcv', [UserController::class, 'createCV'])->name('createCV');
Route::get('admin', function () {
    return view('DashboardTemplate.dashboard');
});
Route::get('/detail_page/{id}', [EmployerController::class, 'show']);
//admin
Route::resource('listjobPosting', ControllersJobpostingController::class);
Route::resource('employer', EmployerController::class);

//chuyen trang
Route::get('search', [HomeController::class, 'search'])->name('search');

Route::get('createcv', [UserController::class, 'createCV'])->name('createCV');

Route::get('admin', function () {
    return view('DashboardTemplate.dashboard');
});
Route::get('/detail_page/{id}', [EmployerController::class, 'show']);
Route::get('/{name?}', function ($name = "index") {
    return view($name);
});
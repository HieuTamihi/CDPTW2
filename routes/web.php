<?php

<<<<<<< HEAD
<<<<<<< HEAD
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CRUDListJobController;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use App\Http\Controllers\RUEmployerController;
>>>>>>> RUEmployer_By_ID
=======
use App\Http\Controllers\RUEmployerController;
>>>>>>> origin/change_password_employer
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
<<<<<<< HEAD
use App\Http\Controllers\JobpostingController;
use App\Http\Controllers\RecruimentController;
use App\Http\Controllers\TrackingworkController;
use App\Http\Controllers\WishlistController;
use App\Models\Customer;
use App\Models\Wish_lists;
=======
use App\Http\Controllers\AdminPostsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminCommentsController;
use App\Http\Controllers\BlogCommentController;
>>>>>>> CRUD_post
=======
use App\Http\Controllers\AdminPostsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EmployerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
>>>>>>> blog_home

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

<<<<<<< HEAD

//dang ky
//dang ky tai khoan employer
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::get('/register', [UserController::class, 'getUserID']);
//dang ky tai khoan customer
Route::post('/registerCT', [UserController::class, 'registerCT'])->name('registerCT');
Route::get('/registerCT', [UserController::class, 'getCustomerID']);

//Active tai khoan
Route::get('active/{newUser}/{confirm}',[UserController::class,'active'])->name('activeAcount');

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




// Employer - quan ly job by employer_id
Route::resource('CRUDJobByEmployer',CRUDListJobController::class);
// RU employer 
Route::resource('RUEmployer',RUEmployerController::class);
Route::get('/detail_re/{id}',[RUEmployerController::class,'detail_recruitment'])->name('detail_recruitment');







// Employer - quan ly job by employer_id
Route::resource('CRUDJobByEmployer',CRUDListJobController::class);
// RU employer 
Route::resource('RUEmployer',RUEmployerController::class);
// detail_recruitment
Route::get('/detail_re/{id}',[RUEmployerController::class,'detail_recruitment'])->name('detail_recruitment');
// Send mail recruitment
Route::get('recruit/{customer}',[RUEmployerController::class,'recruit'])->name('recruit');

// Change pass Employer
Route::get('showlayout/{id}',[RUEmployerController::class,'showlayout'])->name('showlayout');
Route::put('changepass/{id}',[RUEmployerController::class,'changepass'])->name('changepass');

//chuyen trang
Route::get('search', [HomeController::class, 'search'])->name('search');
Route::get('createcv', [UserController::class, 'createCV'])->name('createCV');
<<<<<<< HEAD
Route::get('admin', function () {
    return view('DashboardTemplate.dashboard');
=======

Route::get('blogSearch', [BlogController::class, 'blogSearch'])->name('blogSearch');


Route::resource('/admin-blog-home', AdminPostsController::class);
Route::resource('/admin-blog-comment', AdminCommentsController::class);



=======
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
>>>>>>> blog_home


Route::prefix('blogit')->group(function () {
    Route::get('/', [BlogController::class, 'featuredPosts'])->name('blogit');
    Route::get('blogDetail/{id}', [BlogController::class, 'blogDetail'])->name('blogDetail');
<<<<<<< HEAD
>>>>>>> CRUD_post
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

<<<<<<< HEAD

>>>>>>> CRUD_Employer_By_ID
=======
>>>>>>> CRUD_post
=======
});




>>>>>>> blog_home
Route::get('/{name?}', function ($name = "index") {
    return view($name);
});

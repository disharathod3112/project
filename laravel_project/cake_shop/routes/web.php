<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;


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
Route::get('/login', [CustomerController::class, 'login'])->middleware('u_beforelogin');
Route::post('/auth_login', [CustomerController::class, 'auth_login'])->middleware('u_beforelogin');

Route::get('/cust_logout', [CustomerController::class, 'cust_logout']);
Route::get('/signup', [CustomerController::class, 'create'])->middleware('u_beforelogin');
Route::post('/add_signup', [CustomerController::class, 'store'])->middleware('u_beforelogin');

Route::get('/my_profile', [CustomerController::class, 'my_profile']);
Route::get('/edit_profile/{id}', [CustomerController::class, 'edit']);
Route::post('/update_profile/{id}', [CustomerController::class, 'update']);

Route::get('/', function () { return view('website.index');});

Route::get('/index', function () { return view('website.index'); });

Route::get('/about', function () {return view('website.about');});

Route::get('/contact', function () {return view('website.contact');});

Route::get('/service', function () {return view('website.service');});

Route::get('/team', function () {return view('website.team');});

Route::get('/testimonial', function () {return view('website.testimonial');});

Route::get('/menu', [ProductController::class,'menu']);
Route::get('/view_product/{id}', [ProductController::class, 'view_product']);








//====================================================Admin site start====================================================================================//

Route::group(['middleware'=>['a_beforelogin']],function(){

    //Admin 
    Route::get('/admin-login',[AdminController::class,'index']);
    Route::post('/admin_auth_login',[AdminController ::class,'admin_auth_login']);

});
Route::group(['middleware'=>['a_afterlogin']],function(){

    Route::get('/admin_logout',[AdminController ::class,'admin_logout']);


            Route::get('/dashboard', function () {return view('admin.dashboard');
            });


            Route::get('/profile', [AdminController ::class,'show']);

            Route::get('/order', function () {return view('admin.manage_order');
            });

            Route::get('/feedback', function () {return view('admin.feedback');
            });


           



            //product
            Route::get('/manage_product',[ProductController::class,'show']); 
            Route::get('/add_product',[ProductController::class, 'create']);
            Route::post('/product',[ProductController::class,'store']);
            Route::get('/edit_product/{id}',[ProductController::class,'edit']);
            Route::post('/update_product/{id}',[ProductController::class,'update']); 
            Route::get('/dlt_product/{id}',[ProductController::class,'destroy']); 



            //category
            Route::get('/manage_categories',[CatagoryController::class, 'show']);

            Route::post('/category',[CatagoryController::class,'store']);
            Route::get('/add_categories', [CatagoryController::class,'create']);
            Route::get('/edit_category/{id}',[CatagoryController::class,'edit']);
            Route::post('/update_category/{id}',[CatagoryController::class,'update']); 
            Route::get('/dlt_category/{id}',[CatagoryController::class,'destroy']);




});





//====================================================Admin site end====================================================================================//
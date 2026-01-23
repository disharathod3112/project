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

Route::get('/', function () { return view('website.index');});

Route::get('/index', function () { return view('website.index'); });

Route::get('/about', function () {return view('website.about');});

Route::get('/contact', function () {return view('website.contact');});

Route::get('/service', function () {return view('website.service');});

Route::get('/team', function () {return view('website.team');});

Route::get('/testimonial', function () {return view('website.testimonial');});

Route::get('/menu', function () {return view('website.menu');});







//====================================================Admin site start====================================================================================//


//Admin 
Route::get('/admin-login',[AdminController::class,'index']);
Route::post('/admin_auth_login',[AdminController ::class,'admin_auth_login']);



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




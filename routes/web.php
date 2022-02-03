<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;

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

// Route::get('/visitor', [PagesController::class, 'visitor_count']);

// Route::get('/test', function(){
//     // return view('parts.brand2');
//     return 123;
// });

Route::get('/', [PagesController::class, 'index'])->name('homepage');

Auth::routes(['register'=>false]);

Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::post('/contact', [PagesController::class, 'contact_store'])->name('contact_store');
Route::get('/team', [PagesController::class, 'team_index'])->name('team_index');
//Service function
Route::get('/service/{id}', [PagesController::class, 'service_show'])->name('service_show');
Route::post('/service', [PagesController::class, 'service_search'])->name('service_search');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('user');
Route::group(['prefix' => 'user', 'middleware' => 'user'], function(){
    //Testimonial
    Route::get('/testimonial', [UserController::class, 'user_testimonial'])->name('user.testimonial');
    Route::get('/testimonial/create', [UserController::class, 'testimonial_create'])->name('user.testimonial_create');
    Route::post('/testimonial', [UserController::class, 'testimonial_store'])->name('user.testimonial_store');

    //User Profile Update
    Route::get('/information/create', [UserController::class, 'info_create'])->name('user.info_create');
    Route::post('/information', [UserController::class, 'info_store'])->name('user.info_store');
    Route::put('/information', [UserController::class, 'info_update'])->name('user.info_update');
    Route::get('/information', [UserController::class, 'info_show'])->name('user.info_show');

});




Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function(){
    Route::get('/', [BackController::class, 'admin_home'])->name('admin.home');

    //Role CRUD
    Route::get('/role', [BackController::class, 'role_index'])->name('admin.role_index');
    Route::get('/role/create', [BackController::class, 'role_create'])->name('admin.role_create');
    Route::post('/role', [BackController::class, 'role_store'])->name('admin.role_store');

    //FAQ CRUD
    Route::get('/faq/create', [BackController::class, 'faq_create'])->name('admin.faq_create');
    Route::get('/faq', [BackController::class, 'faq_index'])->name('admin.faq_index');
    Route::post('/faq', [BackController::class, 'faq_store'])->name('admin.faq_store');
    Route::delete('/faq/{id}', [BackController::class, 'faq_destroy'])->name('admin.faq_destroy');
    Route::get('/faq/{id}', [BackController::class, 'faq_show'])->name('admin.faq_show');
    Route::get('/faq/{id}/edit', [BackController::class, 'faq_edit'])->name('admin.faq_edit');
    Route::put('/faq/{id}', [BackController::class, 'faq_update'])->name('admin.faq_update');

    //Member CRUD
    Route::get('/member', [BackController::class, 'member_index'])->name('admin.member_index');
    Route::get('/member/create', [BackController::class, 'member_create'])->name('admin.member_create');
    Route::post('/member', [BackController::class, 'member_store'])->name('admin.member_store');
    Route::delete('/member/{id}', [BackController::class, 'member_destroy'])->name('admin.member_destroy');
    Route::get('/member/{id}/edit', [BackController::class, 'member_edit'])->name('admin.member_edit');
    Route::put('/member/{id}', [BackController::class, 'member_update'])->name('admin.member_update');
    Route::get('/member/{id}', [BackController::class, 'member_show'])->name('admin.member_show');
    
    //Testimonial CRUD
    Route::get('/testimonial', [BackController::class, 'test_index'])->name('admin.test_index');
    Route::get('/testimonial/create', [BackController::class, 'test_create'])->name('admin.test_create');
    Route::post('/testimonial', [BackController::class, 'test_store'])->name('admin.test_store');
    Route::get('/testimonial/{id}', [BackController::class, 'test_show'])->name('admin.test_show');
    Route::get('/testimonial/{id}/edit', [BackController::class, 'test_edit'])->name('admin.test_edit');
    Route::put('/testimonial/{id}', [BackController::class, 'test_update'])->name('admin.test_update');
    Route::delete('/testimonial/{id}', [BackController::class, 'test_destroy'])->name('admin.test_destroy');

    //Service CRUD
    Route::get('/service', [BackController::class, 'service_index'])->name('admin.service_index');
    Route::get('/service/create', [BackController::class, 'service_create'])->name('admin.service_create');
    Route::post('/service', [BackController::class, 'service_store'])->name('admin.service_store');
    Route::delete('/service/{id}', [BackController::class, 'service_destroy'])->name('admin.service_destroy');
    Route::get('/service/{id}', [BackController::class, 'service_show'])->name('admin.service_show');
    Route::get('/service/{id}/edit', [BackController::class, 'service_edit'])->name('admin.service_edit');
    Route::put('service/{id}', [BackController::class, 'service_update'])->name('admin.service_update');

    //Slider CRUD
    Route::get('/slider', [BackController::class, 'slider_index'])->name('admin.slider_index');
    Route::get('/slider/create', [BackController::class, 'slider_create'])->name('admin.slider_create');
    Route::post('/slider', [BackController::class, 'slider_store'])->name('admin.slider_store');
    Route::delete('/slider/{id}', [BackController::class, 'slider_destroy'])->name('admin.slider_destroy');
    Route::get('/slider/{id}/edit', [BackController::class, 'slider_edit'])->name('admin.slider_edit');
    Route::put('slider/{id}', [BackController::class, 'slider_update'])->name('admin.slider_update');


    //Message Functionality
    Route::get('/message', [BackController::class, 'message_index'])->name('admin.message_index');
    Route::get('/message/{id}', [BackController::class, 'message_show'])->name('admin.message_show');
    Route::delete('/message/{id}', [BackController::class, 'message_destroy'])->name('admin.message_destroy');

    Route::get('/visitor', [BackController::class, 'visitor_count'])->name('admin.visitor_count');
    Route::delete('/visitor/{id}', [BackController::class, 'visitor_destroy'])->name('admin.visitor_destroy');
    Route::get('/visitor/today', [BackController::class, 'visitor_today'])->name('admin.visitor_today');
    Route::get('/visitor/trash', [BackController::class, 'visitor_trash'])->name('admin.visitor_trash');
    Route::get('/visitor/{id}/restore', [BackController::class, 'visitor_restore'])->name('admin.visitor_restore');
    Route::get('/visitor/{id}', [BackController::class, 'visitor_show'])->name('admin.visitor_show');
    

});
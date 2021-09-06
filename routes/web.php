<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackController;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class, 'index'])->name('homepage');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('user');




Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function(){
    Route::get('/', [BackController::class, 'admin_home'])->name('admin.home');

    //FAQ CRUD
    Route::get('/faq/create', [BackController::class, 'faq_create'])->name('admin.faq_create');
    Route::get('/faq', [BackController::class, 'faq_index'])->name('admin.faq_index');
    Route::post('/faq', [BackController::class, 'faq_store'])->name('admin.faq_store');
    Route::delete('/faq/{id}', [BackController::class, 'faq_destroy'])->name('admin.faq_destroy');
    Route::get('/faq/{id}', [BackController::class, 'faq_show'])->name('admin.faq_show');
    Route::get('/faq/{id}/edit', [BackController::class, 'faq_edit'])->name('admin.faq_edit');
    Route::put('/faq/{id}', [BackController::class, 'faq_update'])->name('admin.faq_update');

    //Member CRUD
    Route::get('/member/create', [BackController::class, 'member_create'])->name('admin.member_create');

});
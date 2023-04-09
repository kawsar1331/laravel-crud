<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Frontend Routing
Route::get('/', [FrontendController::class, 'index'])->name('frontend.home');
Route::get('/story', [FrontendController::class, 'story'])->name('frontend.story');
Route::get('/menu', [FrontendController::class, 'menu'])->name('frontend.menu');
Route::get('/news', [FrontendController::class, 'news'])->name('frontend.news');
Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::get('/news/news-details', [FrontendController::class, 'newsdetails'])->name('frontend.newsdetails');

// Backend Routing
Route::get('/dashboard', [BackendController::class, 'dashboard'])->name('dashboard');

// Product Routing
Route::controller(ProductController::class)->group(function() {
    Route::get('/add-product', 'addproduct')->name('addproduct');
    Route::post('/add-product/success', 'addedproduct')->name('addedproduct');
    Route::get('/manage-product', 'manageproduct')->name('manageproduct');
    Route::get('/active-status/{id}', 'active')->name('active');
    Route::get('/inactive-status/{id}', 'inactive')->name('inactive');
    Route::get('/delete-product/{id}', 'delete')->name('delete');
    Route::get('//edit-product/{id}', 'edit')->name('edit');
    Route::post('/update-product/{id}', 'updateproduct')->name('updateproduct');

});
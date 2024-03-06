<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\PlansController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FrontendController::class, 'index'])->name('frontend.home');
Route::get('/services', [FrontendController::class, 'service'])->name('frontend.service');
Route::get('/services/{slug}', [FrontendController::class, 'single_service'])->name('frontend.service-detail');

Route::get('/blog', [FrontendController::class, 'blog'])->name('frontend.blog');
Route::get('/blog/{slug}', [FrontendController::class, 'blog_details'])->name('frontend.blog-detail');

Route::get('/about', [FrontendController::class, 'about'])->name('frontend.about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::post('/contact-store', [FrontendController::class, 'contact_store'])->name('post.contact');

Route::post('/admin/order/store',[OrderController::class,'orders'])->name('admin.order.store');

Route::get('/privacy', [FrontendController::class, 'privacy'])->name('frontend.privacy');
Route::get('/terms-condition', [FrontendController::class, 'term'])->name('frontend.term');

//  Admin Related Routes
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.dashboard');
Route::get('/admin/service',[ServicesController::class,'index'])->middleware(['auth', 'verified'])->name('admin.servi');
Route::post('/admin/service-store',[ServicesController::class,'add'])->middleware(['auth', 'verified'])->name('admin.service.add');
Route::get('/admin/Bookings',[BookingController::class,'booking'])->middleware(['auth', 'verified'])->name('admin.bookings');
Route::get('/admin/plans',[PlansController::class,'plans'])->middleware(['auth', 'verified'])->name('admin.plans');
Route::get('/admin/add',[PlansController::class,'add'])->middleware(['auth', 'verified'])->name('admin.add');
Route::post('/admin/store',[PlansController::class,'store'])->middleware(['auth', 'verified'])->name('admin.store');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

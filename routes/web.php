<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Views Start
Route::get('/', function () { return view('website.index'); })->name('home');
Route::get('/admin/index', function () { return view('admin.index'); })->name('admin.index');

Route::get('/cart', function () { return view('website.cart'); })->name('cart');
Route::get('/about', function () { return view('website.about'); })->name('about');
Route::get('/details', function () { return view('website.details'); })->name('details');
Route::get('/contact', function () { return view('website.contact'); })->name('contact');
Route::get('/wishlist', function () { return view('website.wishlist'); })->name('wishlist');
Route::get('/login', function () { return view('auth.login'); })->name('login');
Route::get('/register', function () { return view('website.register'); })->name('register');
Route::get('/shop', function () { return view('website.shop'); })->name('shop');
// Views End

// Route for products (user-related functionality)
Route::get('products', [UserController::class, 'index'])->name('users.index');

// Auth routes for login, registration, etc.
Auth::routes();

// Route for the admin home page
Route::get('/home/admin', [HomeController::class, 'adminIndex'])->name('home.admin');

// Route for the web home page
Route::get('/home', [HomeController::class, 'webIndex'])->name('home.web');



Route::middleware(['auth'])->group(function(){
    Route::get('/account-dashboard',[UserController::class,'account_dashboard'])->name('user.index.dashboard');
});

Route::middleware([AuthAdmin::class])->group(function(){
    Route::get('/admin',[AdminController::class,'index'])->name('admin.index');
});
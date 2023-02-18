<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\userprodController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarttController;
use App\Http\Controllers\ContactController;
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
Route::resource('productss', ProductController::class);


Route::resource('userproducts', userprodController::class);
Route::resource('CartController', CartController::class);




Route::get('/testt', function () {//index routeeee
    return view('testitem');
});

Route::get('/index', function () {//index routeeee
    return view('index');
});
Route::get('/aaaaa', function () {
    return view('cart');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/index', function () {
    return view('index');
});


Route::get('/userrr', function () {
    return view('index');
});


Route::middleware('auth', 'isadmin')->group (function(){
    route::get('/admin',[AdminController::class,'index'])->name('dashboard');
});
 

/*Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin', function () {
    return view('admindashboard');
})->middleware(['auth', 'verified'])->name('admindashboard');
*/
Route::get('/ax', function () {
    return view('contactForm');
});

Route::get('aaa', [userprodController::class, 'index'])->name('products.liste');
Route::get('cart', [CarttController::class, 'cartList'])->name('cart.liste');
Route::post('cart', [CarttController::class, 'addToCart'])->name('cart.storesssss');
Route::post('update-cart', [CarttController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CarttController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CarttController::class, 'clearAllCart'])->name('cart.clear');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// mail route senderr
Route::get('contact-uss', [ContactController::class, 'index']);
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');





<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProductDetailsController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\GeneralSettingsController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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


//Route::get('/{slug?}', [FrontendController::class, 'index'])->name('user-side');



Route::get('/app', function () {
    return view('admin.layouts.app');
});

Auth::routes();

Route::group(['middleware' => ['auth', 'isAdmin']], function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
});

Route::get('/', [FrontendController::class, 'index'])->name('user-side');
Route::get('/load-more-products', [FrontendController::class, 'loadMoreProducts'])->name('load-more-products');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contactus', [ContactUsController::class, 'contactus'])->name('contactus');
Route::post('/contactus/insert', [ContactUsController::class, 'store'])->name('contactus.insert');
Route::get('/contactus/list', [ContactUsController::class, 'index'])->name('contactus.index');

Route::delete('contactus/delete-multiple', [ContactUsController::class, 'deleteMultiple'])->name('contactus.deleteMultiple');

//Route::delete('contactus/delete-multiple', function () {
//    return "hii";
//})->name('contactus.deleteMultiple');


Route::get('contactus/delete/{id}',[ContactUsController::class,'destroy'])->name('contactus-delete');

Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/product-detailsPage', [ProductDetailsController::class, 'index'])->name('product-detailsPage');

Route::get('/search', [ShopController::class, 'search'])->name('search');

Route::get('aboutus', [AboutController::class, 'create'])->name('aboutus');
Route::get('product-details/{id}', [ProductDetailsController::class, 'ProductDetails'])->name('product-details');
Route::get('cart', [CartController::class, 'create'])->name('cart');
Route::get('checkout', [CheckoutController::class, 'create'])->name('checkout');

Route::prefix('admin')->group(function () {
    Route::resource('category', CategoryController::class);
    Route::get('category-status/{id}', [CategoryController::class, 'category_update_status'])->name('category-status');
    Route::resource('products', ProductController::class);

    Route::get('/products/search', [ProductController::class, 'search'])->name('search');
    
    Route::get('/products/category/{category_id}', [FrontendController::class, 'index'])->name('products.category');
    Route::get('product-status/{id}', [ProductController::class, 'product_update_status'])->name('product-status');
    Route::resource('general-settings', GeneralSettingsController::class);
    Route::post('user_change_password', [UserController::class, 'UpdatePassword'])->name('user_change_password');
    Route::get('profile_update', [ProfileController::class, 'profile'])->name('profile_update');
    Route::post('user_update_profile', [UserController::class, 'update_profile'])->name('user_update_profile');
});


<?php

use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ContactUsComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\NewsComponent;
use App\Http\Livewire\ProducerComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use Illuminate\Support\Facades\Route;

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


Route::get('/', HomeComponent::class);
Route::get('/cart', CartComponent::class)->name('product.cart');
Route::get('/shop', ShopComponent::class);
Route::get('/checkout', CheckoutComponent::class)->name('checkout');
Route::get('/about', AboutComponent::class);
Route::get('/contact-us', ContactUsComponent::class);
Route::get('/news', NewsComponent::class);
Route::get('/shop/product/{slug}', DetailsComponent::class)->name('product.details');
Route::get('/shop/product-category/{category_slug}', CategoryComponent::class)->name('product.category');
Route::get('/shop/product-producer/{producer_slug}', ProducerComponent::class)->name('product.producer');


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });


// 1 - For Users:
Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});

// 2 - For Admins:
Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    
});
<?php

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
//
Route::get('/home', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', \App\Http\Livewire\HomeComponent::class)->name('home');
//
Route::get('/service', \App\Http\Livewire\ServiceComponent::class)->name('service');
Route::get('/service/{slug}', \App\Http\Livewire\DetailServiceComponent::class)->name('service.detail');
Route::get('/shop', \App\Http\Livewire\ShopComponent::class)->name('shop');
Route::get('/shop/{slug}', \App\Http\Livewire\DetailsComponent::class)->name('product.detail');

Route::get('/cart', \App\Http\Livewire\CartComponent::class)->name('product.cart');
//Route::get('/checkout', \App\Http\Livewire\CheckoutComponent::class);
//
//Route::get('/product-category/{slug}', \App\Http\Livewire\ProductCategoryComponent::class)->name('product.category');
//Route::get('/shop/{slug}', \App\Http\Livewire\DetailsComponent::class)->name('product.detail');
//Route::get('/search', \App\Http\Livewire\SearchComponent::class)->name('product.search');
//
//// For user or customer
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/admin/dashboard', \App\Http\Livewire\Admin\AdminDashboardComponent::class)->name('admin.dashboard');
//    Route::get('/user/dashboard', \App\Http\Livewire\User\UserDashboardComponent::class)->name('user.dashboard');

});


// For admin or customer
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {

    Route::prefix('/admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
//        Route::get('/pages', function () {
//            return view('admin.pages');
//        })->name('pages');
        Route::get('/categories', function () {
            return view('admin.categories');
        })->name('admin.categories');

        Route::get('/products', function () {
            return view('admin.products');
        })->name('admin.products');

        Route::get('/category-services', function () {
            return view('admin.category-services');
        })->name('admin.categories-services');

        Route::get('/services', function () {
            return view('admin.services');
        })->name('admin.services');

        Route::get('/category-new', function () {
            return view('admin.category-new');
        })->name('admin.categories-new');

        Route::get('/blogs', function () {
            return view('admin.blog');
        })->name('admin.blogs');
        Route::get('/blogs/add', function () {
            return view('admin.add-blog');
        })->name('admin.blogs.add');
        Route::get('/blogs/edit/{slug}', function ($slug) {
            return view('admin.edit-blog', compact('slug'));
        })->name('admin.blogs.edit');

        Route::get('/sliders', function () {
            return view('admin.sliders');
        })->name('admin.sliders');

        Route::get('/users', function () {
            return view('admin.users');
        })->name('admin.users');

        Route::get('/orders', function () {
            return view('admin.orders');
        })->name('admin.orders');

        Route::get('/comments', function () {
            return view('admin.comments');
        })->name('admin.comments');
    });

});

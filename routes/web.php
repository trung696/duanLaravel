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

Route::group(['middleware' => 'auth'], function () {
//    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/inbox', [\App\Http\Controllers\InboxController::class, 'index'])->name('inbox');
    Route::get('/inbox/{id}', [\App\Http\Controllers\InboxController::class, 'show'])->name('inbox.show');
});

//Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');
//Route::get('/test', [\App\Http\Controllers\HighchartController::class, 'handleChart']);


Route::get('/', \App\Http\Livewire\HomeComponent::class)->name('home');
//
Route::get('/service', \App\Http\Livewire\ServiceComponent::class)->name('service');
Route::get('/service/{slug}', \App\Http\Livewire\DetailServiceComponent::class)->name('service.detail');
Route::get('/shop', \App\Http\Livewire\ShopComponent::class)->name('shop');
Route::get('/shop/{slug}', \App\Http\Livewire\DetailsComponent::class)->name('product.detail');

Route::get('/cart', \App\Http\Livewire\CartComponent::class)->name('product.cart');
Route::get('/checkout', \App\Http\Livewire\CheckoutComponent::class)->name('checkout');
Route::get('/checkout/order-received/{code}', \App\Http\Livewire\CheckoutOrderReceivedComponent::class)->name('checkout.received');

Route::get('/blogs', \App\Http\Livewire\BlogComponent::class)->name('blogs');
Route::get('/blogs/{slug}', \App\Http\Livewire\BlogDetailComponent::class)->name('blog.detail');

Route::get('/rewards', \App\Http\Livewire\RewardComponent::class)->name('reward');

Route::get('/about', \App\Http\Livewire\About::class)->name('about');
Route::get('/contact', \App\Http\Livewire\ContactForm::class)->name('contact');

//
//Route::get('/product-category/{slug}', \App\Http\Livewire\ProductCategoryComponent::class)->name('product.category');
//Route::get('/shop/{slug}', \App\Http\Livewire\DetailsComponent::class)->name('product.detail');
//Route::get('/search', \App\Http\Livewire\SearchComponent::class)->name('product.search');
//
//// For user or customer
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
//    Route::get('/dashboard', \App\Http\Livewire\Admin\AdminDashboardComponent::class)->name('admin.dashboard');
    Route::prefix('/my-account')->group(function () {
        Route::get('/', \App\Http\Livewire\User\UserDashboardComponent::class)->name('info');
        Route::get('/orders', \App\Http\Livewire\User\OrderComponent::class)->name('orders');
        Route::get('/orders/{code}', \App\Http\Livewire\User\OrderDetailComponent::class)->name('orders.detail');
        Route::middleware(['authadmin'])->get('/appointment', \App\Http\Livewire\User\AppointmentComponent::class)->name('appointment');

    });
});


// For admin or customer
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {

    Route::prefix('/admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        Route::get('/categories', function () {
            return view('admin.categories');
        })->name('admin.categories');

        Route::get('/products', function () {
            return view('admin.products');
        })->name('admin.products');
        Route::get('/products/add', function () {
            return view('admin.add-product');
        })->name('admin.products.add');
        Route::get('/products/edit/{slug}', function ($slug) {
            return view('admin.edit-product', compact('slug'));
        })->name('admin.product.edit');

        Route::get('/category-services', function () {
            return view('admin.category-services');
        })->name('admin.categories-services');

        Route::get('/services', function () {
            return view('admin.services');
        })->name('admin.services');
        Route::get('/services/add', function () {
            return view('admin.add-services');
        })->name('admin.services.add');
        Route::get('/services/edit/{slug}', function ($slug) {
            return view('admin.edit-service', compact('slug'));
        })->name('admin.services.edit');

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
        Route::get('/orders-product', function () {
            return view('admin.orders-product');
        })->name('admin.orders-product');

        Route::get('/settings', function () {
            return view('admin.settings');
        })->name('admin.settings');

        Route::get('/comments', function () {
            return view('admin.comments');
        })->name('admin.comments');

        Route::get('/contacts', function () {
            return view('admin.contacts');
        })->name('admin.contacts');
    });

});

<?php

use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\CartComponent;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DeliverJobController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
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

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/signup', function () {
    return view('signup');
});

Route::post('/login', [UserController::class, 'login'])->name('user.login');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/signup', [UserController::class, 'register'])->name('user.signup');




Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/', [HomeController::class, 'index']);

    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::post('/products', [ProductController::class, 'store'])->name('products.add');
    Route::get('/products/add', [ProductController::class, 'add_product']);
    Route::get('/products/delete/{id}', [ProductController::class, 'delete_product']);
    Route::get('/products/update/{id}', [ProductController::class, 'show_product_edit']);
    Route::post('/products/edit', [ProductController::class, 'edit_product'])->name('products.edit');


    Route::get('/categories', [CategoryController::class, 'index']);
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.add');
    Route::get('/categories/add_categories', [CategoryController::class, 'category_add']);

    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/register_admins', [UserController::class, 'admin_add']);
    Route::post('/users/add/admin', [UserController::class, 'register_admin'])->name('admin.add');

    Route::get('/users/authority', [UserController::class, 'role_new'])->name('authority.render');
    Route::post('/authority', [UserController::class, 'update_role'])->name('role.update');
    Route::post('/users/search', [UserController::class, 'show'])->name('user.search');

    Route::put('/users/update', [UserController::class, 'update'])->name('user.update');

    Route::get('/shop', [ShopController::class, 'shop_show']);
    Route::get('/shop/filter/{category_id}', [ShopController::class, 'filter_by_category']);

    Route::get('/product/details/{id}', [ShopController::class, 'product_details']);

    Route::get('/add-to-cart/{id}', [CartComponent::class, 'addToCart']);
    Route::delete('/remove-from-cart', [CartComponent::class, 'removeFromCart']);
    Route::put('/update-cart', [CartComponent::class, 'updateCart']);
    Route::get('/clear-cart', [CartComponent::class, 'clearCart']);

    Route::get('/orders', [OrderController::class, 'orders_show']);
    Route::get('/orders/delete/{id}', [OrderController::class, 'delete_order']);
    Route::get('/orders/update/{id}', [OrderController::class, 'show_order_edit']);
    Route::post('/orders/edit', [OrderController::class, 'edit_order'])->name('orders.edit');
    Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('order.checkout');

    Route::get('/jobs', [DeliverJobController::class, 'jobs_show']);
    Route::get('/jobs/add_drivers', [UserController::class, 'show_register_driver']);
    Route::post('/users/add_drivers', [UserController::class, 'register_driver'])->name('users.add_drivers');

    Route::get('/jobs/drivers', [UserController::class, 'show_drivers']);
    Route::get('/drivers/delete/{id}', [UserController::class, 'delete_driver']);
    Route::post('/jobs/assign', [DeliverJobController::class, 'job_assign'])->name('job.assign');

    Route::get('/analytics',[AnalyticsController::class,'show_analytics'])->name('analytics');

    Route::get('/thanks', function () {
        return view('thankyou');
    });

    Route::get('/cart', function () {
        return view('cart');
    });

    Route::get('/checkout', function () {
        return view('checkout');
    });


    Route::get('/account', function () {
        return view('accountSettings');
    });   
});

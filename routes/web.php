<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/product/details', function () {
    return view('detail');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/thanks', function () {
    return view('thankyou');
});

Route::post('/login', [UserController::class, 'login'])->name('user.login');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/signup', [UserController::class, 'register'])->name('user.signup');



Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/', [HomeController::class, 'index']);

    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::post('/products', [ProductController::class, 'store'])->name('products.add');
    Route::get('/products/add', [ProductController::class, 'add_product']);

    Route::get('/categories', [CategoryController::class, 'index']);
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.add');
    Route::get('/categories/add_categories', [CategoryController::class, 'category_add']);

    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/register_admins', [UserController::class, 'admin_add']);
    Route::post('/users/add/admin', [UserController::class, 'register_admin'])->name('admin.add');

    Route::get('/users/authority', [UserController::class, 'role_new'])->name('authority.render');
    Route::post('/authority', [UserController::class, 'update_role'])->name('role.update');
    Route::post('/users/search', [UserController::class, 'show'])->name('user.search');


    Route::get('/analytics', function () {
        return view('analytics');
    });

    Route::get('/orders', function () {
        return view('orders.orders');
    });

    Route::get('/jobs', function () {
        return view('shipping.jobs');
    });

    Route::get('/jobs/drivers', function () {
        return view('shipping.drivers');
    });

    Route::get('/jobs/add_drivers', function () {
        return view('shipping.add_drivers');
    });
});

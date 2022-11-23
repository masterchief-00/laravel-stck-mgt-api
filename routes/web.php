<?php

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

Route::post('/login', [UserController::class, 'login'])->name('user.login');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/signup', function () {
    return view('signup');
});


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/', function () {
        return view('home');
    });

    Route::get('/analytics', function () {
        return view('analytics');
    });

    Route::get('/products', function () {
        return view('products.products');
    });

    Route::get('/products/add', function () {
        return view('products.add_products');
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

    Route::get('/categories', function () {
        return view('categories.categories');
    });

    Route::get('/categories/add_categories', function () {
        return view('categories.add_categories');
    });

    Route::get('/users', function () {
        return view('users.users');
    });

    Route::get('/users/register_admins', function () {
        return view('users.add_admin');
    });

    Route::get('/users/authority', function () {
        return view('users.authority');
    });
});

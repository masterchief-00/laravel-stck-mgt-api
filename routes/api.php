<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DeliverJobController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/** USER ROUTES */
Route::post('/signup', [UserController::class, 'register']);
Route::post('/admin_signup', [UserController::class, 'register_admin']);
Route::post('/login', [UserController::class, 'login']);


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [UserController::class, 'logout']);
    Route::post('/admin/update_role/{email}', [UserController::class, 'update_role']);

    /** CATEGORIES ROUTES */
    Route::get('/categories', [CategoryController::class, 'index']);
    Route::post('/categories', [CategoryController::class, 'store']);
    Route::put('/categories/{id}', [CategoryController::class, 'update']);
    Route::get('/categories/{id}', [CategoryController::class, 'show']);
    Route::delete('/categories/{id}', [CategoryController::class, 'destroy']);

    /** PRODUCT ROUTES */
    Route::get('/products', [ProductController::class, 'index']);
    Route::post('/products', [ProductController::class, 'store']);
    Route::put('/products/{id}', [ProductController::class, 'update']);
    Route::get('/products/{id}', [ProductController::class, 'show']);
    Route::delete('/products/{id}', [ProductController::class, 'destroy']);

    /** ORDERS ROUTES */
    Route::get('/orders', [OrderController::class, 'index']);
    Route::post('/orders', [OrderController::class, 'store']);
    Route::put('/orders/status/{id}', [OrderController::class, 'update_status']);
    Route::put('/orders/{id}', [OrderController::class, 'update']);
    Route::get('/orders/{id}', [OrderController::class, 'show']);
    Route::delete('/orders/{id}', [OrderController::class, 'destroy']);

    /** ORDER ITEMS ROUTES */
    Route::get('/orderItems/find/{id}', [OrderItemController::class, 'index']);
    Route::post('/orderItems', [OrderItemController::class, 'store']);
    Route::put('/orderItems/{id}', [OrderItemController::class, 'update']);
    Route::get('/orderItems/{id}', [OrderItemController::class, 'show']);
    Route::delete('/orderItems/{id}', [OrderItemController::class, 'destroy']);

    /** DELIVERY JOB ROUTES */
    Route::get('/deliverJobs', [DeliverJobController::class, 'index']);
    Route::put('/deliverJobs/{id}', [DeliverJobController::class, 'update']);
    Route::put('deliverJobs/assign/{id}', [DeliverJobController::class, 'assign_driver']);
    Route::get('/deliverJobs/{id}', [DeliverJobController::class, 'show']);
    Route::delete('/deliverJobs/{id}', [DeliverJobController::class, 'destroy']);
});

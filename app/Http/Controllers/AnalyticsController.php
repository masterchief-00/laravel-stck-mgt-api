<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AnalyticsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:ADM|DLV|WHS']);
    }
    public function show_analytics(Request $request)
    {
        $users = User::where('user_type', 'USR')->get();
        $user_count = $users->count();

        $driver = User::where('user_type', 'DRV')->get();
        $driver_count = $driver->count();

        $products = Product::all();
        $product_count = $products->count();

        $orders = Order::all();
        $order_count = $orders->count();

        $orders_approved = Order::where('status', 'APPROVED')->get();
        $orders_approved_Count = $orders_approved->count();

        $categories = Category::all();
        $category_count = $categories->count();

        return view('analytics', compact('user_count', 'product_count', 'order_count', 'driver_count', 'category_count', 'orders_approved_Count'));
    }
}

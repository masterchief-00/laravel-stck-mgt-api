<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop_show()
    {
        $categories = Category::all();
        $selected_categories = 'All categories';
        $products = Product::all();

        return view('shop', compact('categories', 'selected_categories', 'products'));
    }

    public function filter_by_category($id)
    {
        $categories = Category::all();

        if ($id === 'all') 
        {
            $products = Product::all();
            $selected_categories = 'All categories';
        } else {
            $products = Product::where('category_id', $id)->get();
            $category = Category::find($id);
            $selected_categories = $category->name;
        }


        return view('shop', compact('products', 'selected_categories', 'categories'));
    }
    public function product_details($id)
    {
        $product=Product::find($id);
        $related_products=Product::where('category_id',$product->category_id)->get();

        return view('detail',compact('product','related_products'));
    }
}

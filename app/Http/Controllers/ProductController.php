<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware(['role:ADM|WHS|USR']);
    }

    /**render add products page */
    public function add_product(Request $request)
    {
        $categories = Category::all();

        return view('products.add_products', compact('categories'));
    }
    public function show_product_edit(Request $request, $id)
    {
        $product = Product::find($id);
        $categories = Category::all();

        return view('products.update_products', compact('product', 'categories'));
    }

    /**list all products */
    public function index(Request $request)
    {
        $is_api_request =  $request->route()->getPrefix() === 'api';

        if ($is_api_request) {
            $products = Product::all();
            return [
                'products' => $products
            ];
        } else {
            $products = Product::all();
            return view('products.products', compact('products'));
        }
    }

    /**create new product */
    public function store(Request $request)
    {

        $fields = $request->validate([
            'name' => 'required|string',
            'SKU' => 'required|unique:products,SKU',
            'category_id' => 'required',
            'quantity' => 'required',
            'exp_date' => 'required',
            'arriv_date' => 'required',
            'unit_price' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        $is_api_request =  $request->route()->getPrefix() === 'api';


        if ($request->user()->can('product:register')) {
            $product = new Product();
            $product->name = $fields['name'];
            $product->SKU = $fields['SKU'];
            $product->category_id = $fields['category_id'];
            $product->quantity = $fields['quantity'];
            $product->exp_date = $fields['exp_date'];
            $product->arriv_date = $fields['arriv_date'];
            $product->unit_price = $fields['unit_price'];

            $image__url = Cloudinary::upload($fields['image']->getRealPath())->getSecurePath();

            $product->image = $image__url;
            $product->save();

            if ($is_api_request) {
                return [
                    'message' => 'product added',
                    'product' => $product
                ];
            } else {
                return redirect()->back()->with('message', 'Product added!');
            }
        } else {
            if ($is_api_request) {
                return ['message' => 'unauthorised for this action'];
            } else {
                return redirect()->back()->with('message', 'Unauthorised for that action');
            }
        }
    }

    /** update product */
    public function update(Request $request, $id)
    {
        $fields = $request->validate([
            'name' => 'required|string',
            'SKU' => 'required',
            'category_id' => 'required',
            'quantity' => 'required',
            'exp_date' => 'required',
            'arriv_date' => 'required',
            'unit_price' => 'required',
        ]);
        if ($request->user()->can('product:update')) {
            $product = Product::find($id);
            $product->name = $fields['name'];
            $product->SKU = $fields['SKU'];
            $product->category_id = $fields['category_id'];
            $product->quantity = $fields['quantity'];
            $product->exp_date = $fields['exp_date'];
            $product->arriv_date = $fields['arriv_date'];
            $product->unit_price = $fields['unit_price'];
            $product->update();

            return [
                'message' => 'product updated',
                'product' => $product
            ];
        } else {
            return ['message' => 'unauthorised for this action'];
        }
    }

    /** search product by id */
    public function show($id)
    {
        return Product::find($id);
    }

    /** delete product ___API*/
    public function destroy($id)
    {
        $user = User::find(auth()->user()->id);
        if ($user->can('product:delete')) {
            $product = Product::find($id);
            $response = $product->delete();
            if ($response == 1) {
                return [
                    'message' => 'product deleted',
                ];
            } else {
                return [
                    'message' => 'not deleted',
                ];
            }
        } else {
            return ['message' => 'unauthorised for this action'];
        }
    }
    /**delete product __WEB */
    public function delete_product(Request $request, $id)
    {
        if ($request->user()->can('product:delete')) {
            $product = Product::find($id);
            $response = $product->delete();
            if ($response == 1) {
                return redirect()->back()->with('message', 'product deleted');
            }
        } else {
            return redirect()->back()->with('message', 'Unauthorised for that action');
        }
    }
    /**edit product __WEB */
    public function edit_product(Request $request)
    {
        $id = $request->id;
        $fields = $request->validate([
            'name' => 'required|string',
            'SKU' => 'required',
            'category_id' => 'required',
            'quantity' => 'required',
            'exp_date' => 'required',
            'arriv_date' => 'required',
            'unit_price' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg|nullable'
        ]);
        if ($request->user()->can('product:update')) {

            $product = Product::find($id);
            $product->name = $fields['name'];
            $product->SKU = $fields['SKU'];
            $product->category_id = $fields['category_id'];
            $product->quantity = $fields['quantity'];
            $product->exp_date = $fields['exp_date'];
            $product->arriv_date = $fields['arriv_date'];
            $product->unit_price = $fields['unit_price'];

            if (isset($fields['image']) && $fields['image'] != null) {
                $image__url = Cloudinary::upload($fields['image']->getRealPath())->getSecurePath();

                $product->image = $image__url;
            }

            $product->update();

            return redirect()->back()->with('message', 'product updated');
        }
    }
}

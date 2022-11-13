<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware(['role:ADM|WHS|USR']);
    }

    /**list all products */
    public function index()
    {
        return Product::all();
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
            'unit_price' => 'required'
        ]);
        if ($request->user()->can('product:register')) {
            $product = Product::create([
                'name' => $fields['name'],
                'SKU' => $fields['SKU'],
                'category_id' => $fields['category_id'],
                'quantity' => $fields['quantity'],
                'exp_date' => $fields['exp_date'],
                'arriv_date' => $fields['arriv_date'],
                'unit_price' => $fields['unit_price'],
            ]);

            return [
                'message' => 'product added',
                'product' => $product
            ];
        } else {
            return ['message' => 'unauthorised for this action'];
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
            'unit_price' => 'required'
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

    /** delete product */
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
}

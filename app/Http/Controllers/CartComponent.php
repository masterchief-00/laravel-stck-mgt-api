<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartComponent extends Controller
{
    public function addToCart($id)
    {
        $product = Product::find($id);
        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if (!$cart) {
            $cart = [
                $id => [
                    'name' => $product->name,
                    'quantity' => 1,
                    'category_id' => $product->category_id,
                    'image' => $product->image,
                    'unit_price' => $product->unit_price,
                    'max_qty' => $product->quantity,
                    'total' => $product->unit_price
                ]
            ];
            session()->put('cart', $cart);
            session()->save();

            return back()->with('success', 'Product added to cart');
        }

        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            $cart[$id]['total'] = $cart[$id]['unit_price'] * $cart[$id]['quantity'];
            session()->put('cart', $cart);
            session()->save();

            return back()->with('success', 'Product added to cart');
        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            'name' => $product->name,
            'quantity' => 1,
            'category_id' => $product->category_id,
            'image' => $product->image,
            'unit_price' => $product->unit_price,
            'max_qty' => $product->quantity,
            'total' => $product->unit_price
        ];

        session()->put('cart', $cart);
        session()->save();

        return back()->with('success', 'Product added to cart');
    }

    public function removeFromCart(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');

            if (isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }
        }
    }

    public function updateCart(Request $request)
    {

        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            $cart[$request->id]['total'] = $cart[$request->id]['unit_price'] * $cart[$request->id]['quantity'];

            session()->put('cart', $cart);
            session()->save();

            session()->flash('success', 'Cart updated successfully');
        }
    }
    public function clearCart()
    {
        session()->put('cart', null);
        session()->save();

        session()->flash('success', 'Cart cleared');
        return back();
    }
}

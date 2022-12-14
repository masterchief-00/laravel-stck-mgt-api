<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        $is_api_request =  $request->route()->getPrefix() === 'api';

        if (!$is_api_request) {
            $fields = $request->validate([
                'names' => 'required|string',
                'province' => 'required|string',
                'district' => 'required|string',
                'phone' => 'required',
                'email' => 'required|email',
                'status' => 'string|nullable',
                'user_id' => 'nullable',
                'total' => 'nullable'
            ]);

            if ($request->user()->can('order:register')) {
                $order = Order::create([
                    'names' => $fields['names'],
                    'province' => $fields['province'],
                    'district' => $fields['district'],
                    'phone' => $fields['phone'],
                    'email' => $fields['email'],
                    'user_id' => $request->user()->id,
                    'status' => 'PENDING',
                    'total' => $fields['total']
                ]);

                foreach (session('cart') as $id => $details) {
                    $orderItem = new OrderItem();
                    $orderItem->product_id = $id;
                    $orderItem->order_id = $order->id;
                    $orderItem->quantity = $details['quantity'];
                    $orderItem->total_price = $details['total'];

                    $orderItem->product->quantity -= $details['quantity'];
                    $orderItem->product->update();
                    $orderItem->save();
                }

                session()->put('cart', null);
                session()->save();

                return redirect('/thanks')->with('message', 'Order created!');
            } else {
                return ['message' => 'unauthorised for this action'];
            }
        } else {
            Log::info(json_decode($request->cartItems));

            $fields = $request->validate([
                'cartItems' => 'required',
                'order_id' => 'required'
            ]);

            $cartItems = json_decode($fields['cartItems'], true);

            foreach ($cartItems as $id => $item) {
                $orderItem = new OrderItem();
                $orderItem->product_id = $item['id'];
                $orderItem->order_id = $fields['order_id'];
                $orderItem->quantity = $item['picks'];
                $orderItem->total_price = floatval($item['picks']) * floatval($item['unit_price']);

                $orderItem->product->quantity -= $item['picks'];
                $orderItem->product->update();
                $orderItem->save();
            }

            return [
                'message' => 'cart items added to order'
            ];
        }
    }
}

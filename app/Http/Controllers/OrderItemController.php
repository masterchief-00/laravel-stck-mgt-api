<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:ADM|WHS']);
    }

    /**list all orderItems */
    public function index()
    {
        return OrderItem::all();
    }

    /**create new orderItem */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'product_id' => 'required',
            'order_id' => 'required',
            'quantity' => 'required',
            'total_price' => 'nullable',
        ]);

        if ($request->user()->can('orderItem:register')) {
            $orderItem = new OrderItem();

            $orderItem->product_id = $fields['product_id'];
            $orderItem->order_id =  $fields['order_id'];
            $orderItem->quantity =  $fields['quantity'];

            $avaialable_qty = intval($orderItem->product->quantity);
            $requested_qty = intval($fields['quantity']);
            /** check if the client's asked quantity is available */
            if ($avaialable_qty > $requested_qty) {
                $unit_price = $orderItem->product->unit_price;

                $total_price = floatval($fields['quantity']) * $unit_price;
                $orderItem->total_price =  $total_price;
                $orderItem->product->quantity -= $requested_qty;

                $orderItem->product->update();
                $orderItem->save();

                $allItems = OrderItem::where('order_id', $orderItem->order_id)->get();

                $sum = 0;
                foreach ($allItems as $item) {
                    $sum = $sum + $item->total_price;
                }

                $order = Order::find($orderItem->order_id);
                $order->total = $sum;

                $order->update();

                return [
                    'message' => 'order item created',
                    'order item' => $orderItem,
                    'order' => $order
                ];
            } else {
                return [
                    'message' => 'unavailable quantity',
                ];
            }
        } else {
            return ['message' => 'unauthorised for this action'];
        }
    }

    /** update order */
    public function update(Request $request, $id)
    {
        $fields = $request->validate([
            'product_id' => 'required',
            'order_id' => 'required',
            'quantity' => 'required',
            'total_price' => 'required',
        ]);
        if ($request->user()->can('orderItem:update')) {
            $orderItem = OrderItem::find($id);
            $orderItem->product_id = $fields['product_id'];
            $orderItem->order_id = $fields['order_id'];
            $orderItem->quantity = $fields['quantity'];
            $orderItem->total_price = $fields['total_price'];
            $orderItem->update();

            return [
                'message' => 'order updated',
                'product' => $orderItem
            ];
        } else {
            return ['message' => 'unauthorised for this action'];
        }
    }

    /** search order by id */
    public function show($id)
    {
        return OrderItem::find($id);
    }

    /** delete order */
    public function destroy($id)
    {
        $user = User::find(auth()->user()->id);

        if ($user->can('orderItem:delete')) {
            $orderItem = OrderItem::find($id);
            $response = $orderItem->delete();
            if ($response == 1) {
                return [
                    'message' => 'order item deleted',
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

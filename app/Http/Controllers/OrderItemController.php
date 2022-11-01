<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
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

        $orderItem = new OrderItem();
        $orderItem->product_id = $fields['product_id'];
        $orderItem->order_id =  $fields['order_id'];
        $orderItem->quantity =  $fields['quantity'];

        $unit_price = $orderItem->product->unit_price;

        $total_price = floatval($fields['quantity']) * $unit_price;
        $orderItem->total_price =  $total_price;

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
            'grand total' => $order
        ];
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
    }

    /** search order by id */
    public function show($id)
    {
        return OrderItem::find($id);
    }

    /** delete order */
    public function destroy($id)
    {
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
    }
}

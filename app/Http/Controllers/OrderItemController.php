<?php

namespace App\Http\Controllers;

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
            'total_price' => 'required',
        ]);
        $orderItem = OrderItem::create([
            'product_id' => $fields['product_id'],
            'order_id' => $fields['order_id'],
            'quantity' => $fields['quantity'],
            'total_price' => $fields['total_price'],
        ]);

        return [
            'message' => 'order item created',
            'product' => $orderItem
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

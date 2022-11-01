<?php

namespace App\Http\Controllers;

use App\Models\DeliverJob;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**list all orders */
    public function index()
    {
        return Order::all();
    }

    /**create new order */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'names' => 'required|string',
            'province' => 'required|string',
            'district' => 'required|string',
            'phone' => 'required',
            'email' => 'required|email',
            'status' => 'required|string',
            'user_id' => 'required',
            'total' => 'nullable'
        ]);
        $order = Order::create([
            'names' => $fields['names'],
            'province' => $fields['province'],
            'district' => $fields['district'],
            'phone' => $fields['phone'],
            'email' => $fields['email'],
            'user_id' => $fields['user_id'],
            'status' => $fields['status'],
            'total' => $fields['total']
        ]);

        return [
            'message' => 'order created',
            'product' => $order
        ];
    }

    /** update order */
    public function update(Request $request, $id)
    {
        $fields = $request->validate([
            'names' => 'required|string',
            'province' => 'required|string',
            'district' => 'required|string',
            'phone' => 'required',
            'email' => 'required|email',
            'status' => 'required|string',
            'user_id' => 'required',
            'total' => 'required'
        ]);

        $order = Order::find($id);
        $order->names = $fields['names'];
        $order->province = $fields['province'];
        $order->district = $fields['district'];
        $order->phone = $fields['phone'];
        $order->email = $fields['email'];
        $order->status = $fields['status'];
        $order->user_id = $fields['user_id'];
        $order->total = $fields['total'];
        $order->update();

        if ($order->status == 'APPROVED') {
            $deliverJob = DeliverJob::create([
                'order_id' => $order->id,
            ]);
        }

        return [
            'message' => 'order updated',
            'product' => $order,
            'deliver job' => $deliverJob
        ];
    }

    /** search order by id */
    public function show($id)
    {
        return Order::find($id);
    }

    /** delete order */
    public function destroy($id)
    {
        $order = Order::find($id);
        $response = $order->delete();
        if ($response == 1) {
            return [
                'message' => 'order deleted',
            ];
        } else {
            return [
                'message' => 'not deleted',
            ];
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\DeliverJob;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:ADM|WHS']);
    }
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
            'status' => 'string|nullable',
            'user_id' => 'required',
            'total' => 'nullable'
        ]);

        if ($request->user()->can('order:register')) {
            $order = Order::create([
                'names' => $fields['names'],
                'province' => $fields['province'],
                'district' => $fields['district'],
                'phone' => $fields['phone'],
                'email' => $fields['email'],
                'user_id' => $fields['user_id'],
                'status' => 'PENDING',
                'total' => $fields['total']
            ]);

            return [
                'message' => 'order created',
                'order' => $order
            ];
        } else {
            return ['message' => 'unauthorised for this action'];
        }
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
            'status' => 'string|nullable',
            'user_id' => 'required',
            'total' => 'required'
        ]);
        if ($request->user()->can('order:update')) {
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
                'order' => $order,
                'deliver job' => $deliverJob
            ];
        } else {
            return ['message' => 'unauthorised for this action'];
        }
    }

    /**update order status */
    public function update_status(Request $request, $id)
    {
        $fields = $request->validate([
            'status' => 'required|string',
            'deadline' => 'nullable'
        ]);
        if ($request->user()->can('order:update')) {
            $order = Order::find($id);
            $deliverJob = null;
            if ($order) {
                $order->status = $fields['status'];
                if ($fields['status'] == 'APPROVED') {
                    $deliverJob = DeliverJob::create([
                        'order_id' => $order->id,
                        'deadline' => 'none',
                        'assigned_driver' => null
                    ]);
                    return [
                        'message' => 'order approved',
                        'order' => $order,
                        'deliver job' => $deliverJob
                    ];
                } else if ($fields['status'] == 'DELIVERED') {
                    $deliverJob = DeliverJob::where('order_id', $order->id)->first();
                    $deliverJob->delete();

                    return [
                        'message' => 'order delivered & job deleted',
                    ];
                }
            } else {
                return [
                    'message' => 'order not found',
                    'order' => $order
                ];
            }
        } else {
            return [
                'message' => 'unauthorised for this action',
            ];
        }
    }
    /** search order by id */
    public function show($id)
    {
        return Order::find($id);
    }

    /** delete order */
    public function destroy($id)
    {
        $user = User::find(auth()->user()->id);

        if ($user->can('order:delete')) {
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
        } else {
            return ['message' => 'unauthorised for this action'];
        }
    }
}

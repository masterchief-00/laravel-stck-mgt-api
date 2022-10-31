<?php

namespace App\Http\Controllers;

use App\Models\DeliverJob;
use Illuminate\Http\Request;

class DeliverJobController extends Controller
{
    /**list all orderItems */
    public function index()
    {
        return DeliverJob::all();
    }

    /**create new orderItem */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'assigned_driver' => 'required',
            'order_id' => 'required',
            'deadline' => 'required',
        ]);
        $deliverJob = DeliverJob::create([
            'assigned_driver' => $fields['assigned_driver'],
            'order_id' => $fields['order_id'],
            'deadline' => $fields['deadline'],
        ]);

        return [
            'message' => 'job created',
            'product' => $deliverJob
        ];
    }

    /** update order */
    public function update(Request $request, $id)
    {
        $fields = $request->validate([
            'assigned_driver' => 'required',
            'order_id' => 'required',
            'deadline' => 'required',
        ]);

        $deliverJob = DeliverJob::find($id);
        $deliverJob->assigned_driver = $fields['assigned_driver'];
        $deliverJob->order_id = $fields['order_id'];
        $deliverJob->deadline = $fields['deadline'];
        $deliverJob->update();

        return [
            'message' => 'job updated',
            'product' => $deliverJob
        ];
    }

    /** search order by id */
    public function show($id)
    {
        return DeliverJob::find($id);
    }

    /** delete order */
    public function destroy($id)
    {
        $deliverJob = DeliverJob::find($id);
        $response = $deliverJob->delete();
        if ($response == 1) {
            return [
                'message' => 'job deleted',
            ];
        } else {
            return [
                'message' => 'not deleted',
            ];
        }
    }
}

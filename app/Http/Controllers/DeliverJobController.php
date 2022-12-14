<?php

namespace App\Http\Controllers;

use App\Models\DeliverJob;
use App\Models\User;
use Illuminate\Http\Request;

class DeliverJobController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:ADM|DLV|DRV']);
    }
    /**list all orderItems */
    public function index()
    {
        return DeliverJob::all();
    }

    public function jobs_show(Request $request)
    {
        if ($request->user()->can('job:view')) {
            $jobs = DeliverJob::all();

            $drivers = User::where('user_type', 'DRV')->get();
            return view('shipping.jobs', compact('jobs', 'drivers'));
        }
    }

    public function job_assign(Request $request)
    {
        if ($request->user()->hasAnyRole('ADM', 'DLV')) {
            $job = DeliverJob::find($request->job_id);
            $driver = User::find($request->driver);

            $job->assigned_driver = $driver->name;
            $job->update();

            $driver->status = 'assigned';
            $driver->update();

            return redirect()->back()->with('message', 'Job assigned to ' . $job->assigned_driver);
        }
    }

    /**create new orderItem: USELESS METHOD */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'assigned_driver' => 'required|nullable',
            'order_id' => 'required',
            'deadline' => 'required|nullable',
        ]);
        if ($request->user()->can('job:register')) {
            $deliverJob = DeliverJob::create([
                'assigned_driver' => $fields['assigned_driver'],
                'order_id' => $fields['order_id'],
                'deadline' => $fields['deadline'],
            ]);

            return [
                'message' => 'job created',
                'product' => $deliverJob
            ];
        } else {
            return ['message' => 'unauthorised for this action'];
        }
    }

    /** update delivery job details */
    public function update(Request $request, $id)
    {
        $fields = $request->validate([
            'assigned_driver' => 'required',
            'order_id' => 'required',
            'deadline' => 'required',
        ]);
        if ($request->user()->can('job:update')) {
            $deliverJob = DeliverJob::find($id);
            $deliverJob->assigned_driver = $fields['assigned_driver'];
            $deliverJob->order_id = $fields['order_id'];
            $deliverJob->deadline = $fields['deadline'];
            $deliverJob->update();

            return [
                'message' => 'job updated',
                'product' => $deliverJob
            ];
        } else {
            return ['message' => 'unauthorised for this action'];
        }
    }

    /** assign driver to a delivery job*/
    public function assign_driver(Request $request, $id)
    {
        $fields = $request->validate(['driver_id' => 'required']);
        $driver = User::find($fields['driver_id']);
        $current_user = User::find(auth()->user()->id);

        if ($current_user->can('job:update')) {
            if ($driver->hasRole('DRV')) {
                $job = DeliverJob::find($id);

                $job->assigned_driver = $driver->id;
                $job->update();

                return ['message' => 'driver assigned', 'job' => $job];
            } else {
                return ['message' => "only drivers can be assigned to deliver products"];
            }
        } else {
            return ['message' => 'unauthorised for this action'];
        }
    }

    /** search order by id */
    public function show($id)
    {
        return DeliverJob::find($id);
    }

    /** delete order */
    public function destroy($id)
    {
        $user = User::find(auth()->user()->id);
        if ($user->can('job:delete')) {
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
        } else {
            return ['message' => 'unauthorised for this action'];
        }
    }
}

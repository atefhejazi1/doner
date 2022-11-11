<?php

namespace  App\Http\Controllers;

use App\Models\Worker;
use App\Http\Requests\StoreWorkerRequest;
use App\Http\Requests\UpdateWorkerRequest;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workers = Worker::all();
        return view('workers.allWorkers', compact('workers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('workers.addWorker');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreworkerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request...

        $worker = new worker;

        $worker->worker_name = $request->worker_name;
        $worker->worker_phone = $request->worker_phone;
        $worker->worker_address = $request->worker_address;
        $worker->save();

        return $request;
        // return redirect('workers/all');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function show(worker $worker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cItem = worker::find($id);

        return view('workers.editworker', compact('cItem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateworkerRequest  $request
     * @param  \App\Models\worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        worker::where('id', $request->id)
            ->update(
                [
                    'worker_name' => $request->worker_name,
                    'worker_phone' => $request->worker_phone,
                    'worker_address' => $request->worker_address
                ],
            );
        return redirect('worker/allworkers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $worker = worker::find($id);

        $worker->delete();
        return redirect('worker/allworkers');
    }
}

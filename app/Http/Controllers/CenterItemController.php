<?php

namespace App\Http\Controllers;

use App\Models\CenterItem;
use App\Http\Requests\StoreCenterItemRequest;
use App\Http\Requests\UpdateCenterItemRequest;

class CenterItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('centerItems.centerItems');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('centerItems.addCenterItem');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCenterItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCenterItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CenterItem  $centerItem
     * @return \Illuminate\Http\Response
     */
    public function show(CenterItem $centerItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CenterItem  $centerItem
     * @return \Illuminate\Http\Response
     */
    public function edit(CenterItem $centerItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCenterItemRequest  $request
     * @param  \App\Models\CenterItem  $centerItem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCenterItemRequest $request, CenterItem $centerItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CenterItem  $centerItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(CenterItem $centerItem)
    {
        //
    }
}

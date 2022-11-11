<?php

namespace App\Http\Controllers;

use App\Models\shops;
use App\Http\Requests\StoreshopsRequest;
use App\Http\Requests\UpdateshopsRequest;

class ShopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('shops.allShops');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shops.addShop');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreshopsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreshopsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\shops  $shops
     * @return \Illuminate\Http\Response
     */
    public function show(shops $shops)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\shops  $shops
     * @return \Illuminate\Http\Response
     */
    public function edit(shops $shops)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateshopsRequest  $request
     * @param  \App\Models\shops  $shops
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateshopsRequest $request, shops $shops)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\shops  $shops
     * @return \Illuminate\Http\Response
     */
    public function destroy(shops $shops)
    {
        //
    }
}

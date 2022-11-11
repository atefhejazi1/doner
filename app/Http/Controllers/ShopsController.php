<?php

namespace App\Http\Controllers;

use App\Models\shops;
use Illuminate\Http\Request;

class ShopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shops = shops::all();
        return view('shops.allShops', compact('shops'));
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
     * @param  \App\Http\Requests\StoreshopRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request...

        $shop = new shops;

        $shop->shop_name = $request->shop_name;
        $shop->company_name = $request->company_name;
        $shop->company_address = $request->company_address;
        $shop->tax_number = $request->tax_number;
        $shop->shop_address = $request->shop_address;
        $shop->save();
        return redirect('shops/all');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(shops $shop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shop = shops::find($id);

        return view('shops.editShop', compact('shop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateshopRequest  $request
     * @param  \App\Models\shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        shops::where('id', $request->id)
            ->update(
                [
                    'shop_name' => $request->shop_name,
                    'company_name' => $request->company_name,
                    'company_address' => $request->company_address,
                    'tax_number' => $request->tax_number,
                    'shop_address' => $request->shop_address,
                ],
            );
        return redirect('shops/all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shop = shops::find($id);

        $shop->delete();
        return redirect('shops/all');
    }
}

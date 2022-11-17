<?php

namespace App\Http\Controllers;

use App\Models\CenterItem;
use App\Http\Requests\StoreCenterItemRequest;
use App\Http\Requests\UpdateCenterItemRequest;
use Illuminate\Http\Request;

class CenterItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $centerItems = CenterItem::all();
        return view('centerItems.centerItems', compact('centerItems'));
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
    public function store(Request $request)
    {
        // Validate the request...

        $centerItem = new CenterItem;

        $centerItem->name = $request->name;
        $centerItem->description = $request->description;
        $centerItem->type = $request->type;
        $centerItem->save();
        return redirect('centerItem/allCenterItems')->with('success', 'Elküldve.');;
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
    public function edit($id)
    {
        $cItem = CenterItem::find($id);

        return view('centerItems.editCenterItem', compact('cItem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCenterItemRequest  $request
     * @param  \App\Models\CenterItem  $centerItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        CenterItem::where('id', $request->id)
            ->update(
                [
                    'name' => $request->name,
                    'description' => $request->description,
                    'type' => $request->type
                ],
            );
        return redirect('centerItem/allCenterItems');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CenterItem  $centerItem
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $centerItem = CenterItem::find($id);

        $centerItem->delete();
        return redirect('centerItem/allCenterItems');
    }
}

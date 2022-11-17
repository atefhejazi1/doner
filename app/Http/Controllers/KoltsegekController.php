<?php

namespace App\Http\Controllers;

use App\Models\Költségek;
use Illuminate\Http\Request;

class KoltsegekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $koltsegeks = Költségek::all();
        return view('Koltsegek.allKoltsegek', compact('koltsegeks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Koltsegek.addKoltsegek');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $költségek = new Költségek;

        $költségek->name = $request->name;
        $költségek->description = $request->description;
        $költségek->expense_status = $request->expense_status;
        $költségek->save();
        return redirect('koltsegek/all')->with('success', 'Elküldve.');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $koltsegek = Költségek::find($id);

        return view('Koltsegek.editKoltsegek', compact('koltsegek'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Költségek::where('id', $request->id)
            ->update(
                [
                    'name' => $request->name,
                    'description' => $request->description,
                    'expense_status' => $request->expense_status
                ],
            );
            
        return redirect('koltsegek/all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $koltsegek = Költségek::find($id);

        $koltsegek->delete();
        return redirect('koltsegek/all');
    }
}

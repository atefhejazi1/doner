<?php

namespace App\Http\Controllers;

use App\Models\Expenditure;
use App\Http\Requests\StoreExpenditureRequest;
use App\Http\Requests\UpdateExpenditureRequest;
use App\Models\Költségek;
use Illuminate\Http\Request;

class ExpenditureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expenditures = Expenditure::all();
        $koltsegeks = Költségek::all();
        return view('expenditures.allExpenditures', compact('expenditures', 'koltsegeks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $koltsegeks = Költségek::all();
        return view('expenditures.addExpenditure', compact('koltsegeks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreExpenditureRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $expenditure = new Expenditure;

        $expenditure->date = $request->date;
        $expenditure->id_költségek = $request->id_költségek;
        $expenditure->amount = $request->amount;
        $expenditure->save();
        return redirect('expenditures/all')->with('success', 'Elküldve.');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expenditure  $expenditure
     * @return \Illuminate\Http\Response
     */
    public function show(Expenditure $expenditure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expenditure  $expenditure
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $expenditure = Expenditure::find($id);
        $koltsegeks = Költségek::all();
        return view('expenditures.editExpenditure', compact('expenditure', 'koltsegeks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExpenditureRequest  $request
     * @param  \App\Models\Expenditure  $expenditure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Expenditure::where('id', $request->id)
        ->update(
            [
                'date' => $request->date,
                'id_költségek' => $request->id_költségek ,
                'amount' => $request->amount
            ],
        );
        
    return redirect('expenditures/all');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expenditure  $expenditure
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $expenditure = Expenditure::find($id);

        $expenditure->delete();
        return redirect('expenditures/all');
    }
}

<?php

namespace MamaManzana\Http\Controllers;

use Illuminate\Http\Request;

use MamaManzana\Http\Requests;
use MamaManzana\Http\Controllers\Controller;

use MamaManzana\Turn as Turn;
use MamaManzana\Http\Requests\Turns\CreateTurnRequest as CreateTurnRequest;
use MamaManzana\Http\Requests\Turns\UpdateTurnRequest as UpdateTurnRequest;

class TurnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTurnRequest $request)
    {
        $turn = new Turn;
        $turn->day = $request->day;
        $turn->start_time = $request->start_time;
        $turn->finish_time = $request->fnish_time;
        $turn->save();
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTurnRequest $request, $id)
    {
        $turn = Turn::find($id);
        $turn->day = $request->day;
        $turn->start_time = $request->start_time;
        $turn->finish_time = $request->fnish_time;
        $turn->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $turn = Turn::find($id);
        $tunr->delete();
    }
}

<?php

namespace MamaManzana\Http\Controllers;

use Illuminate\Http\Request;

use MamaManzana\Http\Requests;
use MamaManzana\Http\Controllers\Controller;

use MamaManzana\SpecialSchedule as SpecialSchedule;
use MamaManzana\Http\Requests\SpecialSchedules\CreateSpecialScheduleRequest as CreateSpecialScheduleRequest;
use MamaManzana\Http\Requests\SpecialSchedules\UpdateSpecialScheduleRequest as UpdateSpecialScheduleRequest;
class SpecialScheduleController extends Controller
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
    public function store(CreateSpecialScheduleRequest $request)
    {
        $specialSchedule = new SpecialSchedule
        $specialSchedule->day = $request->day;
        $specialSchedule->month = $request->month;
        $specialSchedule->start_time = $request->start_time;
        $specialSchedule->finish_time = $request->finish_time;
        $specialSchedule->save();
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
    public function update(UpdateSpecialScheduleRequest $request, $id)
    {
        $specialSchedule = SpecialSchedule::find($id);
        $specialSchedule->day = $request->day;
        $specialSchedule->month = $request->month;
        $specialSchedule->start_time = $request->start_time;
        $specialSchedule->finish_time = $request->finish_time;
        $specialSchedule->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $specialSchedule = SpecialSchedule::find($id);
        $specialSchedule->delete();
    }
}

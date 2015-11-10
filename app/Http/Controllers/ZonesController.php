<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Zones as Zones;
use App\Http\Requests\Zones\CreateZonesRequest as CreateZonesRequest;
use App\Http\Requests\Zones\UpdateZonesRequest as UpdateZonesRequest;

class ZonesController extends Controller
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
    public function store(CreateZonesRequest $request)
    {
        $zone = new Zones;
        $zone->name = $request->name;
        $zone->reference = $request->reference;
        $zone->country_id = $request->country_id;
        $zone->state_id = $request->state_id;
        $zone->city_id = $request->city_id;
        $zone->save();
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
    public function update(UpdateZonesRequest $request, $id)
    {
        $zone = Zones::find($id);
        $zone->name = $request->name;
        $zone->reference = $request->reference;
        $zone->country_id = $request->country_id;
        $zone->state_id = $request->state_id;
        $zone->city_id = $request->city_id;
        $zone->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $zone = Zones::find($id);
        $zone->actived = false;
        $zone->deleted = true;
        $zone->save();
    }
}

<?php

namespace MamaManzana\Http\Controllers;

use Illuminate\Http\Request;

use MamaManzana\Http\Requests;
use MamaManzana\Http\Controllers\Controller;

use MamaManzana\ShippingCost as ShippingCost;
use MamaManzana\Http\Requests\ShippingCosts\CreateShippingCostRequest as CreateShippingCostRequest;
use MamaManzana\Http\Requests\ShippingCosts\UpdateShippingCostRequest as UpdateShippingCostRequest;

class ShippingCostController extends Controller
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
    public function store(CreateShippingCostRequest $request)
    {
        $shippingCost = new ShippingCost;
        $shippingCost->zone_id = $request->zone_id;
        $shippingCost->name = $request->name;
        $shippingCost->cost = $request->cost;
        $shippingCost->save();
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
    public function update(UpdateShippingCostRequest $request, $id)
    {
        $shippingCost = ShippingCost::findOrFail($id);
        $shippingCost->zone_id = $request->zone_id;
        $shippingCost->name = $request->name;
        $shippingCost->cost = $request->cost;
        $shippingCost->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shippingCost = ShippingCost::findOrFail($id);
        $shippingCost->actived = false;
        $shippingCost->deleted = true;
        $shippingCost->save();
    }
}

<?php

namespace MamaManzana\Http\Controllers\Product;

use Illuminate\Http\Request;

use MamaManzana\Http\Requests;
use MamaManzana\Http\Controllers\Controller;

use MamaManzana\ProductMeta as ProductMeta;
use MamaManzana\Http\Requests\Products\Meta\CreateProductMetaRequest as CreateProductMetaRequest;
use MamaManzana\Http\Requests\Products\Meta\UpdateProductMetaRequest as UpdateProductMetaRequest;
class ProductMetaController extends Controller
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
    public function store(CreateProductMetaRequest $request)
    {
        $productMeta = new ProductMeta;
        $productMeta->product_id = $request->product_id;
        $productMeta->title = $request->title;
        $productMeta->description = $request->description;
        $productMeta->keywords = $request->keywords;
        $productMeta->save();
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
    public function update(UpdateProductMetaRequest $request, $id)
    {
        $productMeta = ProductMeta::find($id);
        $productMeta->title = $request->title;
        $productMeta->description = $request->description;
        $productMeta->keywords = $request->keywords;
        $productMeta->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productMeta = ProductMeta::find($id);
        $productMeta->delete();
    }
}

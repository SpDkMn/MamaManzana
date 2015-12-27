<?php

namespace MamaManzana\Http\Controllers\Category;

use Illuminate\Http\Request;

use MamaManzana\Http\Requests;
use MamaManzana\Http\Controllers\Controller;

use MamaManzana\CategoryMeta as CategoryMeta;
use MamaManzana\Http\Requests\Categories\Meta\CreateCategoryMetaRequest as CreateCategoryMetaRequest;
use MamaManzana\Http\Requests\Categories\Meta\UpdateCategoryMetaRequest as UpdateCategoryMetaRequest;

class CategoryMetaController extends Controller
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
    public function store(CreateCategoryMetaRequest $request)
    {
        $categoryMeta = new CategoryMeta;
        $categoryMeta->category_id = $request->category_id;
        $categoryMeta->title = $request->title;
        $categoryMeta->description = $request->description;
        $categoryMeta->keywords = $request->keywords;
        $categoryMeta->save();
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
    public function update(UpdateCategoryMetaRequest $request, $id)
    {
        $categoryMeta = CategoryMeta::find($id);
        $categoryMeta->title = $request->title;
        $categoryMeta->description = $request->description;
        $categoryMeta->keywords = $request->keywords;
        $categoryMeta->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoryMeta = CategoryMeta::find($id);
        $categoryMeta->delete();
    }
}

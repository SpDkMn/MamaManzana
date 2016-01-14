<?php

namespace MamaManzana\Http\Controllers\Product;

use Illuminate\Http\Request;

use MamaManzana\Http\Requests;
use MamaManzana\Http\Controllers\Controller;

use Image;
use MamaManzana\ProductImg as ProductImg;
use MamaManzana\Http\Request\Products\Img\CreateProductImgRequest as CreateProductImgRequest;
use MamaManzana\Http\Request\Products\Img\UpdateProductImgRequest as UpdateProductImgRequest;
class ProductImgController extends Controller
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
    public function store(CreateProductImgRequest $request)
    {
        $productImg = new ProductImg;
        $productImg->product_id = $request->product_id;
        if(Input::hasFile('product_img')){
            $file = Input::file('product_img');
            $fileName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $img = Image::make(Input::file('product_img'));
            $imgName = sha1($fileName.time()).'.'.$extension;
            $img->save('img/product/'.$imgName);
            $productImg->name = $imgName;
        }
        $productImg->save();
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
    public function update(UpdateProductImgRequest $request, $id)
    {
        $productImg = ProductImg::findOrFail($id);
        if(Input::hasFile('product_img')){
            $file = Input::file('product_img');
            $fileName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $img = Image::make(Input::file('product_img'));
            $imgName = sha1($fileName.time()).'.'.$extension;
            $img->save('img/product/'.$imgName);
            $productImg->name = $imgName;
        }
        $productImg->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productImg = ProductImg::findOrFail($id);
        $productImg->delete();
    }
}

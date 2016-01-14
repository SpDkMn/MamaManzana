<?php

namespace MamaManzana\Http\Controllers\Category;

use Illuminate\Http\Request;

use MamaManzana\Http\Requests;
use MamaManzana\Http\Controllers\Controller;

use Image;
use MamaManzana\CategoryImg as CategoryImg;
use MamaManzana\Http\Requests\Categories\Img\CreateCategoryImgRequest as CreateCategoryImgRequest;
use MamaManzana\Http\Requests\Categories\Img\UpdateCategoryImgRequest as UpdateCategoryImgRequest;

class CategoryImgController extends Controller
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
    public function store(CreateCategoryImgRequest $request)
    {
        $categoryImg = new CategoryImg;
        $categoryImg->category_id = $request->category_id;
        if(Input::hasFile('category_img')){
            $file = Input::file('category_img');
            $fileName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $img = Image::make(Input::file('category_img'));
            $imgName = sha1($fileName.time()).'.'.$extension;
            $img->save('img/category/'.$imgName);
            $categoryImg->name = $imgName;
        }
        $categoryImg->save();
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
    public function update(UpdateCategoryImgRequest $request, $id)
    {
        $categoryImg = CategoryImg::findOrFail($id);
        if(Input::hasFile('category_img')){
            $file = Input::file('category_img');
            $fileName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $img = Image::make(Input::file('category_img'));
            $imgName = sha1($fileName.time()).'.'.$extension;
            $img->save('img/category/'.$imgName);
            $categoryImg->name = $imgName;
        }
        $categoryImg->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoryImg = CategoryImg::findOrFail($id);
        $categoryImg->delete();
    }
}

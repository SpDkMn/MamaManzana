<?php

namespace MamaManzana\Http\Controllers\About;

use Illuminate\Http\Request;

use MamaManzana\Http\Requests;
use MamaManzana\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use Image;
use MamaManzana\AboutImg as AboutImg;
use MamaManzana\Http\Requests\About\Img\CreateAboutImgRequest as CreateAboutImgRequest;
use MamaManzana\Http\Requests\About\Img\UpdateAboutImgRequest as UpdateAboutImgRequest;

class AboutImgController extends Controller
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
    public function store(CreateAboutImgRequest $request)
    {
        $aboutImg = new AboutImg;
        $aboutImg->about_id = $request->about_id;
        if(Input::hasFile('about_img')){
            $file = Input::file('about_img');
            $fileName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $img = Image::make(Input::file('about_img'));
            $imgName = sha1($fileName.time()).'.'.$extension;
            $img->save('img/about/'.$imgName);
            $aboutImg->name = $imgName;
        }
        $aboutImg->save();
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
        $aboutImg = AboutImg::find($id);
        $aboutImg->about_id = $request->about_id;
        if(Input::hasFile('about_img')){
            $file = Input::file('about_img');
            $fileName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $img = Image::make(Input::file('about_img'));
            $imgName = sha1($fileName.time()).'.'.$extension;
            $img->save('img/setting/'.$imgName);
            $aboutImg->name = $imgName;
        }
        $aboutImg->save();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAboutImgRequest $request)
    {
      $aboutImg = AboutImg::find(1);

      if(Input::hasFile('about_img')){
          $file = Input::file('about_img');
          $fileName = $file->getClientOriginalName();
          $extension = $file->getClientOriginalExtension();
          $img = Image::make(Input::file('about_img'));
          $imgName = sha1($fileName.time()).'.'.$extension;
          $img->save('img/about-us/'.$imgName);
          $aboutImg->name = $imgName;
      }
      $aboutImg->save();
      return redirect('admin/about-us')->with('status', 'Profile updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aboutImg = AboutImg::find($id);
        $aboutImg->delete();
    }
}

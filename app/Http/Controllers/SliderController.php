<?php

namespace MamaManzana\Http\Controllers;

use Illuminate\Http\Request;

use MamaManzana\Http\Requests;
use MamaManzana\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Datatables;
use DB;

use Image;
use MamaManzana\Slider as Slider;
use MamaManzana\Http\Requests\Sliders\CreateSliderRequest as CreateSliderRequest;
use MamaManzana\Http\Requests\Sliders\UpdateSliderRequest as UpdateSliderRequest;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.pages.Sliders.index');
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
    public function store(Request $request)
    {
        $slider = new Slider;
        $slider->title = $request->title;
        $slider->action = $request->action;
        $slider->short_description = $request->short_description;
        $slider->slug = $request->slug;

        if(Input::hasFile('photo')){
            $file = Input::file('photo');
            $fileName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $img = Image::make(Input::file('photo'));
            $imgName = sha1($fileName.time()).'.'.$extension;
            $img->save('img/sliders/'.$imgName);
            $slider->img = $imgName;
        }

        $slider->save();
        return redirect('admin/sliders')->with('status_data', 'Los datos se guardaron correctamente.');
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
      $slider = Slider::findOrFail($id);
      return view('Admin.pages.Sliders.edit', ['slider' => $slider]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);
        $slider->title = $request->title;
        $slider->action = $request->action;
        $slider->short_description = $request->short_description;
        $slider->slug = $request->slug;
        //$slider->active = $request->active;
        if(Input::hasFile('photo')){
            $file = Input::file('photo');
            $fileName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $img = Image::make(Input::file('photo'));
            $imgName = sha1($fileName.time()).'.'.$extension;
            $img->save('img/sliders/'.$imgName);
            $slider->img = $imgName;
        }

        $slider->save();

        return redirect('admin/sliders')->with('status_data', 'Los datos se guardaron correctamente.');
    }

    public function anyData(){
      $data =DB::table('sliders as s')
      ->select('s.id as id','s.title as title','s.action as boton', 's.slug as slug','s.img as img','s.active as active')
      ->where('s.deleted','0');
      return Datatables::of($data)
        ->addColumn('action',
          '<a class="btn btn-primary update" href="{{route(\'admin_edit_sliders_path\',$id)}}" ><i class="fa fa-pencil"></i></a>
          <button class="btn btn-danger delete" data-toggle="modal" data-id="{{$id}}" data-target="#modal-delete"><i class="fa fa-trash"></i></button>'
        )
        ->editColumn('img','<img src="{{asset("img/sliders/".$img)}}" width="80px">')
        ->editColumn('active','<i class="fa fa-{{ ($active == 1)? "check":"close"}}"></i>')
        ->make(true);
    }

    public function delete(Request $request)
    {
      return view('Admin.pages.Sliders.modal_delete',['id'=>$request->id]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $slider = Slider::findOrFail($request->id);
        $slider->active = false;
        $slider->deleted = true;
        $slider->save();

        return redirect('admin/sliders');
    }
}

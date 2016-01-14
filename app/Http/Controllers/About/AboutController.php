<?php

namespace MamaManzana\Http\Controllers\About;

use Illuminate\Http\Request;

use MamaManzana\Http\Requests;
use MamaManzana\Http\Controllers\Controller;

use MamaManzana\About as About;
use MamaManzana\AboutImg as AboutImg;
use MamaManzana\AboutMeta as AboutMeta;
use MamaManzana\Http\Requests\About\Data\CreateAboutRequest as CreateAboutRequest;
use MamaManzana\Http\Requests\About\Data\UpdateAboutRequest as UpdateAboutRequest;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $about = About::with('meta','img')->get();
      return view('Admin.pages.about', ['about' => $about[0]]);
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
    public function store(CreateAboutRequest $request)
    {
        $about = new About;
        if (isset($request->title)){
            $about->title = $request->title;
        }

        if(isset($request->mission)){
            $about->mission = $request->mission;
        }

        if(isset($request->vision)){
            $about->vision = $request->vision;
        }

        if(isset($request->values)){
            $about->values = $request->values;
        }

        $about->about = $request->about;
        $about->save();
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
    public function update(UpdateAboutRequest $request)
    {
        $about = About::findOrFail(1);
        if (isset($request->title)){
            $about->title = $request->title;
        }

        if(isset($request->mission)){
            $about->mission = $request->mission;
        }

        if(isset($request->vision)){
            $about->vision = $request->vision;
        }

        if(isset($request->values)){
            $about->values = $request->values;
        }

        $about->about = $request->about;
        $about->save();

        return redirect('admin/about-us')->with('status_data', 'Datos de contactos actualizados correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::findOrFail($id);
        $aboutMeta = $about->meta;
        $aboutImg = $about->img;
        $aboutMeta->delete();
        $aboutImg->delete();
        $about->delete();
    }
}

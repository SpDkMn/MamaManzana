<?php

namespace MamaManzana\Http\Controllers\About;

use Illuminate\Http\Request;

use MamaManzana\Http\Requests;
use MamaManzana\Http\Controllers\Controller;

use MamaManzana\AboutMeta as AboutMeta;
use MamaManzana\Http\Requests\About\Meta\CreateAboutMetaRequest as CreateAboutMetaRequest;
use MamaManzana\Http\Requests\About\Meta\UpdateAboutMetaRequest as UpdateAboutMetaRequest;

class AboutMetaController extends Controller
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
    public function store(CreateAboutMetaRequest $request)
    {
        $aboutMeta = new AboutMeta;
        $aboutMete->about_id = $request->about_id;
        $aboutMeta->title = $request->title;
        $aboutMeta->keywords = $request->keywords;
        $aboutMeta->description = $request->description;
        $aboutMeta->save();
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
    public function update(UpdateAboutMetaRequest $request)
    {
        $aboutMeta = AboutMeta::findOrFail(1);

        $aboutMeta->title = $request->title;
        $aboutMeta->keywords = $request->keywords;
        $aboutMeta->description = $request->description;
        $aboutMeta->save();

        return redirect('admin/about-us')->with('status_meta', 'Los meta datos se guardaron correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aboutMeta = AboutMeta::findOrFail($id);
        $aboutMeta->delete();
    }
}

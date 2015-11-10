<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ContactInformation as ContactInformation;
use App\Http\Requests\ContactInformations\CreateContactInformationRequest as CreateContactInformationRequest;
use App\Http\Requests\ContactInformations\UpdateContactInformationRequest as UpdateContactInformationRequest;

class ContactInformationController extends Controller
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
    public function store(CreateContactInformationRequest $request)
    {
        $contactInformation = new ContactInformation;
        $contactInformation->email = $request->email;
        $contactInformation->phone = $request->phone;
        $contactInformation->address = $request->address;
        $contactInformation->save();
        
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
    public function update(UpdateContactInformationRequest $request, $id)
    {
        $contactInformation = ContactInformation::find($id);
        $contactInformation->email = $request->email;
        $contactInformation->phone = $request->phone;
        $contactInformation->address = $request->address;
        $contactInformation->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contactInformation = ContactInformation::find($id);
        $contactInformation->delete();
    }
}

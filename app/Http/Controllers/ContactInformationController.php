<?php

namespace MamaManzana\Http\Controllers;

use Illuminate\Http\Request;

use MamaManzana\Http\Requests;
use MamaManzana\Http\Controllers\Controller;

use MamaManzana\ContactInformation as ContactInformation;
use MamaManzana\Http\Requests\ContactInformations\CreateContactInformationRequest as CreateContactInformationRequest;
use MamaManzana\Http\Requests\ContactInformations\UpdateContactInformationRequest as UpdateContactInformationRequest;

class ContactInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $contact_information = ContactInformation::find(1);
      return view('Admin.pages.contact_information',$contact_information);
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
    public function update(UpdateContactInformationRequest $request)
    {
        $contactInformation = ContactInformation::findOrFail(1);
        $contactInformation->email = $request->email;
        $contactInformation->phone = $request->phone;
        $contactInformation->address = $request->address;
        $contactInformation->save();

        return redirect('admin/contact-information')->with('status_data', 'Los datos de contacto se guardaron correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contactInformation = ContactInformation::findOrFails($id);
        $contactInformation->delete();
    }
}

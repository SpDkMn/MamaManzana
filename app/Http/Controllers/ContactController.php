<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Contact as Contact;
use App\Setting as Setting;
use App\ContactInformation as ContactInformation;
use App\Http\Requests\Contacts\CreateContactRequest as CreateContactRequest;
use App\Http\Requests\Contacts\UpdateContactRequest as UpdateContactRequest;

class ContactController extends Controller
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
    public function store(CreateContactRequest $request)
    {
        $contact = new Contat;
        $contact->user_id = $request->user_id;
        $contat->name => $request->name;
        $contat->email => $request->email;
        $contact->message = $request->message;
        $contact->save();

        $contactInformation = ContactInformation::find(1);
        $setting = Setting::find(1);
        $to = [
            'address' => $contactInformation->email,
            'name' => $setting->title . ' - Contacto',
        ];
        $from = [
            'address' => $contat->email,
            'name' => $contat->name,
        ];
        $subject = $setting->title . ' - Mensaje Contacto - Web';

        $data = [
            'name' => $contat->name,
            'email' => $contat->email,
            'message' => $contat->message,
        ];

        Mail::send('emails.contact_email', $data, function ($message) use ($to, $from, $subject) {
            $message
                    ->from($from['address'], $from['name'])
                    ->to($to['address'], $to['name'])
                    ->subject($subject);
        });
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

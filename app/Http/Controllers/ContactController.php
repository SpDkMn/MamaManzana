<?php

namespace MamaManzana\Http\Controllers;

use Illuminate\Http\Request;

use MamaManzana\Http\Requests;
use MamaManzana\Http\Controllers\Controller;

use MamaManzana\Contact as Contact;
use MamaManzana\Setting as Setting;
use MamaManzana\ContactInformation as ContactInformation;
use MamaManzana\Http\Requests\Contacts\CreateContactRequest as CreateContactRequest;
use MamaManzana\Http\Requests\Contacts\UpdateContactRequest as UpdateContactRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $count = count(Contact::where('read',0)->where('trash',0)->where('reply',0)->where('deleted',0)->get());
      $contacts = Contact::where('trash',0)->where('reply',0)->where('deleted',0)->get();
        return view('Admin.pages.inbox',['contacts'=>$contacts,'count'=>$count]);
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
        $contat->name = $request->name;
        $contat->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        $contactInformation = ContactInformation::find(1);
        $setting = Setting::findOrFail(1);
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
      $contact = Contact::findOrFail($id);
      $contact->read = 1;
      $contact->save();
      $contacts = Contact::where('read',0)->where('trash',0)->where('reply',0)->where('deleted',0)->get();
      return view('Admin.pages.read_mail',['contact'=>$contact,'count'=>count($contacts)]);
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

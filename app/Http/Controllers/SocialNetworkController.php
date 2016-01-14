<?php

namespace MamaManzana\Http\Controllers;

use Illuminate\Http\Request;

use MamaManzana\Http\Requests;
use MamaManzana\Http\Controllers\Controller;

use MamaManzana\Http\Requests\SocialNetworks\FacebookRequest as FacebookRequest;
use MamaManzana\SocialNetwork as SocialNetwork;
use MamaManzana\Http\Requests\SocialNetworks\CreateSocialNetworkRequest as CreateSocialNetworkRequest;
use MamaManzana\Http\Requests\SocialNetworks\UpdateSocialNetworkRequest as UpdateSocialNetworkRequest;

class SocialNetworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $social = SocialNetwork::findOrFail(1);
      return view('Admin.pages.social-network',$social);
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
    public function store(CreateSocialNetworkRequest $request)
    {
        $socialN = new SocialNetwork;
        $socialN->name = $request->name;
        $socialN->url =  $request->url;
        $socialN->save();
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
    public function update(UpdateSocialNetworkRequest $request, $id)
    {
        $socialN = SocialNetwork::findOrFail($id);
        $socialN->name = $request->name;
        $socialN->url =  $request->url;
        $socialN->save();
    }

    public function facebook(Request $request)
    {
      $socialN = SocialNetwork::findOrFail(1);
      $socialN->url =  $request->url;
      $socialN->save();
      return redirect('admin/social-network')->with('status', 'Profile updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $socialN = SocialNetwork::findOrFail($id);
        $socialN->delete();
    }
}

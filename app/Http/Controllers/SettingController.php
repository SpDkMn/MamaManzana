<?php

namespace MamaManzana\Http\Controllers;

use Illuminate\Http\Request;

use MamaManzana\Http\Requests;
use MamaManzana\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use Image;
use MamaManzana\Setting as Setting;
use MamaManzana\Http\Requests\Settings\CreateSettingRequest as CreateSettingRequest;
use MamaManzana\Http\Requests\Settings\UpdateSettingRequest as UpdateSettingRequest;
use MamaManzana\Http\Requests\Settings\SettingsRequest as SettingsRequest;
use MamaManzana\Http\Requests\Settings\SettingsMetaRequest as SettingsMetaRequest;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::find(1);
        return view('Admin.pages.settings',$setting);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createsetting');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSettingRequest $request)
    {
        $setting = new Setting;
        $setting->title = $request->title;
        $setting->keywords = $request->keywords;
        $setting->description = $request->description;


        if(Input::hasFile('logo')){
            $file = Input::file('logo');
            $fileName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $img = Image::make(Input::file('logo'));
            $imgName = sha1($fileName.time()).'.'.$extension;
            $img->save('img/setting/'.$imgName);
            $setting->logo = $imgName;
        }

        if(Input::hasFile('footer')){
            $file = Input::file('footer');
            $fileName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $img = Image::make(Input::file('footer'));
            $imgName = sha1($fileName.'hola'.time()).'.'.$extension;
            $img->save('img/setting/'.$imgName);
            $setting->favicon = $imgName;
        }

        if(Input::hasFile('footer')){
            $file = Input::file('footer');
            $fileName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $img = Image::make(Input::file('footer'));
            $imgName = sha1($fileName.time()).'.'.$extension;
            $img->save('img/setting/'.$imgName);
            $setting->footer = $imgName;
        }

        $setting->email_order = $request->email_order;
        $setting->phrase = $request->phrase;

        $setting->save();

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

    public function patchSetting(SettingsRequest $request){
      $setting = Setting::find(1);

      $setting->email_order = $request->email_order;
      $setting->phrase = $request->phrase;

      $setting->save();
      return redirect('admin/settings')->with('status_data', 'Los datos se guardaron correctamente.');
    }

    public function patchSettingMeta(SettingsMetaRequest $request){
      $setting = Setting::find(1);

      $setting->title = $request->title;
      $setting->keywords = $request->keywords;
      $setting->description = $request->description;

      $setting->save();
      return redirect('admin/settings')->with('status_meta', 'Los meta datos se guardaron correctamente.');
    }

    public function patchLogo(Request $request){
      $setting = Setting::find(1);

      if(Input::hasFile('logo')){
          $file = Input::file('logo');
          $fileName = $file->getClientOriginalName();
          $extension = $file->getClientOriginalExtension();
          $img = Image::make(Input::file('logo'));
          $imgName = sha1($fileName.time()).'.'.$extension;
          $img->save('img/setting/'.$imgName);
          $setting->logo = $imgName;
      }

      $setting->save();
      return redirect('admin/settings')->with('status', 'Profile updated!');
    }

    public function patchFooter(Request $request){
      $setting = Setting::find(1);

      if(Input::hasFile('footer')){
          $file = Input::file('footer');
          $fileName = $file->getClientOriginalName();
          $extension = $file->getClientOriginalExtension();
          $img = Image::make(Input::file('footer'));
          $imgName = sha1($fileName.time()).'.'.$extension;
          $img->save('img/setting/'.$imgName);
          $setting->footer = $imgName;
      }

      $setting->save();
      return redirect('admin/settings')->with('status', 'Profile updated!');
    }

    public function patchFavicon(Request $request){
      $setting = Setting::find(1);

      if(Input::hasFile('favicon')){
          $file = Input::file('favicon');
          $fileName = $file->getClientOriginalName();
          $extension = $file->getClientOriginalExtension();
          $img = Image::make(Input::file('favicon'));
          $imgName = sha1($fileName.time()).'.'.$extension;
          $img->save('img/setting/'.$imgName);
          $setting->favicon = $imgName;
      }

      $setting->save();
      return redirect('admin/settings')->with('status', 'Profile updated!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSettingRequest $request, $id)
    {
        $setting = Setting::find($id);
        $setting->title = $request->title;
        $setting->keywords = $request->keywords;
        $setting->description = $request->description;


        if(Input::hasFile('logo')){
            $file = Input::file('logo');
            $fileName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $img = Image::make(Input::file('logo'));
            $imgName = sha1($filename.time()).'.'.$extension;
            $img->save('img/setting/'.$imgName);
            Image::make()->save();
            $setting->logo = $imgName;
        }

        if(Input::hasFile('favicon')){
            $file = Input::file('favicon');
            $fileName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $img = Image::make(Input::file('favicon'));
            $imgName = sha1($filename.time()).'.'.$extension;
            $img->save('img/setting/'.$imgName);
            Image::make()->save();
            $setting->favicon = $imgName;
        }

        if(Input::hasFile('footer')){
            $file = Input::file('footer');
            $fileName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $img = Image::make(Input::file('footer'));
            $imgName = sha1($filename.time()).'.'.$extension;
            $img->save('img/setting/'.$imgName);
            Image::make()->save();
            $setting->footer = $imgName;
        }

        $setting->email_order = $request->email_order;
        $setting->phrase = $request->phrase;

        $setting->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $setting = Setting::find($id);
        $setting->delete();
    }
}

<?php

namespace MamaManzana\Http\Controllers;

use Illuminate\Http\Request;

use MamaManzana\Http\Requests;
use MamaManzana\Http\Controllers\Controller;
use Datatables;
use DB;

use MamaManzana\City as City;
use MamaManzana\Zones as Zones;
use MamaManzana\ShippingCost as ShippingCost;
use MamaManzana\Http\Requests\Zones\CreateZonesRequest as CreateZonesRequest;
use MamaManzana\Http\Requests\Zones\UpdateZonesRequest as UpdateZonesRequest;

class ZonesController extends Controller
{
  public function anyData()
  {
    $data =DB::table('zones as z')
    ->join('cities as c', 'c.id', '=', 'z.city_id')
    ->join('shipping_cost as sc', 'sc.zone_id', '=', 'z.id')
    ->select('z.id as id','z.name as name','c.name as destiny','sc.cost as flete','z.actived as active')
    ->where('z.deleted','0');
    return Datatables::of($data)
      ->editColumn('active','<i class="fa fa-{{ ($active == 1)? "check":"close"}}"></i>')
      ->addColumn('action',
        '<a class="btn btn-primary update" href="{{route(\'admin_edit_zonas_path\',$id)}}" ><i class="fa fa-pencil"></i></a>
        <button class="btn btn-danger delete" data-toggle="modal" data-id="{{$id}}" data-target="#modal-delete"><i class="fa fa-trash"></i></button>'
      )
      ->make(true);
  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $zones = DB::table('zones')->select('city_id')->distinct()->get();
      $notIn = [];
      foreach ($zones as $z) {
        array_push($notIn,$z->city_id);
      }
      $cities = DB::table('cities')->whereNotIn('id',$notIn)->orderBy('name', 'asc')->get();
      return view('Admin.pages.delivery.zones.index',['cities'=>$cities]);
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
    public function store(CreateZonesRequest $request)
    {
      $city = City::findOrFail($request->city);

      $zone = new Zones;
      $zone->name = $request->name;
      $zone->reference = $request->reference;
      $zone->country_id = 1;
      $zone->state_id = 1;
      $zone->city_id = $city->id;
      $zone->save();

      $sc = new ShippingCost;
      $sc->zone_id = $zone->id;
      $sc->name = $request->name;
      $sc->cost = $request->cost;
      $sc->save();

      return redirect('admin/zonas');
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
      $zona = Zones::findOrFail($id);
      $zones = DB::table('zones')->select('city_id')->distinct()->get();
      $notIn = [];
      foreach ($zones as $z) {
        if($z->city_id != $zona->city_id){
          array_push($notIn,$z->city_id);
        }
      }
      $cities = DB::table('cities')->whereNotIn('id',$notIn)->orderBy('name', 'asc')->get();
      return view('Admin.pages.delivery.zones.edit', ['zonas' => $zona,'cities' => $cities]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateZonesRequest $request, $id)
    {
      $city = City::findOrFail($request->city);

      $zone = Zones::findOrFail($id);
      $zone->name = $request->name;
      $zone->reference = $request->reference;
      $zone->city_id = $city->id;
      $zone->save();

      $sc = $zone->shippingCosts;
      $sc->name = $request->name;
      $sc->cost = $request->cost;
      $sc->save();

      return redirect('admin/zonas');
    }

    public function delete(Request $request)
    {
      return view('Admin.pages.delivery.zones.modal_delete',['id'=>$request->id]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $zone = Zones::findOrFail($request->id);
        $zone->actived = false;
        $zone->deleted = true;
        $zone->save();

        return redirect('admin/zonas');
    }
}

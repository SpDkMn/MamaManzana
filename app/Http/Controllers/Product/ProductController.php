<?php

namespace MamaManzana\Http\Controllers\Product;

use Illuminate\Http\Request;

use MamaManzana\Http\Requests;
use MamaManzana\Http\Controllers\Controller;
use Datatables;
use Illuminate\Support\Facades\Input;
use DB;

use Image;
use MamaManzana\ProductImg as ProductImg;
use MamaManzana\Product as Product;
use MamaManzana\Category as Category;
use MamaManzana\ProductMeta as ProductMeta;
use MamaManzana\Http\Requests\Products\Data\CreateProductRequest as CreateProductRequest;
use MamaManzana\Http\Requests\Products\Data\UpdateProductRequest as UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $categorias = Category::where('deleted','=',0)->where('active','=',1)->get();
      return view('Admin.pages.store.products.index',['categorias'=>$categorias]);
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
    public function store(CreateProductRequest $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->short_description = $request->short_description;
        $product->cost = $request->cost;
        $product->slug = $request->slug;

        $product->save();

        $productMeta = new ProductMeta;
        $productMeta->product_id = $product->id;
        $productMeta->title = $request->title;
        $productMeta->description = $request->meta_description;
        $productMeta->keywords = $request->keywords;
        $productMeta->save();

        $productImg = new ProductImg;
        $productImg->product_id = $product->id;
        if(Input::hasFile('img')){
            $file = Input::file('img');
            $fileName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $img = Image::make(Input::file('img'));
            $imgName = sha1($fileName.time()).'.'.$extension;
            $img->save('img/product/'.$imgName);
            $productImg->name = $imgName;
        }
        $productImg->save();

        $product->categories()->sync($request->categories);

        return redirect('admin/products');
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
      $categorias = Category::where('deleted','=',0)->where('active','=',1)->get();
      $product = Product::with('meta','img','categories')->where('id',$id)->firstOrFail();
      $categ = [];
      foreach($product->categories as $c){
        array_push($categ,$c->id);
      };
      return view('Admin.pages.store.products.edit', ['categorias' => $categorias,'product' => $product,'categ'=>$categ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $id)
    {
      $product = Product::findOrFail($id);

      $product->name = $request->name;
      $product->description = $request->description;
      $product->short_description = $request->short_description;
      $product->cost = $request->cost;
      $product->slug = $request->slug;
      
      $product->save();

      $productMeta = $product->meta;
      $productMeta->product_id = $product->id;
      $productMeta->title = $request->title;
      $productMeta->description = $request->meta_description;
      $productMeta->keywords = $request->keywords;
      $productMeta->save();

      if(Input::hasFile('img')){
        $productImg = $product->img;
        $file = Input::file('img');
        $fileName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $img = Image::make(Input::file('img'));
        $imgName = sha1($fileName.time()).'.'.$extension;
        $img->save('img/product/'.$imgName);
        $productImg->name = $imgName;
        $productImg->save();
      }

      $categ = [];
      foreach($product->categories as $c){
        array_push($categ,$c->id);
      };
      $product->categories()->detach($categ);
      if($request->has('categories')){
        $product->categories()->sync($request->categories);
      }

      return redirect('admin/products');

    }

    public function delete(Request $request){
      return view('Admin.pages.store.products.modal_delete',['id'=>$request->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $product = Product::findOrFail($request->id);
        $product->active = false;
        $product->deleted = true;
        $product->save();

        return redirect('admin/products');
    }

    public function anyData()
    {
      $data =DB::table('products')
      ->join('products_img', 'products.id', '=', 'products_img.product_id')
      ->select('products.id as id','products.name as name','products.cost as cost', 'products.active as active','products_img.name as img')
      ->where('products.deleted','0');
      return Datatables::of($data)
        ->addColumn('action',
          '<a class="btn btn-primary update" href="{{route(\'admin_edit_product_path\',$id)}}" ><i class="fa fa-pencil"></i></a>
          <button class="btn btn-danger delete" data-toggle="modal" data-id="{{$id}}" data-target="#modal-delete"><i class="fa fa-trash"></i></button>'
        )
        ->editColumn('img','<img src="{{asset("img/product/".$img)}}" width="80px">')
        ->editColumn('active','<i class="fa fa-{{ ($active == 1)? "check":"close"}}"></i>')
        ->make(true);
    }
}

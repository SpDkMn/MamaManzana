<?php

namespace MamaManzana\Http\Controllers\Category;

use Illuminate\Http\Request;

use MamaManzana\Http\Requests;
use MamaManzana\Http\Controllers\Controller;
use Datatables;
use Illuminate\Support\Facades\Input;
use DB;

use Image;
use MamaManzana\Category as Category;
use MamaManzana\CategoryMeta as CategoryMeta;
use MamaManzana\CategoryImg as CategoryImg;
use MamaManzana\Http\Requests\Categories\Data\CreateCategoryRequest as CreateCategoryRequest;
use MamaManzana\Http\Requests\Categories\Data\UpdateCategoryRequest as UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.pages.store.categories.index');
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
    public function store(CreateCategoryRequest $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->short_description = $request->short_description;
        $category->slug = $request->slug;
        $category->save();

        $categoryMeta = new CategoryMeta;
        $categoryMeta->category_id = $category->id;
        $categoryMeta->title = $request->title;
        $categoryMeta->description = $request->meta_description;
        $categoryMeta->keywords = $request->keywords;
        $categoryMeta->save();

        $categoryImg = new CategoryImg;
        $categoryImg->category_id = $category->id;
        if(Input::hasFile('img')){
            $file = Input::file('img');
            $fileName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $img = Image::make(Input::file('img'));
            $imgName = sha1($fileName.time()).'.'.$extension;
            $img->save('img/category/'.$imgName);
            $categoryImg->name = $imgName;
        }
        $categoryImg->save();

        return redirect('admin/categories');
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
      $category = Category::with('meta','img')->where('id',$id)->firstOrFail();
      return view('Admin.pages.store.categories.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);

        $category->name = $request->name;
        $category->description = $request->description;
        $category->short_description = $request->short_description;
        $category->slug = $request->slug;

        $category->save();

        $categoryMeta = $category->meta;
        $categoryMeta->title = $request->title;
        $categoryMeta->description = $request->meta_description;
        $categoryMeta->keywords = $request->keywords;
        $categoryMeta->save();

        if(Input::hasFile('img')){
          $categoryImg = $category->img;
          $file = Input::file('img');
          $fileName = $file->getClientOriginalName();
          $extension = $file->getClientOriginalExtension();
          $img = Image::make(Input::file('img'));
          $imgName = sha1($fileName.time()).'.'.$extension;
          $img->save('img/category/'.$imgName);
          $categoryImg->name = $imgName;
          $categoryImg->save();
        }

        return redirect('admin/categories');

    }

    public function delete(Request $request){
      return view('Admin.pages.store.categories.modal_delete',['id'=>$request->id]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $category = Category::findOrFail($request->id);
        $category->active = false;
        $category->deleted = true;
        $category->save();

        return redirect('admin/categories');
    }

    public function anyData()
    {
      $data =DB::table('categories')
      ->join('categories_img', 'categories.id', '=', 'categories_img.category_id')
      ->select('categories.id as id','categories.name as name','categories.active as active','categories_img.name as img')
      ->where('categories.deleted','0');
      return Datatables::of($data)
        ->addColumn('action',
          '<a class="btn btn-primary update" href="{{route(\'admin_edit_category_path\',$id)}}"><i class="fa fa-pencil"></i></a>
          <button class="btn btn-danger delete" data-toggle="modal" data-id="{{$id}}" data-target="#modal-delete"><i class="fa fa-trash"></i></button>'
        )
        ->editColumn('img','<img src="{{asset("img/category/".$img)}}" width="80px">')
        ->editColumn('active','<i class="fa fa-{{ ($active == 1)? "check":"close"}}"></i>')
        ->make(true);
    }
}

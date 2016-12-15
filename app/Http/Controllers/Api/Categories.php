<?php

namespace MamaManzana\Http\Controllers\api;

use Illuminate\Http\Request;

use MamaManzana\Http\Requests;
use MamaManzana\Http\Controllers\Controller;
use MamaManzana\Category as Category;
use DB;

class Categories extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = DB::table('categories')
            ->join('categories_img', 'categories.id', '=', 'categories_img.category_id')
            ->select('categories.id', 'categories.name', 'categories_img.name as imagen')
            ->where('deleted',0)
            ->where('active',1)
            ->get();
        //return Category::with('img')->where('deleted',0)->get();
        return $categories;
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = DB::table('categories_products')
          ->join('products', 'products.id', '=', 'categories_products.product_id')
          ->join('products_img', 'products.id', '=', 'products_img.product_id')
          ->select('products.id', 'products.name', 'products.description', 'products.cost', 'products_img.name as imagen')
          ->where('products.deleted',0)
          ->where('products.active',1)
          ->where('categories_products.category_id',$id)
          ->get();
          return $products;
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

<?php

namespace App\Http\Controllers;

use App\Products;
use App\Category;
use App\SubCategory;
use App\Sub_SubCategory;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Users;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $id = Auth::user()->id;
        $category = Category::all();
        $subcategory =SubCategory::all();
        $sub_subcategory = Sub_SubCategory::all();
        $products = Products::where('partners_id', $id)->get();

        return view('partners.allproducts', compact('products', 'category', 'subcategory', 'sub_subcategory'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id){
        
        $folder = 'images/'.Auth::user()->id;
        $images = $request->images;
        
        $imagesArr=array();

        if ($images) {
            foreach ($images as $image) {
                $imageName = $image->getClientOriginalName();
                $image->move( $folder ,$imageName);
                

                $imagesArr[] = $imageName;
            }
        }
        $dataImages = serialize($imagesArr);
        $colors = $request->product_color;

        $subcategory = explode("/",$request->input('subcategory'));
        $sub_subcategory = explode("/",$request->input('sub_subcategory'));
        $data = array(
            'category' => $request->input('category'),
            'subcategory' => $subcategory[0],
            'sub_subcategory' => $sub_subcategory[0],
            'product_type' => $request->input('product_type'),
            'name' => $request->input('name'),
            'status' => $request->input('status'),
            'madefrom' => $request->input('madefrom'),
            'product_brand' => $request->input('product_brand'),
            'product_color' => serialize($colors),
            'product_format' => $request->input('product_format'),  
            'product_info' => $request->input('product_info'),
            'images' => $dataImages,
            'partners_id' => $id,
        );

        Products::create($data);
        return back()->with('success','well done!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view($id){
        $product = Products::find($id);
        return view('partners.productDetail', compact('product'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $product = Products::find($id);
        return view('partners.productEdit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $product = Products::find($id);
        $product->delete();
        return back()->with('deleted', 'Товар удален из списка');
    }
    


    public function category(Request $request){
        if($request->has('category')){
            $data = array(
                'name' => $request->input('category'),
            );
            Category::create($data);
        }
        
        return back();
    }
    public function subcategory(Request $request){
        
        if($request->has('subcategory')){
            $data1 = array(
                'name' => $request->input('subcategory'),
                'category_id' => $request->input('category_id'),
            );
            SubCategory::create($data1);
        }
        return back();
    }
    public function sub_subcategory(Request $request){
        if($request->has('sub_subcategory')){
        $subcategory_id = explode('/',$request->input('subcategory_id'));
            $data1 = array(
                'name' => $request->input('sub_subcategory'),
                'category_id' => $request->input('category_id'),
                'subcategory_id' => $subcategory_id[1],
            );
            Sub_SubCategory::create($data1);
        }
        return back();
    }

}

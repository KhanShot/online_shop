<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Products;
use App\Category;
use App\SubCategory;
use App\Sub_SubCategory;
use App\Users;
use App\Cart;
use Illuminate\Support\Facades\DB;
use App\Wishlist;

class FrontController extends Controller{
    public function index(){
    	$category = Category::all();
    	$subcategory = SubCategory::all();
    	$sub_subcategory = Sub_SubCategory::all();
    	$products = Products::all();
        $wishlist = "0";
        $cartitem = "0";
        $countcart = 0;
        if(Auth::check()){
            $cartitem = DB::table('cart')
                 ->select('product_id', 'user_id', DB::raw('count(*) as total'))
                 ->groupBy('product_id')
                 ->groupBy('user_id')
                 ->get();
            $wishlist = Wishlist::where('user_id',Auth::user()->id)->get();
            $countcart = Cart::where('user_id', Auth::user()->id)->get();
        }
    	return view('front.home', compact('category', 'subcategory', 'sub_subcategory','products', 'cartitem','countcart', 'wishlist'));	
    }

    public function detail($id){
    	$category = Category::all();
    	$subcategory = SubCategory::all();
    	$sub_subcategory = Sub_SubCategory::all();
    	$product = Products::where('id', $id)->get()->first();
        $products = Products::all();
        $cartitem = "0";
        $countcart = 0;
        $wishlist = "0";
        if(Auth::check()){
            $cartitem = DB::table('cart')
                 ->select('product_id', 'user_id', DB::raw('count(*) as total'))
                 ->groupBy('product_id')
                 ->groupBy('user_id')
                 ->get();
            $countcart = Cart::where('user_id', Auth::user()->id)->get();
            $wishlist = Wishlist::where('user_id',Auth::user()->id)->get();
        }
    	return view('front.detail', compact('category', 'subcategory', 'sub_subcategory','product', 'products', 'cartitem','countcart','wishlist'));
    }
    public function categories($id){
        $category = Category::all();
        $subcategory = SubCategory::all();
        $products = Products::where('sub_subcategory', $id)->get();
        $cartitem = "0";
        $countcart = 0;
        if(Auth::check()){
            $cartitem = DB::table('cart')
                 ->select('product_id', 'user_id', DB::raw('count(*) as total'))
                 ->groupBy('product_id')
                 ->groupBy('user_id')
                 ->get();
            $countcart = Cart::where('user_id', Auth::user()->id)->get();
        }
        $sub_subcategory = Products::where('sub_subcategory',$id);
        return view('front.category',compact('category', 'subcategory', 'sub_subcategory','products', 'cartitem','countcart'));
    }


    public function userprofile($id){
        return "halo";
    }
}

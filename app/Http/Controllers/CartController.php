<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Category;
use App\SubCategory;
use App\Sub_SubCategory;
use App\Users;
use Auth;
use App\Cart;
use Illuminate\Support\Facades\DB;

class CartController extends Controller{
    public function add($id){
    	$data = array(
    		'product_id' => $id,
    		'user_id' => Auth::user()->id,
    		'qty' => 1,
    	);
    	Cart::create($data);
    	return back();
    }
    public function index(){
    	$category = Category::all();
    	$subcategory = SubCategory::all();
    	$sub_subcategory = Sub_SubCategory::all();
    	$products = Products::all();
    	$countcart = Cart::where('user_id', Auth::user()->id)->get();
    	// $cartitem = Cart::all()->groupBy('product_id');
    	$cartitem = DB::table('cart')
                 ->select('product_id', 'user_id', DB::raw('count(*) as total'))
                 ->groupBy('product_id')
                 ->groupBy('user_id')
                 ->get();

    	return view('front.cart', compact('category', 'subcategory', 'sub_subcategory','products','cartitem','countcart'));
    }
    public function destroy($id){
    	$cartitem = Cart::where('user_id', $id);
    	
    	$cartitem->delete();
    	
    	return back();
    }

    public function delete($id){
    	$cartitem = Cart::where('product_id', $id)->where('user_id', Auth::user()->id);
    	$cartitem->delete();
    	return back();
    }
}

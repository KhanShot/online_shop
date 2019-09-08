<?php

namespace App\Http\Controllers;

use App\Wishlist;
use Auth;
use Illuminate\Http\Request;
use App\Products;
use App\Category;
use App\SubCategory;
use App\Sub_SubCategory;
use App\Users;
use App\Cart;
use Illuminate\Support\Facades\DB;

class WishlistController extends Controller{
    public function index(){
        $category = Category::all();
        $subcategory = SubCategory::all();
        $sub_subcategory = Sub_SubCategory::all();
        $products = Products::all();
        $wishlist = Wishlist::where('user_id',Auth::user()->id)->get();
        
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
        if(Auth::check()){
            return view('front.wishlist',  compact('category', 'subcategory', 'sub_subcategory','products', 'cartitem','countcart', 'wishlist'));
        }
        return redirect('front.home');
    }
    public function create(){
        
    }
    public function delete($id){
        $wishlist = Wishlist::where('product_id', $id)->where('user_id',Auth::user()->id);
        $wishlist->delete();
        return back();
    }
    public function store(Request $request, $id){
        $data = array(
            'product_id' => $id,
            'user_id' =>Auth::user()->id,
        );
        Wishlist::create($data);
        return back();
    }

    public function show(Wishlist $wishlist)
    {
        //
    }
    public function edit(Wishlist $wishlist)
    {
        //
    }

    public function update(Request $request, Wishlist $wishlist)
    {
        //
    }

    public function destroy(Wishlist $wishlist)
    {
        //
    }
}

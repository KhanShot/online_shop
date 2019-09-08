<?php

namespace App\Http\Controllers;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Category;
use App\SubCategory;
use App\Sub_Subcategory;
use Illuminate\Support\Facades\DB;
class UsersController extends Controller{
    public function create(Request $request){
    	$users = Users::where('email', $request->input('email'))->count();
    	if ($users != 0) {
    		return back()->with('msg','почта указанная вами уже существует');
    	}
    	$name = $request->input('name');
    	$email = $request->input('email');
    	$phone = $request->input('phone');
    	$password = $request->input('password');
    	$password1 = Hash::make($password);
    	$data = array(
            'name' => $name,
            'email' => $email,
            'phone'=> $phone,
            'password'=> $password1,
            'is_partner' =>'no',
        );
    	Users::create($data);
    	return back()->with('success', 'Вы успешно авторизованы');


    }

    public function logout(){
    	Auth::logout();
    	return back();
    }
    public function profile($id){
        $user = Users::find($id);
    	return view('profiles/userprofile', compact('user'));
    }

    public function edit(Request $request, $id){
        $user = Users::find($id);
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        
        $user->phone = $request->input('phone');
        $user->market = $request->input('market');
        if($request->has('password')){
            $password = $request->input('password');
            $password1 = Hash::make($password);
            $user->password = $password1;
        }
        $user->password = $user->password;
        $user->save();
        return redirect()->back()->with('edited', 'профиль успешно обнавлен!');

    }
    public function superuser(){
        return view('superuser');
    }
    public function superindex(Request $request){
        $category = Category::all();
        $subcategory = SubCategory::all();
        $sub_subcategory = Sub_Subcategory::all();
         $categories = DB::table('category')
        ->join('subcategory','category.id', "=", 'subcategory.category_id')
        ->get();
        // return $categories;
        if(Auth::check()){
            if(Auth::user()->tin == '1'){
                return view('superuser.index', compact('category', 'sub_subcategory', 'subcategory'));
            }
        }
        else{
            return 'fuck out from here';
        }

    }
}

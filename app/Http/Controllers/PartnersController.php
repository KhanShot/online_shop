<?php

namespace App\Http\Controllers;

use App\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Illuminate\Support\Facades\File;
use App\Category;
use App\SubCategory;
use App\Sub_SubCategory;
class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('partners.index');
    }
    public function dashboard (){
        if(Auth::check()){
            if(Auth::user()->is_partner == 'yes'){
                return view('partners.dashboard');
            }
        }
        else{
            return redirect('/');
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function register(){

        return view('partners.register');
    }
    public function login(){
        if(Auth::check()){
            if(Auth::user()->is_partner == 'yes'){
                return redirect('partners/dashboard');
            }
            else{
                Auth::logout();
                return view('partners.login');
            }
        }
        return view('partners.login');
    }



    public function create(Request $request){
        $partners = Users::where('email', $request->input('email'))->orWhere('phone', $request->input('phone'))->count();
        if ($partners != 0) {
            return back()->with('msg','почта или номер телефона указанная вами уже существует');
        }
        $data = array(
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'market' => $request->input('market'),
            'password' => Hash::make($request->input('password')),
            'is_partner' =>'yes',
        );
        Users::create($data);
        File::makeDirectory(public_path().'/images/'.$request->input('name'), 0755, true);
        return redirect('partners/login')->with('msg', 'вы успешно авторизованы');
    }


    public function CreateProject(Request $request){
        $category = Category::all();
        $subcategory = SubCategory::all();
        $sub_subcategory = Sub_Subcategory::all();
        return view('partners.CreateProduct',compact('category', 'sub_subcategory', 'subcategory')) ;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partners  $partners
     * @return \Illuminate\Http\Response
     */
    public function show(Partners $partners)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partners  $partners
     * @return \Illuminate\Http\Response
     */
    public function edit(Partners $partners)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partners  $partners
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partners $partners)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partners  $partners
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partners $partners)
    {
        //
    }
}

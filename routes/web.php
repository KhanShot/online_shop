<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'FrontController@index');
Route::get('/products/detail/{id}','FrontController@detail');
Route::get('/category/{id}', 'FrontController@categories')->name('sub_subcategory');
Route::get('/cartadd/{id}', 'CartController@add')->name('add');
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/cart/delete/{id}', 'CartController@destroy')->name('deletecart');

Route::get('partners/enterpage', function () {
    return view('partners.enterpage');
})->name('partners.enterpage');
Route::get('/superuser/login', 'UsersController@superuser');
Route::get('/superuser', 'UsersController@superindex')->name('superuser.index');
Route::get('/profile/userprofile/{id}', 'UsersController@profile')->name('partners.profile');
Route::get('/profile/usersedit/{id}', 'UsersController@edit');


Route::get('superuser/category', 'ProductController@category');
Route::get('superuser/subcategory', 'ProductController@subcategory');
Route::get('superuser/sub_subcategory', 'ProductController@sub_subcategory');

Route::get('/a', 'UsersController@create')->name('createUser');

Auth::routes();


Route::get('logout', 'UsersController@logout')->name('logout');

Route::get('/homeasd', 'HomeController@index')->name('home');

Route::get('/partners/', 'PartnersController@index')->name('partners.index');
Route::get('/partners/register', 'PartnersController@register')->name('partners.register');
Route::get('/partners/login', 'PartnersController@login')->name('partners.login');
Route::get('/partners/create', 'PartnersController@create')->name('partners.create');
Route::get('/partners/dashboard', 'PartnersController@dashboard')->name('partners.dashboard');

Route::get('/partners/CreateProject', 'PartnersController@CreateProject')->name('products.create');
Route::post('/partners/products/store/{id}', 'ProductController@store')->name('products.store');

Route::get('/partners/products/allproducts', 'ProductController@index')->name('products.index');

Route::get('/partners/productDetail/{id}', 'ProductController@view');
Route::get('/partners/editProduct/{id}', 'ProductController@edit');
Route::get('/partners/destroy/{id}', 'ProductController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

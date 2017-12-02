<?php

use App\Http\Requests\connectSellerFormRequest;
use App\admin;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

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



	
Route::get('/change_password', 'change_passwordController@index')->name('change_password');

Route::post('/change_password', 'change_passwordController@update')->name('change_password');




	
Route::resource('material', 'MaterialController');
Route::resource('shop', 'ShopController');
Route::resource('item', 'ItemController');
Route::resource('category', 'CategoryController');
Route::resource('order', 'OrderController');
Route::resource('customer', 'CustomerController');
Route::resource('paymentmethod', 'PaymentMethodController');
Route::resource('brand', 'BrandController');
Route::resource('vendormanager', 'VendorManagerController');
Route::resource('admin', 'AdminController');
Route::resource('passwordresset', 'PasswordRessetController');
Route::resource('orderitem', 'OrderItemController');
Route::resource('itemcategory', 'ItemCategoryController');

















//ROUTES RELATIVES A LA CONNECTION

	Route::get('/', function(){
		if( session()->has('admin') ){
			//dd( cookie('laravel_session') );
			Session::flush();
			//\Cookie::forget('laravel_session');
			return Redirect::route('home');
		}else{
			return view('welcome');
		}	
	})->name('home');

	Route::get('/connecting', 'shopController@index')->name('connexion');

	Route::get('/shop', function(){
		if( session()->has('admin') ){
			return view('shop');
		}else{
			Session::flush();
			return Redirect::route('home');
		}
	})->name('shop');

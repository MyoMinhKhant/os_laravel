<?php

use Illuminate\Support\Facades\Route;

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



//frontend


Route::get('/','PageController@mainfun')->name('mainpage');

Route::get('itemsbybrand/{id}','PageController@itemsbybrand')->name('itemsbybrandpage');

Route::get('itemdetail/{id}','PageController@itemdetail')->name('itemdetailpage');

Route::get('loginform','PageController@loginfun')->name('loginpage');

Route::get('promotion','PageController@promotionfun')->name('promotionpage');

Route::get('registerform','PageController@registerfun')->name('registerpage');

Route::get('shoppingcart','PageController@shoppingcartfun')->name('shoppingcartpage');

Route::get('subcategory/{id}','PageController@subcategoryfun')->name('subcategorypage');

//backend

Route::middleware('role:Admin')->group(function(){

Route::get('dashboard','BackendpageController@dashboardfun')->name('dashboardpage');

Route::resource('items','ItemController');
});
Route::resource('brands','BrandController');
Route::resource('categories','CategoryController');
Route::resource('subcategories','SubcategoryController');


//
Route::resource('orders','OrderController');








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

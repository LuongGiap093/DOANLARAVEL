<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::group(['prefix' => 'panel', 'namespace' => 'admin'], function() {	
	Route::get('login','LoginController@getLogin')->name('getLogin');
	Route::post('login','LoginController@postLogin')->name('postLogin');
	Route::get('logout','LoginController@getLogout')->name('getLogout');
});

Route::group(['middleware' => 'CheckAdminLogin','prefix' => 'panel'], function() {
	Route::get('/', function() {return view('admin.home');})->name('welcome');
});

Route::group(['middleware' => 'CheckAdminLogin','prefix' => 'panel/user', 'namespace' => 'admin'], function() {
	Route::get('/', 'UserController@index')->name('user.index');
	Route::get('index','UserController@index')->name('user.index');
	Route::get('add','UserController@getadd')->name('user.getadd');
	Route::post('add','UserController@postadd')->name('user.postadd');
	Route::get('edit/{id}','UserController@getedit')->name('user.getedit');
	Route::post('edit/{id}','UserController@postedit')->name('user.postedit');
	Route::get('delete/{id}','UserController@delete')->name('user.delete');
});

Route::resource('panel/product',admin\ProductController::class);
Route::resource('panel/category',admin\CategoryController::class);
Route::resource('panel/customer',admin\CustomerController::class);
Route::resource('panel/order',admin\OrderController::class);
/* Route::resource('panel/news',admin\CategoryNews::class); */

Route::get('panel/category/productlist/{id}','admin\CategoryController@productlist')->name('category.productlist');


Route::group(['prefix' => 'product', 'namespace' => 'FrontEnd'], function() {
/* 	Route::get('/', 'ProductsController@index');
	Route::get('cart', 'ProductsController@cart');
	Route::get('add-to-cart/{id}', 'ProductsController@addToCart');
	Route::patch('update-cart', 'ProductsController@update');
	Route::delete('remove-from-cart', 'ProductsController@remove'); */

	
	Route::get('checkout','ProductsController@DetailsCheckout');
	Route::get('hoanthanh','ProductsController@hoanthanh');
	Route::post('dathang','ProductsController@postCheckout')->name('dathang');
});


Route::group(['prefix' => '', 'namespace' => 'user'], function() {
		Route::get('', 'UserController@index')->name('shopping.index');
		Route::get('category', 'UserController@category')->name('shopping.category');	
		//Route::get('product', 'UserController@product')->name('shopping.product');
		//Route::get('cartdetail', 'UserController@cartDetail')->name('shopping.cartdetail');
		Route::get('viewCart', 'UserController@viewCart')->name('shopping.viewCart');
		Route::get('details/{id}','UserController@viewProduct')->name('shopping.viewProduct');
		//Route::get('checkout','UserController@getCheckout')->name('shopping.getCheckout');
		
		Route::get('addCart/{id}','UserController@AddCart')->name('shopping.addCart');
		Route::get('details/addCart/{id}','UserController@AddCart')->name('shopping.addCart');
		Route::get('deleteItemCart/{id}','UserController@deleteItemCart')->name('shopping.deleteItemCart');
		Route::get('details/deleteItemCart/{id}','UserController@deleteItemCart'); //Dung de delete Cart trang details
		
		Route::get('delete-ListItemCart/{id}','UserController@deleteListItemCart')->name('shopping.delete-ListItemCart');
		Route::get('save-ListItemCart/{id}/{quanty}','UserController@saveListItemCart')->name('shopping.save-ListItemCart');

		Route::get('loaisp/{id}','UserController@getsp')->name('shopping.loaisp');
});
/*
GET	    /product	        		index	product.index
GET	    /product/create	    		create	product.create
POST	/product					store	product.store
GET		/product/{product}			show	product.show
GET		/product/{product}/edit		edit	product.edit
PUT/PATCH	/product/{product}		update	product.update
DELETE	/ product/{product}			destroy	product.destroy
*/
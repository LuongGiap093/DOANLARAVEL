<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::group(['prefix' => 'panel', 'namespace' => 'admin'], function() {
	Route::get('login','LoginController@getLogin')->name('getLogin');
	Route::post('login','LoginController@postLogin')->name('postLogin');
	Route::get('logout','LoginController@getLogout')->name('getLogout');
});
Route::group(['prefix' => '', 'namespace' => 'user'], function() {
  Route::get('login','AccountCustomerController@getLogin')->name('customer.getLogin');
  Route::post('login','AccountCustomerController@postLogin')->name('customer.postLogin');
  Route::get('logout','AccountCustomerController@getLogout')->name('customer.getLogout');
});

Route::group(['middleware' => 'CheckAdminLogin','prefix' => 'panel'], function() {
	Route::get('/', function() {return view('admin.home');})->name('welcome');
});

Route::group(['middleware' => 'CheckAdminLogin','prefix' => 'panel/user', 'namespace' => 'admin'], function() {
	Route::get('/', 'UserController@index')->name('user.index');
	Route::get('index','UserController@index')->name('user.index');
  Route::get('profile','UserController@profile')->name('user.profile');
	Route::get('add','UserController@getadd')->name('user.getadd');
	Route::post('add','UserController@postadd')->name('user.postadd');
	Route::get('edit/{id}','UserController@getedit')->name('user.getedit');
	Route::post('edit/{id}','UserController@postedit')->name('user.postedit');
	Route::get('delete/{id}','UserController@delete')->name('user.delete');
  Route::get('changestatus/{id}','UserController@changestatus')->name('user.changestatus');
});

Route::resource('panel/product', admin\ProductController::class);
Route::resource('panel/category', admin\CategoryController::class);
Route::resource('panel/customer', admin\CustomerController::class);
Route::resource('panel/order', admin\OrderController::class);
Route::resource('panel/slider', admin\SliderController::class);
Route::resource('panel/blog', admin\BlogController::class);
Route::resource('panel/faq', admin\FaqController::class);
Route::resource('panel/contact', admin\ContactController::class);
Route::resource('panel/filemanager', admin\FilemanagerController::class);
Route::resource('panel/coupon', admin\CouponController::class);
Route::resource('panel/delivery', admin\DeliveryController::class);
Route::resource('panel/brand',admin\BrandController::class);
Route::resource('panel/logo',admin\LogoController::class);
Route::resource('panel/dashboard',admin\DashboardController::class);


Route::group(['prefix' => 'panel', 'namespace' => 'admin'], function () {
    Route::post('update-delivery','DeliveryController@update_delivery')->name('update-delivery');
    Route::post('select-delivery','DeliveryController@select_delivery')->name('select-delivery');
    Route::post('insert-delivery','DeliveryController@insert_delivery')->name('insert');
    Route::get('category/productlist/{id}', 'CategoryController@productlist')->name('category.productlist');
});

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


Route::group(['prefix' => '', 'namespace' => 'user'], function () {
    Route::get('', 'UserController@index')->name('shopping.index');
    Route::get('category', 'UserController@category')->name('shopping.category');
    Route::get('show-product', 'UserController@show_product')->name('shopping.show-product');
    Route::get('show-phone/{id}', 'UserController@show_phone')->name('shopping.show-category');
    Route::get('show-brand/{id}', 'UserController@show_brand')->name('shopping.show-brand');

    Route::get('search','UserController@search_product')->name('search-product');

    Route::get('blog', 'BlogController@index')->name('shopping.blog');
    Route::get('blogdetail/{id}', 'BlogController@blogdetail')->name('blog.detail');
    Route::get('coupon','CouponController@index')->name('shopping.coupon');

    Route::get('contact-form', 'ContactController@showForm')->name('showForm');
//    Route::get('/contact-form', [ContactController::class, 'showForm']);
  Route::post('contact-form', 'ContactController@storeForm')->name('contact.save');
//    Route::post('/contact-form', [ContactController::class, 'storeForm'])->name('contact.save');

    Route::get('faq', 'FaqController@index')->name('shopping.faq');
//
    Route::get('login', 'LoginCustomerController@index')->name('shopping.login');
		//Route::get('cartdetail', 'UserController@cartDetail')->name('shopping.cartdetail');
		Route::get('viewCart', 'UserController@viewCart')->name('shopping.viewCart');
		Route::get('details/{id}','UserController@viewProduct')->name('shopping.viewProduct');
		//Route::get('checkout','UserController@getCheckout')->name('shopping.getCheckout');

    Route::get('addCart/{id}', 'UserController@AddCart')->name('shopping.addCart');
    Route::get('details/addCart/{id}', 'UserController@AddCart')->name('shopping.addCart');
    Route::get('deleteItemCart/{id}', 'UserController@deleteItemCart')->name('shopping.deleteItemCart');
    Route::get('details/deleteItemCart/{id}', 'UserController@deleteItemCart'); //Dung de delete Cart trang details

    Route::get('delete-ListItemCart/{id}', 'UserController@deleteListItemCart')->name('shopping.delete-ListItemCart');
    Route::get('save-ListItemCart/{id}/{quanty}', 'UserController@saveListItemCart')->name('shopping.save-ListItemCart');

    Route::get('loaisp/{id}', 'UserController@getsp')->name('shopping.loaisp');

    Route::post('AddCoupon', 'CouponController@AddCoupon')->name('giamgia');
    Route::get('DeleteCoupon', 'CouponController@DeleteCoupon')->name('delete-coupon');
    Route::post('select-delivery-home','UserController@select_delivery_home')->name('select-delivery-home');
    Route::post('calculate-fee','UserController@calculate_fee')->name('calculate-fee');
    Route::post('dat-hang','UserController@dat_hang')->name('dat-hang');


    Route::post('account_add','LoginCustomerController@postadd')->name('user.postadd');
    Route::get('add/to-wishlist/{id}', 'WishlistController@addToWishlist');
    Route::get('wishlist', 'WishlistController@index')->name('showWishlist');
    Route::get('wishlist/destroy/{wishlist_id}','WishlistController@destroy');

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

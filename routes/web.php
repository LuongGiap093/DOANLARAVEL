<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::group(['prefix' => 'panel', 'namespace' => 'admin'], function() {
	Route::get('login','LoginController@getLogin')->name('getLogin');
	Route::post('login','LoginController@postLogin')->name('postLogin');
	Route::get('logout','LoginController@getLogout')->name('getLogout');
});
Route::group(['prefix' => '', 'namespace' => 'user'], function() {
    Route::get('tai-khoan','AccountCustomerController@index')->name('dang-nhap');
});

Route::group(['middleware' => 'CheckAdminLogin','prefix' => 'admin'], function() {
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

  Route::get('search','DashboardController@search_order')->name('order.search');

    Route::post('logo/trang-thai','LogoController@hien_thi')->name('logo.trang-thai');

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
    Route::get('add-gallery/{id}', 'GalleryController@add_gallery')->name('add-gallery');
    Route::post('select-gallery', 'GalleryController@select_gallery')->name('select-gallery');
    Route::post('insert-gallery/{id}', 'GalleryController@insert_gallery')->name('insert-gallery');
    Route::post('update-gallery', 'GalleryController@update_gallery')->name('update-gallery');
    Route::post('delete-gallery', 'GalleryController@delete_gallery')->name('delete-gallery');

    Route::get('chi-tiet-hoa-don/{id}','OrderController@view_order_detail')->name('chi-tiet-hoa-don');
    Route::get('cap-nhat-trang-thai/{id}','OrderController@order_status')->name('cap-nhat-trang-thai');
});

Route::get('panel/category/productlist/{id}','admin\CategoryController@productlist')->name('category.productlist');


Route::group(['prefix' => '', 'namespace' => 'user'], function () {
//    Route::get('', 'UserController@index')->name('shopping.index');
    Route::get('category/{id}', 'UserController@show_category_product')->name('shopping.show-category');
    Route::get('show-brand/{id}', 'UserController@show_brand')->name('shopping.show-brand');
    Route::get('loaisp/{id}', 'UserController@getsp')->name('shopping.loaisp');
});

    Route::get('blog', 'BlogController@index')->name('shopping.blog');
    Route::get('blogdetail/{id}', 'BlogController@blogdetail')->name('blog.detail');
    Route::get('coupon','CouponController@index')->name('shopping.coupon');

Route::group(['prefix' => '', 'namespace' => 'user'], function () {
    Route::get('trang-chu', 'UserController@trang_chu')->name('trang-chu');
    Route::get('san-pham', 'UserController@san_pham')->name('san-pham');
    Route::get('bai-viet', 'BlogController@bai_viet')->name('bai-viet');
    Route::get('lien-he', 'ContactController@lien_he')->name('lien-he');
    Route::get('danh-sach-yeu-thich', 'WishlistController@yeu_thich')->name('yeu-thich');
    Route::get('so-sanh-san-pham', 'CompareController@index')->name('so-sanh');
    Route::get('trang-gio-hang', 'CartController@viewCart')->name('gio-hang');
    Route::get('tim-kiem/san-pham','UserController@tim_kiem')->name('tim-kiem');
    Route::get('thanh-toan','CheckoutController@index')->name('thanh-toan');
//    Route::get('san-pham/chi-tiet-san-pham/{id}','UserController@chi_tiet')->name('chi-tiet-sp');
    Route::get('details/{id}','UserController@viewProduct')->name('shopping.viewProduct');
    Route::post('nhan-xet/{id}','CommentController@add_comment')->name('nhan-xet');
    Route::get('san-pham/danh-muc/{id}', 'UserController@danh_muc')->name('danh-muc');
    Route::get('san-pham/danh-muc/thuong-hieu/{id}', 'UserController@thuong_hieu')->name('thuong-hieu');
    Route::get('tin-tuc/bai-viet/{id}', 'BlogController@blogdetail')->name('blog.detail');

    Route::post('select-delivery-home','CheckoutController@select_delivery_home')->name('chon-van-chuyen');
    Route::post('calculate-fee','CheckoutController@calculate_fee')->name('tinh-van-chuyen');

    Route::post('xac-nhan-dat-hang', 'CheckoutController@checkout')->name('shopping.checkout');

});

Route::group(['prefix' => '', 'namespace' => 'user'], function () {
    Route::get('/', 'HomeController@index')->name('shopping.home');

    Route::get('thong-tin-tai-khoan','AccountCustomerController@profiles')->name('customer.profiles');
    Route::get('create-profiles','UserController@create_profiles')->name('create-profiles');
    Route::get('dang-ky-dang-nhap', 'AccountCustomerController@getLogin')->name('shopping.login');
    Route::post('dang-ky','AccountCustomerController@postadd')->name('customer.postadd');
    Route::post('dang-nhap','AccountCustomerController@postLogin')->name('customer.postLogin');
    Route::get('dang-xuat','AccountCustomerController@getLogout')->name('customer.getLogout');

    Route::get('danh-sach-yeu-thich', 'WishlistController@index')->name('shopping.showWishlist');
    Route::get('danh-sach-yeu-thich/them/{id}', 'WishlistController@addToWishlist');
    Route::get('danh-sach-yeu-thich/xoa/{wishlist_id}','WishlistController@destroy');

    Route::get('tim-kiem','HomeController@search_product')->name('product.search');
    Route::get('tim-kiem/addCart/{id}', 'UserController@AddCart')->name('shopping.addCart');

    Route::get('gio-hang', 'CartController@index')->name('shopping.cart');
    Route::get('addCart/{id}', 'UserController@AddCart')->name('shopping.addCart');
    Route::get('deleteItemCart/{id}', 'UserController@deleteItemCart')->name('shopping.deleteItemCart');
    Route::get('details/deleteItemCart/{id}', 'UserController@deleteItemCart'); //Dung de delete Cart trang details
    Route::get('delete-ListItemCart/{id}', 'UserController@deleteListItemCart')->name('shopping.delete-ListItemCart');
    Route::get('save-ListItemCart/{id}/{quanty}', 'UserController@saveListItemCart')->name('shopping.save-ListItemCart');
    Route::get('save-ListItemCart1/{id}/{quanty}', 'UserController@saveListItemCart1')->name('shopping.save-ListItemCart1');
    Route::get('chi-tiet/addCart/{id}', 'UserController@AddCart')->name('shopping.addCart');
    Route::get('tin-tuc/bai-viet/addCart/{id}', 'UserController@AddCart')->name('shopping.addCart');

    Route::get('san-pham/danh-muc/thuong-hieu/{id}', 'ProductController@index')->name('product.show-brand');
    Route::get('san-pham/danh-muc/addCart/{id}', 'UserController@AddCart')->name('shopping.addCart');
    Route::get('san-pham/danh-muc/thuong-hieu/addCart/{id}', 'UserController@AddCart')->name('shopping.addCart');

    Route::get('chi-tiet/{id}','ProductController@viewProduct')->name('product.viewProduct');
    Route::get('chi-tiet/addCart/{id}', 'UserController@AddCart')->name('shopping.addCart');

    Route::get('tin-tuc', 'BlogController@index')->name('shopping.blog');
    Route::get('tin-tuc/bai-viet/{id}', 'BlogController@blogdetail')->name('shopping.blog-detail');

    Route::get('Lien-he', 'ContactController@showForm')->name('shopping.contact');
    Route::post('dang-ky-lien-he', 'ContactController@storeForm')->name('shopping.addcontact');

    Route::get('faq', 'FaqController@index')->name('shopping.faq');

    Route::get('coupon','CouponController@index')->name('shopping.coupon');

    Route::get('thu-tuc-thanh-toan','CheckoutController@index')->name('shopping.checkout-page');
    Route::post('AddCoupon', 'CouponController@AddCoupon')->name('giamgia');
    Route::get('DeleteCoupon', 'CouponController@DeleteCoupon')->name('delete-coupon');
    Route::post('chon-dia-diem','CheckoutController@select_delivery_home')->name('checkout.dia-chi');
    Route::post('tinh-phi-van-chuyen','CheckoutController@calculate_fee')->name('checkout.tinh-phi');
    Route::post('xac-nhan-dat-hang', 'CheckoutController@checkout')->name('shopping.checkout');
    Route::get('track-order','UserController@track_order')->name('track-order');

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

<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Auth;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;

class WishlistController extends Controller {

  public function index() {
//    $contacts=Contact::all();
//    return view('user.page.contact',compact('contacts'));
    $wishlists = Wishlist::where('customer_id',Auth::guard('account_customer')->id())->latest()->get();
    return view('user.page.wishlish',compact('wishlists'));
  }
  public function addToWishlist($product_id) {
    if (Auth::guard('account_customer')->check()) {
      Wishlist::insert([
        'customer_id' => Auth::guard('account_customer')->id(),
        'product_id' => $product_id,
      ]);
      return Redirect()->back()->with('cart', 'Sản phẩm đã thêm vào yêu thích');
    }
    else {
      return Redirect()->route('shopping.login')->with('cart', 'Hãy đăng nhập');

    }
  }
  public function destroy($wishlist_id){
    Wishlist::where('id',$wishlist_id)->where('customer_id',Auth::guard('account_customer')->id())->delete();
    return Redirect()->back()->with('wishlist','Sản phẩm yêu thích đã xóa');
  }

}

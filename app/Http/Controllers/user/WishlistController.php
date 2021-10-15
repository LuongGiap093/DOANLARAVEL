<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Logo;
use App\Models\Wishlist;
use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;

class WishlistController extends Controller
{

    public function index()
    {
        $logos = Logo::first();
        $wishlists = Wishlist::where('customer_id', Auth::guard('account_customer')->id())->latest()->get();
        return view('user.page.wishlist_page.wishlist', compact('wishlists', 'logos'));
    }

    public function addToWishlist($product_id)
    {
        $status = Wishlist::where('customer_id', Auth::guard('account_customer')->id())->where('product_id', $product_id)->first();
        if (isset($status->customer_id) and isset($status->product_id)) {
            return redirect()->back()->with('wishlist', 'Sản phẩm đã tồn tại trong danh sách yêu thích');
        } else {
            if (Auth::guard('account_customer')->check()) {
                Wishlist::insert([
                    'customer_id' => Auth::guard('account_customer')->id(),
                    'product_id' => $product_id,
                ]);
                return Redirect()
                    ->back()
                    ->with('wishlist', 'Sản phẩm đã thêm vào yêu thích');
            } else {
                return Redirect()
                    ->route('shopping.login')
                    ->with('wishlist', 'Hãy đăng nhập');
            }
        }
    }

    public function destroy($wishlist_id)
    {
        Wishlist::where('id', $wishlist_id)->where('customer_id', Auth::guard('account_customer')->id())->delete();
        return Redirect()->back()->with('wishlist', 'Sản phẩm yêu thích đã xóa');
    }

}

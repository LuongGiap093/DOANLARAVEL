<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Logo;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Auth;
use DB;

class AboutController extends Controller
{
    //
    public function index()
    {
        $logos = Logo::first();
        $categorys = Category::where('category_status', 1)->orderby('category_position', 'asc')->limit(4)->get();
        $cate = Category::orderby('category_position', 'asc')
            ->join('product', 'category.category_id', '=', 'product.idcat')
            ->join('brands', 'product.brand_id', '=', 'brands.brand_id')
            ->get();
        $brands = Brand::all();
        if (Auth::guard('account_customer')->check()) {
            $wishlists = Wishlist::where('customer_id', Auth::guard('account_customer')->id())->get();
        } else {
            $wishlists = null;
        }
        return view('user.page.about_page.gioi-thieu', compact('wishlists', 'brands', 'cate', 'logos', 'categorys'));
    }
}

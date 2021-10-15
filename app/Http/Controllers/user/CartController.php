<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\City;
use App\Models\Coupon;
use App\Models\Logo;
use DB;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function viewCart()
    {
        $logos=Logo::first();
        $categorys=Category::where('category_status',1)->orderby('category_position','asc')->get();
        $brands=Brand::all();
        $products = DB::table('product')->where('status','<>',0)->get();
        return view('frontend.page.cart_page.cart',compact('categorys','products','logos','brands'));
    }

    public function index()
    {
        $logos=Logo::first();
        $categorys=Category::where('category_status',1)->orderby('category_position','asc')->limit(4)->get();
        $cate=Category::orderby('category_position','asc')
            ->join('product','category.category_id','=','product.idcat')
            ->join('brands','product.brand_id','=','brands.brand_id')
            ->get();
        $brands=Brand::all();
        $coupons=Coupon::all();
        $city=City::orderby('matp','ASC')->get();
        return view('user.page.cart_page.cart',compact('brands','cate','logos','categorys','coupons','city'));
    }
}

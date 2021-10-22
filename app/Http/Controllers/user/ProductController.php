<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Cart;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Logo;
use App\Models\Product;
use App\Models\Brand;
use App\Models\AccountCustomer;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use DB;
use Auth;

class ProductController extends Controller
{
    public function index($id){
        $logos=Logo::first();
        $categorys=Category::where('category_status',1)->orderby('category_position','asc')->get();
        $brands=Brand::all();
        $product_tag=Product::where('status','=',2)->orderby('id','desc')->limit(8)->get();
        $valible=0;
        $products = DB::table('product')->where('status','<>',0)->where('brand_id', $id)->paginate(9);
        $cate=Category::orderby('category_position','asc')
            ->join('product','category.category_id','=','product.idcat')
            ->join('brands','product.brand_id','=','brands.brand_id')
            ->get();
        if (Auth::guard('account_customer')->check()) {
            $wishlists = Wishlist::where('customer_id', Auth::guard('account_customer')->id())->get();
        }else{
            $wishlists=null;
        }
        return view('user.page.product_page.index',compact('wishlists','cate','product_tag','valible','categorys','products','logos','brands'));
    }
    public function show_brand($id){
        $logos=Logo::first();
        $categorys=Category::where('category_status',1)->orderby('category_position','asc')->limit(4)->get();
        $cate=Category::orderby('category_position','asc')
            ->join('product','category.category_id','=','product.idcat')
            ->join('brands','product.brand_id','=','brands.brand_id')
            ->get();
        if (Auth::guard('account_customer')->check()) {
            $wishlists = Wishlist::where('customer_id', Auth::guard('account_customer')->id())->get();
        }else{
            $wishlists=null;
        }
        $products = DB::table('product')->where('status','<>',0)->where('brand_id', $id)->paginate(9);
        return view('user.page.product_page.index',compact('wishlists','cate','categorys','products','logos'));
    }
    public function show_category($id){
        $logos=Logo::first();
        $categorys=Category::where('category_status',1)->orderby('category_position','asc')->limit(4)->get();
        $cate=Category::orderby('category_position','asc')
            ->join('product','category.category_id','=','product.idcat')
            ->join('brands','product.brand_id','=','brands.brand_id')
            ->get();
        if (Auth::guard('account_customer')->check()) {
            $wishlists = Wishlist::where('customer_id', Auth::guard('account_customer')->id())->get();
        }else{
            $wishlists=null;
        }
        $products = DB::table('product')->where('status','<>',0)->where('idcat', $id)->paginate(9);
        return view('user.page.product_page.index',compact('wishlists','cate','categorys','products','logos'));
    }

    public function viewProduct($id)
    {
        $logos=Logo::first();
        $categorys=Category::where('category_status',1)->orderby('category_position','asc')->limit(4)->get();
        $cate=Category::orderby('category_position','asc')
            ->join('product','category.category_id','=','product.idcat')
            ->join('brands','product.brand_id','=','brands.brand_id')
            ->get();
        if (Auth::guard('account_customer')->check()) {
            $wishlists = Wishlist::where('customer_id', Auth::guard('account_customer')->id())->get();
        }else{
            $wishlists=null;
        }
        $products = Product::find($id);
        $brands=Brand::all();
        $gallerys=DB::table('gallery')->where('product_id','=',$id)->get();
        $hot_deals=DB::table('product')->where('status','=',3)->orderby('discount','desc')->get();


        $brand_id=$products->brand_id;
        $brand=Brand::find($brand_id);
        $category_id=$products->idcat;
        $related_product=DB::table('product')
            ->where('idcat',$category_id)
            ->where('brand_id',$brand_id)
            ->whereNotIn('id',[$id])->get();
        $comments=Comment::where('product_id',$id)
            ->join('account_customers','comment.customer_id','=','account_customers.id')
            ->get();
        $countcmt=$comments->count();
        $avgstar=$comments->avg('star');
        $star=round($avgstar);
        $avgs=round($avgstar,1);
        $datenow=Carbon::now()->day;
        return view('user.page.product_detail_page.view-product', compact('wishlists','avgs','star','countcmt','datenow','comments','cate','brand','hot_deals','logos','categorys','gallerys','brands','products','related_product'));

    }
}

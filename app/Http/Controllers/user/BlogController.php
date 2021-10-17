<?php

namespace App\Http\Controllers\user;

use App\Cart;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Logo;
use DB;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Collection;

class BlogController extends Controller
{


    public function index()
    {
        $logos = Logo::first();
        $categorys=Category::where('category_status',1)->orderby('category_position','asc')->limit(4)->get();
        $cate=Category::orderby('category_position','asc')
            ->join('product','category.category_id','=','product.idcat')
            ->join('brands','product.brand_id','=','brands.brand_id')
            ->get();
        $product_tag=Product::where('status','<>',0)->orderby('view_number','desc')->limit(8)->get();
        $blogs = Blog::orderby('blog_id','desc')->get();

        return view('user.page.blog_page.blog', compact('logos','cate','categorys','product_tag','blogs'));
    }

    public function bai_viet()
    {
        $logos = Logo::first();
        $blogs = Blog::all();
        $categorys=Category::where('category_status',1)->orderby('category_position','asc')->limit(4)->get();
        $cate=Category::orderby('category_position','asc')
            ->join('product','category.category_id','=','product.idcat')
            ->join('brands','product.brand_id','=','brands.brand_id')
            ->get();
        $brands=Brand::all();

        return view('frontend.page.blogs.blog_1', compact('categorys','cate','blogs','brands','logos'));
    }

    public function blogdetail($id)
    {
        $logos = Logo::first();
        $product_tag=Product::where('status','<>',0)->orderby('view_number','desc')->limit(8)->get();
        $blog_detail = Blog::find($id);
        $categorys=Category::where('category_status',1)->orderby('category_position','asc')->limit(4)->get();
        $cate=Category::orderby('category_position','asc')
            ->join('product','category.category_id','=','product.idcat')
            ->join('brands','product.brand_id','=','brands.brand_id')
            ->get();

        return view('user.page.blog_page.blog_details', compact('blog_detail','cate','categorys','logos','product_tag'));
    }

    public function show_blog()
    {

    }
}

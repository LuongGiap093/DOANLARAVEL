<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\AccountCustomer;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Category;
use App\Models\City;
use App\Models\Logo;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    //
    public function index(){
        $logos=Logo::first();
        $categorys=Category::where('category_status',1)->orderby('category_position','asc')->limit(4)->get();
        $hot_deals=DB::table('product')->where('status','=',3)->orderby('discount','desc')->get();
        $dong_ho=Product::join('category','category.category_id','=','product.idcat')
            ->where('product.status','<>',0)
            ->where('category.category_name','like','%'.'đồng hồ'.'%')
            ->orderby('view_number','desc')->limit(30)->get();
        $dien_thoai=Product::join('category','category.category_id','=','product.idcat')
            ->where('product.status','<>',0)
            ->where('category.category_name','like','%'.'điện thoại'.'%')
            ->orderby('view_number','desc')->limit(30)->get();
        $product_tag=Product::where('status','<>',0)->orderby('view_number','desc')->limit(8)->get();
        $may_cu=Product::join('category','category.category_id','=','product.idcat')
            ->where('product.status','<>',0)
            ->where('category.category_name','like','%'.'cũ'.'%')
            ->orderby('view_number','desc')->limit(30)->get();
        $sliders = Slider::all();
        $products = Product::where('status','<>',0)->orderby('id','desc')->limit(30)->get();
        $cate=Category::orderby('category_position','asc')
            ->join('product','category.category_id','=','product.idcat')
            ->join('brands','product.brand_id','=','brands.brand_id')
            ->get();




        $categoryss=DB::table('category')->orderby('category_id','desc')->get();
        $accountcustomers=AccountCustomer::all();
        $brands=Brand::all();
        $best_seller=DB::table('product')->where('status','<>',0)->where('idcat',5)->limit(10)->get();
        $best_seller_2=DB::table('product')->where('status','<>',0)->where('idcat',6)->limit(10)->get();
        $city=City::all();
        $productss = Product::all()->sortByDesc("id");
        $citys=City::orderby('matp','ASC')->get();
        $results = Product::select('idcat')->orderBy('idcat')->get();
        $blogs = Blog::all();
        $firsts = $blogs->first();
        return view('user.page.home.index',
            compact('cate','products',  'productss', 'results', 'sliders','city',
                'citys','brands','accountcustomers','hot_deals','product_tag','blogs','firsts',
                'dong_ho','categoryss','best_seller','best_seller_2','logos','categorys','may_cu','dien_thoai'));
    }

    public function show_product(Request $request){
        $logos=Logo::first();
        $categorys=Category::where('category_status',1)->orderby('category_position','asc')->get();
        $brands=Brand::all();
        $cate=Category::orderby('category_position','asc')
            ->join('product','category.category_id','=','product.idcat')
            ->join('brands','product.brand_id','=','brands.brand_id')
            ->get();

        if(isset($_GET['search_key'])) {
            $products = DB::table('product')
                ->where('status', '<>', 0)
                ->where('name', 'like', '%' . $request->search_key . '%')
                ->orwhere('keywords', 'like', '%' . $request->search_key . '%')
                ->paginate(9)->appends(request()->query());
            return view('user.page.product_page.index', compact('cate','logos','categorys','brands', 'products'));
        }elseif (empty($_GET['search_key'])){
            return view('user.page.product_page.index', compact('cate','logos','categorys','brands'));
        }
    }


}

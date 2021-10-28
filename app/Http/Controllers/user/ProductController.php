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
use Illuminate\Support\Facades\Input;
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
    public function search_product(Request $request){
        $logos=Logo::first();
        $categorys=Category::where('category_status',1)->orderby('category_position','asc')->get();
        $brands=Brand::all();
        $cate=Category::orderby('category_position','asc')
            ->join('product','category.category_id','=','product.idcat')
            ->join('brands','product.brand_id','=','brands.brand_id')
            ->get();
        if (Auth::guard('account_customer')->check()) {
            $wishlists = Wishlist::where('customer_id', Auth::guard('account_customer')->id())->get();
        }else{
            $wishlists=null;
        }
        if(isset($_GET['search_key'])) {
            if(isset($_GET['sort_by'])){
                $sort_by =$_GET['sort_by'];
                if($sort_by=='giam_dan'){
                    $sort='Giá cao đến thấp';
                    $products = DB::table('product')
                        ->where('status', '<>', 0)
                        ->where('name', 'like', '%' . $request->search_key . '%')
                        ->orwhere('keywords', 'like', '%' . $request->search_key . '%')
                        ->orderby('price','desc')
                        ->paginate(9)->appends(request()->query());
                }elseif ($sort_by=='tang_dan'){
                    $products = DB::table('product')
                        ->where('status', '<>', 0)
                        ->where('name', 'like', '%' . $request->search_key . '%')
                        ->orwhere('keywords', 'like', '%' . $request->search_key . '%')
                        ->orderby('price','asc')
                        ->paginate(9)->appends(request()->query());
                    $sort='Giá thấp đến cao';
                }elseif ($sort_by=='kytu_az'){
                    $sort='Ký tự từ A > Z';
                    $products = DB::table('product')
                        ->where('status', '<>', 0)
                        ->where('name', 'like', '%' . $request->search_key . '%')
                        ->orwhere('keywords', 'like', '%' . $request->search_key . '%')
                        ->orderby('name','asc')
                        ->paginate(9)->appends(request()->query());
                }elseif ($sort_by=='kytu_za'){
                    $sort='Ký tự từ Z > A';
                    $products = DB::table('product')
                        ->where('status', '<>', 0)
                        ->where('name', 'like', '%' . $request->search_key . '%')
                        ->orwhere('keywords', 'like', '%' . $request->search_key . '%')
                        ->orderby('name','desc')
                        ->paginate(9)->appends(request()->query());
                }
                elseif ($sort_by=='pho_bien'){
                    $sort='Mức độ phổ biến';
                    $products = DB::table('product')
                        ->where('status', '<>', 0)
                        ->where('name', 'like', '%' . $request->search_key . '%')
                        ->orwhere('keywords', 'like', '%' . $request->search_key . '%')
                        ->orderby('view_number','desc')
                        ->paginate(9)->appends(request()->query());
                }else{
                    $sort='Sắp xếp mặc định';
                    $products = DB::table('product')
                        ->where('status', '<>', 0)
                        ->where('name', 'like', '%' . $request->search_key . '%')
                        ->orwhere('keywords', 'like', '%' . $request->search_key . '%')
                        ->paginate(9)->appends(request()->query());
                }
            }else{
                $sort='Sắp xếp mặc định';
                $products = DB::table('product')
                    ->where('status', '<>', 0)
                    ->where('name', 'like', '%' . $request->search_key . '%')
                    ->orwhere('keywords', 'like', '%' . $request->search_key . '%')
                    ->paginate(9)->appends(request()->query());}
            if ($products == NULL) {
                return abort(404);
            }

            return view('user.page.product_page.index', compact('wishlists','sort','cate','logos','categorys','brands', 'products'));
        }elseif (empty($_GET['search_key'])){
            $sort='Sắp xếp mặc định';
            $products = DB::table('product')
                ->where('status', '<>', 0)
                ->where('name', 'like', '%' . $request->search_key . '%')
                ->orwhere('keywords', 'like', '%' . $request->search_key . '%')
                ->paginate(9)->appends(request()->query());
            return view('user.page.product_page.index', compact('products','wishlists','sort','cate','logos','categorys','brands'));
        }
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
        if(isset($_GET['sort_by'])){
            $sort_by =$_GET['sort_by'];
            if($sort_by=='giam_dan'){
                $sort='Giá cao đến thấp';
                $products = Product::where('brand_id', $id)->where('status','<>',0)->orderby('price','desc')->paginate(9)->appends(request()->query());
            }elseif ($sort_by=='tang_dan'){
                $sort='Giá thấp đến cao';
                $products = Product::where('brand_id', $id)->where('status','<>',0)->orderby('price','asc')->paginate(9)->appends(request()->query());
            }elseif ($sort_by=='kytu_az'){
                $sort='Ký tự từ A > Z';
                $products = Product::where('brand_id', $id)->where('status','<>',0)->orderby('name','asc')->paginate(9)->appends(request()->query());
            }elseif ($sort_by=='kytu_za'){
                $sort='Ký tự từ Z > A';
                $products = Product::where('brand_id', $id)->where('status','<>',0)->orderby('name','desc')->paginate(9)->appends(request()->query());
            }
            elseif ($sort_by=='pho_bien'){
                $sort='Mức độ phổ biến';
                $products = Product::where('brand_id', $id)->where('status','<>',0)->orderby('view_number','desc')->paginate(9)->appends(request()->query());
            }else{
                $sort='Sắp xếp mặc định';
                $products = DB::table('product')->where('status','<>',0)->where('brand_id', $id)->paginate(9);
            }
        }else{
            $sort='Sắp xếp mặc định';
            $products = DB::table('product')->where('status','<>',0)->where('brand_id', $id)->paginate(9);
            if ($products == NULL) {
                return abort(404);
            }
        }
        return view('user.page.product_page.index',compact('sort','wishlists','cate','categorys','products','logos'));
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

//        if(isset($_GET['price'])){
//            $collection = collect(['price'=>$_GET['price']]);
//        }
        if(isset($_GET['sort_by'])){
            $sort_by =$_GET['sort_by'];
//            $collection->push(['sort'=>$sort_by]);
//            dump($collection);
            if($sort_by=='giam_dan'){
                $sort='Giá cao đến thấp';
                $products = Product::where('idcat', $id)->where('status','<>',0)->orderby('price','desc')->paginate(9)->appends(request()->query());
            }elseif ($sort_by=='tang_dan'){
                $sort='Giá thấp đến cao';
                $products = Product::where('idcat', $id)->where('status','<>',0)->orderby('price','asc')->paginate(9)->appends(request()->query());
            }elseif ($sort_by=='kytu_az'){
                $sort='Ký tự từ A > Z';
                $products = Product::where('idcat', $id)->where('status','<>',0)->orderby('name','asc')->paginate(9)->appends(request()->query());
            }elseif ($sort_by=='kytu_za'){
                $sort='Ký tự từ Z > A';
                $products = Product::where('idcat', $id)->where('status','<>',0)->orderby('name','desc')->paginate(9)->appends(request()->query());
            }
            elseif ($sort_by=='pho_bien'){
                $sort='Mức độ phổ biến';
                $products = Product::where('idcat', $id)->where('status','<>',0)->orderby('view_number','desc')->paginate(9)->appends(request()->query());
            }else{
                $sort='Sắp xếp mặc định';
                $products = DB::table('product')->where('status','<>',0)->where('idcat', $id)->paginate(9);
            }
        }else{
            $sort='Sắp xếp mặc định';
            $products = DB::table('product')->where('status','<>',0)->where('idcat', $id)->paginate(9);
            if ($products == NULL) {
                return abort(404);
            }
        }
        return view('user.page.product_page.index',compact('sort','wishlists','cate','categorys','products','logos'));
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

<?php

namespace App\Http\Controllers\user;

use App\Cart;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Logo;
use App\Models\Coupon;
use App\Models\Order_Details;
use App\Models\Product;
use App\Models\Slider;
use App\Models\City;
use App\Models\Province;
use App\Models\Wards;
use App\Models\Feeship;
use App\Models\AccountCustomer;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Shipping;
use App\Models\Collection;
use App\Models\Gallery;
use App\Models\Wishlist;
use App\Models\Cancle_Order;
use Illuminate\Support\Carbon;
use Mail;
use DB;
use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    //
//    public function index()
//    {
//        $logos=Logo::all();
//        $categorys=Category::all();
//        $accountcustomers=AccountCustomer::all();
//        $brands=Brand::all();
//        $sliders = Slider::all();
//        $categoryss=DB::table('category')->orderby('category_id','desc')->get();
//        $special_offer=DB::table('product')->orderby('id','desc')->get();
//
//        $products = DB::table('product')->where('status','<>',0)->orderby('id','desc')->get();
//        $best_seller=DB::table('product')->where('status','<>',0)->where('idcat',5)->limit(10)->get();
//        $best_seller_2=DB::table('product')->where('status','<>',0)->where('idcat',6)->limit(10)->get();
//        $hot_deals=DB::table('product')->where('status','=',3)->orderby('discount','desc')->get();
//        $product_tag=DB::table('product')->where('status','=',2)->orderby('id','desc')->limit(8)->get();
//        $city=City::all();
//        $productss = Product::all()->sortByDesc("id");
//        $citys=City::orderby('matp','ASC')->get();
//        $results = Product::select('idcat')->orderBy('idcat')->get();
//        $blogs = Blog::all();
//        $firsts = $blogs->first();
//        return view('user.page.index',
//            compact('products',  'productss', 'results', 'sliders','city',
//                'citys','brands','accountcustomers','hot_deals','product_tag','blogs','firsts',
//                'special_offer','categoryss','best_seller','best_seller_2','logos','categorys'));
//    }
//
//    public function trang_chu(){
//        $logos=Logo::first();
//        $categorys=Category::where('category_status',1)->orderby('category_position','asc')->get();
//        $brands=Brand::all();
//        $products = DB::table('product')->where('status','<>',0)->get();
//        $blogs = Blog::orderby('blog_id','desc')->limit(3)->get();
//        $collection=Collection::all();
//        return view('frontend.page.index',compact('products','categorys','blogs','logos','brands','collection'));
//    }

//    public function profiles(){
//        $logos=Logo::first();
//        $categorys=Category::where('category_status',1)->orderby('category_position','asc')->get();
//        $brands=Brand::all();
//        $accountcustomer=AccountCustomer::all();
//        return view('user.page.profiles',compact('accountcustomer','logos','categorys','brands'));
//    }
//
//    public function create_profiles(){
//        return view('user.page.account_customer.create_profiles');
//    }
//    public function track_order(){
//        return view('user.page.track_order');
//    }

//    public function category()
//    {
//        $logos=Logo::all();
//        $categorys=Category::all();
//        $products = Product::all();
//        $brands=Brand::all();
//        return view('user.page.category', compact('products', 'brands','logos','categorys'));
//    }
////show t???t c??? s???n ph???m
//    public  function show_product(){
//        $logos=Logo::all();
//        $categorys=Category::all();
//        $valible=0;
//
////        $products = Product::paginate(9);
//        $brands=Brand::all();
//        $min_product=DB::table('product')->min('price');
//        $max_product=DB::table('product')->max('price');
//        if(isset($_GET['sort_by'])){
//            $sort_by =$_GET['sort_by'];
//            if($sort_by=='giam_dan'){
//                $products = Product::orderby('price','desc')->paginate(9)->appends(request()->query());
//            }elseif ($sort_by=='tang_dan'){
//                $products = Product::orderby('price','asc')->paginate(9)->appends(request()->query());
//            }elseif ($sort_by=='kytu_az'){
//                $products = Product::orderby('name','asc')->paginate(9)->appends(request()->query());
//            }elseif ($sort_by=='kytu_za'){
//                $products = Product::orderby('name','desc')->paginate(9)->appends(request()->query());
//            }
//        }else{
//            $products = Product::paginate(9);
//        }
//        return view('user.page.product_page.products', compact('products','brands','min_product','max_product','valible','logos','categorys'));
//    }
//
//    public function san_pham(){
//        $logos=Logo::first();
//        $categorys=Category::where('category_status',1)->orderby('category_position','asc')->get();
//        $brands=Brand::all();
//        $sort='S???p x???p m???c ?????nh';
//        if(isset($_GET['sort_by'])){
//            $sort_by =$_GET['sort_by'];
//            if($sort_by=='giam_dan'){
//                $sort='Gi?? cao ?????n th???p';
//                $products = Product::orderby('price','desc')->paginate(9)->appends(request()->query());
//            }elseif ($sort_by=='tang_dan'){
//                $sort='Gi?? th???p ?????n cao';
//                $products = Product::orderby('price','asc')->paginate(9)->appends(request()->query());
//            }elseif ($sort_by=='kytu_az'){
//                $sort='K?? t???: t??? A > Z';
//                $products = Product::orderby('name','asc')->paginate(9)->appends(request()->query());
//            }elseif ($sort_by=='kytu_za'){
//                $sort='K?? t???: t??? Z > A';
//                $products = Product::orderby('name','desc')->paginate(9)->appends(request()->query());
//            }else{
//                $products = DB::table('product')->where('status','<>',0)->paginate(9)->appends(request()->query());;
//            }
//        }else{
//            $products = DB::table('product')->where('status','<>',0)->paginate(9);
//        }
//        return view('frontend.page.products_page.show_products',compact('sort','categorys','products','logos','brands'));
//    }
//
//
//    //show s???n ph???m theo danh m???c
//    public function danh_muc($idcat){
//        $logos=Logo::first();
//        $categorys=Category::where('category_status',1)->orderby('category_position','asc')->get();
//        $brands=Brand::all();
////        $products = DB::table('product')->where('status','<>',0)->where('idcat', $idcat)->paginate(9);
//        if(isset($_GET['sort_by'])){
//            $sort_by =$_GET['sort_by'];
//            if($sort_by=='giam_dan'){
//                $products = Product::where('idcat', $idcat)->orderby('price','desc')->paginate(9)->appends(request()->query());
//            }elseif ($sort_by=='tang_dan'){
//                $products = Product::where('idcat', $idcat)->orderby('price','asc')->paginate(9)->appends(request()->query());
//            }elseif ($sort_by=='kytu_az'){
//                $products = Product::where('idcat', $idcat)->orderby('name','asc')->paginate(9)->appends(request()->query());
//            }elseif ($sort_by=='kytu_za'){
//                $products = Product::where('idcat', $idcat)->orderby('name','desc')->paginate(9)->appends(request()->query());
//            }
//        }else{
//            $products = DB::table('product')->where('idcat', $idcat)->paginate(9);
//            if ($products == NULL) {
//                return abort(404);
//            }
//        }
//        return view('frontend.page.products_page.show_products',compact('categorys','products','logos','brands'));
//    }
    //show s???n ph???m theo th????ng hi???u
//    public  function show_brand($brand_id){
//        $logos=Logo::all();
//        $categorys=Category::all();
//        $valible=1;
//
//        if ($brand_id == NULL) {
//            $products = Product::all();
//            return view('user.page.product_page.products', compact('products','valible','logos','categorys'));
//        }
//
//        $brands=Brand::all();
//
//        $min_product=DB::table('product')->where('brand_id', $brand_id)->min('price');
//        $max_product=DB::table('product')->where('brand_id', $brand_id)->max('price');
//
//        if(isset($_GET['sort_by'])){
//            $sort_by =$_GET['sort_by'];
//            if($sort_by=='giam_dan'){
//                $products = Product::where('brand_id', $brand_id)->orderby('price','desc')->paginate(9)->appends(request()->query());
//            }elseif ($sort_by=='tang_dan'){
//                $products = Product::where('brand_id', $brand_id)->orderby('price','asc')->paginate(9)->appends(request()->query());
//            }elseif ($sort_by=='kytu_az'){
//                $products = Product::where('brand_id', $brand_id)->orderby('name','asc')->paginate(9)->appends(request()->query());
//            }elseif ($sort_by=='kytu_za'){
//                $products = Product::where('brand_id', $brand_id)->orderby('name','desc')->paginate(9)->appends(request()->query());
//            }
//        }else{
//            $products = DB::table('product')->where('brand_id', $brand_id)->paginate(9);
//            if ($products == NULL) {
//                return abort(404);
//            }
//        }
//        return view('user.page.product_page.products', compact('products', 'brands','min_product','max_product','valible','logos','categorys'));
//    }
//    public function thuong_hieu($brand_id){
//        $logos=Logo::first();
//        $categorys=Category::where('category_status',1)->orderby('category_position','asc')->get();
//        $brands=Brand::all();
//        $products = DB::table('product')->where('status','<>',0)->where('brand_id', $brand_id)->paginate(9);
//        return view('frontend.page.products_page.show_products',compact('categorys','products','logos','brands'));
//    }
//
//
//    public function tim_kiem(Request $request){
//        $valible=1;
//        $logos=Logo::first();
//        $categorys=Category::where('category_status',1)->orderby('category_position','asc')->get();
//        $brands=Brand::all();
//        $products=DB::table('product')
//            ->join('brands','product.brand_id','=','brands.brand_id')
//            ->join('category','product.idcat','=','category.category_id')
//            ->where('product.name','like','%'.$request->keyword_search.'%')
//            ->orwhere('category.category_name','like','%'.$request->keyword_search.'%')
//            ->orwhere('brands.brand_name','like','%'.$request->keyword_search.'%')->paginate(9)->appends(request()->query());
//        return view('frontend.page.products_page.show_products', compact('logos','categorys','brands', 'products','valible'));
//    }
//
//
//
//
//// Trang chi ti???t s???n ph???m
//    public function viewProduct($id)
//    {
//        $logos=Logo::first();
//        $categorys=Category::where('category_status',1)->orderby('category_position','asc')->get();
//        $brands=Brand::all();
//        $products = Product::find($id);
//        $gallerys=DB::table('gallery')->where('product_id','=',$id)->get();
//        $hot_deals=DB::table('product')->where('status','=',3)->orderby('discount','desc')->get();
//        $brand=DB::table('brands')->where('brand_id','=',$products->brand_id)->first();
//        $cate=Category::where('category_id',$products->idcat)->first();
//        $brand_id=$products->brand_id;
//        $category_id=$products->idcat;
//        $related_product=DB::table('product')
//            ->where('idcat',$category_id)
//            ->where('brand_id',$brand_id)
//            ->whereNotIn('id',[$id])->orderby('id','desc')->get();
//        $count=$related_product->count();
//        return view('frontend.page.products_page.product_detail', compact('count','logos','categorys','gallerys','brands','products','related_product','brand','cate'));
//
//    }
//
//
//    public function blog()
//    {
//        return view('user.page.blog');
//    }

    /*  public function getCheckout(){
         return view('user.page.checkout');

     } */

    //Th??m 1 sp v??o gi??? h??ng
    public function AddCart(Request $request, $id)
    {
        $products = DB::table('product')->where('id', $id)->first();
        if ($products != NULL) {
            $oldCart = Session('Cart') ? Session('Cart') : NULL;//N???u Session('Cart') != null th?? gi??? h??ng hi???n t???i s??? b???ng Session('Cart') nguwowci l???i th?? b???ng null
            $newCart = new Cart($oldCart);// t???o 1 c??i gi??? h??ng m???i g???i ?????n __constant qua cart.php v?? truy???n oldcart v??o
            $newCart->AddCart($products, $id);// g???i ?????n ph????ng th???c addcart c???a cart.php truy???n $product v?? $id qua
            $request->session()->put('Cart', $newCart);// $request c???p nh???t session
        }
    }

    /* public function proList(){
        return view('users.shop.shopping.pro-list');
    } */

    //X??a 1 sp kh???i gi??? h??ng nh???
    public function deleteItemCart(Request $request, $id){
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($id);

        if(Count($newCart->products) > 0){
            $request->Session()->put('Cart',$newCart);
        }
        else{
            $request->Session()->forget('Cart');
        }
    }

    //X??a s???n ph???m trong trang gi??? h??ng
    public function deleteListItemCart(Request $request, $id)
    {

        $oldCart = Session('Cart') ? Session('Cart') : NULL;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($id);

        if (Count($newCart->products) > 0) {
            $request->Session()->put('Cart', $newCart);
        } else {
            $request->Session()->forget('Cart');
            //$request->Session()->flush();
        }

        //return view('user.page.update.view-cart-update',compact('city'));
    }

    //C???p nh???p sp trong trang gi??? h??ng
    public function saveListItemCart(Request $request, $id, $quanty)
    {

            $oldCart = Session('Cart') ? Session('Cart') : NULL;
            $newCart = new Cart($oldCart);
            $newCart->UpdateItemCart($id, $quanty + 1);

            $request->Session()->put('Cart', $newCart);


    }
    public function saveListItemCart1(Request $request, $id, $quanty)
    {
        if($quanty>1) {
            $oldCart = Session('Cart') ? Session('Cart') : NULL;
            $newCart = new Cart($oldCart);
            $newCart->UpdateItemCart($id, $quanty - 1);

            $request->Session()->put('Cart', $newCart);
        }else{
            return back(view());
        }

    }


    //L??u t???t c??? sp trong trang gi??? h??ng
    public function saveAllListItemCart(Request $request)
    {
        foreach ($request->data as $item) {
            $oldCart = Session('Cart') ? Session('Cart') : NULL;
            $newCart = new Cart($oldCart);
            $newCart->UpdateItemCart($item["key"], $item["value"]);

            $request->Session()->put('Cart', $newCart);
        }
    }
    public function profiless()
    {
        if (Auth::guard('account_customer')->check()) {
            $logos = Logo::first();
            $categorys=Category::where('category_status',1)->orderby('category_position','asc')->limit(4)->get();
            $cate=Category::orderby('category_position','asc')
                ->join('product','category.category_id','=','product.idcat')
                ->join('brands','product.brand_id','=','brands.brand_id')
                ->whereBetween('category_position',[1,10])
                ->get();
                $wishlists = Wishlist::where('customer_id', Auth::guard('account_customer')->id())->get();

            $order=Order::where('customer_id','=',Auth::guard('account_customer')->id())->where('order_status','<>',0)->get();
            $order_detail=Order_Details::join('product','order_details.id','=','product.id')->get();
            $shipping=Shipping::get();
            $coupon=Coupon::get();
            return view('user.page.account_customer.track_order',compact('coupon','shipping','order_detail','order','logos','categorys','cate','wishlists'));
        }else{
            return redirect()->route('shopping.login');
        }
    }

    public function cancel_order(Request $request){
        if (Auth::guard('account_customer')->check()) {

            $request->validate([
                'customer_id' => 'required',
                'order_id' => 'required',
                'cancel_content' => 'required',
            ]);
            $check_cancel=Cancle_Order::where('customer_id','=',$request->customer_id)->where('order_id','=',$request->order_id)->first();
            if(isset($check_cancel)){
                return redirect()->back()->with('error','Y??u c???u h???y ????n h??ng c???a b???n ???? t???n t???i!');
            }else{
                $cancel=new Cancle_Order();
                $cancel->customer_id=$request->customer_id;
                $cancel->order_id=$request->order_id;
                $cancel->content=$request->cancel_content;
                $cancel->status=1;
                if($cancel->save()){
                    return redirect()->back()->with('message','G???i y??u c???u h???y ????n h??ng th??nh c??ng!');
                }else{
                    return redirect()->back()->with('error','G???i y??u c???u h???y ????n h??ng th???t b???i!');
                }
            }

        }else{
            return redirect()->back();
        }
    }

}

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
use App\Models\Gallery;
use Mail;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    //
    public function index()
    {
        $logos=Logo::all();
        $categorys=Category::all();
        $accountcustomers=AccountCustomer::all();
        $brands=Brand::all();
        $sliders = Slider::all();
        $categoryss=DB::table('category')->orderby('category_id','desc')->get();
        $special_offer=DB::table('product')->orderby('id','desc')->get();

        $products = DB::table('product')->where('status','<>',0)->orderby('id','desc')->get();
        $best_seller=DB::table('product')->where('status','<>',0)->where('idcat',5)->limit(10)->get();
        $best_seller_2=DB::table('product')->where('status','<>',0)->where('idcat',6)->limit(10)->get();
        $hot_deals=DB::table('product')->where('status','=',3)->orderby('discount','desc')->get();
        $product_tag=DB::table('product')->where('status','=',2)->orderby('id','desc')->limit(8)->get();
        $city=City::all();
        $productss = Product::all()->sortByDesc("id");
        $citys=City::orderby('matp','ASC')->get();
        $results = Product::select('idcat')->orderBy('idcat')->get();
        $blogs = Blog::all();
        $firsts = $blogs->first();
        return view('user.page.index',
            compact('products',  'productss', 'results', 'sliders','city',
                'citys','brands','accountcustomers','hot_deals','product_tag','blogs','firsts',
                'special_offer','categoryss','best_seller','best_seller_2','logos','categorys'));
    }

    public function profiles(){
        $logos=Logo::all();
        $categorys=Category::all();
        $accountcustomer=AccountCustomer::all();
        return view('user.page.profiles',compact('accountcustomer','logos','categorys'));
    }

    public function create_profiles(){
        return view('user.page.account_customer.create_profiles');
    }
    public function track_order(){
        return view('user.page.track_order');
    }



    public function category()
    {
        $logos=Logo::all();
        $categorys=Category::all();
        $products = Product::all();
        $brands=Brand::all();
        return view('user.page.category', compact('products', 'brands','logos','categorys'));
    }
//show tất cả sản phẩm
    public  function show_product(){
        $logos=Logo::all();
        $categorys=Category::all();
        $valible=0;

//        $products = Product::paginate(9);
        $brands=Brand::all();
        $min_product=DB::table('product')->min('price');
        $max_product=DB::table('product')->max('price');
        if(isset($_GET['sort_by'])){
            $sort_by =$_GET['sort_by'];
            if($sort_by=='giam_dan'){
                $products = Product::orderby('price','desc')->paginate(9)->appends(request()->query());
            }elseif ($sort_by=='tang_dan'){
                $products = Product::orderby('price','asc')->paginate(9)->appends(request()->query());
            }elseif ($sort_by=='kytu_az'){
                $products = Product::orderby('name','asc')->paginate(9)->appends(request()->query());
            }elseif ($sort_by=='kytu_za'){
                $products = Product::orderby('name','desc')->paginate(9)->appends(request()->query());
            }
        }else{
            $products = Product::paginate(9);
        }
        return view('user.page.show_product.products', compact('products','brands','min_product','max_product','valible','logos','categorys'));
    }
    //show sản phẩm theo danh mục
    public  function show_category_product($idcat){
        $logos=Logo::all();
        $categorys=Category::all();
        $valible=1;
        if ($idcat == NULL) {
            $products = Product::all();
            return view('user.page.show_product.products', compact('products','valible','logos','categorys'));
        }

        $brands=Brand::all();

        $min_product=DB::table('product')->where('idcat', $idcat)->min('price');
        $max_product=DB::table('product')->where('idcat', $idcat)->max('price');

        if(isset($_GET['sort_by'])){
            $sort_by =$_GET['sort_by'];
            if($sort_by=='giam_dan'){
                $products = Product::where('idcat', $idcat)->orderby('price','desc')->paginate(9)->appends(request()->query());
            }elseif ($sort_by=='tang_dan'){
                $products = Product::where('idcat', $idcat)->orderby('price','asc')->paginate(9)->appends(request()->query());
            }elseif ($sort_by=='kytu_az'){
                $products = Product::where('idcat', $idcat)->orderby('name','asc')->paginate(9)->appends(request()->query());
            }elseif ($sort_by=='kytu_za'){
                $products = Product::where('idcat', $idcat)->orderby('name','desc')->paginate(9)->appends(request()->query());
            }
        }else{
            $products = DB::table('product')->where('idcat', $idcat)->paginate(9);
            if ($products == NULL) {
                return abort(404);
            }
        }
        return view('user.page.show_product.products', compact('products','brands','min_product','max_product','valible','logos','categorys'));
    }
    //show sản phẩm theo thương hiệu
    public  function show_brand($brand_id){
        $logos=Logo::all();
        $categorys=Category::all();
        $valible=1;

        if ($brand_id == NULL) {
            $products = Product::all();
            return view('user.page.show_product.products', compact('products','valible','logos','categorys'));
        }

        $brands=Brand::all();

        $min_product=DB::table('product')->where('brand_id', $brand_id)->min('price');
        $max_product=DB::table('product')->where('brand_id', $brand_id)->max('price');

        if(isset($_GET['sort_by'])){
            $sort_by =$_GET['sort_by'];
            if($sort_by=='giam_dan'){
                $products = Product::where('brand_id', $brand_id)->orderby('price','desc')->paginate(9)->appends(request()->query());
            }elseif ($sort_by=='tang_dan'){
                $products = Product::where('brand_id', $brand_id)->orderby('price','asc')->paginate(9)->appends(request()->query());
            }elseif ($sort_by=='kytu_az'){
                $products = Product::where('brand_id', $brand_id)->orderby('name','asc')->paginate(9)->appends(request()->query());
            }elseif ($sort_by=='kytu_za'){
                $products = Product::where('brand_id', $brand_id)->orderby('name','desc')->paginate(9)->appends(request()->query());
            }
        }else{
            $products = DB::table('product')->where('brand_id', $brand_id)->paginate(9);
            if ($products == NULL) {
                return abort(404);
            }
        }
        return view('user.page.show_product.products', compact('products', 'brands','min_product','max_product','valible','logos','categorys'));
    }
//Tìm kiếm
    public function search_product(Request $request){
        $logos=Logo::all();
        $categorys=Category::all();
        $valible=1;

        $brands=Brand::all();

        $products=DB::table('product')
            ->join('brands','product.brand_id','=','brands.brand_id')
            ->join('category','product.idcat','=','category.category_id')
            ->where('product.name','like','%'.$request->keyword_search.'%')
            ->orwhere('category.category_name','like','%'.$request->keyword_search.'%')
            ->orwhere('brands.brand_name','like','%'.$request->keyword_search.'%')->paginate(9);

//        $min_product=DB::table('product')->where('brand_id', $products->id)->min('price');
//        $max_product=DB::table('product')->where('brand_id', $products->id)->max('price');
        return view('user.page.show_product.products', compact('logos','categorys','brands', 'products','valible'));
    }


    public function getsp($idcat)
    {

        if ($idcat == NULL) {
            $products = Product::all();
            return view('user.page.loai_sp', compact('products'));
        }


        $products = DB::table('product')->where('idcat', $idcat)->get();
        if ($products == NULL) {
            return abort(404);
        }
        return view('user.page.loai_sp', compact( 'products'));

    }

    /*     public function product()
        {   $products = Product::all();
            return view('user.page.product', compact('products'));
        } */
//Xem trang giỏ hàng
    public function viewCart()
    {
        $logos=Logo::all();
        $categorys=Category::all();
        $coupons=Coupon::all();
        $city=City::orderby('matp','ASC')->get();
        return view('user.page.view_cart',compact('logos','categorys','coupons','city'));
    }

// Trang chi tiết sản phẩm
    public function viewProduct($id)
    {
        $logos=Logo::all();
        $categorys=Category::all();
        $products = Product::find($id);
        $gallerys=DB::table('gallery')->where('product_id','=',$id)->get();
        $hot_deals=DB::table('product')->where('status','=',3)->orderby('discount','desc')->get();
        $brands=DB::table('brands')
            ->join('product','product.brand_id','=','brands.brand_id')
            ->where('product.id','=',$id)->get();
        $brand_id=$products->brand_id;
        $category_id=$products->idcat;
        $related_product=DB::table('product')
            ->where('idcat',$category_id)
            ->where('brand_id',$brand_id)
            ->whereNotIn('id',[$id])->get();
        return view('user.page.view-product', compact('logos','categorys','gallerys','brands','products','hot_deals','related_product'));
    }
// chọn địa điểm tính phí giao hàng
    public function select_delivery_home(Request  $request){
        $data = $request->all();//lấy tất cả dữ liệu đã gửi qua
        if ($data['action']) {//nếu có data-action
            $output = '';
            if ($data['action'] == 'city') {//nếu data-action = city
                $select_province = Province::where('matp', $data['ma_id'])->orderby('maqh', 'ASC')->get();//lấy tất cả quận huyện thuộc thành phố
                $output .= '<option>---Chọn quận huyện---</option>';
                foreach ($select_province as $key => $province) {
                    $output .= '<option value="' . $province->maqh . '">' . $province->name_quanhuyen . '</option>';
                }
            } else {
                $select_wards = Wards::where('maqh', $data['ma_id'])->orderby('xaid', 'ASC')->get();
                $output .= '<option>---Chọn xã phường---</option>';
                foreach ($select_wards as $key => $ward) {
                    $output .= '<option value="' . $ward->xaid . '">' . $ward->name_xaphuong . '</option>';
                }
            }
        }
        echo $output;
    }
// Tính phí giao hàng
    public function calculate_fee(Request  $request){
        $data=$request->all();
        if($data['matp']){
            $feeship=Feeship::where('fee_matp',$data['matp'])->where('fee_maqh',$data['maqh'])->where('fee_xaid',$data['xaid'])->get();
            if($feeship){
                $count_feeship=$feeship->count();
                if($count_feeship>0){
                    foreach ($feeship as $Key=>$fee){
                        Session::put('fee',$fee->fee_feeship);
                        Session::save();
                    }
                }else{
                    Session::put('fee',50000);
                    Session::save();
                }
            }
        }
        Session::put('fee_matp',$data['matp']);
        Session::put('fee_maqh',$data['maqh']);
        Session::put('fee_xaid',$data['xaid']);
        Session::save();
    }

    // Xác nhận mua hàng
    public function dat_hang(Request $request){
        $data=$request->all();
        $customer = new Customer;
        $customer->customer_name = $data['customer_name'];
        $customer->customer_email = $data['customer_email'];
        $customer->customer_address = $data['customer_address'];
        $customer->customer_phone_number = $data['customer_phone_number'];
        $customer->customer_note =$data['customer_note'];
        $customer->save();
        $customer_id=$customer->customer_id;

        $shipping=new Shipping;
//        if(Session::get('fee')) {
            $city=City::where('matp',$data['customer_matp'])->first();
            $shipping->shipping_city = $data['customer_matp'];

            $province=Province::where('maqh',$data['customer_maqh'])->first();
            $shipping->shipping_province = $data['customer_maqh'];

            $wards=Wards::where('xaid', $data['customer_xaid'])->get();
            $shipping->shipping_wards = $data['customer_xaid'];

            $shipping->shipping_fee = $data['order_fee'];
        //}
        $shipping->save();
        $shipping_id=$shipping->shipping_id;

        $checkout_code=substr(md5(microtime()),rand(0,26),5);
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        $order = new Order;
        $order->customer_id = $customer_id;
        $order->order_total = $data['order_total'];
        $order->order_payment = $data['order_payment'];
        if(Session::get('coupon')){
            $coupon=Coupon::where('coupon_code',$data['order_coupon'])->first();
            $coupon_id=$coupon->coupon_id;
        }else{
            $coupon_id=null;
        }
        $order->coupon_id=$coupon_id;
        $order->shipping_id=$shipping_id;
        $order->order_status='1';
        $order->save();
        $order_id=$order->order_id;

        $orders=Order::all();

        if (Session::has('Cart') != null) {
            foreach (Session::get('Cart')->products as $value) {
                $order_details = new Order_Details;
                foreach ($orders as $od)
                {
                    if($od->customer_id == $customer_id){
                        $order_details->order_id =$od->order_id;
                    }
                }
                $order_details->id = $value['productInfo']->id;
                $order_details->quantity = $value['quanty'];
                $order_details->unit_price = $value['productInfo']->price - $value['productInfo']->discount;
                $order_details->total_price = $value['quanty']*($value['productInfo']->price - $value['productInfo']->discount);
                $order_details->save();

            }
        }
        Session::forget('Cart');
        Session::forget('fee');
        Session::forget('fee_matp');
        Session::forget('fee_maqh');
        Session::forget('fee_xaid');
        Session::forget('coupon');
        //$request->session()->flush();
//        $categorys = Category::all();
//        return view('user.page.hoanthanh', compact('categorys'));
    }

    public function blog()
    {
        return view('user.page.blog');
    }

    /*  public function getCheckout(){
         return view('user.page.checkout');

     } */

    //Thêm 1 sp vào giỏ hàng
    public function AddCart(Request $request, $id)
    {
        $products = DB::table('product')->where('id', $id)->first();
        if ($products != NULL) {
            $oldCart = Session('Cart') ? Session('Cart') : NULL;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($products, $id);

            $request->session()->put('Cart', $newCart);
        }
        return view('user.page.update.cart');
    }

    /* public function proList(){
        return view('users.shop.shopping.pro-list');
    } */

    //Xóa 1 sp khỏi giỏ hàng nhỏ
    /*  public function deleteItemCart(Request $request, $id){
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($id);

        if(Count($newCart->products) > 0){
            $request->Session()->put('Cart',$newCart);
        }
        else{
            $request->Session()->forget('Cart');
        }

        return view('user.page.update.cart');
    }
  */
    //Xóa sản phẩm trong trang giỏ hàng
    public function deleteListItemCart(Request $request, $id)
    {
        $city=City::orderby('matp','ASC')->get();
        $oldCart = Session('Cart') ? Session('Cart') : NULL;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($id);

        if (Count($newCart->products) > 0) {
            $request->Session()->put('Cart', $newCart);
        } else {
//            $request->Session()->forget('Cart');
            $request->Session()->flush();
        }

        //return view('user.page.update.view-cart-update',compact('city'));
    }

    //Cập nhập sp trong trang giỏ hàng
    public function saveListItemCart(Request $request, $id, $quanty)
    {
        $city=City::orderby('matp','ASC')->get();
        $oldCart = Session('Cart') ? Session('Cart') : NULL;
        $newCart = new Cart($oldCart);
        $newCart->UpdateItemCart($id, $quanty);

        $request->Session()->put('Cart', $newCart);

//        return view('user.page.update.view-cart-update',compact('city'));
    }

    //Lưu tất cả sp trong trang giỏ hàng
    public function saveAllListItemCart(Request $request)
    {
        foreach ($request->data as $item) {
            $oldCart = Session('Cart') ? Session('Cart') : NULL;
            $newCart = new Cart($oldCart);
            $newCart->UpdateItemCart($item["key"], $item["value"]);

            $request->Session()->put('Cart', $newCart);
        }
    }

}

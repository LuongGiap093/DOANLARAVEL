<?php

namespace App\Http\Controllers\user;

use App\Cart;
use App\Http\Controllers\Controller;
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
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    //
    public function index()
    {
        $accountcustomers=AccountCustomer::all();
        $brands=Brand::all();
        $logos=Logo::all();
        $sliders = Slider::all();
        $categorys = DB::table('category')->where('status',0)->get();
        $categoryss=Category::all();
        $products = DB::table('product')->orderby('id','desc')->limit(15)->get();
        $hot_deals=DB::table('product')->where('discount','>',0)->orderby('discount','desc')->get();
        $product_tag=DB::table('product')->orderby('id','desc')->limit(8)->get();
        $city=City::all();
        $productss = Product::all()->sortByDesc("id");
        $citys=City::orderby('matp','ASC')->get();
        $results = Product::select('idcat')->orderBy('idcat')->get();
        return view('user.page.index',
            compact('products', 'categorys', 'categoryss', 'productss', 'results', 'sliders','city',
                'citys','logos','brands','accountcustomers','hot_deals','product_tag'));
    }

    public function category()
    {
        $logos=Logo::all();
        $categorys = Category::all();
        $products = Product::all();
        return view('user.page.category', compact('products', 'categorys','logos'));
    }
//show sản phẩm
    public  function show_product(){
        $logos=Logo::all();
        $categorys = Category::all();
        $products = Product::all();
        return view('user.page.show_product.products', compact('products', 'categorys','logos'));
    }
    //show sản phẩm theo danh mục
    public  function show_phone($idcat){
        $logos=Logo::all();
        if ($idcat == NULL) {
            $products = Product::all();
            return view('user.page.show_product.products', compact('products','logos'));
        }
        $categorys = Category::all();

        $products = DB::table('product')->where('idcat', $idcat)->get();
        if ($products == NULL) {
            return abort(404);
        }
        return view('user.page.show_product.products', compact('products', 'categorys','logos'));
    }
    //show sản phẩm theo thương hiệu
    public  function show_brand($brand_id){
        $logos=Logo::all();
        if ($brand_id == NULL) {
            $products = Product::all();
            return view('user.page.show_product.products', compact('products','logos'));
        }
        $categorys = Category::all();
        $brands=Brand::all();

        $products = DB::table('product')->where('brand_id', $brand_id)->get();
        if ($products == NULL) {
            return abort(404);
        }
        return view('user.page.show_product.products', compact('products', 'categorys','logos','brands'));
    }
//Tìm kiếm
    public function search_product(Request $request){
        $logos=Logo::all();
        $categorys = Category::all();
        $products=Product::where('name','like','%'.$request->keyword_search.'%')->orwhere('price','like','%'.$request->keyword_search.'%')->get();
        return view('user.page.show_product.products', compact('products', 'categorys','logos'));
    }


    public function getsp($idcat)
    {
        $logos=Logo::all();
        if ($idcat == NULL) {
            $products = Product::all();
            return view('user.page.loai_sp', compact('products','logos'));
        }
        $categorys = Category::all();

        $products = DB::table('product')->where('idcat', $idcat)->get();
        if ($products == NULL) {
            return abort(404);
        }
        return view('user.page.loai_sp', compact('categorys', 'products','logos'));

    }

    /*     public function product()
        {   $products = Product::all();
            return view('user.page.product', compact('products'));
        } */
//Xem trang giỏ hàng
    public function viewCart()
    {
        $logos=Logo::all();
        $categorys = Category::all();
        $coupons=Coupon::all();
        $city=City::orderby('matp','ASC')->get();
        return view('user.page.view_cart',compact('coupons','city','logos','categorys'));
    }

// Trang chi tiết sản phẩm
    public function viewProduct($id)
    {
        $logos=Logo::all();
        $categorys = Category::all();
        $products = Product::find($id);
        return view('user.page.view-product', compact('products','logos','categorys'));
    }
// chọn địa điểm tính phí giao hàng
    public function select_delivery_home(Request  $request){
        $data = $request->all();
        if ($data['action']) {
            $output = '';
            if ($data['action'] == 'city') {
                $select_province = Province::where('matp', $data['ma_id'])->orderby('maqh', 'ASC')->get();
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

        $checkout_code=substr(md5(microtime()),rand(0,26),5);
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        $order = new Order;
        $coupon=Coupon::all();
        $order->customer_id = $customer_id;
        $order->order_total = $data['order_total'];
        $order->order_payment = $data['order_payment'];
        if(Session::get('coupon')){
            foreach ($coupon as $cou)
            {
                if($cou->coupon_code == $data['order_coupon'])
                {
                    $order->coupon_id=$cou->coupon_id;
                }
            }
        }else{
            $order->coupon_id=null;
        }
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

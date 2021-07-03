<?php

namespace App\Http\Controllers\user;

use App\Cart;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Logo;
use App\Models\Coupon;
use App\Models\Order_Detail;
use App\Models\Product;
use App\Models\Slider;
use App\Models\City;
use App\Models\Province;
use App\Models\Wards;
use App\Models\Feeship;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    //
    public function index()
    {
        $brands=Brand::all();
        $logos=Logo::all();
        $sliders = Slider::all();
        $categorys = Category::all();
        $products = Product::all();
        $city=City::all();
        $productss = Product::all()->sortByDesc("id");
        $citys=City::orderby('matp','ASC')->get();
        $results = Product::select('idcat')->orderBy('idcat')->get();
        return view('user.page.index',
            compact('products', 'categorys', 'productss', 'results', 'sliders','city','citys','logos','brands'));
        //return view('user.page.index');
    }

    public function category()
    {
        $logos=Logo::all();
        $categorys = Category::all();
        $products = Product::all();
        return view('user.page.category', compact('products', 'categorys','logos'));
        //return view('user.page.index');
    }

    public  function show_product(){
        $logos=Logo::all();
        $categorys = Category::all();
        $products = Product::all();
        return view('user.page.show_product.products', compact('products', 'categorys','logos'));
    }
    public  function show_phone($idcat){
        $logos=Logo::all();
        if ($idcat == NULL) {
            $products = Product::all();
            return view('user.page.show_product.phone', compact('products','logos'));
        }
        $categorys = Category::all();

        $products = DB::table('product')->where('idcat', $idcat)->get();
        if ($products == NULL) {
            return abort(404);
        }
        return view('user.page.show_product.phone', compact('products', 'categorys','logos'));
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

    public function viewCart()
    {
        $logos=Logo::all();
        $categorys = Category::all();
        $coupons=Coupon::all();
        $city=City::orderby('matp','ASC')->get();
        return view('user.page.view_cart',compact('coupons','city','logos','categorys'));
    }


    public function viewProduct($id)
    {
        $logos=Logo::all();
        $categorys = Category::all();
        $products = Product::find($id);
        return view('user.page.view-product', compact('products','logos','categorys'));
    }

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

    public function calculate_fee(Request  $request){
        $data=$request->all();
        if($data['matp']){
            $feeship=Feeship::where('fee_matp',$data['matp'])->where('fee_maqh',$data['maqh'])->where('fee_xaid',$data['xaid'])->get();
            foreach ($feeship as $Key=>$fee){
                Session::put('fee',$fee->fee_feeship);
                Session::save();
            }
        }
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
        $oldCart = Session('Cart') ? Session('Cart') : NULL;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($id);

        if (Count($newCart->products) > 0) {
            $request->Session()->put('Cart', $newCart);
        } else {
//            $request->Session()->forget('Cart');
            $request->Session()->flush();
        }

        return view('user.page.update.view-cart-update');
    }

    //Cập nhập sp trong trang giỏ hàng
    public function saveListItemCart(Request $request, $id, $quanty)
    {
        $oldCart = Session('Cart') ? Session('Cart') : NULL;
        $newCart = new Cart($oldCart);
        $newCart->UpdateItemCart($id, $quanty);

        $request->Session()->put('Cart', $newCart);

        return view('user.page.update.view-cart-update');
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

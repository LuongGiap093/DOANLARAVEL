<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Order_Detail;
use DB;
use App\Cart;
use Session;

class UserController extends Controller
{
    //
    public function index()
    {
        $categorys=Category::all();
        $products = Product::all();
        $productss = Product::all()->sortByDesc("id");
        $results = Product::select('idcat')->orderBy('idcat')->get();
        return view('user.page.index', compact('products','categorys','productss','results'));
       //return view('user.page.index');
    }

    public function category()
    {
        $categorys=Category::all();
        $products = Product::all();
        return view('user.page.category', compact('products','categorys'));
       //return view('user.page.index');
    }
    public function getsp($idcat)
    { 
        if($idcat==null)
        {
            $products = Product::all();
            return view('user.page.loai_sp',compact('products'));
        }
        $categorys=Category::all();
       
        $products=DB::table('product')->where('idcat',$idcat)->get();
        if($products==null)
        {
            return abort(404);
        }
        return view('user.page.loai_sp',compact('categorys','products'));

    }
/*     public function product()
    {   $products = Product::all();
        return view('user.page.product', compact('products'));
    } */

    public function viewCart()
    {   
        return view('user.page.view_cart');
    }


    public function viewProduct($id){
        $products = Product::find($id);
        return view('user.page.view-product', compact('products'));
    }

   /*  public function getCheckout(){
        return view('user.page.checkout');
    
    } */
    //Thêm 1 sp vào giỏ hàng
    public function AddCart(Request $request, $id){
        $products = DB::table('product')->where('id',$id)->first();
        if($products != null){
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($products, $id);

            $request->session()->put('Cart',$newCart);
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
    public function deleteListItemCart(Request $request, $id){
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($id);
        
        if(Count($newCart->products) > 0){
            $request->Session()->put('Cart',$newCart);
        }
        else{
            $request->Session()->forget('Cart');
        }

        return view('user.page.update.view-cart-update');
    }

    //Cập nhập sp trong trang giỏ hàng
    public function saveListItemCart(Request $request, $id, $quanty){
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->UpdateItemCart($id, $quanty);
        
        $request->Session()->put('Cart',$newCart);

        return view('user.page.update.view-cart-update');
    }

    //Lưu tất cả sp trong trang giỏ hàng
    public function saveAllListItemCart(Request $request){
        foreach($request->data as $item){
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->UpdateItemCart($item["key"], $item["value"]);

            $request->Session()->put('Cart',$newCart);
        }
    }   

}

<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Order_Details;
use Illuminate\Support\Facades\Redirect;
use App\Models\Coupon;
use DB;
use App\Cart;
use PhpParser\Node\Expr\Print_;
use Illuminate\Support\Facades\Session;

Session_start();

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('FrontEnd.products', compact('products'));
    }

    public function getsp($id)
    {
        $categorys = Category::all();
        $productss = Product::where('idcat', $id)->get();
        return view('user.page.index', compact('categorys', 'productss'));
    }

    public function cart()
    {
        return view('FrontEnd.cart');
    }

    public function addToCart($id)
    {
        $product = Product::find($id);

        if (!$product) {

            abort(404);

        }

        $cart1 = session()->get('cart');

        // if cart is empty then this the first product
        if (!$cart1) {

            $cart1 = [
                $id => [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "image" => $product->image
                ]
            ];

            session()->put('cart', $cart1);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart1[$id])) {

            $cart1[$id]['quantity']++;

            session()->put('cart', $cart1);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart1[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "image" => $product->image
        ];

        session()->put('cart', $cart1);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
    {
        if ($request->id and $request->quantity) {
            $cart1 = session()->get('cart');

            $cart1[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart1);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if ($request->id) {

            $cart1 = session()->get('cart');

            if (isset($cart1[$request->id])) {

                unset($cart1[$request->id]);

                session()->put('cart', $cart1);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }

    public function clear(Request $request)
    {
        session()->forget('cart');
        session()->flash('success', 'Cart is clear');
    }

    public function hoanthanh()
    {

        $categorys = Category::all();
        return view('user.page.hoanthanh', compact('categorys'));
    }

    public function postCheckout(Request $req)
    {
        $coupons=Coupon::all();
        $logos = Logo::all();
        $cart = Session::get('cart');
        $total = 0;
//        foreach($cart as $key=>$car)
//        {
//
//            $total+=($car['price']*$car['quantity']);
//
//        }
        $customer = new Customer;
        $customer->customer_name = $req->customer_name;
        $customer->customer_email = $req->customer_email;
        $customer->customer_address = $req->customer_address;
        $customer->customer_phone_number = $req->customer_phone_number;
        $customer->customer_note = $req->customer_note;
        $customer->save();


        $order = new Order;
        $order->customer_id = $customer->customer_id;
        $order->order_total = $req->order_total;
        $order->order_payment = $req->order_payment;
        if(Session::get('coupon')==true){
            $order->coupon_id='14';
        }
        $order->order_status='1';
        $order->save();
        if (Session::get('cart') == true) {
            foreach (Session::get('cart') as $key => $value) {
                $order_details = new Order_Details;
                $order_details->order_id = $order->order_id;
                $order_details->product_id = $key;
                $order_details->quantity = $value['quantity'];
                $order_details->unit_price = $value['price'];
                $order_details->save();

            }
        }
        $req->session()->flush();
        $categorys = Category::all();
        return view('user.page.hoanthanh', compact('categorys','logos'));


    }

    public function search_product(Request $request){
        $logos=Logo::all();
        $categorys = Category::all();
        $products=Product::where('name','like','%'.$request->keyword_search.'%')->orwhere('price','like','%'.$request->keyword_search.'%')->get();
        return view('user.page.product_page.products', compact('products', 'categorys','logos'));

    }

}

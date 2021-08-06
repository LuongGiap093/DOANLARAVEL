<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\Order_Details;
use App\Models\Customer;
use App\Models\Product;
use App\Models\City;
use App\Models\Province;
use App\Models\Wards;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Session;
use DB;
use App\Classes\Helper;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {

        $this->middleware('CheckAdminLogin');
        $this->viewprefix='admin.order.';
        $this->index='order.index';
    }
    public function index()
    {
        $customers = Customer::all();
        $orders = Order::where('order_status','<>',0)->get();
        $order_details = Order_Details::all();
        return view($this->viewprefix.'index', compact('orders','order_details','customers'));
    }

    public function view_order_detail($order_id){
        $ord_id=$order_id;

        $order_detail=DB::table('order_details')
            ->join('product','order_details.id','=','product.id')
            ->where('order_id','=',$order_id)->get();

        $order=DB::table('order')->where('order_id','=',$order_id)->first();

            $customer_id=$order->customer_id;
            $coupon_id=$order->coupon_id;
            $shipping_id=$order->shipping_id;

        $customer=Customer::where('customer_id',$customer_id)->first();
        $coupon=Coupon::where('coupon_id',$coupon_id)->first();
        $shipping=Shipping::where('shipping_id',$shipping_id)->first();

        return view('admin.order.view_order_detail', compact('order_detail','ord_id'
        ,'order','customer','coupon','shipping','shipping_id'));
    }

    public function order_status($order_id){
        $orders= DB::table('order')
            ->where('order_id', $order_id)
            ->update([
                'order_status'	=>	0,
            ]);
        return redirect()->route('order.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return view('admin.order.edit',compact('order'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {

        $orders= DB::table('order')
            ->where('order_id', $order)
            ->update([
                'order_status'	=>	0,
            ]);
        $order->order_status = 0;

       if($order->save())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('order.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        if($order->delete())
        Session::flash('message', 'successfully!');
    else
        Session::flash('message', 'Failure!');
    return redirect()->route('order.index');
        //
    }
}

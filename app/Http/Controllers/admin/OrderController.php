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
    public function index(Request $request)
    {
        $customers = Shipping::all();

        $order_details = Order_Details::all();
        if(isset($_GET['sort_by'])){
            $sort_by = $_GET['sort_by'];
            if($sort_by==0){
                $sort='Đơn hàng đã hủy';
                $orders = Order::where('order_status','=',0)
                    ->join('shipping','order.shipping_id','=','shipping.shipping_id')->get();
            }elseif ($sort_by==2){
                $sort='Đơn hàng đã xác nhận';
                $orders = Order::where('order_status','=',2)
                    ->join('shipping','order.shipping_id','=','shipping.shipping_id')->get();
            }elseif ($sort_by==3){
                $sort='Đơn hàng đang vận chuyển';
                $orders = Order::where('order_status','=',3)
                    ->join('shipping','order.shipping_id','=','shipping.shipping_id')->get();
            }elseif ($sort_by==4){
                $sort='Đơn hàng đã giao thành công';
                $orders = Order::where('order_status','=',4)
                    ->join('shipping','order.shipping_id','=','shipping.shipping_id')->get();
            }else{
                $sort='Đơn hàng mới';
                $orders = Order::where('order_status','=',1)
                    ->join('shipping','order.shipping_id','=','shipping.shipping_id')->get();
            }
        }else{
            $sort='Đơn hàng mới';
            $orders = Order::where('order_status','=',1)
                ->join('shipping','order.shipping_id','=','shipping.shipping_id')->get();

        }
        return view($this->viewprefix.'index', compact('sort','orders','order_details','customers'));
    }

    public function view_order_detail($order_id){
        $ord_id=$order_id;

        $order_detail=DB::table('order_details')
            ->join('product','order_details.id','=','product.id')
            ->where('order_id','=',$order_id)->get();

        $order=Order::where('order_id','=',$order_id)->first();

            $customer_id=$order->shipping_id;
            $coupon_id=$order->coupon_id;
            $shipping_id=$order->shipping_id;

        $customer=Shipping::where('shipping_id',$customer_id)->first();
        $coupon=Coupon::where('coupon_id',$coupon_id)->first();

        return view('admin.order.view_order_detail', compact('order_detail','ord_id'
        ,'order','customer','coupon','shipping_id'));
    }

    public function order_status($order_id){
            Order::where('order_id', $order_id)
            ->update([
                'order_status'	=>	0,
            ]);
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return redirect()->back();
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
        return redirect()->back();
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
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return redirect()->back();
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
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        return redirect()->back();
    }
    public function changestatusorder($order_id) {
        DB::table('order')->where('order_id',$order_id)->update(['order_status'=>0]);
        return back()->with('message','Xóa đơn hàng thành công!');
    }
    public function changestatusorder_detail(Request $request) {
        $data=$request->all();
        DB::table('order')->where('order_id',$data['order_id'])->update(['order_status'=>$data['status']]);
    }
}

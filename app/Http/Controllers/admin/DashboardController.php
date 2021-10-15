<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AccountCustomer;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Order_Details;
use DB;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\InteractsWithTime;
class DashboardController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function __construct() {
    $this->middleware('CheckAdminLogin');
    $this->viewprefix = 'admin.dashboard.';
    $this->viewnamespace = 'panel/dashboard';
    $this->index = 'dashboard.index';
  }

  public function index(Request $request) {
    $users = DB::table('order')
      ->join('order_details', 'order.order_id', '=', 'order_details.order_id')
      ->join('customer', 'order.customer_id', '=', 'customer.customer_id')
      ->select('order.*', 'order_details.*', 'customer.*')
      ->get();
    //         dump($users);
    $abc = [];

    foreach ($users as $item) {
      //         dump($item);

    }
    $account = AccountCustomer::all();
    $count = count($account);
    $order = Order::all();
    $order_detail = Order_Details::all();

    $quantity = [];
    foreach ($order_detail as $count_quantity) {
      $quantity[] = $count_quantity->quantity;
    }
    $total_quantity = array_sum($quantity);

    $count_order = count($order);
    $aa = [];
    foreach ($order as $count_item) {
      $aa[] = $count_item->order_total;
    }
    $total_order_money = array_sum($aa);
    //          $total_order_money = count($a);
    return view($this->viewprefix . 'index',
      compact('count', 'count_order', 'total_order_money', 'total_quantity'));
  }

  public function search_order(Request $request) {
    $account = AccountCustomer::all();
    $count = count($account);
    $order = Order::all();
    $order_detail = Order_Details::all();
    $quantity = [];
    foreach ($order_detail as $count_quantity) {
      $quantity[] = $count_quantity->quantity;
    }
    $total_quantity = array_sum($quantity);
    $count_order = count($order);
    $aa = [];
    foreach ($order as $count_item) {
      $aa[] = $count_item->order_total;
    }
    $total_order_money = array_sum($aa);
    $st_date=$request->start_date;
    $date_start=date('d/m/Y',  strtotime($st_date));
    $st_end=$request->end_date;
    $date_end=date('d/m/Y',  strtotime($st_end));

    $customers = Customer::all();
    if ( isset ($request->start_date) && isset($request->end_date)) {
      $orders = Order::select("order.*")
        ->whereBetween('created_at', [
          $request->start_date . " 00:00:00",
          $request->end_date . " 23:59:59",
        ])
        ->get();
      dump(count($orders));

//      foreach($orders as $item){
//        dump($item);
//      }
    }
    //    dump($orders);
    return view($this->viewprefix . 'index',
      compact('orders', 'customers', 'count', 'count_order',
        'total_order_money', 'total_quantity','date_start','date_end'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  //    public function create()
  //    {
  //        $blogs = Blog::all();
  //        return view($this->viewprefix.'create',compact('blogs'));
  //    }
  //
  //    /**
  //     * Store a newly created resource in storage.
  //     *
  //     * @param  \Illuminate\Http\Request  $request
  //     * @return \Illuminate\Http\Response
  //     */
  //    public function store(Request $request)
  //    {
  //        $data=$request->validate([
  //            'blog_title' => 'required',
  //            'blog_author' => 'required',
  //            'blog_time' => 'required',
  //            'blog_description' => 'required',
  //        ]);
  //        $data['image'] = Helper::imageUpload($request);
  //        if(Blog::create($data))
  //            Session::flash('message', 'successfully!');
  //        else
  //            Session::flash('message', 'Failure!');
  //        return redirect()->route($this->index);
  //    }
  //
  //    /**
  //     * Display the specified resource.
  //     *
  //     * @param  \App\Models\Slider  $Slider
  //     * @return \Illuminate\Http\Response
  //     */
  //    public function show(Blog $blog)
  //    {
  //
  //    }
  //    public function edit(Blog $blog)
  //    {
  //        return view($this->viewprefix.'edit')->with('blog', $blog);
  //        // return view($this->viewprefix.'edit',compact('product'));
  //    }
  //    public function update(Request $request, Blog $blog)
  //    {
  //        $data=$request->validate([
  //          'blog_title' => 'required',
  //          'blog_author' => 'required',
  //          'blog_time' => 'required',
  //          'blog_description' => 'required',
  //        ]);
  //        $data['image'] = Helper::imageUpload($request);
  //        if($blog->update($data))
  //            Session::flash('message', ' Update successfully!');
  //        else
  //            Session::flash('message', 'Failure!');
  //        return redirect()->route('blog.index');
  //    }
  //
  //
  //    public function destroy(Blog $blog)
  //    {
  //        if($blog->delete())
  //            Session::flash('message', 'successfully!');
  //        else
  //            Session::flash('message', 'Failure!');
  //        return redirect()->route('blog.index');
  //    }
  //
  //
  //
  //    public function productlist($id){
  //
  //        $products = Slider::find($id)->product;
  //        return view('admin.Slider.productlist', compact('products'));
  //    }
  //
  //    public function changestatus($id)
  //    {
  //        $Slider= Slider::find($id);
  //        $Slider->Slider_status=!$Slider->Slider_status;
  //        if($Slider->save()){
  //            return redirect()->back();
  //        }
  //        else
  //        {
  //            return redirect(route('changestatus'));
  //        }
  //    }


}

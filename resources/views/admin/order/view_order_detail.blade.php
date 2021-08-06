@extends('admin.order.layout')
@section('content')
    <div class="clearfix">
        <div class="float-left">
{{--            <h4 class="text-right"><img src="assets\images\logo-dark.png" height="18" alt="moltran"></h4>--}}
        </div>
        <div class="float-right">
            <h5>Hóa đơn: HDBH{{$ord_id}}<br>
                <strong>2015-04-23654789</strong>
            </h5>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">

            <div class="float-left mt-6">
                <address>
                    <strong>{{$customer->customer_name}}.</strong><br>
                        {{$customer->customer_address}}<br>
                        {{$customer->customer_note}}<br>
                    <abbr title="Phone">P:</abbr> {{$customer->customer_phone_number}}
                </address>
            </div>
            <div class="float-right mt-6">
                <p><strong>Ngày đặt hàng: </strong> {{date('d-m-Y',strtotime($order->created_at))}}</p>
                <p class="mt-2"><strong>Tình trạng đơn hàng: </strong> <span class="badge badge-pink">
                        @if($order->order_status==0)
                            Đã hủy
                        @elseif($order->order_status==1)
                            Đơn mới
                        @elseif($order->order_status==2)
                            Đang xử lý
                        @elseif($order->order_status==3)
                            Hoàn thành
                        @endif
                    </span></p>
                <p class="mt-2"><strong>Order ID: </strong> #123456</p>
            </div>
        </div>
    </div>
    <div class="mt-5"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table mt-4">
                    <thead style="text-align: center;">
                    <tr>
                        <th>STT</th>
                        <th>Sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá bán</th>
                        <th>Tổng</th>
                    </tr>
                    </thead>
                    <tbody style="text-align: center;">
                    <?php
                        $i=0;
                        $total=0;
                        ?>
                    @foreach($order_detail as $Key => $value)
                        <?php
                        $subtotal = $value->total_price;
                        $total+=$subtotal;
                        ?>
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->quantity}}</td>
                        <td>{{number_format($value->unit_price,0,',','.')}}</td>
                        <td>{{number_format($subtotal,0,',','.')}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row" style="border-radius: 0px">
        <div class="col-md-7 offset-md-12"></div>
        <div class="col-md-5 offset-md-12">
            <p class="text-right"><b>Tổng tiền: </b>{{number_format($total,0,',','.')}} VNĐ</p>
            <p class="text-right">Phí vận chuyển: {{number_format($shipping->shipping_fee,0,',','.')}} VNĐ</p>
            @if($order->coupon_id==null)
            @else
                <p class="text-right">Phiếu giảm giá: -{{number_format($coupon->coupon_money,0,',','.')}} VNĐ</p>
            @endif
                <hr>
            <h4 class="text-right">Tổng cộng: {{number_format($order->order_total,0,',','.')}} VNĐ</h4>
        </div>
    </div>
    <hr>
    <div class="d-print-none">
        <div class="float-right">
            <a href="javascript:window.print()" class="btn btn-dark waves-effect waves-light mr-1"><i class="fa fa-print"></i></a>
            <a href="#" class="btn btn-primary waves-effect waves-light">Submit</a>
        </div>
    </div>
 @stop

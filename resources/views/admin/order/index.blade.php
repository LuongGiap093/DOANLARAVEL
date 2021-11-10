@extends('admin.order.layout')
@section('content')
    @if (session('message'))
        <div class="alert alert-success">
            <p>{{ session('message') }}</p>
        </div>
    @endif
    <div class="dropdown" style="top: -8px; display: -webkit-inline-flex">
        <button style="border-radius: 3px;" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{$sort}}
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{request()->fullUrlWithQuery(['sort_by'=>'1'])}}">Đơn hàng mới</a>
            <a class="dropdown-item" href="{{request()->fullUrlWithQuery(['sort_by'=>'2'])}}">Đơn hàng đã xác nhận</a>
            <a class="dropdown-item" href="{{request()->fullUrlWithQuery(['sort_by'=>'3'])}}">Đơn hàng đang vận chuyển</a>
            <a class="dropdown-item" href="{{request()->fullUrlWithQuery(['sort_by'=>'4'])}}">Đơn hàng đã giao thành công</a>
            <a class="dropdown-item" href="{{request()->fullUrlWithQuery(['sort_by'=>'0'])}}">Đơn hàng đã hủy</a>
        </div>
    </div>
    <table id="datatable" class="table table-bordered dt-responsive nowrap"
           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
        <th>Mã Hóa Đơn</th>
        <th>Ngày Lập</th>
        <th>Tên Khách Hàng</th>
        <th>Phương thức thanh toán</th>
        <th>Tổng tiền</th>
        <th>Trạng thái</th>
        <th>Xem chi tiết</th>
        <th>Delete</th>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>HDBH{{$order->order_id}} </td>
                <td>{{date('d-m-Y',strtotime($order->created_at))}}</td>
                <td>
                    {{$order->customer_name}}
                </td>
                <td>{{$order->order_payment}} </td>
                <td>{{number_format($order->order_total)}}đ</td>
                <td>
                    @if($order->order_status==0)
                        Đã hủy
                    @elseif($order->order_status==1)
                        Đơn mới
                    @elseif($order->order_status==2)
                        Đang xử lý
                    @elseif($order->order_status==3)
                        Đang giao hàng
                    @elseif($order->order_status==4)
                        Hoàn thành
                    @endif
                </td>
                <td><a href="{{route('chi-tiet-hoa-don', $order->order_id)}}" class="btn btn-outline-primary"><i
                            class="fa fa-eye"></i></a></td>
                <td><a href="{{route('order.changestatus', $order->order_id)}}" class="btn btn-danger"><i
                            class="fa fa-trash"></i></a></td>
        @endforeach
        </tbody>
    </table>
@stop

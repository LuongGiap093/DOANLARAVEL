@extends('admin.dashboard.layout')
@section('content')
    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card bg-pink">
                <div class="card-body widget-style-2">
                    <div class="text-white media">
                        <div class="media-body align-self-center">
                            <h2 class="my-0 text-white"><span data-plugin="counterup">{{$total_quantity}}</span></h2>
                            <p class="mb-0">Số lượng sản phẩm bán</p>
                        </div>
                        <i class="ion-ios-cart"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card bg-purple">
                <div class="card-body widget-style-2">
                    <div class="text-white media">
                        <div class="media-body align-self-center">
                            <h2 class="my-0 text-white"><span data-plugin="counterup">{{number_format($total_order_money)}}</span></h2>
                            <p class="mb-0">Doanh thu bán (VNĐ)</p>
                        </div>
                        <i class="ion-md-paper-plane"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card bg-info">
                <div class="card-body widget-style-2">
                    <div class="text-white media">
                        <div class="media-body align-self-center">
                            <h2 class="my-0 text-white"><span data-plugin="counterup">{{$count_order}}</span></h2>
                            <p class="mb-0">Hóa đơn bán</p>
                        </div>
                        <i class="ion-ios-pricetag"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card bg-primary">
                <div class="card-body widget-style-2">
                    <div class="text-white media">
                        <div class="media-body align-self-center">
                            <h2 class="my-0 text-white"><span data-plugin="counterup">{{$count}}</span></h2>
                            <p class="mb-0">Tài khoản khách hàng</p>
                        </div>
                        <i class="mdi mdi-account-multiple-outline"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-4">Tìm kiếm hóa đơn theo ngày</h4>
                    <div class="row">
                        <div class="col-sm-12">
                            <form class="form-inline" action="{{route('order.search')}}" method="GET">
                                @csrf
                                <div class="form-group mr-3">
                                    <label >Từ: </label>
                                    <input type="date" class="form-control" name="start_date" >
                                </div>
                                <div class="form-group mr-3">
                                    <label >Đến: </label>
                                    <input type="date" class="form-control"  name="end_date">
                                </div>
                                <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                            </form>
                        </div>
                    </div>
                </div>
                @if(isset($date_start) and isset($date_end))
                <p class="name-date">Hóa đơn từ ngày  {{   $date_start}} đến {{   $date_end}} </p>
                @endif
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <th>Mã Hóa Đơn</th>
                    <th>Tên Khách Hàng </th>
                    <th>Ngày Đặt</th>
                    {{--        <th>Mô tả</th>--}}
                    {{--        <th>Option</th>--}}
                    {{--        <th>Edit</th>--}}
                    {{--        <th>Lock</th>--}}
                    {{--        <th>Delete</th>--}}
                    </thead>

                    <tbody>

                    @if(isset($orders))
                        @foreach($orders as $order)
                            {{--            {{dump($order)}}--}}

                            <tr>
                                <td>{{$order->order_id}}</td>
                                <td>@foreach ($customers as $customer)
                                        @if($customer->customer_id==$order->customer_id)
                                            {{$customer->customer_name}}
                                        @endif
                                    @endforeach</td>
                                <td>Ngày {{date_format($order->created_at,'d-m-Y H:i:s')}}</td>
                                {{--                <td>--}}
                                {{--                    <form action="{{route('blog.destroy', $blog->blog_id)}}" method="POST">--}}
                                {{--                        @csrf--}}
                                {{--                        @method('DELETE')--}}
                                {{--                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>--}}
                                {{--                        <a href="#" class="btn btn-outline-primary"><i class="fa fa-eye"></i></a>--}}
                                {{--                        <a href="{{route('blog.edit', $blog->blog_id)}}" class="btn btn-primary"><i--}}
                                {{--                                    class="fa fa-edit"></i></a>--}}
                                {{--                        <a href="" class="btn btn-warning"><i class="fa fa-lock"></i></a>--}}
                                {{--                    </form>--}}
                                {{--                </td>--}}

                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@stop

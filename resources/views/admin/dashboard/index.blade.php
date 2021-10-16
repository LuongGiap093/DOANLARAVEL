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
        <!--                            <div class="col-xl-8">-->
        <!--                                <div class="card">-->
        <!--                                    <div class="card-header py-3 bg-transparent">-->
        <!--                                        <div class="card-widgets">-->
        <!--                                            <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>-->
        <!--                                            <a data-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase1"><i class="mdi mdi-minus"></i></a>-->
        <!--                                            <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a>-->
        <!--                                        </div>-->
        <!--                                        <h5 class="header-title mb-0">Weekly Sales Report</h5>-->
        <!--                                    </div>-->
        <!--                                    <div id="cardCollpase1" class="collapse show">-->
        <!--                                        <div class="card-body">-->
        <!--                                            <div class="row">-->
        <!--                                                <div class="col-md-12">-->
        <!--                                                    <div id="morris-bar-example" class="morris-charts" dir="ltr" style="height: 320px;"></div>-->
        <!--                                                    <div class="row text-center mt-4 mb-4">-->
        <!--                                                        <div class="col-sm-3 col-6">-->
        <!--                                                            <h5>$ 126</h5>-->
        <!--                                                            <small class="text-muted"> Today's Sales</small>-->
        <!--                                                        </div>-->
        <!--                                                        <div class="col-sm-3 col-6">-->
        <!--                                                            <h5>$ 967</h5>-->
        <!--                                                            <small class="text-muted">This Week's Sales</small>-->
        <!--                                                        </div>-->
        <!--                                                        <div class="col-sm-3 col-6">-->
        <!--                                                            <h5>$ 4500</h5>-->
        <!--                                                            <small class="text-muted">This Month's Sales</small>-->
        <!--                                                        </div>-->
        <!--                                                        <div class="col-sm-3 col-6">-->
        <!--                                                            <h5>$ 87,000</h5>-->
        <!--                                                            <small class="text-muted">This Year's Sales</small>-->
        <!--                                                        </div>-->
        <!--                                                    </div>-->
        <!--                                                </div>-->
        <!--                                            </div>-->

        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                &lt;!&ndash; end card&ndash;&gt;-->

        <!--                            </div>-->
        <!-- end col -->

        <div class="col-xl-12">
            <div class="card">
                <div class="card-header py-3 bg-transparent">
                    <div class="card-widgets">
                        <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                        <a data-toggle="collapse" href="#cardCollpase2" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                        <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                    </div>
                    <h5 class="header-title mb-0"> Yearly Sales Report</h5>
                </div>
                <div id="cardCollpase2" class="collapse show">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="morris-line-example" class="morris-charts" dir="ltr" style="height: 200px;"></div>
                                <!--                                                    <div class="row text-center mt-4">-->
                                <!--                                                        <div class="col-sm-4">-->
                                <!--                                                            <h5>$ 86,956</h5>-->
                                <!--                                                            <small class="text-muted"> This Year's Report</small>-->
                                <!--                                                        </div>-->
                                <!--                                                        <div class="col-sm-4">-->
                                <!--                                                            <h5>$ 86,69</h5>-->
                                <!--                                                            <small class="text-muted">Weekly Sales Report</small>-->
                                <!--                                                        </div>-->
                                <!--                                                        <div class="col-sm-4">-->
                                <!--                                                            <h5>$ 948,16</h5>-->
                                <!--                                                            <small class="text-muted">Yearly Sales Report</small>-->
                                <!--                                                        </div>-->

                                <!--                                                    </div>-->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end card-->

            <!--                                <div class="card">-->
            <!--                                    <div class="card-body">-->
            <!--                                        <div class="row">-->
            <!--                                            <div class="col-sm-8">-->
            <!--                                                <div class="status">-->
            <!--                                                    <h3 class="mt-2">61.5%</h3>-->
            <!--                                                    <p class="mb-1">US Dollar Share</p>-->
            <!--                                                </div>-->
            <!--                                            </div>-->
            <!--                                            <div class="col-sm-4 mt-3">-->
            <!--                                                <span class="sparkpie-big"><canvas width="98" height="50" style="display: inline-block; width: 98px; height: 50px; vertical-align: top;"></canvas></span>-->
            <!--                                            </div>-->
            <!--                                        </div>-->
            <!--                                    </div>-->
            <!--                                </div>-->
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">Online Store Visitors</h3>
                        <a href="javascript:void(0);">View Report</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex">
                        <p class="d-flex flex-column">
                            <span class="text-bold text-lg">820</span>
                            <span>Visitors Over Time</span>
                        </p>
                        <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fas fa-arrow-up"></i> 12.5%
                    </span>
                            <span class="text-muted">Since last week</span>
                        </p>
                    </div>
                    <!-- /.d-flex -->

                    <div class="position-relative mb-4">
                        <canvas id="visitors-chart" height="200"></canvas>
                    </div>

                    <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> This Week
                  </span>

                        <span>
                    <i class="fas fa-square text-gray"></i> Last Week
                  </span>
                    </div>
                </div>
            </div>
            <!-- /.card -->

            <!-- /.card -->
        </div>
        <!-- /.col-md-6 -->

        <!-- /.col-md-6 -->
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

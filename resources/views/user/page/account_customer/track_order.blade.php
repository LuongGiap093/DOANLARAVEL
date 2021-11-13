@extends('user.theme.layout')
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="{{route('shopping.home')}}">Trang chủ</a></li>
                    <li class="active">Thông tin đơn hàng</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div>
    <div class="body-content">
        <div class="container">
            <div class="checkout-box faq-page">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-group checkout-steps" id="accordion">
                            @foreach($order as $key => $ord)
                            <!-- checkout-step-01  -->
                            <div class="panel panel-default checkout-step-{{$key+1}}">

                                <!-- panel-heading -->
                                <div class="panel-heading">
                                    <h4 class="unicase-checkout-title">
                                        <a data-toggle="collapse" class="collapsed" data-parent="#{{$key+1}}"
                                           href="#{{$key+1}}">
                                            <span>{{$key+1}}</span>MÃ HÓA ĐƠN: #HDBH{{$ord->order_id}}
                                        </a>
                                    </h4>
                                </div>
                                <!-- panel-heading -->

                                <div id="{{$key+1}}" class="panel-collapse collapse" style="height: 0px;">

                                    <!-- panel-body  -->
                                    <div class="panel-body">
{{--                                        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
{{--                                        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>--}}
{{--                                        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>--}}
                                        <!------ Include the above in your HEAD tag ---------->

                                        <div class="row shop-tracking-status">

                                            <div class="col-md-12">
                                                <div class="well">

                                                    <h4>Trạng thái đơn đặt hàng của bạn:</h4>

                                                    <ul class="list-group">
                                                        <li class="list-group-item">
                                                            <span class="prefix">Ngày đặt hàng:</span>
                                                            <span class="label label-success">{{$ord->created_at}}</span>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <span class="prefix">Cập nhật lần cuối:</span>
                                                            <span class="label label-success">{{$ord->updated_at}}</span>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <span class="prefix">Trạng thái đơn hàng:</span>
                                                            @if($ord->order_status==1)
                                                            <span class="label label-success">Chờ xác nhận</span>
                                                            @elseif($ord->order_status==2)
                                                                <span class="label label-success">Đang đực xử lý</span>
                                                            @elseif($ord->order_status==3)
                                                                <span class="label label-success">Đang vận chuyển</span>
                                                            @elseif($ord->order_status==4)
                                                                <span class="label label-success">Đã hoàn thành</span>
                                                            @else
                                                            @endif
                                                        </li>
                                                        <li class="list-group-item">Xem chi tiết đơn hàng tại đây: <a class="label label-success" data-toggle="modal" data-target="#exampleModalCenter{{$key+1}}">click để xem chi tiết</a></li>
                                                    </ul>
                                                    <div class="form-horizontal">
                                                        <div class="form-group">
{{--                                                            <label for="inputOrderTrackingID" class="col-sm-2 control-label">Order id</label>--}}
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" id="inputOrderTrackingID" value="" placeholder="Lý do bạn muốn hủy đơn hàng">
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <button style="float: right;" type="button" id="shopGetOrderStatusID" class="btn btn-success">Gửi yêu cầu hủy đơn đặt hàng</button>
                                                            </div>
                                                        </div>
{{--                                                        <div class="form-group">--}}
{{--                                                            <div class="col-sm-offset-2 col-sm-10">--}}
{{--                                                                <button type="button" id="shopGetOrderStatusID" class="btn btn-success">Get status</button>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- panel-body  -->

                                </div><!-- row -->
                                <!-- Button trigger modal -->
                                <!-- Modal -->
                                @include('user.page.account_customer.model_order_detail')
                            </div>
                            <!-- checkout-step-01  -->
                                @endforeach
                        </div><!-- /.checkout-steps -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.checkout-box -->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
            <div id="brands-carousel" class="logo-slider wow fadeInUp">

                <div class="logo-slider-inner">
                    <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                        <div class="item m-t-15">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand1.png" src="assets\images\blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item m-t-10">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand2.png" src="assets\images\blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand3.png" src="assets\images\blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand4.png" src="assets\images\blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand5.png" src="assets\images\blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand6.png" src="assets\images\blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand2.png" src="assets\images\blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand4.png" src="assets\images\blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand1.png" src="assets\images\blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand5.png" src="assets\images\blank.gif" alt="">
                            </a>
                        </div><!--/.item-->
                    </div><!-- /.owl-carousel #logo-slider -->
                </div><!-- /.logo-slider-inner -->

            </div><!-- /.logo-slider -->
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
        </div><!-- /.container -->
    </div>
@stop

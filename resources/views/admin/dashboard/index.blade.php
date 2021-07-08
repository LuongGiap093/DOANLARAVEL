@extends('admin.dashboard.layout')
@section('content')
    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card bg-pink">
                <div class="card-body widget-style-2">
                    <div class="text-white media">
                        <div class="media-body align-self-center">
                            <h2 class="my-0 text-white"><span data-plugin="counterup">50</span></h2>
                            <p class="mb-0">Daily Visits</p>
                        </div>
                        <i class="ion-md-eye"></i>
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
@stop

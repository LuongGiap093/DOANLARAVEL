@extends('user.theme.layout')
@section('content')
    <style>
        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0, 0, 0); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>

    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="{{route('shopping.home')}}">Trang chủ</a></li>
                    <li class='active'>Thông tin tài khoản</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->
    <div class="container bootstrap snippets bootdey">
        @if (session('message'))
            <div class="alert alert-success" style="text-align: center">
                <p>{{ session('message') }}</p>
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger" style="text-align: center">
                <p>{{ session('error') }}</p>
            </div>
        @endif
        <div class="row">
            <div class="profile-nav col-md-3" style="margin-top: 0px">
                <div class="panel">
                    <div class="user-heading round" style="background: #157ed2;">
                        <a href="#">
                            @if($accountcustomer->image!=null)
                                <img src="{{asset('public/images/'. $accountcustomer->image)}}" alt="">
                            @else
                                <img src="{{asset('public/images/avatar-mac-dinh-1.png')}}" alt="">
                            @endif
                        </a>
                        <h1>{{$accountcustomer->name}}</h1>
                        <p>{{$accountcustomer->email}}</p>
                    </div>

                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a> <i class="fa fa-user"></i> Hồ sơ</a></li>
                        <li><a id="myBtn" href="javascript:"> <i class="fa fa-edit"></i> Chỉnh sửa hồ sơ</a></li>
                        <li><a href="{{route('customer.track-order')}}"> <i class="fa fa-calendar"></i> Đơn đặt hàng <span
                                    class="label label-warning pull-right r-activity">{{$order->count()}}</span></a></li>
                        <div id="myModal" class="modal">
                            <!-- Modal content -->
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form action="{{route('customer.create-profiles')}}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <div class="row gutters">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="image" style="font-weight: 600;">Ảnh đại
                                                            diện:</label>
                                                        <input hidden type="text" name="acc_image"
                                                               value="{{$accountcustomer->image}}">
                                                        <input type="file" class="image" id="image" name="image"
                                                               style="display: block;padding: 8px 15px;color: #373d54;width: 100%;background: #f8fafc;font-size: 14px;height: 40px;border: 1px solid #e0e4f6;transition: all 0.2s;">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="fullName" style="font-weight: 600;">Họ và
                                                            tên:</label>
                                                        <input type="text" class="fullname" id="fullName" name="name"
                                                               placeholder="Nhập họ vào tên"
                                                               style="display: block;padding: 0 15px;color: #373d54;width: 100%;background: #f8fafc;font-size: 14px;height: 40px;border: 1px solid #e0e4f6;transition: all 0.2s;"
                                                               value="{{$accountcustomer->name}}" required>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="eMail" style="font-weight: 600;">Email:</label>
                                                        <input type="email" class="email" id="eMail" name="email"
                                                               placeholder="Nhập email"
                                                               style="display: block;padding: 0 15px;color: #373d54;width: 100%;background: #f8fafc;font-size: 14px;height: 40px;border: 1px solid #e0e4f6;transition: all 0.2s;"
                                                               value="{{$accountcustomer->email}}" required>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone" style="font-weight: 600;">Số điện
                                                            thoại:</label>
                                                        <input type="text" class="phone" id="Iphone" name="phone"
                                                               placeholder="Nhập số điện thoại"
                                                               style="display: block;padding: 0 15px;color: #373d54;width: 100%;background: #f8fafc;font-size: 14px;height: 40px;border: 1px solid #e0e4f6;transition: all 0.2s;"
                                                               value="{{$accountcustomer->phone}}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row gutters">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="Street" style="font-weight: 600;">Tỉnh/thành
                                                            phố:</label>
                                                        <select name="city" id="city" class="choose city"
                                                                style="width: 100%;display: block;padding: 0 15px;color: #373d54;  background: #f8fafc;font-size: 14px;height: 40px;border: 1px solid #e0e4f6;transition: all 0.2s;"
                                                                required>
                                                            <option
                                                                value="{{$accountcustomer->city}}">{{$name_city}}</option>
                                                            @foreach($city as $key=>$ci)
                                                                <option
                                                                    value='{{$ci->matp}}'>{{$ci->name_city}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="ciTy" style="font-weight: 600;">Quận/huyện:</label>
                                                        <select name="province" id="province" class="province choose"
                                                                style="width: 100%;display: block;padding: 0 15px;color: #373d54;  background: #f8fafc;font-size: 14px;height: 40px;border: 1px solid #e0e4f6;transition: all 0.2s;"
                                                                required>
                                                            <option
                                                                value="{{$accountcustomer->province}}">{{$name_province}}</option>
                                                            @if($province!=null)
                                                                @foreach($province as $key=>$prov)
                                                                    <option
                                                                        value='{{$prov->maqh}}'>{{$prov->name_quanhuyen}}</option>
                                                                @endforeach
                                                            @else
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="sTate" style="font-weight: 600;">Xã/phường:</label>
                                                        <select name="wards" id="wards" class="wards"
                                                                style="width: 100%;display: block;padding: 0 15px;color: #373d54;  background: #f8fafc;font-size: 14px;height: 40px;border: 1px solid #e0e4f6;transition: all 0.2s;"
                                                                required>
                                                            <option
                                                                value="{{$accountcustomer->wards}}">{{$name_wards}}</option>
                                                            @if($wards!=null)
                                                                @foreach($wards as $key=>$wa)
                                                                    <option
                                                                        value='{{$wa->xaid}}'>{{$wa->name_xaphuong}}</option>
                                                                @endforeach
                                                            @else
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="address" style="font-weight: 600;">Địa chỉ cụ
                                                            thể:</label>
                                                        <input type="text" class="bigaddress" id="zIp" name="address"
                                                               placeholder="Số nhà.."
                                                               style="width: 100%;display: block;padding: 0 15px;color: #373d54;  background: #f8fafc;font-size: 14px;height: 40px;border: 1px solid #e0e4f6;transition: all 0.2s;"
                                                               value="{{$accountcustomer->address}}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row gutters">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="text-right">
                                                        <input type="submit" value="Cập Nhật" style="padding: 10px 20px">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </ul>
                </div>
            </div>
            <div class="profile-info col-md-9" style="margin-top: 0px">

                <div class="panel">
                    <div class="panel-body bio-graph-info">
                        <h1 style="font-weight: 600; color: dimgray;">Thông tin cá nhân</h1>
                        <div class="row">
                            <div class="bio-row">
                                <p><span>Họ tên </span>: {{$accountcustomer->name}}</p>
                            </div>
                            <div class="bio-row">
                                <p><span>Địa chỉ nhà </span>: {{$accountcustomer->address}}</p>
                            </div>
                            <div class="bio-row">
                                <p><span>Ngày sinh</span>: 13 July 1983</p>
                            </div>
                            <div class="bio-row">
                                <p><span>Xã phường </span>: {{$name_wards}}</p>
                            </div>
                            <div class="bio-row">
                                <p><span>Điện thoại </span>: {{$accountcustomer->phone}}</p>
                            </div>
                            <div class="bio-row">
                                <p><span>Quận huyện </span>: {{$name_province}}</p>
                            </div>
                            <div class="bio-row">
                                <p><span>Email </span>: {{$accountcustomer->email}}</p>
                            </div>
                            <div class="bio-row">
                                <p><span>Thành phố </span>: {{$name_city}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="bio-chart">
                                        <div style="display:inline;width:100px;height:100px;">
                                            <canvas width="100" height="100px"></canvas>
                                            <input class="knob" data-width="100" data-height="100"
                                                   data-displayprevious="true" data-thickness=".2"
                                                   value="{{$order->where('order_status','=',1)->count()}}"
                                                   data-fgcolor="#e06b7d" data-bgcolor="#e8e8e8"
                                                   style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(224, 107, 125); padding: 0px; -webkit-appearance: none; background: none;" readonly>
                                        </div>
                                    </div>
                                    <div class="bio-desk">
                                        <a class="red" style="font-size: 15px;font-weight: 400;margin-top: 10px; margin-bottom: 10px;">Đơn hàng chờ xác nhận</a>
                                        <p>Started : 15 July</p>
                                        <p>Deadline : 15 August</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="bio-chart">
                                        <div style="display:inline;width:100px;height:100px;">
                                            <canvas width="100" height="100px"></canvas>
                                            <input class="knob" data-width="100" data-height="100"
                                                   data-displayprevious="true" data-thickness=".2" value="{{$order->where('order_status','=',2)->count()}}"
                                                   data-fgcolor="#4CC5CD" data-bgcolor="#e8e8e8"
                                                   style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(76, 197, 205); padding: 0px; -webkit-appearance: none; background: none;" readonly>
                                        </div>
                                    </div>
                                    <div class="bio-desk">
                                        <h4 class="terques">Đơn hàng đang xử lý</h4>
                                        <p>Started : 15 July</p>
                                        <p>Deadline : 15 August</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="bio-chart">
                                        <div style="display:inline;width:100px;height:100px;">
                                            <canvas width="100" height="100px"></canvas>
                                            <input class="knob" data-width="100" data-height="100"
                                                   data-displayprevious="true" data-thickness=".2" value="{{$order->where('order_status','=',3)->count()}}"
                                                   data-fgcolor="#96be4b" data-bgcolor="#e8e8e8"
                                                   style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(150, 190, 75); padding: 0px; -webkit-appearance: none; background: none;" readonly>
                                        </div>
                                    </div>
                                    <div class="bio-desk">
                                        <h4 class="green">Đơn hàng đang vận chuyển</h4>
                                        <p>Started : 15 July</p>
                                        <p>Deadline : 15 August</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="bio-chart">
                                        <div style="display:inline;width:100px;height:100px;">
                                            <canvas width="100" height="100px"></canvas>
                                            <input class="knob" data-width="100" data-height="100"
                                                   data-displayprevious="true" data-thickness=".2" value="{{$order->where('order_status','=',4)->count()}}"
                                                   data-fgcolor="#cba4db" data-bgcolor="#e8e8e8"
                                                   style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(203, 164, 219); padding: 0px; -webkit-appearance: none; background: none;" readonly>
                                        </div>
                                    </div>
                                    <div class="bio-desk">
                                        <h4 class="purple">Đơn hàng đã hoàn thành</h4>
                                        <p>Started : 15 July</p>
                                        <p>Deadline : 15 August</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

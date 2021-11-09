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
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
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
    <?php
    $id = Auth::guard('account_customer')->id();
    ?>
    @foreach($accountcustomer as $acc)
        @if($acc->id==$id)
            <div class="container bootstrap snippets bootdey">
                <div class="row">
                    <div class="profile-nav col-md-3">
                        <div class="panel">
                            <div class="user-heading round" style="background: #157ed2;">
                                <a href="#">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                                </a>
                                <h1>{{$acc->name}}</h1>
                                <p>{{$acc->email}}</p>
                            </div>

                            <ul class="nav nav-pills nav-stacked">
                                <li class="active"><a href="#"> <i class="fa fa-user"></i> Hồ sơ</a></li>
                                <li><a href="#"> <i class="fa fa-calendar"></i> Recent Activity <span
                                            class="label label-warning pull-right r-activity">9</span></a></li>
                                <li><a id="myBtn" href="javascript:"> <i class="fa fa-edit"></i> Chỉnh sửa hồ sơ</a></li>
                                <div id="myModal" class="modal">

                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <span class="close">&times;</span>
                                            <div class="row">
                                                    <div class="col-md-12">
                                                        <form>
                                                                    <div class="row gutters">
                                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                                            <div class="form-group">
                                                                                <label for="image" style="font-weight: 600;">Ảnh đại diện:</label>
                                                                                <input type="file" class="image" id="image" style="display: block;padding: 8px 15px;color: #373d54;width: 100%;background: #f8fafc;font-size: 14px;height: 40px;border: 1px solid #e0e4f6;transition: all 0.2s;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                                            <div class="form-group">
                                                                                <label for="fullName" style="font-weight: 600;">Họ và tên:</label>
                                                                                <input type="text" class="fullname" id="fullName" placeholder="Nhập họ vào tên" style="display: block;padding: 0 15px;color: #373d54;width: 100%;background: #f8fafc;font-size: 14px;height: 40px;border: 1px solid #e0e4f6;transition: all 0.2s;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                                            <div class="form-group">
                                                                                <label for="eMail" style="font-weight: 600;">Email:</label>
                                                                                <input type="email" class="email" id="eMail" placeholder="Nhập email" style="display: block;padding: 0 15px;color: #373d54;width: 100%;background: #f8fafc;font-size: 14px;height: 40px;border: 1px solid #e0e4f6;transition: all 0.2s;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                                            <div class="form-group">
                                                                                <label for="phone" style="font-weight: 600;">Số điện thoại:</label>
                                                                                <input type="text" class="phone" id="phone" placeholder="Nhập số điện thoại" style="display: block;padding: 0 15px;color: #373d54;width: 100%;background: #f8fafc;font-size: 14px;height: 40px;border: 1px solid #e0e4f6;transition: all 0.2s;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row gutters">
                                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                                            <div class="form-group">
                                                                                <label for="Street" style="font-weight: 600;">Tỉnh/thành phố:</label>
                                                                                <select name="city" id="city" class="choose city"
                                                                                        style="width: 100%;display: block;padding: 0 15px;color: #373d54;  background: #f8fafc;font-size: 14px;height: 40px;border: 1px solid #e0e4f6;transition: all 0.2s;">
                                                                                    <option value="">tp1</option>
                                                                                    <option value=''>tp2</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                                            <div class="form-group">
                                                                                <label for="ciTy" style="font-weight: 600;">Quận/huyện:</label>
                                                                                <select name="province" id="city" class="province choose"
                                                                                        style="width: 100%;display: block;padding: 0 15px;color: #373d54;  background: #f8fafc;font-size: 14px;height: 40px;border: 1px solid #e0e4f6;transition: all 0.2s;">
                                                                                    <option value="">tp1</option>
                                                                                    <option value=''>tp2</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                                            <div class="form-group">
                                                                                <label for="sTate" style="font-weight: 600;">Xã/phường:</label>
                                                                                <select name="wards" id="city" class="wards"
                                                                                        style="width: 100%;display: block;padding: 0 15px;color: #373d54;  background: #f8fafc;font-size: 14px;height: 40px;border: 1px solid #e0e4f6;transition: all 0.2s;">
                                                                                    <option value="">tp1</option>
                                                                                    <option value=''>tp2</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                                            <div class="form-group">
                                                                                <label for="address" style="font-weight: 600;">Địa chỉ cụ thể:</label>
                                                                                <input type="text" class="address" id="zIp" placeholder="Số nhà.." style="width: 100%;display: block;padding: 0 15px;color: #373d54;  background: #f8fafc;font-size: 14px;height: 40px;border: 1px solid #e0e4f6;transition: all 0.2s;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row gutters">
                                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                            <div class="text-right">
                                                                                <button type="button" id="submit" name="submit" class="btn btn-primary">Cập nhật</button>
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
                    <div class="profile-info col-md-9">
{{--                        <div class="panel">--}}
{{--                            <form>--}}
{{--                                <textarea placeholder="Whats in your mind today?" rows="2"--}}
{{--                                          class="form-control input-lg p-text-area"></textarea>--}}
{{--                            </form>--}}
{{--                            <footer class="panel-footer">--}}
{{--                                <button class="btn btn-warning pull-right">Post</button>--}}
{{--                                <ul class="nav nav-pills">--}}
{{--                                    <li>--}}
{{--                                        <a href="#"><i class="fa fa-map-marker"></i></a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#"><i class="fa fa-camera"></i></a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#"><i class=" fa fa-film"></i></a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#"><i class="fa fa-microphone"></i></a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </footer>--}}
{{--                        </div>--}}
                        <div class="panel">
                            <div class="bio-graph-heading" style="background: #157ed2;">
                                Aliquam ac magna metus. Nam sed arcu non tellus fringilla fringilla ut vel ispum.
                                Aliquam ac magna metus.
                            </div>
                            <div class="panel-body bio-graph-info">
                                <h1>Thông tin cá nhân</h1>
                                <div class="row">
                                    <div class="bio-row">
                                        <p><span>Họ tên </span>: {{$acc->name}}</p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Thành phố </span>: Australia</p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Ngày sinh</span>: 13 July 1983</p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Quận huyện </span>: UI Designer</p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Điện thoại </span>: {{$acc->phone}}</p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Xã phường </span>: (12) 03 4567890</p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Email </span>: {{$acc->email}}</p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Địa chỉ cụ thể </span>: (12) 03 4567890</p>
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
                                                           data-displayprevious="true" data-thickness=".2" value="35"
                                                           data-fgcolor="#e06b7d" data-bgcolor="#e8e8e8"
                                                           style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(224, 107, 125); padding: 0px; -webkit-appearance: none; background: none;">
                                                </div>
                                            </div>
                                            <div class="bio-desk">
                                                <h4 class="red">Đơn hàng mới</h4>
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
                                                           data-displayprevious="true" data-thickness=".2" value="63"
                                                           data-fgcolor="#4CC5CD" data-bgcolor="#e8e8e8"
                                                           style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(76, 197, 205); padding: 0px; -webkit-appearance: none; background: none;">
                                                </div>
                                            </div>
                                            <div class="bio-desk">
                                                <h4 class="terques">Chờ xác nhận </h4>
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
                                                           data-displayprevious="true" data-thickness=".2" value="75"
                                                           data-fgcolor="#96be4b" data-bgcolor="#e8e8e8"
                                                           style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(150, 190, 75); padding: 0px; -webkit-appearance: none; background: none;">
                                                </div>
                                            </div>
                                            <div class="bio-desk">
                                                <h4 class="green">Đang vận chuyển</h4>
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
                                                           data-displayprevious="true" data-thickness=".2" value="50"
                                                           data-fgcolor="#cba4db" data-bgcolor="#e8e8e8"
                                                           style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(203, 164, 219); padding: 0px; -webkit-appearance: none; background: none;">
                                                </div>
                                            </div>
                                            <div class="bio-desk">
                                                <h4 class="purple">Đã hoàn thành</h4>
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
        @endif
    @endforeach
@endsection

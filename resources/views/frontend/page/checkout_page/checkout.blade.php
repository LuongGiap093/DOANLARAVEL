@extends('frontend.theme.layout')
@section('content')
    <!-- Main Content - start -->
    <main>
        <section class="container stylization maincont">
            <ul class="b-crumbs">
                <li>
                    <a href="index.html">
                        Trang chủ
                    </a>
                </li>
                <li>
                    <a href="index.html">
                        Giỏ hàng
                    </a>
                </li>
                <li>
                    <span>Thủ tục thanh toán</span>
                </li>
            </ul>
            <h1 class="main-ttl"><span>Thủ tục thanh toán</span></h1>


            <div class="Checkout_section">
                <div class="row" style="margin-left: 0px;">
                    <div class="col-12">
                        <div class="user-actions mb-20">
                            <h3 style="font-size: 15px;">
                                <i class="fa fa-file-o" aria-hidden="true"></i>
                                Nếu bạn đã có tài khoản?
                                <a class="Returning" href="#" data-toggle="collapse" data-target="#checkout_login"
                                   aria-expanded="true">Click vào đây để đăng nhập.</a>

                            </h3>
                            <div id="checkout_login" class="collapse" data-parent="#accordion">
                                <div class="checkout_info">
                                    <p>If you have shopped with us before, please enter your details in the boxes below.
                                        If you are a new customer please proceed to the Billing &amp; Shipping
                                        section.</p>
                                    <form action="#">
                                        <div class="form_group mb-20">
                                            <label>Username or email <span style="color: red;">*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="form_group mb-25">
                                            <label>Password <span style="color: red;">*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="form_group group_3 ">
                                            <input value="Login" type="submit">
                                            <label for="remember_box">
                                                <input id="remember_box" type="checkbox">
                                                <span> Remember me </span>
                                            </label>
                                        </div>
                                        <a href="#">Lost your password?</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="user-actions mb-20">
                            <h3 style="font-size: 15px;">
                                <i class="fa fa-file-o" aria-hidden="true"></i>
                                Nếu bạn chưa có tài khoản?
                                <a class="Returning" href="#" data-toggle="collapse" data-target="#checkout_coupon"
                                   aria-expanded="true">Click vào đây để đăng ký</a><span> hoặc điền thông tin bên dưới để đặt hàng với tư cách là khách.</span>

                            </h3>
                            <div id="checkout_coupon" class="collapse" data-parent="#accordion">
                                <div class="checkout_info">
                                    <form action="#">
                                        <input placeholder="Coupon code" type="text">
                                        <input value="Apply coupon" type="submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checkout_form">
                    <div class="row" style="margin-left: 0px;margin-right: 0px">
                        <div class="col-lg-6 col-md-6" style="padding: 0px 20px 0px 0px;">
                            <form method="POST">
                                <input type="hidden" name="_token" value="{{csrf_token()}}" autocomplete="on">
                                <h3>Thông tin thanh toán</h3>
                                @if(Session::get('fee'))
                                    <div class="row" style="margin-left: 0px;margin-right: 0px">
                                        <div class="col-lg-6 mb-30"
                                             style="padding: 0px 10px 0px 0px;margin-bottom: 20px;">
                                            <label>Họ và tên <span style="color: red;">*</span></label>
                                            <input type="text" class="name" value="{{Session::get('name')}}" required>
                                        </div>
                                        <div class="col-lg-6 mb-30"
                                             style="padding: 0px 0px 0px 10px;margin-bottom: 20px;">
                                            <label>Số điện thoại <span style="color: red;">*</span></label>
                                            <input type="number" class="phone" value="{{Session::get('phone')}}"
                                                   required
                                                   style="display: block;padding: 0 15px;color: #373d54;width: 100%;background: #f8fafc;font-size: 14px;height: 40px;border: 1px solid #e0e4f6;transition: all 0.2s;">
                                        </div>
                                        <div class="col-12 mb-30" style="margin-bottom: 20px;">
                                            <label>Địa chỉ Email <span style="color: red;">*</span></label>
                                            <input type="email" class="email" value="{{Session::get('email')}}"
                                                   required>
                                        </div>
                                        <div class="col-lg-6 mb-30"
                                             style="padding: 0px 10px 0px 0px;margin-bottom: 20px;">
                                            <label for="city">Tỉnh/Thành phố <span style="color: red;">*</span></label>
                                            <select name="city" id="city" class="choose city"
                                                    style="width: 100%;display: block;padding: 0 15px;color: #373d54;  background: #f8fafc;font-size: 14px;height: 40px;border: 1px solid #e0e4f6;transition: all 0.2s;">
                                                <option value="{{$thanhpho->matp}}">{{$thanhpho->name_city}}</option>
                                                @foreach($city as $key=>$ci)
                                                    <option value='{{$ci->matp}}'>{{$ci->name_city}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-6 mb-30"
                                             style="padding: 0px 0px 0px 10px;margin-bottom: 20px;">
                                            <label for="province">Quận/Huyện <span style="color: red;">*</span></label>
                                            <select name="province" id="province" class="province choose"
                                                    style="width: 100%;display: block;padding: 0 15px;color: #373d54;  background: #f8fafc;font-size: 14px;height: 40px;border: 1px solid #e0e4f6;transition: all 0.2s;">
                                                <option
                                                    value='{{$quanhuyen->maqh}}'>{{$quanhuyen->name_quanhuyen}}</option>
                                                @foreach($province as $key=>$prov)
                                                    <option value='{{$prov->maqh}}'>{{$prov->name_quanhuyen}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-6 mb-30"
                                             style="padding: 0px 10px 0px 0px;margin-bottom: 20px;">
                                            <label for="wards">Xã/Phường <span style="color: red;">*</span></label>
                                            <select name="wards" id="wards" class="wards"
                                                    style="width: 100%;display: block;padding: 0 15px;color: #373d54;  background: #f8fafc;font-size: 14px;height: 40px;border: 1px solid #e0e4f6;transition: all 0.2s;">
                                                <option
                                                    value='{{$xaphuong->xaid}}'>{{$xaphuong->name_xaphuong}}</option>
                                                @foreach($wards as $key=>$wa)
                                                    <option value='{{$wa->xaid}}'>{{$wa->name_xaphuong}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-6 mb-30"
                                             style="padding: 0px 0px 0px 10px;margin-bottom: 20px;">
                                            <label>Địa chỉ cụ thể <span style="color: red;">*</span></label>
                                            <input type="text" class="address" value="{{Session::get('address')}}"
                                                   required>
                                        </div>
                                        <div class="col-12">
                                            <div class="order-notes">
                                                <label for="order_note">Ghi chú <span style="color: red;">*</span><span>(Không bắt buộc)</span></label>
                                                <textarea style="overflow: auto;height: 100px;margin-bottom: 20px;"
                                                          id="order_note"
                                                          placeholder="Ghi chú về đơn đặt hàng của bạn."
                                                          class="note">{{Session::get('note')}}</textarea>
                                            </div>
                                        </div>
                                        <div class="order_button" style="margin-top: 20px;margin-bottom: 20px;">
                                            <button type="button" name="calculate_order" class="calculate_delivery">Tính
                                                phí vận chuyển
                                            </button>
                                        </div>
                                    </div>
                                @else
                                    <div class="row" style="margin-left: 0px;margin-right: 0px">
                                        <div class="col-lg-6 mb-30"
                                             style="padding: 0px 10px 0px 0px;margin-bottom: 20px;">
                                            <label>Họ và tên <span style="color: red;">*</span></label>
                                            <input type="text" class="name" required>
                                        </div>
                                        <div class="col-lg-6 mb-30"
                                             style="padding: 0px 0px 0px 10px;margin-bottom: 20px;">
                                            <label>Số điện thoại <span style="color: red;">*</span></label>
                                            <input type="number" class="phone" required
                                                   style="display: block;padding: 0 15px;color: #373d54;width: 100%;background: #f8fafc;font-size: 14px;height: 40px;border: 1px solid #e0e4f6;transition: all 0.2s;">
                                        </div>
                                        <div class="col-12 mb-30" style="margin-bottom: 20px;">
                                            <label>Địa chỉ Email <span style="color: red;">*</span></label>
                                            <input type="email" class="email" required>
                                        </div>
                                        <div class="col-lg-6 mb-30"
                                             style="padding: 0px 10px 0px 0px;margin-bottom: 20px;">
                                            <label for="city">Tỉnh/Thành phố <span style="color: red;">*</span></label>
                                            <select name="city" id="city" class="choose city"
                                                    style="width: 100%;display: block;padding: 0 15px;color: #373d54;  background: #f8fafc;font-size: 14px;height: 40px;border: 1px solid #e0e4f6;transition: all 0.2s;">
                                                <option value="">---Vui lòng chọn thành phố---</option>
                                                @foreach($city as $key=>$ci)
                                                    <option value='{{$ci->matp}}'>{{$ci->name_city}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-6 mb-30"
                                             style="padding: 0px 0px 0px 10px;margin-bottom: 20px;">
                                            <label for="province">Quận/Huyện <span style="color: red;">*</span></label>
                                            <select name="province" id="province" class="province choose"
                                                    style="width: 100%;display: block;padding: 0 15px;color: #373d54;  background: #f8fafc;font-size: 14px;height: 40px;border: 1px solid #e0e4f6;transition: all 0.2s;">
                                                <option value=''>---Vui lòng chọn quận huyện---</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 mb-30"
                                             style="padding: 0px 10px 0px 0px;margin-bottom: 20px;">
                                            <label for="wards">Xã/Phường <span style="color: red;">*</span></label>
                                            <select name="wards" id="wards" class="wards"
                                                    style="width: 100%;display: block;padding: 0 15px;color: #373d54;  background: #f8fafc;font-size: 14px;height: 40px;border: 1px solid #e0e4f6;transition: all 0.2s;">
                                                <option value=''>---Vui lòng chọn xã phường---</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 mb-30"
                                             style="padding: 0px 0px 0px 10px;margin-bottom: 20px;">
                                            <label>Địa chỉ cụ thể <span style="color: red;">*</span></label>
                                            <input type="text" class="address" required>
                                        </div>
                                        <div class="col-12">
                                            <div class="order-notes">
                                                <label for="order_note">Ghi chú <span style="color: red;">*</span><span>(Không bắt buộc)</span></label>
                                                <textarea style="overflow: auto;height: 100px;margin-bottom: 20px;"
                                                          id="order_note"
                                                          placeholder="Ghi chú về đơn đặt hàng của bạn."
                                                          class="note"></textarea>
                                            </div>
                                        </div>
                                        <div class="order_button" style="margin-top: 20px;margin-bottom: 20px;">
                                            <button type="button" name="calculate_order" class="calculate_delivery">Tính
                                                phí vận chuyển
                                            </button>
                                        </div>
                                    </div>
                                @endif
                            </form>
                        </div>
                        <div class="col-lg-6 col-md-6" style="padding: 0px 0px 0px 20px;">
                            <form method="POST">
                                <input type="hidden" name="_token" value="{{csrf_token()}}" autocomplete="on">

                                {{--                                action="{{route('shopping.checkout')}}"--}}
                                <h3>Đơn hàng của bạn</h3>
                                <div class="order_table table-responsive mb-30">
                                    <table style="margin-bottom: 20px;">
                                        <thead>
                                        <tr>
                                            <th style="width: 70%;">Sản phẩm</th>
                                            <th>Thành tiền</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(Session::has('Cart') != null)
                                            @foreach(Session::get('Cart')->products as $item)
                                                <tr>
                                                    <td> {{$item['productInfo']->name}} <strong>
                                                            × {{$item['quanty']}}</strong></td>
                                                    <td>
                                                        {{number_format($item['price'],'0',',','.')}} VNĐ
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                        <tfoot>
                                        @if(Session::has('Cart') != null)
                                            <tr>
                                                <th>TỔNG TIỀN</th>
                                                <td>
                                                    <strong>{{number_format(Session::get('Cart')->totalPrice,'0',',','.')}}
                                                        VNĐ</strong>
                                                </td>
                                            </tr>
                                            @if(Session::get('fee'))
                                                <tr>
                                                    <th>PHÍ GIAO HÀNG</th>
                                                    <td><strong>{{number_format(Session::get('fee'),'0',',','.')}}
                                                            VNĐ</strong></td>
                                                </tr>
                                            @endif
                                            @if(Session::get('coupon'))
                                                @foreach(Session::get('coupon') as $key => $cou)
                                                    <tr>
                                                        <th>MÃ GIẢM GIÁ</th>
                                                        <td>
                                                            <strong>- {{number_format($cou['coupon_money'],0,',','.')}}
                                                                VNĐ</strong><a href="javascripts:" class="delete_coupon" style="color: red">  (xóa)</a></td>
                                                    </tr>
                                                    <tr class="order_total" style="background-color: #fdd922;">
                                                        <th>TỔNG ĐƠN HÀNG</th>
                                                        <td>
                                                            <strong>{{number_format(Session::get('Cart')->totalPrice + Session::get('fee') - $cou['coupon_money'],'0',',','.')}}
                                                                VNĐ</strong></td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr class="order_total" style="background-color: #fdd922;">
                                                    <th>TỔNG ĐƠN HÀNG</th>
                                                    <td>
                                                        <strong>{{number_format(Session::get('Cart')->totalPrice + Session::get('fee'),'0',',','.')}}
                                                            VNĐ</strong></td>
                                                </tr>
                                            @endif
                                        @endif

                                        </tfoot>
                                    </table>
                                </div>
                                <div class="cart-coupon">
                                    <input placeholder="Mã giảm giá của bạn" type="text" name="coupon" class="coupon">
                                    <a class="cart-coupon-btn add_coupon" ><img
                                            src="{!! asset('public\user\assets\img/ok.png') !!}"
                                            alt="your coupon" style="padding: 9px;"></a>

                                </div>
                                <div class="payment_method" style="text-align: -webkit-right;">
                                    <div class="panel-default" style="margin-bottom: 20px;">
                                        <input id="payment" name="check_method" type="radio"
                                               data-target="createp_account" class="check_payment">
                                        <label for="payment" data-toggle="collapse" data-target="#method"
                                               aria-controls="method">Thanh toán khi giao hàng</label>

                                        {{--                                        <div id="method" class="collapse one" data-parent="#accordion">--}}
                                        {{--                                            <div class="card-body1">--}}
                                        {{--                                                <p>Please send a check to Store Name, Store Street, Store Town, Store--}}
                                        {{--                                                    State / County, Store Postcode.</p>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}
                                    </div>
                                    {{--                                    <div class="panel-default">--}}
                                    {{--                                        <input id="payment_defult" name="check_method" type="radio"--}}
                                    {{--                                               data-target="createp_account">--}}
                                    {{--                                        <label for="payment_defult" data-toggle="collapse" data-target="#collapsedefult"--}}
                                    {{--                                               aria-controls="collapsedefult">PayPal <img--}}
                                    {{--                                                src="assets\img\visha\papyel.png" alt=""></label>--}}

                                    {{--                                        <div id="collapsedefult" class="collapse one" data-parent="#accordion">--}}
                                    {{--                                            <div class="card-body1">--}}
                                    {{--                                                <p>Pay via PayPal; you can pay with your credit card if you don’t have a--}}
                                    {{--                                                    PayPal account.</p>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                    <input type="hidden" name="fee" class="fee" value="{{Session::get('fee')}}">
                                    <div class="order_button" style="margin-bottom: 20px;">
                                        <button type="button" name="checkout-btn" class="check_checkout">Xác nhận thanh
                                            toán
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </section>
    </main>
    <!-- Main Content - end -->
@endsection

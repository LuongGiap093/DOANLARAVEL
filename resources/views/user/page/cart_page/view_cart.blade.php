@extends('user.theme.layout')
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li class='active'>Shopping Cart</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->
    @if(Session::has('message'))
        <p class="alert alert-info" style="text-align: center;">{{ Session::get('message') }}</p>
    @endif
    <div class="body-content outer-top-xs">
        <div class="row" id="list-cart">
            <div class="container">
{{--                action="{{route('dathang')}}"--}}
                <form  method="POST" class="creditly-card-form agileinfo_form" style="padding-bottom: 20px;">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" autocomplete="on">
                    <span id="status"></span>
                    <div class="shopping-cart">
                        <div class="shopping-cart-table " style="margin-bottom: -40px;">
                            <div class="table-responsive">
                                <table id="cart" class="table">
                                    <thead>
                                    <tr>
                                        <th class="cart-description item">Hình ảnh</th>
                                        <th class="cart-product-name item">Tên Sản Phẩm</th>
                                        <th class="cart-sub-total item">Đơn Giá</th>
                                        <th class="cart-qty item" style="width: 10%;">Số Lượng</th>
                                        <th class="cart-total last-item">Tổng cộng</th>
                                        <th class="cart-edit item">Cập Nhật</th>
                                        <th class="cart-romove item">Xóa</th>
                                    </tr>
                                    </thead><!-- /thead -->
                                    @if(Session::has('Cart') != null)
                                        @foreach(Session::get('Cart')->products as $item)
                                            <tbody>
                                            <tr>
                                                <td class="cart-image">
                                                    <a class="entry-thumbnail" href="#">
                                                        <img src="{{asset('images/'.$item['productInfo']->image)}}"
                                                             alt="" style="width:90px;">
                                                    </a>
                                                </td>
                                                <td class="cart-product-name-info" style="text-align: center; width: 30%;">
                                                    <h4 class='cart-product-description'><a
                                                            href="#">{{$item['productInfo']->name}}</a></h4>

                                                </td>
                                                <td class="cart-product-sub-total"><span class="cart-sub-total-price">{{number_format($item['productInfo']->price - $item['productInfo']->discount)}} VNĐ</span>
                                                </td>
                                                <td>
                                                    <input data-id="{{$item['productInfo']->id}}"
                                                           id="quanty-item-{{$item['productInfo']->id}}" type="number" min="1"
                                                           autocomplete="off" value="{{$item['quanty']}}"
                                                           style="width: 47%; text-align: center; margin-left: 26%;">
                                                </td>

                                                <td class="cart-product-grand-total"><span
                                                        class="cart-grand-total-price">{{number_format($item['price'])}} VNĐ</span>
                                                </td>
                                                <td>
                                                    <a onclick="SaveListItemCart({{$item['productInfo']->id}})"
                                                       href="javascript:"><i class="fa fa-refresh"
                                                                             style="margin-left: 50%;"></i></a>
                                                </td>
                                                <td>
                                                    <a onclick="DeleteListItemCart({{$item['productInfo']->id}})"
                                                       href="javascript:"><i class="fa fa-trash"
                                                                             style="margin-left: 50%;"></i></a>
                                                </td>
                                            </tr>
                                            </tbody><!-- /tbody -->
                                        @endforeach
                                        <tfoot>
                                        <tr>
                                            <td colspan="7">
                                                <div class="shopping-cart-btn">
											<span class="">
												<a href="{{route('shopping.index')}}"
                                                   class="btn btn-upper btn-primary outer-left-xs">Tiếp Tục Mua Sắm</a>
                                                <!-- <a href="#" class="btn btn-upper btn-primary pull-right outer-right-xs">Update shopping cart</a> -->
											</span>
                                                </div><!-- /.shopping-cart-btn -->
                                            </td>
                                        </tr>
                                        </tfoot>
                                    @else
                                        <tfoot>
                                        <tr>
                                            <td colspan="7">
                                                <div class="shopping-cart-btn">
                                                    <span class="">
                                                        <a href="{{route('shopping.index')}}"
                                                           class="btn btn-upper btn-primary outer-left-xs">Tiếp Tục Mua Sắm</a>
                                                        <!--<a href="#" class="btn btn-upper btn-primary pull-right outer-right-xs">Update shopping cart</a>-->

                                                    </span>
                                                </div><!-- /.shopping-cart-btn -->
                                            </td>
                                        </tr>
                                        </tfoot>
                                    @endif
                                </table><!-- /table -->
                            </div>
                        </div><!-- /.shopping-cart-table -->
                        <hr>
                        <div class="col-md-4 col-sm-12 estimate-ship-tax">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>
                                        <span class="estimate-title">THÔNG TIN KHÁCH HÀNG</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" autocomplete="off"
                                                   class="form-control unicase-form-control text-input customer_name"
                                                   placeholder="Họ và tên..." name="customer_name" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" autocomplete="off"
                                                   class="form-control unicase-form-control text-input customer_email"
                                                   placeholder="Email..." name="customer_email" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" autocomplete="off"
                                                   class="form-control unicase-form-control text-input customer_phone_number"
                                                   placeholder="Số điện thoại..." name="customer_phone_number"
                                                   required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" autocomplete="off"
                                                   class="form-control unicase-form-control text-input customer_address"
                                                   placeholder="Địa chỉ..." name="customer_address" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" autocomplete="off"
                                                   class="form-control unicase-form-control text-input customer_note"
                                                   placeholder="Ghi chú..." name="customer_note" required="">

                                            @if(Session::get('fee'))
                                                <input type="hidden" autocomplete="off"
                                                       class="form-control unicase-form-control text-input order_fee"
                                                       name="order_fee" value="{{Session::get('fee')}}">
                                                <input type="hidden" autocomplete="off"
                                                       class="form-control unicase-form-control text-input customer_matp"
                                                       name="customer_matp" value="{{Session::get('fee_matp')}}">
                                                <input type="hidden" autocomplete="off"
                                                       class="form-control unicase-form-control text-input customer_maqh"
                                                       name="customer_maqh" value="{{Session::get('fee_maqh')}}">
                                                <input type="hidden" autocomplete="off"
                                                       class="form-control unicase-form-control text-input customer_xaid"
                                                       name="customer_xaid" value="{{Session::get('fee_xaid')}}">
                                            @else
                                                <input type="hidden" autocomplete="off"
                                                       class="form-control unicase-form-control text-input order_fee"
                                                       name="order_fee" value="50000">
                                                <input type="hidden" autocomplete="off"
                                                       class="form-control unicase-form-control text-input customer_matp"
                                                       name="customer_matp" value="{{Session::get('fee_matp')}}">
                                                <input type="hidden" autocomplete="off"
                                                       class="form-control unicase-form-control text-input customer_maqh"
                                                       name="customer_maqh" value="{{Session::get('fee_maqh')}}">
                                                <input type="hidden" autocomplete="off"
                                                       class="form-control unicase-form-control text-input customer_xaid"
                                                       name="customer_xaid" value="{{Session::get('fee_xaid')}}">
                                            @endif

                                            @if(Session::get('coupon'))

                                                @foreach(Session::get('coupon') as $key => $cou)
                                                    <input type="hidden" autocomplete="off"
                                                           class="form-control unicase-form-control text-input order_coupon"
                                                           name="order_coupon" value="{{$cou['coupon_code']}}">
                                                @endforeach
                                            @else
                                                <input type="hidden" autocomplete="off"
                                                       class="form-control unicase-form-control text-input order_coupon"
                                                       name="order_coupon" value="không có">
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            {{--                                            <label class="info-title control-label">Phương thức thanh toán--}}
                                            {{--                                                <span>*</span></label>--}}
                                            <select class="form-control unicase-form-control text-input order_payment"
                                                    name="order_payment" required="">
                                                <option>--Tùy chọn phương thức thanh toán--</option>
                                                <option>Thanh toán bằng thẻ ATM</option>
                                                <option>Thanh toán bằng tiền mặt</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                </tbody><!-- /tbody -->
                            </table><!-- /table -->
                        </div><!-- /.estimate-ship-tax -->

                        <div class="col-md-4 col-sm-12 estimate-ship-tax">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>
                                        <span class="estimate-title">TÍNH PHÍ VẬN CHUYỂN</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="city">Chọn thành phố:</label>
                                            <select name="city" id="city"  class="form-control unicase-form-control text-input choose city" autocomplete="new-password">
                                                <option value=''>---Vui lòng chọn thành phố---</option>
                                                @foreach($city as $key=>$ci)
                                                    <option value='{{$ci->matp}}'>{{$ci->name_city}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="province">Chọn quận huyện:</label>
                                            <select name="province" id="province" class="form-control unicase-form-control text-input province choose">
                                                <option value=''>---Vui lòng chọn quận huyện---</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="wards">Chọn xã phường:</label>
                                            <select name="wards" id="wards" class="form-control unicase-form-control text-input wards">
                                                <option value=''>---Vui lòng chọn xã phường---</option>
                                            </select>
                                        </div>
                                        @if(Session::has('Cart') != null)
                                            <input type="button" value="Tính phí vận chuyển" name="calculate_order" class="btn btn-primary btn-upper calculate_delivery">
                                        @else
                                            <input type="button" value="Tính phí vận chuyển" name="calculate_order" class="btn btn-primary btn-upper calculate_delivery" disabled="">
                                        @endif
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div><!-- /.estimate-ship-tax -->

                        <div id="change-item-coupon">
                            @if(Session::has('Cart') != null)
                                <div class="col-md-4 col-sm-12 cart-shopping-total">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            @if(Session::get('coupon'))
                                                @foreach(Session::get('coupon') as $key => $cou)
                                                    <th style="text-align: left; padding-left: 50px;">
                                                        <div class="cart-sub-total">
                                                            <span class="inner-left-md" style="padding-left: 0px;">Tổng tiền: {{number_format(Session::get('Cart')->totalPrice)}} VNĐ</span>
                                                        </div>
                                                        @if(Session::get('fee'))
                                                        <div class="cart-sub-total">
                                                            <span class="inner-left-md" style="padding-left: 0px;">Shiping: {{number_format(Session::get('fee'))}} VNĐ</span>
                                                        </div>
                                                        @endif
                                                        <div class="cart-sub-total">
                                                            <span class="inner-left-md" style="padding-left: 0px;">
                                                                @if($cou['coupon_code']!=null)
                                                                    Mã
                                                                    giảm: {{number_format($cou['coupon_money'],0,',',',')}}
                                                                    VNĐ
                                                                @else
                                                                    0
                                                                @endif
                                                            </span>
                                                        </div>
                                                        <div class="cart-grand-total">
                                                            <span class="inner-left-md" style="padding-left: 0px;">Thành tiền: {{number_format((Session::get('Cart')->totalPrice + Session::get('fee')) - $cou['coupon_money'],0,',',',')}} VNĐ</span>
                                                            <input type="hidden" autocomplete="off"
                                                                   class="form-control unicase-form-control text-input order_total"
                                                                   name="order_total" value="{{(Session::get('Cart')->totalPrice + Session::get('fee')) - $cou['coupon_money']}}">
                                                        </div>
                                                    </th>
                                                @endforeach

                                            @else
                                                <th style="text-align: left; padding-left: 0px;">
                                                    <div class="cart-sub-total">
                                                        <span class="inner-left-md">Tổng tiền: {{number_format(Session::get('Cart')->totalPrice )}} VNĐ</span>
                                                    </div>
                                                    @if(Session::get('fee'))
                                                        <div class="cart-sub-total">
                                                            <span class="inner-left-md" >Shiping: {{number_format(Session::get('fee'))}} VNĐ</span>
                                                        </div>
                                                    @endif
                                                    <div class="cart-grand-total">
                                                        <span class="inner-left-md">Thành tiền: {{number_format(Session::get('Cart')->totalPrice + Session::get('fee'))}} VNĐ</span>
                                                        <input type="hidden" autocomplete="off"
                                                               class="form-control unicase-form-control text-input order_total"
                                                               name="order_total" value="{{Session::get('Cart')->totalPrice + Session::get('fee')}}">
                                                    </div>
                                                </th>
                                            @endif
                                        </tr>
                                        </thead><!-- /thead -->
                                        <tbody>
                                        <tr>
                                            <td style="padding: 24px 54px;">
                                                <div class="cart-checkout-btn pull-right">
                                                    <div class="form-group" style="margin-bottom: 5px;">

                                                        <input type="text"
                                                               class="form-control unicase-form-control text-input"
                                                               name="coupon" placeholder="Mã giảm giá của bạn.."
                                                               value="" style="margin-bottom: 5px;">
                                                        <button type="submit" class="btn-upper btn btn-primary"
                                                                name="AddCoupon"
                                                                value="Tính mã giảm giá" formaction="{{route('giamgia')}}"
                                                                formnovalidate style="margin-bottom: 0px;">ÁP DỤNG
                                                        </button>
                                                        @if(Session::get('coupon'))
                                                            <a class="btn-upper btn btn-primary" href="{{route('delete-coupon')}}">XÓA MÃ</a>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                    <span style="margin: 10px 0px 10px 0px;">Nhanh tay đặt hàng ngay hôm nay nào!</span>
                                                        @if(Session::get('fee'))
                                                    <button type="button" name="checkout-btn" class="btn btn-primary checkout-btn"
                                                            style="padding: 13px 54px;" style="width: 105%;" >
                                                        XÁC NHẬN MUA HÀNG
                                                    </button>
                                                        @else
                                                            <button type="button" name="checkout-btn" class="btn btn-primary checkout-btn"
                                                                    style="padding: 13px 54px;" style="width: 105%;" disabled="">
                                                                XÁC NHẬN MUA HÀNG
                                                            </button>
                                                        @endif
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody><!-- /tbody -->
                                    </table><!-- /table -->
                                </div><!-- /.cart-shopping-total -->
                            @else
                                <div class="col-md-4 col-sm-12 cart-shopping-total">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th style="text-align: left; padding-left: 50px;">
                                                <div class="cart-grand-total">
                                                    <span class="inner-left-md" style="padding-left: 0px;">Thành tiền: 0 VNĐ</span>
                                                </div>
                                            </th>
                                        </tr>
                                        </thead><!-- /thead -->
                                        <tbody>
                                        <tr>
                                            <td style="padding: 24px 54px;">
                                                <div class="cart-checkout-btn pull-right">
                                                    <button type="button" name="checkout-btn" class="btn btn-primary checkout-btn"
                                                            style="padding: 12px 44px;" style="width: 105%;" disabled="">
                                                        XÁC NHẬN MUA HÀNG
                                                    </button>
                                                    <span class="">Nhanh tay đặt hàng ngay hôm nay nào!</span>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody><!-- /tbody -->
                                    </table><!-- /table -->
                                </div><!-- /.cart-shopping-total -->
                            @endif
                        </div>
                    </div><!-- /.shopping-cart -->
                </form>
            </div>
        </div>
    </div><!-- /.body-content -->
@stop

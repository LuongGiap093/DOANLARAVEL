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
                            <div class="cart-sub-total">
                                <span class="inner-left-md" style="padding-left: 0px;">Shiping: 15,000 VNĐ</span>
                            </div>
                            <div class="cart-sub-total">
                                                <span class="inner-left-md" style="padding-left: 0px;">


                                                            @if($cou['coupon_code']!=null)
                                                        Mã giảm: {{number_format($cou['coupon_money'],0,',',',')}} VNĐ
                                                    @else
                                                        0
                                                    @endif

                                                </span>
                            </div>

                            {{--                                            <div class="cart-sub-total">--}}
                            {{--                                                <span class="inner-left-md" style="padding-left: 0px;">Shiping: 15,000 VNĐ</span>--}}
                            {{--                                            </div>--}}
                            {{--                                            <div class="cart-sub-total" style="padding-left: 0px;">--}}
                            {{--                                                @csrf--}}
                            {{--                                                <form method="POST" action="{{url('/check-coupon')}}">--}}
                            {{--                                                    <input type="text" class="form-control" name="coupon" placeholder="Nhập mã giảm giá">--}}
                            {{--                                                    <input type="submit" class="btn btn-upper check_coupon" name="check_coupon" value="ÁP DỤNG">--}}
                            {{--                                                </form>--}}
                            {{--                                                <input type="text" class="inner-left-md" name="coupon_code"  style="padding-left: 0px; padding-bottom: 3px; width: 69%; font-weight: 500;">--}}
                            {{--                                                <span class="">--}}
                            {{--                                                    <a href="{{route('shopping.blog')}}" class="btn btn-upper btn-primary outer-left-xs" style="width: 29%; padding: 3px 0px;">--}}
                            {{--                                                        ÁP DỤNG--}}
                            {{--                                                    </a>--}}
                            {{--                                                </span>--}}
                            {{--                                            </div>--}}
                            <div class="cart-grand-total">
                                <span class="inner-left-md" style="padding-left: 0px;">Thành tiền: {{number_format(Session::get('Cart')->totalPrice + 15000 - $cou['coupon_money'],0,',',',')}} VNĐ</span>
                            </div>
                        </th>
                    @endforeach

                @else
                    <th style="text-align: left; padding-left: 0px;">
                        <div class="cart-sub-total">
                            <span class="inner-left-md">Tổng tiền: {{number_format(Session::get('Cart')->totalPrice )}} VNĐ</span>
                        </div>
                        <div class="cart-sub-total">
                            <span class="inner-left-md">Shiping: 15,000 VNĐ</span>
                        </div>
                        <div class="cart-grand-total">
                            <span class="inner-left-md">Thành tiền: {{number_format(Session::get('Cart')->totalPrice + 15000)}} VNĐ</span>
                        </div>
                    </th>
                @endif
            </tr>
            </thead><!-- /thead -->
            <tbody>
            <tr>
                <td style="padding: 24px 54px;">
                    <div class="cart-checkout-btn pull-right">
                        <button type="submit" class="btn btn-primary checkout-btn"
                                style="padding: 12px 44px;" style="width: 105%;">
                            XÁC NHẬN MUA HÀNG
                        </button>
                        <span class="">Nhanh tay đặt hàng ngay hôm nay nào!</span>
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
                    <div class="cart-sub-total">
                                                <span class="inner-left-md"
                                                      style="padding-left: 0px;">Tổng tiền: 0 VNĐ</span>
                    </div>
                    <div class="cart-sub-total">
                                                <span class="inner-left-md"
                                                      style="padding-left: 0px;">Shiping: 0 VNĐ</span>
                    </div>
                    <div class="cart-sub-total">
                                                <span class="inner-left-md" style="padding-left: 0px;">
                                                        Mã giảm: 0 VNĐ
                                                </span>
                    </div>

                    {{--                                            <div class="cart-sub-total">--}}
                    {{--                                                <span class="inner-left-md" style="padding-left: 0px;">Shiping: 15,000 VNĐ</span>--}}
                    {{--                                            </div>--}}
                    {{--                                            <div class="cart-sub-total" style="padding-left: 0px;">--}}
                    {{--                                                @csrf--}}
                    {{--                                                <form method="POST" action="{{url('/check-coupon')}}">--}}
                    {{--                                                    <input type="text" class="form-control" name="coupon" placeholder="Nhập mã giảm giá">--}}
                    {{--                                                    <input type="submit" class="btn btn-upper check_coupon" name="check_coupon" value="ÁP DỤNG">--}}
                    {{--                                                </form>--}}
                    {{--                                                <input type="text" class="inner-left-md" name="coupon_code"  style="padding-left: 0px; padding-bottom: 3px; width: 69%; font-weight: 500;">--}}
                    {{--                                                <span class="">--}}
                    {{--                                                    <a href="{{route('shopping.blog')}}" class="btn btn-upper btn-primary outer-left-xs" style="width: 29%; padding: 3px 0px;">--}}
                    {{--                                                        ÁP DỤNG--}}
                    {{--                                                    </a>--}}
                    {{--                                                </span>--}}
                    {{--                                            </div>--}}
                    <div class="cart-grand-total">
                                                <span class="inner-left-md"
                                                      style="padding-left: 0px;">Thành tiền: 0 VNĐ</span>
                    </div>
                </th>
            </tr>
            </thead><!-- /thead -->
            <tbody>
            <tr>
                <td style="padding: 24px 54px;">
                    <div class="cart-checkout-btn pull-right">
                        <button type="submit" class="btn btn-primary checkout-btn"
                                style="padding: 12px 44px;" style="width: 105%;">
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

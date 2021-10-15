@extends('frontend.theme.layout')
@section('content')
    <!-- Main Content - start -->
    <main>
        <section class="container stylization maincont">


            <ul class="b-crumbs">
                <li>
                    <a href="index.html">
                        Home
                    </a>
                </li>
                <li>
                    <span>Cart</span>
                </li>
            </ul>
            <h1 class="main-ttl"><span>Giỏ hàng</span></h1>
            <!-- Cart Items - start -->
            <div id="list-cart">
                <form action="#" style="background-color: white; padding: 20px;">

                    <div class="cart-items-wrap">
                        <table class="cart-items">
                            <thead>
                            <tr>
                                <td class="cart-image" style="text-align: center;">Hình ảnh</td>
                                <td class="cart-ttl">Sản phẩm</td>
                                <td class="cart-price">Giá bán</td>
                                <td class="cart-quantity">Số lượng</td>
                                <td class="cart-summ">Thành tiền</td>
                                <td class="cart-del">&nbsp;</td>
                            </tr>
                            </thead>
                            @if(Session::has('Cart') != null)
                                @foreach(Session::get('Cart')->products as $item)
                                    <tbody>
                                    <tr>
                                        <td class="cart-image">
                                            <a href="product.html">
                                                <img src="{{asset('public/images/'.$item['productInfo']->image)}}"
                                                     alt="Similique delectus totam">
                                            </a>
                                        </td>
                                        <td class="cart-ttl">
                                            <a href="product.html">{{$item['productInfo']->name}}</a>
                                            <p>Color: Red</p>
                                            <p>Size: XS</p>
                                        </td>
                                        <td class="cart-price">
                                            <b>{{number_format($item['productInfo']->price - $item['productInfo']->discount,'0',',','.')}}
                                                VNĐ</b>
                                        </td>
                                        <td class="cart-quantity">
                                            <p class="cart-qnt">
                                                <input value="{{$item['quanty']}}" type="text"
                                                       data-id="{{$item['productInfo']->id}}"
                                                       id="quanty-item-{{$item['productInfo']->id}}">
                                                <a onclick="SaveListItemCart({{$item['productInfo']->id}})"
                                                   href="javascript:" class="cart-plus"><i
                                                        class="fa fa-angle-up"></i></a>
                                                <a onclick="SaveListItemCart1({{$item['productInfo']->id}})"
                                                   href="javascript:" class="cart-minus"><i
                                                        class="fa fa-angle-down"></i></a>
                                            </p>
                                        </td>
                                        <td class="cart-summ">
                                            <b>{{number_format($item['price'],'0',',','.')}} VNĐ</b>
                                            <p class="cart-forone">unit price <b>$220</b></p>
                                        </td>
                                        <td class="cart-del">
                                            <a onclick="DeleteListItemCart({{$item['productInfo']->id}})"
                                               href="javascript:" class="cart-remove"></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            @endif
                        </table>
                    </div>
                    @if(Session::has('Cart') != null)
                        <ul class="cart-total">
                            <li class="cart-summ">Tổng cộng: <b>{{number_format(Session::get('Cart')->totalPrice,'0',',','.')}}
                                    VNĐ</b></li>
                        </ul>
                    @else
                        <ul class="cart-total">
                            <li class="cart-summ">Tổng cộng: <b>0 VNĐ</b></li>
                        </ul>
                    @endif
                    <div class="cart-submit">
{{--                        <div class="cart-coupon">--}}
{{--                            <input placeholder="Mã giảm giá của bạn" type="text">--}}
{{--                            <a class="cart-coupon-btn" href="#"><img--}}
{{--                                    src="{!! asset('public\user\assets\img/ok.png') !!}" alt="your coupon"></a>--}}
{{--                        </div>--}}
                        <a href="{{route('thanh-toan')}}" class="cart-submit-btn">Thủ tục thanh toán</a>
                        <a href="#" class="cart-clear">Xóa giỏ hàng</a>
                    </div>
                </form>
                <!-- Cart Items - end -->
            </div>
        </section>
    </main>
    <!-- Main Content - end -->
@endsection

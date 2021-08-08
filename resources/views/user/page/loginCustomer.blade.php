@extends('user.theme.layout')
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="home.html">Home</a></li>
                    <li class="active">Login</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div>

    <div class="body-content">
        <div class="container">
            <div class="sign-in-page">
                <div class="row">
                    <!-- Sign-in -->
                    <div class="col-md-6 col-sm-6 sign-in">
                        <h4 class="">Đăng nhập</h4>
                        <p class="">Xin chào, Chào mừng đến với tài khoản của bạn.</p>
                        @if (count($errors) >0)
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li class="text-danger"> {{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        @if (session('status'))
                            <ul>
                                <li class="text-danger"> {{ session('status') }}</li>
                            </ul>
                        @endif
                        <form class="register-form outer-top-xs" role="form" action="{{ route('customer.postLogin') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="info-title" for="email">Địa chỉ Email <span>*</span></label>
                                <input class="form-control" type="email" name="email" placeholder="jonh@gmail.com" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="password">Mật khẩu <span>*</span></label>
                                <input class="form-control" type="password" name="password" placeholder="Enter your password" autocomplete="off">
                            </div>
                            <div class="radio outer-xs">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Ghi nhớ!
                                </label>
                                <a href="#" class="forgot-password pull-right">Quên mật khẩu?</a>
                            </div>
                            <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Đăng nhập</button>
                        </form>
                        <div class="social-sign-in outer-top-xs">
                            <a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i> Đăng nhập với Facebook</a>
                            <a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i> Đăng nhập với Twitter</a>
                        </div>
                    </div>

                    <!-- Sign-in -->

                    <!-- create a new account -->
                    <div class="col-md-6 col-sm-6 create-new-account">
                        <h4 class="checkout-subtitle">Tạo tài khoản mới</h4>
                        <p class="text title-tag-line">Tạo tài khoản mới của bạn.</p>
                        @if(Session::has('message'))
                            <div class="alert alert-success">
                                {{Session::get('message')}}
                            </div>
                        @endif
                        <form class="register-form outer-top-xs" role="form" action="{{route('user.postadd')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="info-title" for="name">Tên tài khoản <span>*</span></label>
                                <input type="text" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="name" >
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="email">Địa chỉ Email <span>*</span></label>
                                <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail2" name="email" placeholder="jonh@gmail.com">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="password">Mật khẩu <span>*</span></label>
                                <input type="password" autocomplete="off" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="password">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Nhập lại mật khẩu <span>*</span></label>
                                <input type="password" autocomplete="off" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="confirm_password">
                            </div>
{{--                            <div class="form-group">--}}
{{--                                <label class="info-title" for="name">Họ tên <span>*</span></label>--}}
{{--                                <input type="text" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="myname" >--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label class="info-title" for="phone">Địa chỉ <span>*</span></label>--}}
{{--                                <input type="text" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="address" autocomplete="off">--}}
{{--                            </div>--}}
                            <div class="form-group">
                                <label class="info-title" for="phone">Số điện thoại <span>*</span></label>
                                <input type="text" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="phone" autocomplete="off">
                            </div>
                            <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Đăng ký</button>
                        </form>


                    </div>
                    <!-- create a new account -->			</div><!-- /.row -->
            </div><!-- /.sigin-in-->
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
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
    </div>
@stop

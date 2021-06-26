@extends('user.theme.layout')
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li class='active'>Contact</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->
    <div class="container">
        <div class="contact-page">
            <div class="row">
                <div style="width: 100%">
                    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=10.7715174,106.70159678893364+(Flipmart)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    <a href="https://www.maps.ie/draw-radius-circle-map/"></a></div>


                <div class="col-md-9 contact-form">
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    <h5 style="color: red; font-weight: bold">Contact Form</h5>
                    {{--                    <div class="col-md-12 contact-title">--}}
                    {{--                       --}}
                    {{--                    --}}
                    {{--                    </div>--}}
                    <form method="post" action="{{ route('contact.save') }}">
                        @csrf
                        <div class="form-group">
                            <label>Tên<span>*</span></label>
                            <input type="text" class="form-control" name="contacts_name" id="name" required=""
                                   placeholder="Tên của bạn">
                            <!-- Show error -->
                            @if ($errors->has('contacts_name'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('contacts_name') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Email<span>*</span></label>
                            <input type="email" class="form-control" name="contacts_email" id="email" required=""
                                   placeholder="example@gmail.com">
                            <!-- Show error -->
                            @if ($errors->has('contacts_email'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('contacts_email') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Tiêu đề<span>*</span></label>
                            <input type="text" class="form-control" name="contacts_title" id="phone"
                                   placeholder="Nhập tiêu đề">
                            <!-- Show error -->
                            @if ($errors->has('contacts_title'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('contacts_title') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Bình luận<span>*</span></label>
                            <textarea class="form-control" name="contacts_comment" id="message" rows="5"></textarea>

                            <!-- Show error -->
                            @if ($errors->has('contacts_comment'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('contacts_comment') }}
                                </div>
                            @endif
                        </div>
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Gửi</button>
                    </form>
                </div>
                <div class="col-md-3 contact-info">
                    <div class="contact-title">
                        <h4>Information</h4>
                    </div>
                    <div class="clearfix address">
                        <span class="contact-i"><i class="fa fa-map-marker"></i></span>
                        <span class="contact-span">ThemesGround, 789 Main rd, Anytown, CA 12345 USA</span>
                    </div>
                    <div class="clearfix phone-no">
                        <span class="contact-i"><i class="fa fa-mobile"></i></span>
                        <span class="contact-span">+(888) 123-4567<br>+(888) 456-7890</span>
                    </div>
                    <div class="clearfix email">
                        <span class="contact-i"><i class="fa fa-envelope"></i></span>
                        <span class="contact-span"><a href="#">flipmart@themesground.com</a></span>
                    </div>
                </div>
            </div><!-- /.contact-page -->
        </div><!-- /.row -->
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
@stop

@extends('user.theme.layout')
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="{{route('shopping.contact')}}">Trang chủ</a></li>
                    <li class='active'>Liên hệ</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->
    <div class="container" style="margin-bottom: 50px;">
        <div class="contact-page">
            <div class="row">
                <div style="width: 100%;padding: 0px 15px;">
                    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=10.7715174,106.70159678893364+(Flipmart)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    <a href="https://www.maps.ie/draw-radius-circle-map/"></a></div>


                <div class="col-md-9 contact-form">
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    <h5 style="color: red; font-weight: bold">ĐĂNG KÝ NHẬN TIN</h5>
                    {{--                    <div class="col-md-12 contact-title">--}}
                    {{--                       --}}
                    {{--                    --}}
                    {{--                    </div>--}}
                    <form method="post" action="{{ route('shopping.addcontact') }}">
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
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Gửi tin liên hệ
                        </button>
                    </form>
                </div>
                <div class="col-md-3 contact-info">
                    <div class="contact-title">
                        <h4>THÔNG TIN</h4>
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
        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
    </div><!-- /.container -->
    <div class="body-content">
        <div class="container">
            <div class="contact-page">
                <div class="row">
                    <div class="col-md-12 contact-map outer-bottom-vs">
                        <iframe
                            src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=10.7715174,106.70159678893364+(Flipmart)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                            width="600" height="450" style="border:0"></iframe>
                    </div>
                    <div class="col-md-9 contact-form" style="padding-left: 0px;">
                        <div class="col-md-12 contact-title">
                            <h4>ĐĂNG KÝ NHẬN TƯ VẤN</h4>
                        </div>
                        <div class="col-md-4 ">
                            <form class="register-form" role="form">
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputName">Họ và tên <span>*</span></label>
                                    <input type="email" class="form-control unicase-form-control text-input"
                                           id="exampleInputName" placeholder="vd: Nguyen Van A">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <form class="register-form" role="form">
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">Địa chỉ email
                                        <span>*</span></label>
                                    <input type="email" class="form-control unicase-form-control text-input"
                                           id="exampleInputEmail1" placeholder="vd: trongak@gmail.com">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <form class="register-form" role="form">
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputTitle">Tiêu đề <span>*</span></label>
                                    <input type="email" class="form-control unicase-form-control text-input"
                                           id="exampleInputTitle" placeholder="Tiêu đề...">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-12">
                            <form class="register-form" role="form">
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputComments">Nội dung
                                        <span>*</span></label>
                                    <textarea class="form-control unicase-form-control"
                                              id="exampleInputComments"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-12 outer-bottom-small m-t-20">
                            <button type="submit" class="btn-upper btn btn-primary checkout-page-button">GỬI TIN LIÊN HỆ
                            </button>
                        </div>
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
        </div>
    </div>
@stop

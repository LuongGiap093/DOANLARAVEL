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
                    <span>Contacts</span>
                </li>
            </ul>
            <h1 class="main-ttl"><span>Contacts</span></h1>
            <!-- Contacts - start -->
            <br>
            <!-- Google Maps -->
            <div style="background-color: white; padding: 20px">
                <div style="width: 100%">
                    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=10.7715174,106.70159678893364+(Flipmart)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    <a href="https://www.maps.ie/draw-radius-circle-map/"></a>
                </div>
            </div>
            <div class="iconbox-wrap">
                <div class="row iconbox-list">
                    <div class="cf-xs-6 cf-sm-4 cf-lg-4 col-xs-6 col-sm-4 iconbox-i">
                        <p class="iconbox-i-img"><!-- NO SPACE --><img src="{!! asset('public\user\assets\img/phone.jpg') !!}" alt="">
                            <!-- NO SPACE --></p>
                        <h3 class="iconbox-i-ttl">+84 911 150 326</h3>
                        Hãy liên hệ với chúng tôi<br>
                        nói chuyện cùng nhau
                        <span class="iconbox-i-margin"></span>
                    </div>
                    <div class="cf-xs-6 cf-sm-4 cf-lg-4 col-xs-6 col-sm-4 iconbox-i">
                        <p class="iconbox-i-img"><!-- NO SPACE -->
                            <a href="https://goo.gl/maps/xwHXFAyDY3qqivm48" target="_blank"><img src="{!! asset('public\user\assets\img/ggmap.png') !!}" alt=""></a>
                            <!-- NO SPACE -->
                        </p>
                        <h3 class="iconbox-i-ttl">Địa chỉ chúng tôi</h3>
                        Nhà B, 65 Đường Huỳnh Thúc Kháng,<br>
                        Bến Nghé, Quận 1, Thành phố Hồ Chí Minh
                        <span class="iconbox-i-margin"></span>
                    </div>
                    <div class="cf-xs-6 cf-sm-4 cf-lg-4 col-xs-6 col-sm-4 iconbox-i">
                        <p class="iconbox-i-img"><!-- NO SPACE --><img src="{!! asset('public\user\assets\img/dongho.png') !!}" alt="">
                            <!-- NO SPACE --></p>
                        <h3 class="iconbox-i-ttl">Hoạt động</h3>
                        Thứ Hai-Thứ Sáu 07:00 - 22:00<br>
                        Thứ Bảy-Chủ Nhật đóng cửa
                        <span class="iconbox-i-margin"></span>
                    </div>
                </div>
            </div>

            <!-- Contacts Info - end -->
            <div class="social-wrap">
                <div class="social-list">
                    <div class="social-i">
                        <a rel="nofollow" target="_blank" href="http://facebook.com/">
                            <p class="social-i-img">
                                <i class="fa fa-facebook"></i>
                            </p>
                            <p class="social-i-ttl">Facebook</p>
                        </a>
                    </div>
                    <div class="social-i">
                        <a rel="nofollow" target="_blank" href="http://google.com/">
                            <p class="social-i-img">
                                <i class="fa fa-google-plus"></i>
                            </p>
                            <p class="social-i-ttl">Google +</p>
                        </a>
                    </div>
                    <div class="social-i">
                        <a rel="nofollow" target="_blank" href="http://twitter.com/">
                            <p class="social-i-img">
                                <i class="fa fa-twitter"></i>
                            </p>
                            <p class="social-i-ttl">Twitter</p>
                        </a>
                    </div>
                    <div class="social-i">
                        <a rel="nofollow" target="_blank" href="http://vk.com/">
                            <p class="social-i-img">
                                <i class="fa fa-vk"></i>
                            </p>
                            <p class="social-i-ttl">Vkontakte</p>
                        </a>
                    </div>
                    <div class="social-i">
                        <a rel="nofollow" target="_blank" href="http://instagram.com/">
                            <p class="social-i-img">
                                <i class="fa fa-instagram"></i>
                            </p>
                            <p class="social-i-ttl">Instagram</p>
                        </a>
                    </div>
                    <div class="social-i">
                        <a rel="nofollow" target="_blank" href="http://youtube.com/">
                            <p class="social-i-img">
                                <i class="fa fa-youtube"></i>
                            </p>
                            <p class="social-i-ttl">Youtube</p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contactform-wrap">
                <form action="#" class="form-validate" style="max-width: 600px;margin: 0 auto;">
                    <h3 class="component-ttl component-ttl-ct component-ttl-hasdesc"><span>Nhận xét</span></h3>
                    <p class="component-desc component-desc-ct">Alias minima veritatis unde illo deserunt omnis
                        facilis</p>
                    <p class="contactform-field contactform-text">
                        <label class="contactform-label">Tên:</label><!-- NO SPACE --><span
                            class="contactform-input"><input placeholder="Họ tên của bạn" type="text" name="name"
                                                             data-required="text"></span>
                    </p>
                    <p class="contactform-field contactform-email">
                        <label class="contactform-label">E-mail:</label><!-- NO SPACE --><span class="contactform-input"><input
                                placeholder="Your E-mail" type="text" name="email" data-required="text"
                                data-required-email="email"></span>
                    </p>
                    <p class="contactform-field contactform-textarea">
                        <label class="contactform-label">Lời nhắn:</label><!-- NO SPACE --><span
                            class="contactform-input"><textarea placeholder="Tin nhắn của bạn" name="mess"
                                                                data-required="text"></textarea></span>
                    </p>
                    <p class="contactform-submit">
                        <input value="Gửi" type="submit">
                    </p>
                </form>
            </div>
            <!-- Contacts - end -->

        </section>
    </main>
    <!-- Main Content - end -->
@endsection

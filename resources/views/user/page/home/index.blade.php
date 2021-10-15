@extends('user.theme.layout')
@section('content')
    <!-- ============================================== HEADER : END ============================================== -->
    <div class="body-content outer-top-xs" id="top-banner-and-menu">
        <div class="container">
            <div class="row">
                <!-- ============================================== SIDEBAR ============================================== -->
                <div class="col-xs-12 col-sm-12 col-md-3 sidebar">

                    <!-- ================================== MENU DANH MỤC ================================== -->
                @include('user.page.home.category_menu.categorys_menu')
                <!-- /.side-menu -->
                    <!-- ================================== MENU DANH MỤC : END ================================== -->

                    <!-- ============================================== ƯU ĐÃI KHỦNG ============================================== -->
                @include('user.page.home.hot_deals.hotdeals')
                <!-- ============================================== ƯU ĐÃI KHỦNG: END ============================================== -->

                    <!-- ============================================== ĐỀ NGHỊ ĐẶC BIỆT ============================================== -->
                @include('user.page.home.dong-ho.dong_ho')
                <!-- ============================================== ĐỀ NGHỊ ĐẶC BIỆT : END ============================================== -->

                    <!-- ============================================== THẺ SẢN PHẨM ============================================== -->
                @include('user.page.home.the-san-pham.product_tags')
                <!-- ============================================== THẺ SẢN PHẨM : END ============================================== -->

                    <!-- ============================================== ƯU ĐÃI ĐẶC BIỆT ============================================== -->
                @include('user.page.home.may-cu.may_cu')
                <!-- ============================================== ƯU ĐÃI ĐẶC BIỆT : END ============================================== -->

                    <!-- ============================================== NEWSLETTER ============================================== -->

                    <!-- ============================================== NEWSLETTER: END ============================================== -->

                    <!-- ============================================== Testimonials============================================== -->
                @include('user.page.comment.testimonials')
                <!-- ============================================== Testimonials: END ============================================== -->

                {{--                    <div class="home-banner"><img src="assets\images\banners\LHS-banner.jpg" alt="Image"></div>--}}

                <!-- /.sidemenu-holder -->
                    <!-- ============================================== SIDEBAR : END ============================================== -->
                </div>
                <!-- /.sidemenu-holder -->
                <!-- ============================================== SIDEBAR : END ============================================== -->

                <!-- ============================================== CONTENT ============================================== -->
                <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                    <!-- ========================================== SECTION – HERO ========================================= -->
                @include('user.page.home.slider.slider')
                <!-- ========================================= SECTION – HERO : END ========================================= -->

                    <!-- ============================================== INFO BOXES ============================================== -->

                    <div class="info-boxes wow fadeInUp">
                        <div class="info-boxes-inner">
                            <div class="row">
                                <div class="col-md-6 col-sm-4 col-lg-4">
                                    <div class="info-box">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <h4 class="info-box-heading green">Hoàn tiền</h4>
                                            </div>
                                        </div>
                                        <h6 class="text">Đảm bảo hoàn tiền trong 30 ngày</h6>
                                    </div>
                                </div>
                                <!-- .col -->

                                <div class="hidden-md col-sm-4 col-lg-4">
                                    <div class="info-box">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <h4 class="info-box-heading green">MIỄN PHÍ VẬN CHUYỂN</h4>
                                            </div>
                                        </div>
                                        <h6 class="text">Giao hàng cho các đơn đặt hàng trên 10 triệu đồng</h6>
                                    </div>
                                </div>
                                <!-- .col -->

                                <div class="col-md-6 col-sm-4 col-lg-4">
                                    <div class="info-box">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <h4 class="info-box-heading green">GIẢM GIÁ ĐẶC BIỆT</h4>
                                            </div>
                                        </div>
                                        <h6 class="text">Giảm thêm cho tất cả các mặt hàng</h6>
                                    </div>
                                </div>
                                <!-- .col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.info-boxes-inner -->

                    </div>
                    <!-- /.info-boxes -->
                    <!-- ============================================== INFO BOXES : END ============================================== -->

                    <!-- ============================================== ĐIỆN THOẠI NỔI BẬC ============================================== -->
                @include('user.page.home.phone_product.new_product')
                <!-- ============================================== ĐIỆN THOẠI NỔI BẬC: END ============================================== -->

                    <!-- ============================================== BANNER SLIDE============================================== -->
                @include('user.page.home.banner.banner_slide')
                <!-- ============================================== BANNER SLIDE : END ============================================== -->

                    <!-- ============================================== LAPTOP NỔI BẬC ============================================== -->
                @include('user.page.home.laptop_product.featured_products')
                <!-- ============================================== LAPTOP NỔI BẬC : END ============================================== -->

                    <!-- ============================================== BANNER ============================================== -->
                @include('user.page.home.banner.banner')
                <!-- /.wide-banners -->
                    <!-- ============================================== BANNER : END ============================================== -->

                    <!-- ============================================== SẢN PHẨM BÁN CHẠY NHẤT ============================================== -->
                @include('user.page.home.best_seller.best_seller')
                <!-- ============================================== SẢN PHẨM BÁN CHẠY NHẤT : END ============================================== -->

                    <!-- ============================================== BLOG SLIDER ============================================== -->
                @include('user.page.home.blog_slider.blog_index')
                <!-- ============================================== BLOG SLIDER : END ============================================== -->

                    <!-- ============================================== FEATURED PRODUCTS ============================================== -->
                    <section class="section wow fadeInUp new-arriavls">
                        <h3 class="section-title">LAPTOP NỔI BẬC NHẤT</h3>
                        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
                            @foreach($products as $product)
                                @if($product->idcat==2)
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image" style="border: 1px solid #e0e4f6;padding: 10px;">
                                                    <div class="image"><a
                                                            href="{{route('shopping.viewProduct', $product->id)}}"><img
                                                                src="{{asset('public/images/'. $product->image)}}" alt=""></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    @if(($product->discount*100)/$product->price <=0)
                                                        <div class="tag new"><span>new</span></div>
                                                    @elseif(($product->discount*100)/$product->price > 20)
                                                        <div class="tag hot"><span>Hot</span></div>
                                                    @else
                                                        <div class="tag sale"><span>Sale</span></div>
                                                    @endif
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                            href="{{route('shopping.viewProduct', $product->id)}}">{{ $product->name }}</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="product-price">
                                                        Giảm: <span class="price-before-discount"> {{ number_format($product->price,'0',',','.') }}đ</span>
                                                        <span style="position: absolute;">-{{ number_format(($product->discount*100)/$product->price) }}%</span>
                                                    </div>
                                                    <div class="description"></div>
                                                    <div class="product-price">
                                                        <span class="price"> {{ number_format($product->price - $product->discount,'0',',','.') }} VNĐ</span>

                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button data-toggle="tooltip"
                                                                        class="btn btn-primary icon"
                                                                        type="button" title="Add Cart">
                                                                    <a onclick="AddCart({{$product->id}})"
                                                                       href="javascript:"
                                                                       data-text="Add To Cart"
                                                                       data-text="Add To Cart"><i
                                                                            class="fa fa-shopping-cart"></i></a>
                                                                </button>
                                                            </li>
                                                            <li class="lnk wishlist"><a data-toggle="tooltip"
                                                                                        class="add-to-cart"
                                                                                        href="{{ url('add/to-wishlist/'.$product->id) }}"
                                                                                        title="Wishlist"> <i
                                                                        class="icon fa fa-heart"></i> </a></li>
                                                            <li class="lnk"><a data-toggle="tooltip" class="add-to-cart"
                                                                               href="#"
                                                                               title="Compare"> <i class="fa fa-signal"
                                                                                                   aria-hidden="true"></i>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->
                            @endif
                        @endforeach
                        <!-- /.home-owl-carousel -->
                        </div>
                    </section>
                    <!-- /.section -->
                    <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
                </div>
                <!-- /.homebanner-holder -->
                <!-- ============================================== CONTENT : END ============================================== -->
            </div>
            <!-- /.row -->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
        {{--            <div id="brands-carousel" class="logo-slider wow fadeInUp">--}}
        {{--                <div class="logo-slider-inner">--}}
        {{--                    <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">--}}
        {{--                        <div class="item m-t-15"><a href="#" class="image"> <img--}}
        {{--                                    data-echo="{!! asset('frontend/assets/images/brands/brand1.png') !!}"--}}
        {{--                                    src="{!! asset('frontend\assets\images\blank.gif') !!}" alt=""> </a></div>--}}
        {{--                        <!--/.item-->--}}

        {{--                        <div class="item m-t-10"><a href="#" class="image"> <img--}}
        {{--                                    data-echo="{!! asset('frontend/assets/images/brands/brand2.png') !!}"--}}
        {{--                                    src="{!! asset('frontend\assets\images\blank.gif') !!}" alt=""> </a></div>--}}
        {{--                        <!--/.item-->--}}

        {{--                        <div class="item"><a href="#" class="image"> <img--}}
        {{--                                    data-echo="{!! asset('frontend/assets/images/brands/brand3.png') !!}"--}}
        {{--                                    src="{!! asset('frontend\assets\images\blank.gif') !!}" alt=""> </a></div>--}}
        {{--                        <!--/.item-->--}}

        {{--                        <div class="item"><a href="#" class="image"> <img--}}
        {{--                                    data-echo="{!! asset('frontend/assets/images/brands/brand4.png') !!}"--}}
        {{--                                    src="{!! asset('frontend\assets\images\blank.gif') !!}" alt=""> </a></div>--}}
        {{--                        <!--/.item-->--}}

        {{--                        <div class="item"><a href="#" class="image"> <img--}}
        {{--                                    data-echo="{!! asset('frontend/assets/images/brands/brand5.png') !!}"--}}
        {{--                                    src="{!! asset('frontend\assets\images\blank.gif') !!}" alt=""> </a></div>--}}
        {{--                        <!--/.item-->--}}

        {{--                        <div class="item"><a href="#" class="image"> <img--}}
        {{--                                    data-echo="{!! asset('frontend/assets/images/brands/brand6.png') !!}"--}}
        {{--                                    src="{!! asset('frontend\assets\images\blank.gif') !!}" alt=""> </a></div>--}}
        {{--                        <!--/.item-->--}}

        {{--                        <div class="item"><a href="#" class="image"> <img--}}
        {{--                                    data-echo="{!! asset('frontend/assets/images/brands/brand2.png') !!}"--}}
        {{--                                    src="{!! asset('frontend\assets\images\blank.gif') !!}" alt=""> </a></div>--}}
        {{--                        <!--/.item-->--}}

        {{--                        <div class="item"><a href="#" class="image"> <img--}}
        {{--                                    data-echo="{!! asset('frontend/assets/images/brands/brand4.png') !!}"--}}
        {{--                                    src="{!! asset('frontend\assets\images\blank.gif') !!}" alt=""> </a></div>--}}
        {{--                        <!--/.item-->--}}

        {{--                        <div class="item"><a href="#" class="image"> <img--}}
        {{--                                    data-echo="{!! asset('frontend/assets/images/brands/brand1.png') !!}"--}}
        {{--                                    src="{!! asset('frontend\assets\images\blank.gif') !!}" alt=""> </a></div>--}}
        {{--                        <!--/.item-->--}}

        {{--                        <div class="item"><a href="#" class="image"> <img--}}
        {{--                                    data-echo="{!! asset('frontend/assets/images/brands/brand5.png') !!}"--}}
        {{--                                    src="{!! asset('frontend\assets\images\blank.gif') !!}" alt=""> </a></div>--}}
        {{--                        <!--/.item-->--}}
        {{--                    </div>--}}
        {{--                    <!-- /.owl-carousel #logo-slider -->--}}
        {{--                </div>--}}
        {{--                <!-- /.logo-slider-inner -->--}}

        {{--            </div>--}}
        <!-- /.logo-slider -->
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#top-banner-and-menu -->
@endsection

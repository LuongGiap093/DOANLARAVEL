@extends('user.theme.layout')
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Điện thoại</a></li>
                    <li class='active'>Vivo</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->
    <div class="body-content outer-top-xs">
        <div class='container'>
            <div class='row single-product'>
                <div class='col-md-3 sidebar'>
                    <div class="sidebar-module-container">
                        <div class="home-banner outer-top-n" style="margin: 0px 0px 30px 0px;">
                            <img src="{!! asset('public/frontend\assets\images\banners\LHS-banner.jpg') !!}"
                                 alt="Image">
                        </div>
                        @include('user.page.home.hot_deals.hotdeals')

                        @include('user.page.home.newsletter.newsletter')

                        @include('user.page.comment.testimonials')
                    </div>
                </div><!-- /.sidebar -->
                <div class='col-md-9'>
                    <!-- ============================================== VIEW PRODUCT ============================================== -->
                    <div class="detail-block">
                        <div class="row  wow fadeInUp">
                            <div class="col-xs-12 col-sm-6 col-md-6 gallery-holder">
                                <ul id="imageGallery" style="width: 100%">
                                    @if(count($gallerys)>0)
                                        @foreach($gallerys as $key => $gal)
                                            <li data-thumb="{!! asset('public/frontend/assets/images/gallery/'.$gal->gallery_image) !!}"
                                                data-src="{!! asset('public/frontend/assets/images/gallery/'.$gal->gallery_image) !!}"
                                                style="width: 100%;padding: 10px;">
                                                <img style="width: 100%"
                                                     src="{!! asset('public/frontend/assets/images/gallery/'.$gal->gallery_image) !!}"/>
                                            </li>
                                        @endforeach
                                    @else
                                        <li data-thumb="{{asset('public/images/'.$products->image)}}"
                                            data-src="{{asset('public/images/'.$products->image)}}"
                                            style="width: 100%;padding: 10px;">
                                            <img src="{{asset('public/images/'.$products->image)}}"
                                                 style="width: 100%"/>
                                        </li>
                                    @endif

                                </ul>
                            </div><!-- /.gallery-holder -->
                            <div class='col-sm-6 col-md-6 product-info-block'>
                                <div class="product-info">
                                    <h3 class="name">{{$products->name}}</h3>
                                    <div class="rating-reviews m-t-20">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <a href="#" class="lnk" style="margin-left: 10px;">(13 Đánh Giá)</a>
                                            </div>

                                        </div><!-- /.row -->
                                    </div><!-- /.rating-reviews -->

                                    <div class="stock-container info-container m-t-10">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="stock-box">
                                                        <span class="label">Thương hiệu: <a class="value"
                                                                                            href="#">{!! $brand->brand_name !!}</a> </span>
                                                </div>
                                            </div>
                                        </div><!-- /.row -->
                                    </div><!-- /.stock-container -->

                                    <div class="description-container m-t-20">
                                        {!! $products->content !!}
                                    </div><!-- /.description-container -->
                                    <p class="prod-actions" style="margin-top: 20px;">
                                        <a href="#" class="prod-favorites" data-toggle="tooltip"
                                           data-placement="top" title="Thêm vào" style="margin: 0 30px 17px 0;"><i
                                                class="fa fa-heart" style="color: #333;font-size: 15px;"></i> Yêu thích</a>
                                        <a href="#" class="prod-compare" data-toggle="tooltip"
                                           data-placement="top" title="Thêm vào" style="margin: 0 30px 17px 0;"><i
                                                class="fa fa-bar-chart" style="color: #333;font-size: 15px;"></i> So
                                            sánh</a>
                                    </p>

                                    <div class="price-container info-container m-t-20"
                                         style="padding: 0px;border-bottom: none">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="price-box">
                                                    <span class="price" style="padding: 0px 50px 0px 0px;">{{ number_format($products->price - $products->discount,'0',',','.') }} VNĐ</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-3" style="text-align: right; padding-left: 0px;">
                                                <div class="favorite-button m-t-10">

                                                </div>
                                            </div>

                                        </div><!-- /.row -->
                                    </div><!-- /.price-container -->

                                    <div class="quantity-container info-container" style="padding: 5px 0px">
                                        <div class="row">
                                            <div class="col-sm-7" style="display: -webkit-inline-box;">
{{--                                                <div class="cart-quantity">--}}
{{--                                                    <div class="quant-input">--}}
{{--                                                        <div class="arrows">--}}
{{--                                                            <div class="arrow plus gradient"><span class="ir"><i--}}
{{--                                                                        class="icon fa fa-sort-asc"></i></span></div>--}}
{{--                                                            <div class="arrow minus gradient"><span class="ir"><i--}}
{{--                                                                        class="icon fa fa-sort-desc"></i></span></div>--}}
{{--                                                        </div>--}}
{{--                                                        <input type="text" value="1">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
                                                <div class="counter">
                                                    <span class="down" onClick='decreaseCount(event, this)'>-</span>
                                                    <input type="text" value="1">
                                                    <span class="up"  onClick='increaseCount(event, this)'>+</span>
                                                </div>
                                                <a href="javascripts:" onclick="AddCart({{$products->id}})" class="btn btn-primary" style="margin-left: 5px;"><i
                                                        class="fa fa-shopping-cart inner-right-vs"></i> Thêm vào giỏ</a>
                                            </div>
                                            <div class="col-sm-5">

                                            </div>


                                        </div><!-- /.row -->
                                    </div>
                                </div><!-- /.product-info -->
                            </div><!-- /.col-sm-7 -->
                        </div><!-- /.row -->
                    </div>
                    <!-- ============================================== VIEW PRODUCT ============================================== -->


                    <div class="tab" style="margin-top: 30px;">
                        <button class="tablinks" onclick="openCity(event, 'London')">Cấu hình</button>
                        <button class="tablinks" onclick="openCity(event, 'Paris')">Videos</button>
                        <button class="tablinks" onclick="openCity(event, 'Tokyo')" id="defaultOpen">Reviews</button>
                    </div>

                    <div id="London" class="tabcontent" style="max-height: 650px;overflow-x: auto;">
                            <p>{!! $products->describe !!}</p>
                    </div>

                    <div id="Paris" class="tabcontent">
                        <iframe style="width: 100%;border: none;height: 455px;" src="https://www.youtube.com/embed/kaOVHSkDoPY?rel=0&amp;showinfo=0" allowfullscreen=""></iframe>
                    </div>

                    <div id="Tokyo" class="tabcontent">
                        <span class="heading">Đánh giá của khách hàng</span>
                        <span class="fa fa-star checked" style="font-size: 25px;"></span>
                        <span class="fa fa-star checked" style="font-size: 25px;"></span>
                        <span class="fa fa-star checked" style="font-size: 25px;"></span>
                        <span class="fa fa-star checked" style="font-size: 25px;"></span>
                        <span class="fa fa-star" style="font-size: 25px;"></span>
                        <p>4.1 sao trung bình dựa trên 254 nhận xét từ khách hàng.</p>
                        <hr style="border:3px solid #f1f1f1">

                        <div class="row" style="margin: auto;">
                            <div class="side">
                                <div>5 sao</div>
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                    <div class="bar-5"></div>
                                </div>
                            </div>
                            <div class="side right">
                                <div>150 nhận xét</div>
                            </div>
                            <div class="side">
                                <div>4 sao</div>
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                    <div class="bar-4"></div>
                                </div>
                            </div>
                            <div class="side right">
                                <div>63 nhận xét</div>
                            </div>
                            <div class="side">
                                <div>3 sao</div>
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                    <div class="bar-3"></div>
                                </div>
                            </div>
                            <div class="side right">
                                <div>15 nhận xét</div>
                            </div>
                            <div class="side">
                                <div>2 sao</div>
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                    <div class="bar-2"></div>
                                </div>
                            </div>
                            <div class="side right">
                                <div>6 nhận xét</div>
                            </div>
                            <div class="side">
                                <div>1 sao</div>
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                    <div class="bar-1"></div>
                                </div>
                            </div>
                            <div class="side right">
                                <div>20 nhận xét</div>
                            </div>
                        </div>
                        <hr>

                        <div class="product-reviews">
                            <h4 class="title">NHẬN XÉT CỦA KHÁCH HÀNG</h4>
                            @foreach($comments as $cmt)
                            <div class="reviews" style="background: #f8f8f8;padding: 20px;margin-bottom: 10px;">
                                <div class="review" style="margin-bottom: 5px;">
                                    <div class="review-title"><span class="summary" style="color: #666666;font-size: 14px;font-weight: normal;margin-right: 10px;font-style: italic;">Tên tài khoản</span><span class="date"><i class="fa fa-calendar"></i><span>1 days ago</span></span></div>
                                    <div class="text" style="line-height: 18px;">"{{$cmt->comment_content}}"</div>
                                </div>
                            </div><!-- /.reviews -->
                            @endforeach
                        </div>
                        <hr>

                        <div class="wrapperReview">
                            <div class="master">
                                <h4>Hãy cho chũng tôi biết trải nghiệm của bạn về sản phẩm của chúng tôi?</h4>

                                <div class="rating-component">
                                    <div class="status-msg">
                                        <label>
                                            <input  class="rating_msg" type="hidden" name="rating_msg" value=""/>
                                        </label>
                                    </div>
                                    <div class="stars-box">
                                        <i class="star fa fa-star" title="1 star" data-message="Sản phẩm quá tệ" data-value="1"></i>
                                        <i class="star fa fa-star" title="2 stars" data-message="Chất lượng Kém" data-value="2"></i>
                                        <i class="star fa fa-star" title="3 stars" data-message="Chất lượng trung bình" data-value="3"></i>
                                        <i class="star fa fa-star" title="4 stars" data-message="Sản phẩm tốt" data-value="4"></i>
                                        <i class="star fa fa-star" title="5 stars" data-message="Rất tuyệt vời" data-value="5"></i>
                                    </div>
{{--                                    <div class="starrate">--}}
{{--                                        <label>--}}
{{--                                            <input  class="ratevalue" type="hidden" name="rate_value" value=""/>--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
                                </div>

                                <div class="feedback-tags">
                                    <div class="tags-container" data-tag-set="1">
                                        <div class="question-tag">
                                            Tại sao trải nghiệm của bạn lại tồi tệ như vậy?
                                        </div>
                                    </div>
                                    <div class="tags-container" data-tag-set="2">
                                        <div class="question-tag">
                                            Tại sao trải nghiệm của bạn lại tồi tệ như vậy?
                                        </div>

                                    </div>

                                    <div class="tags-container" data-tag-set="3">
                                        <div class="question-tag">
                                            Tại sao bạn lại xếp hạng trung bình sản phẩm này?
                                        </div>
                                    </div>
                                    <div class="tags-container" data-tag-set="4">
                                        <div class="question-tag">
                                            Hãy cho tôi biết trải nghiệm của bạn tốt như thế nào?
                                        </div>
                                    </div>

                                    <div class="tags-container" data-tag-set="5">
                                        <div class="make-compliment">
                                            <div class="compliment-container">
                                                Cảm ơn bạn! Hãy cho tôi biết trải nghiệm của bạn?
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tags-box">
                                        <input type="text" class="tag form-control" name="comment" id="inlineFormInputName" placeholder="vui lòng để lại nhận xét..." style="width: 250px;">
                                        <input type="hidden" name="product_id" value="{{ $products->id }}" />
                                    </div>

                                </div>

                                <div class="button-box">
                                    <input type="submit" class=" done btn btn-warning" value="Gửi đi" />
                                </div>

                                <div class="submited-box">
                                    <div class="loader"></div>
                                    <div class="success-message" style="font-size: 15px;color: forestgreen;font-weight: 800;">
                                        Cảm ơn quý khách!
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- ============================================== UPSELL PRODUCTS ============================================== -->
                    <section class="section featured-product wow fadeInUp" style="margin-top: 30px;">
                        <h3 class="section-title">Sản phẩm gợi ý</h3>
                        <div
                            class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">
                            @foreach($related_product as $product)
                                <div class="item item-carousel">
                                    <div class="products">

                                        <div class="product">
                                            <div class="product-image">
                                                <div class="image" style="border: 1px solid #e0e4f6;padding: 10px;">
                                                    <a href="{{route('product.viewProduct', $product->id)}}"><img
                                                            src="{{asset('public/images/'. $product->image)}}"
                                                            alt=""></a>
                                                </div><!-- /.image -->

                                                <div class="tag sale"><span>sale</span></div>
                                            </div><!-- /.product-image -->


                                            <div class="product-info text-left" s>
                                                <h3 class="name"><a
                                                        href="{{route('shopping.viewProduct', $product->id)}}">{{ $product->name }}</a>
                                                </h3>
                                                <div class="rating rateit-small"></div>
                                                <div class="description"></div>
                                                <div class="product-price">
                                                    <span class="price">{{ number_format($product->price - $product->discount) }} VNĐ</span>
                                                </div><!-- /.product-price -->

                                            </div><!-- /.product-info -->
                                            <div class="cart clearfix animate-effect">
                                                <div class="action">
                                                    <ul class="list-unstyled">
                                                        <li class="add-cart-button btn-group">
                                                            <button class="btn btn-primary icon" data-toggle="dropdown"
                                                                    type="button">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </button>
                                                            <button class="btn btn-primary cart-btn" type="button">Add
                                                                to
                                                                cart
                                                            </button>

                                                        </li>

                                                        <li class="lnk wishlist">
                                                            <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                <i class="icon fa fa-heart"></i>
                                                            </a>
                                                        </li>

                                                        <li class="lnk">
                                                            <a class="add-to-cart" href="detail.html" title="Compare">
                                                                <i class="fa fa-signal"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div><!-- /.action -->
                                            </div><!-- /.cart -->
                                        </div><!-- /.product -->

                                    </div><!-- /.products -->
                                </div><!-- /.item -->
                            @endforeach
                        </div><!-- /.home-owl-carousel -->
                    </section><!-- /.section -->
                    <!-- ============================================== UPSELL PRODUCTS : END ============================================== -->
                </div><!-- /.col -->

                <div class="clearfix"></div>

            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    </div><!-- /.body-content -->
@stop

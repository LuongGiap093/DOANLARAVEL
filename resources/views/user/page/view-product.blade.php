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
                            <img src="{!! asset('frontend\assets\images\banners\LHS-banner.jpg') !!}" alt="Image">
                        </div>

                        <!-- ============================================== HOT DEALS ============================================== -->
                    @include('user.page.hot_deals.hotdeals')
                        <!-- ============================================== HOT DEALS: END ============================================== -->

                        <!-- ============================================== Testimonials============================================== -->
                    @include('user.page.comment.testimonials')

                        <!-- ============================================== Testimonials: END ============================================== -->

                    </div>
                </div><!-- /.sidebar -->
                <div class='col-md-9'>
                    <!-- ============================================== VIEW PRODUCT ============================================== -->
                    <div class="detail-block">
                        <div class="row  wow fadeInUp">
                            <div class="col-xs-12 col-sm-6 col-md-6 gallery-holder">

                                <ul id="imageGallery">
                                    @if(count($gallerys)>0)
                                    @foreach($gallerys as $key => $gal)
                                    <li data-thumb="{!! asset('frontend/assets/images/gallery/'.$gal->gallery_image) !!}" data-src="{!! asset('frontend/assets/images/gallery/'.$gal->gallery_image) !!}">
                                        <img src="{!! asset('frontend/assets/images/gallery/'.$gal->gallery_image) !!}" />
                                    </li>
                                    @endforeach
                                    @else
                                        <li data-thumb="{{asset('images/'.$products->image)}}" data-src="{{asset('images/'.$products->image)}}">
                                            <img src="{{asset('images/'.$products->image)}}" />
                                        </li>
                                    @endif

                                </ul>
                            </div><!-- /.gallery-holder -->
                            <div class='col-sm-6 col-md-6 product-info-block'>
                                <div class="product-info">
                                    <h3 class="name">{{$products->name}}</h3>
                                    <div class="rating-reviews m-t-20">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="rating rateit-small"></div>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="reviews">
                                                    <a href="#" class="lnk">(13 Đánh Giá)</a>
                                                </div>
                                            </div>
                                        </div><!-- /.row -->
                                    </div><!-- /.rating-reviews -->

                                    <div class="stock-container info-container m-t-10">
                                        <div class="row">
                                            @foreach($brands as $brand)
                                            <div class="col-sm-12">
                                                <div class="stock-box">
                                                    <span class="label">Thương hiệu: <a class="value" href="#">{!! $brand->brand_name !!}</a> </span>
                                                </div>
                                            </div>
                                            @endforeach
{{--                                            @foreach($brands as $brand)--}}
{{--                                            <div class="col-sm-9">--}}
{{--                                                <div class="stock-box">--}}
{{--                                                    <span class="value">{!! $brand->brand_name !!}</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            @endforeach--}}
                                        </div><!-- /.row -->
                                    </div><!-- /.stock-container -->

                                    <div class="description-container m-t-20">
                                        {!! $products->content !!}
                                    </div><!-- /.description-container -->

                                    <div class="price-container info-container m-t-20" style="padding: 0px 0;">
                                        <div class="row">


                                            <div class="col-sm-9">
                                                <div class="price-box">
                                                    <span class="price" style="padding: 0px 50px 0px 0px;">{{ number_format($products->price - $products->discount,'0',',','.') }} VNĐ</span>
                                                    <span class="price-strike">{{number_format($products->price)}} VNĐ</span>
                                                    <span style="position: absolute;">-{{ number_format(($products->discount*100)/$products->price) }}%</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-3" style="text-align: right; padding-left: 0px;">
                                                <div class="favorite-button m-t-10">
                                                    <a class="btn btn-primary" data-toggle="tooltip"
                                                       data-placement="left" title="Yêu thích" href="#">
                                                        <i class="fa fa-heart"></i>
                                                    </a>
                                                    <a class="btn btn-primary" data-toggle="tooltip"
                                                       data-placement="left" title="So sánh" href="#">
                                                        <i class="fa fa-signal"></i>
                                                    </a>
                                                </div>
                                            </div>

                                        </div><!-- /.row -->
                                    </div><!-- /.price-container -->

                                    <div class="quantity-container info-container">
                                        <div class="row" style="text-align: center;">

{{--                                            <div class="col-sm-2">--}}
{{--                                                <span class="label">Quantity :</span>--}}
{{--                                            </div>--}}

{{--                                            <div class="col-sm-2">--}}
{{--                                                <div class="cart-quantity">--}}
{{--                                                    <div class="quant-input">--}}
{{--                                                        <div class="arrows">--}}
{{--                                                            <div class="arrow plus gradient"><span class="ir"><i--}}
{{--                                                                        class="icon fa fa-sort-asc"></i></span></div>--}}
{{--                                                            <div class="arrow minus gradient"><span class="ir"><i--}}
{{--                                                                        class="icon fa fa-sort-desc"></i></span></div>--}}
{{--                                                        </div>--}}
{{--                                                        <input type="number" min="0" max="100" type="text" value="1">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                            <div class="col-sm-12">
                                                <a href="javascripts:" onclick="AddCart({{$products->id}})"
                                                   data-text="Add To Cart" class="btn btn-primary"><i
                                                        class="fa fa-shopping-cart inner-right-vs"></i> Thêm Vào Giỏi
                                                    Hàng</a>
                                            </div>
                                        </div><!-- /.row -->
                                    </div><!-- /.quantity-container -->
                                </div><!-- /.product-info -->
                            </div><!-- /.col-sm-7 -->
                        </div><!-- /.row -->
                    </div>
                    <!-- ============================================== VIEW PRODUCT ============================================== -->

                    <div class="product-tabs inner-bottom-xs  wow fadeInUp">
                        <div class="row">
                            <div class="col-sm-3">
                                <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                                    <li class="active"><a data-toggle="tab" href="#description">Mô tả chi tiết</a></li>
                                    <li><a data-toggle="tab" href="#review">Đánh giá</a></li>
                                    <li><a data-toggle="tab" href="#tags">TAGS</a></li>
                                </ul><!-- /.nav-tabs #product-tabs -->
                            </div>
                            <div class="col-sm-9">

                                <div class="tab-content">

                                    <div id="description" class="tab-pane in active" style="height: 507px; overflow: auto;">
                                        <div class="product-tab" style="word-wrap: break-word;">
                                            <p class="text" >{!! $products->describe !!}</p>
                                        </div>
                                    </div><!-- /.tab-pane -->

                                    <div id="review" class="tab-pane">
                                        <div class="product-tab">

                                            <div class="product-reviews">
                                                <h4 class="title">Đánh giá của khách hàng</h4>

                                                <div class="reviews">
                                                    <div class="review">
                                                        <div class="review-title"><span class="summary">We love this product</span><span
                                                                class="date"><i class="fa fa-calendar"></i><span>1 days ago</span></span>
                                                        </div>
                                                        <div class="text">"Lorem ipsum dolor sit amet, consectetur
                                                            adipiscing elit.Aliquam suscipit."
                                                        </div>
                                                    </div>

                                                </div><!-- /.reviews -->
                                            </div><!-- /.product-reviews -->


                                            <div class="product-add-review">
                                                <h4 class="title">Write your own review</h4>
                                                <div class="review-table">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                            <tr>
                                                                <th class="cell-label">&nbsp;</th>
                                                                <th>1 star</th>
                                                                <th>2 stars</th>
                                                                <th>3 stars</th>
                                                                <th>4 stars</th>
                                                                <th>5 stars</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td class="cell-label">Quality</td>
                                                                <td><input type="radio" name="quality" class="radio"
                                                                           value="1"></td>
                                                                <td><input type="radio" name="quality" class="radio"
                                                                           value="2"></td>
                                                                <td><input type="radio" name="quality" class="radio"
                                                                           value="3"></td>
                                                                <td><input type="radio" name="quality" class="radio"
                                                                           value="4"></td>
                                                                <td><input type="radio" name="quality" class="radio"
                                                                           value="5"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="cell-label">Price</td>
                                                                <td><input type="radio" name="quality" class="radio"
                                                                           value="1"></td>
                                                                <td><input type="radio" name="quality" class="radio"
                                                                           value="2"></td>
                                                                <td><input type="radio" name="quality" class="radio"
                                                                           value="3"></td>
                                                                <td><input type="radio" name="quality" class="radio"
                                                                           value="4"></td>
                                                                <td><input type="radio" name="quality" class="radio"
                                                                           value="5"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="cell-label">Value</td>
                                                                <td><input type="radio" name="quality" class="radio"
                                                                           value="1"></td>
                                                                <td><input type="radio" name="quality" class="radio"
                                                                           value="2"></td>
                                                                <td><input type="radio" name="quality" class="radio"
                                                                           value="3"></td>
                                                                <td><input type="radio" name="quality" class="radio"
                                                                           value="4"></td>
                                                                <td><input type="radio" name="quality" class="radio"
                                                                           value="5"></td>
                                                            </tr>
                                                            </tbody>
                                                        </table><!-- /.table .table-bordered -->
                                                    </div><!-- /.table-responsive -->
                                                </div><!-- /.review-table -->

                                                <div class="review-form">
                                                    <div class="form-container">
                                                        <form role="form" class="cnt-form">

                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputName">Your Name <span
                                                                                class="astk">*</span></label>
                                                                        <input type="text" class="form-control txt"
                                                                               id="exampleInputName" placeholder="">
                                                                    </div><!-- /.form-group -->
                                                                    <div class="form-group">
                                                                        <label for="exampleInputSummary">Summary <span
                                                                                class="astk">*</span></label>
                                                                        <input type="text" class="form-control txt"
                                                                               id="exampleInputSummary" placeholder="">
                                                                    </div><!-- /.form-group -->
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputReview">Review <span
                                                                                class="astk">*</span></label>
                                                                        <textarea class="form-control txt txt-review"
                                                                                  id="exampleInputReview" rows="4"
                                                                                  placeholder=""></textarea>
                                                                    </div><!-- /.form-group -->
                                                                </div>
                                                            </div><!-- /.row -->

                                                            <div class="action text-right">
                                                                <button class="btn btn-primary btn-upper">SUBMIT
                                                                    REVIEW
                                                                </button>
                                                            </div><!-- /.action -->

                                                        </form><!-- /.cnt-form -->
                                                    </div><!-- /.form-container -->
                                                </div><!-- /.review-form -->

                                            </div><!-- /.product-add-review -->

                                        </div><!-- /.product-tab -->
                                    </div><!-- /.tab-pane -->

                                    <div id="tags" class="tab-pane">
                                        <div class="product-tag">

                                            <h4 class="title">Product Tags</h4>
                                            <form role="form" class="form-inline form-cnt">
                                                <div class="form-container">

                                                    <div class="form-group">
                                                        <label for="exampleInputTag">Add Your Tags: </label>
                                                        <input type="email" id="exampleInputTag"
                                                               class="form-control txt">


                                                    </div>

                                                    <button class="btn btn-upper btn-primary" type="submit">ADD TAGS
                                                    </button>
                                                </div><!-- /.form-container -->
                                            </form><!-- /.form-cnt -->

                                            <form role="form" class="form-inline form-cnt">
                                                <div class="form-group">
                                                    <label>&nbsp;</label>
                                                    <span class="text col-md-offset-3">Use spaces to separate tags. Use single quotes (') for phrases.</span>
                                                </div>
                                            </form><!-- /.form-cnt -->

                                        </div><!-- /.product-tab -->
                                    </div><!-- /.tab-pane -->

                                </div><!-- /.tab-content -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.product-tabs -->

                    <!-- ============================================== UPSELL PRODUCTS ============================================== -->
                    <section class="section featured-product wow fadeInUp">
                        <h3 class="section-title">Sản phẩm gợi ý</h3>
                        <div
                            class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">
                            @foreach($related_product as $product)
                            <div class="item item-carousel">
                                <div class="products">

                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image">
                                                <a href="{{route('shopping.viewProduct', $product->id)}}"><img src="{{asset('images/'. $product->image)}}"
                                                                           alt=""></a>
                                            </div><!-- /.image -->

                                            <div class="tag sale"><span>sale</span></div>
                                        </div><!-- /.product-image -->


                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="{{route('shopping.viewProduct', $product->id)}}">{{ $product->name }}</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="description"></div>

                                            <div class="product-price">
				<span class="price">
					{{ number_format($product->price - $product->discount) }} VNĐ				</span>
                                                <span class="price-before-discount">$ 800</span>

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
                                                        <button class="btn btn-primary cart-btn" type="button">Add to
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
                            <div class="item item-carousel">
                                <div class="products">

                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image">
                                                <a href="detail.html"><img src="assets\images\products\p2.jpg"
                                                                           alt=""></a>
                                            </div><!-- /.image -->

                                            <div class="tag sale"><span>sale</span></div>
                                        </div><!-- /.product-image -->


                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="description"></div>

                                            <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                <span class="price-before-discount">$ 800</span>

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
                                                        <button class="btn btn-primary cart-btn" type="button">Add to
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

                            <div class="item item-carousel">
                                <div class="products">

                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image">
                                                <a href="detail.html"><img src="assets\images\products\p3.jpg"
                                                                           alt=""></a>
                                            </div><!-- /.image -->

                                            <div class="tag hot"><span>hot</span></div>
                                        </div><!-- /.product-image -->


                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="description"></div>

                                            <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                <span class="price-before-discount">$ 800</span>

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
                                                        <button class="btn btn-primary cart-btn" type="button">Add to
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

                            <div class="item item-carousel">
                                <div class="products">

                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image">
                                                <a href="detail.html"><img src="assets\images\products\p4.jpg"
                                                                           alt=""></a>
                                            </div><!-- /.image -->

                                            <div class="tag new"><span>new</span></div>
                                        </div><!-- /.product-image -->


                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="description"></div>

                                            <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                <span class="price-before-discount">$ 800</span>

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
                                                        <button class="btn btn-primary cart-btn" type="button">Add to
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

                            <div class="item item-carousel">
                                <div class="products">

                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image">
                                                <a href="detail.html"><img src="assets\images\blank.gif"
                                                                           data-echo="assets/images/products/p5.jpg"
                                                                           alt=""></a>
                                            </div><!-- /.image -->

                                            <div class="tag hot"><span>hot</span></div>
                                        </div><!-- /.product-image -->


                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="description"></div>

                                            <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                <span class="price-before-discount">$ 800</span>

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
                                                        <button class="btn btn-primary cart-btn" type="button">Add to
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

                            <div class="item item-carousel">
                                <div class="products">

                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image">
                                                <a href="detail.html"><img src="assets\images\blank.gif"
                                                                           data-echo="assets/images/products/p6.jpg"
                                                                           alt=""></a>
                                            </div><!-- /.image -->

                                            <div class="tag new"><span>new</span></div>
                                        </div><!-- /.product-image -->


                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="description"></div>

                                            <div class="product-price">
				<span class="price">
					$650.99				</span>
                                                <span class="price-before-discount">$ 800</span>

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
                                                        <button class="btn btn-primary cart-btn" type="button">Add to
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

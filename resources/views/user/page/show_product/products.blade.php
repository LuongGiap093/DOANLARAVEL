@extends('user.theme.layout')
@section('content')
    <!-- ============================================== HEADER : END ============================================== -->
    <div class="body-content outer-top-xs" id="top-banner-and-menu">
        <div class="container">
            <div class="row">
                <!-- ============================================== SIDEBAR ============================================== -->
                <div class="col-xs-12 col-sm-12 col-md-3 sidebar">

                    <!-- ================================== TOP NAVIGATION ================================== -->
                @include('user.page.menu_danh_muc.categorys_menu')
                    <!-- ================================== TOP NAVIGATION : END ================================== -->

                    <div class="sidebar-module-container">
                        <div class="sidebar-filter">
                            <!-- ============================================== SIDEBAR CATEGORY ============================================== -->
                            <div class="sidebar-widget wow fadeInUp">
                                <h3 class="section-title">shop by</h3>
                                <div class="widget-header">
                                    <h4 class="widget-title">Category</h4>
                                </div>

                                <div class="sidebar-widget-body">
                                    <div class="accordion">
                                        <div class="accordion-group">
                                            <div class="accordion-heading"> <a href="#collapseOne" data-toggle="collapse" class="accordion-toggle collapsed"> Camera </a> </div>
                                            <!-- /.accordion-heading -->
                                            <div class="accordion-body collapse" id="collapseOne" style="height: 0px;">
                                                <div class="accordion-inner">
                                                    <ul>
                                                        <li><a href="#">gaming</a></li>
                                                        <li><a href="#">office</a></li>
                                                        <li><a href="#">kids</a></li>
                                                        <li><a href="#">for women</a></li>
                                                    </ul>
                                                </div>
                                                <!-- /.accordion-inner -->
                                            </div>
                                            <!-- /.accordion-body -->
                                        </div>
                                        <!-- /.accordion-group -->

                                        <div class="accordion-group">
                                            <div class="accordion-heading"> <a href="#collapseTwo" data-toggle="collapse" class="accordion-toggle collapsed"> Desktops </a> </div>
                                            <!-- /.accordion-heading -->
                                            <div class="accordion-body collapse" id="collapseTwo" style="height: 0px;">
                                                <div class="accordion-inner">
                                                    <ul>
                                                        <li><a href="#">gaming</a></li>
                                                        <li><a href="#">office</a></li>
                                                        <li><a href="#">kids</a></li>
                                                        <li><a href="#">for women</a></li>
                                                    </ul>
                                                </div>
                                                <!-- /.accordion-inner -->
                                            </div>
                                            <!-- /.accordion-body -->
                                        </div>
                                        <!-- /.accordion-group -->

                                        <div class="accordion-group">
                                            <div class="accordion-heading"> <a href="#collapseThree" data-toggle="collapse" class="accordion-toggle collapsed"> Pants </a> </div>
                                            <!-- /.accordion-heading -->
                                            <div class="accordion-body collapse" id="collapseThree" style="height: 0px;">
                                                <div class="accordion-inner">
                                                    <ul>
                                                        <li><a href="#">gaming</a></li>
                                                        <li><a href="#">office</a></li>
                                                        <li><a href="#">kids</a></li>
                                                        <li><a href="#">for women</a></li>
                                                    </ul>
                                                </div>
                                                <!-- /.accordion-inner -->
                                            </div>
                                            <!-- /.accordion-body -->
                                        </div>
                                        <!-- /.accordion-group -->

                                        <div class="accordion-group">
                                            <div class="accordion-heading"> <a href="#collapseFour" data-toggle="collapse" class="accordion-toggle collapsed"> Bags </a> </div>
                                            <!-- /.accordion-heading -->
                                            <div class="accordion-body collapse" id="collapseFour" style="height: 0px;">
                                                <div class="accordion-inner">
                                                    <ul>
                                                        <li><a href="#">gaming</a></li>
                                                        <li><a href="#">office</a></li>
                                                        <li><a href="#">kids</a></li>
                                                        <li><a href="#">for women</a></li>
                                                    </ul>
                                                </div>
                                                <!-- /.accordion-inner -->
                                            </div>
                                            <!-- /.accordion-body -->
                                        </div>
                                        <!-- /.accordion-group -->

                                        <div class="accordion-group">
                                            <div class="accordion-heading"> <a href="#collapseFive" data-toggle="collapse" class="accordion-toggle collapsed"> Hats </a> </div>
                                            <!-- /.accordion-heading -->
                                            <div class="accordion-body collapse" id="collapseFive" style="height: 0px;">
                                                <div class="accordion-inner">
                                                    <ul>
                                                        <li><a href="#">gaming</a></li>
                                                        <li><a href="#">office</a></li>
                                                        <li><a href="#">kids</a></li>
                                                        <li><a href="#">for women</a></li>
                                                    </ul>
                                                </div>
                                                <!-- /.accordion-inner -->
                                            </div>
                                            <!-- /.accordion-body -->
                                        </div>
                                        <!-- /.accordion-group -->

                                        <div class="accordion-group">
                                            <div class="accordion-heading"> <a href="#collapseSix" data-toggle="collapse" class="accordion-toggle collapsed"> Accessories </a> </div>
                                            <!-- /.accordion-heading -->
                                            <div class="accordion-body collapse" id="collapseSix" style="height: 0px;">
                                                <div class="accordion-inner">
                                                    <ul>
                                                        <li><a href="#">gaming</a></li>
                                                        <li><a href="#">office</a></li>
                                                        <li><a href="#">kids</a></li>
                                                        <li><a href="#">for women</a></li>
                                                    </ul>
                                                </div>
                                                <!-- /.accordion-inner -->
                                            </div>
                                            <!-- /.accordion-body -->
                                        </div>
                                        <!-- /.accordion-group -->

                                    </div>
                                    <!-- /.accordion -->
                                </div>
                                <!-- /.sidebar-widget-body -->
                            </div>
                            <!-- /.sidebar-widget -->
                            <!-- ============================================== SIDEBAR CATEGORY : END ============================================== -->
                            <!-- ============================================== PRICE SILDER============================================== -->
                            <div class="sidebar-widget wow fadeInUp">
                                <div class="widget-header">
                                    <h4 class="widget-title">Price Slider</h4>
                                </div>
                                <div class="sidebar-widget-body m-t-10">
                                    <div class="price-range-holder"> <span class="min-max"> <span class="pull-left">1.000.000đ</span> <span class="pull-right">50.000.000đ</span> </span>
                                        <input type="text" id="amount" style="border:0; color:#666666; font-weight:bold;text-align:center;">
                                        <input type="text" class="price-slider" value="">
                                    </div>
                                    <!-- /.price-range-holder -->
                                    <a href="#" class="lnk btn btn-primary">Show Now</a> </div>
                                <!-- /.sidebar-widget-body -->
                            </div>
                            <!-- /.sidebar-widget -->
                            <!-- ============================================== PRICE SILDER : END ============================================== -->
                            <!-- ============================================== MANUFACTURES============================================== -->
                            <div class="sidebar-widget wow fadeInUp">
                                <div class="widget-header">
                                    <h4 class="widget-title">Manufactures</h4>
                                </div>
                                <div class="sidebar-widget-body">
                                    <ul class="list">
                                        <li><a href="#">Forever 18</a></li>
                                        <li><a href="#">Nike</a></li>
                                        <li><a href="#">Dolce & Gabbana</a></li>
                                        <li><a href="#">Alluare</a></li>
                                        <li><a href="#">Chanel</a></li>
                                        <li><a href="#">Other Brand</a></li>
                                    </ul>
                                    <!--<a href="#" class="lnk btn btn-primary">Show Now</a>-->
                                </div>
                                <!-- /.sidebar-widget-body -->
                            </div>
                            <!-- /.sidebar-widget -->
                            <!-- ============================================== MANUFACTURES: END ============================================== -->
                            <!-- ============================================== COLOR============================================== -->
                            <div class="sidebar-widget wow fadeInUp">
                                <div class="widget-header">
                                    <h4 class="widget-title">Colors</h4>
                                </div>
                                <div class="sidebar-widget-body">
                                    <ul class="list">
                                        <li><a href="#">Red</a></li>
                                        <li><a href="#">Blue</a></li>
                                        <li><a href="#">Yellow</a></li>
                                        <li><a href="#">Pink</a></li>
                                        <li><a href="#">Brown</a></li>
                                        <li><a href="#">Teal</a></li>
                                    </ul>
                                </div>
                                <!-- /.sidebar-widget-body -->
                            </div>
                            <!-- /.sidebar-widget -->
                            <!-- ============================================== COLOR: END ============================================== -->
                            <!-- ============================================== COMPARE============================================== -->
                            <div class="sidebar-widget wow fadeInUp outer-top-vs">
                                <h3 class="section-title">Compare products</h3>
                                <div class="sidebar-widget-body">
                                    <div class="compare-report">
                                        <p>You have no <span>item(s)</span> to compare</p>
                                    </div>
                                    <!-- /.compare-report -->
                                </div>
                                <!-- /.sidebar-widget-body -->
                            </div>
                            <!-- /.sidebar-widget -->
                            <!-- ============================================== COMPARE: END ============================================== -->
                            <!-- ============================================== PRODUCT TAGS ============================================== -->
                            <div class="sidebar-widget product-tag wow fadeInUp outer-top-vs">
                                <h3 class="section-title">Product tags</h3>
                                <div class="sidebar-widget-body outer-top-xs">
                                    <div class="tag-list"> <a class="item" title="Phone" href="category.html">Phone</a> <a class="item active" title="Vest" href="category.html">Vest</a> <a class="item" title="Smartphone" href="category.html">Smartphone</a> <a class="item" title="Furniture" href="category.html">Furniture</a> <a class="item" title="T-shirt" href="category.html">T-shirt</a> <a class="item" title="Sweatpants" href="category.html">Sweatpants</a> <a class="item" title="Sneaker" href="category.html">Sneaker</a> <a class="item" title="Toys" href="category.html">Toys</a> <a class="item" title="Rose" href="category.html">Rose</a> </div>
                                    <!-- /.tag-list -->
                                </div>
                                <!-- /.sidebar-widget-body -->
                            </div>
                            <!-- /.sidebar-widget -->
                            <!----------- Testimonials------------->
                            <div class="sidebar-widget  wow fadeInUp outer-top-vs ">
                                <div id="advertisement" class="advertisement">
                                    <div class="item">
                                        <div class="avatar"><img src="assets\images\testimonials\member1.png" alt="Image"></div>
                                        <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                                        <div class="clients_author">John Doe <span>Abc Company</span> </div>
                                        <!-- /.container-fluid -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item">
                                        <div class="avatar"><img src="assets\images\testimonials\member3.png" alt="Image"></div>
                                        <div class="testimonials"><em>"</em>Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                                        <div class="clients_author">Stephen Doe <span>Xperia Designs</span> </div>
                                    </div>
                                    <!-- /.item -->

                                    <div class="item">
                                        <div class="avatar"><img src="assets\images\testimonials\member2.png" alt="Image"></div>
                                        <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                                        <div class="clients_author">Saraha Smith <span>Datsun &amp; Co</span> </div>
                                        <!-- /.container-fluid -->
                                    </div>
                                    <!-- /.item -->

                                </div>
                                <!-- /.owl-carousel -->
                            </div>

                            <!-- ============================================== Testimonials: END ============================================== -->

                            <div class="home-banner"> <img src="assets\images\banners\LHS-banner.jpg" alt="Image"> </div>
                        </div>
                        <!-- /.sidebar-filter -->
                    </div>
                </div>
                <!-- /.sidemenu-holder -->
                <!-- ============================================== CONTENT ============================================== -->
                <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                    <!-- ========================================== SECTION – HERO ========================================= -->
                    <div id="category" class="category-carousel hidden-xs">
                        <div class="item">
                            <div class="image"><img src="{{asset('frontend\assets\images\banners\cat-banner-1.jpg')}}"
                                                    alt="" class="img-responsive"></div>
                            <div class="container-fluid">
                                <div class="caption vertical-top text-left">
                                    <div class="big-text"> Big Sale</div>
                                    <div class="excerpt hidden-sm hidden-md"> Save up to 49% off</div>
                                    <div class="excerpt-normal hidden-sm hidden-md"> Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit
                                    </div>
                                </div>
                                <!-- /.caption -->
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                    </div>
                    <!-- ========================================= SECTION – HERO : END ========================================= -->
                    <div class="clearfix filters-container m-t-10">
                        <div class="row">
                            <div class="col col-sm-6 col-md-2">
                                <div class="filter-tabs">
                                    <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                                        <li class="active"><a data-toggle="tab" href="#grid-container"><i
                                                    class="icon fa fa-th-large"></i>Grid</a></li>
                                        <li><a data-toggle="tab" href="#list-container"><i
                                                    class="icon fa fa-th-list"></i>List</a></li>
                                    </ul>
                                </div>
                                <!-- /.filter-tabs -->
                            </div>
                            <!-- /.col -->
                            <div class="col col-sm-12 col-md-7">
                                <div class="col col-sm-3 col-md-6 no-padding">
                                    <div class="lbl-cnt">
                                        <div class="fld inline">
                                            <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
{{--                                                <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> Sắp Xếp theo <span class="caret"></span> </button>--}}
                                                <form>
                                                    @csrf
                                                    <select name="sort" id="sort" class="form-control">
                                                        <option value="{{Request::url()}}?sort_by=none">Lọc theo</option>
                                                        <option value="{{Request::url()}}?sort_by=tang_dan">Giá: thấp đến cao</option>
                                                        <option value="{{Request::url()}}?sort_by=giam_dan">Giá: cao đến thấp</option>
                                                        <option value="{{Request::url()}}?sort_by=kytu_az">Theo tên: A đến Z</option>
                                                        <option value="{{Request::url()}}?sort_by=kytu_za">Theo tên: Z đến A</option>
                                                    </select>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- /.fld -->
                                    </div>
                                    <!-- /.lbl-cnt -->
                                </div>
                                <!-- /.col -->
                                <div class="col col-sm-3 col-md-6 no-padding">
                                    <div class="lbl-cnt">
                                        <div class="fld inline">
                                            <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                                                <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> Lọc theo giá <span class="caret"></span> </button>
                                                <ul role="menu" class="dropdown-menu">
                                                    <li role="presentation"><a href="#">Giá thấp đến cao</a></li>
                                                    <li role="presentation"><a href="#">Giá cao đến thấp</a></li>
                                                    <li role="presentation"><a href="#">Theo tên: A đến Z</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- /.fld -->
                                    </div>
                                    <!-- /.lbl-cnt -->
                                </div>
                                <!-- /.col -->
{{--                                <div class="col col-sm-3 col-md-4 no-padding">--}}
{{--                                    <div class="lbl-cnt">--}}
{{--                                        <div class="fld inline">--}}
{{--                                            <div class="dropdown dropdown-small dropdown-med dropdown-white inline">--}}
{{--                                                <input data-toggle="dropdown" type="text" class="btn dropdown-toggle" value="Có {{count($products)}} Kết quả" style="width: 110px;">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- /.fld -->--}}
{{--                                    </div>--}}
{{--                                    <!-- /.lbl-cnt -->--}}
{{--                                </div>--}}
                                <!-- /.col -->
                            </div>
                            <!-- /.col -->
                            <div class="col col-sm-6 col-md-3 text-right">
                            {!! $products->links() !!}
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- product-->
                    <div class="search-result-container " style="margin-bottom: 17px;">
                        <div id="myTabContent" class="tab-content category-list">
                            <div class="tab-pane active " id="grid-container">
                                <div class="category-product">
                                    <div class="row">
                                        @foreach($products as $product)
                                            @if($valible==0)
                                            <div class="col-sm-6 col-md-4 wow fadeInUp" style="height: 400px;">
                                                <div class="products">
                                                    <div class="product">
                                                        <div class="product-image">
                                                            <div class="image"><a
                                                                    href="{{route('shopping.viewProduct', $product->id)}}"><img
                                                                        src="{!!asset('images/'. $product->image)!!}"
                                                                        alt="" style="height: auto;"></a></div>
                                                            <!-- /.image -->
                                                        </div>
                                                        <!-- /.product-image -->

                                                        <div class="product-info text-left">
                                                            <h3 class="name"><a
                                                                    href="{{route('shopping.viewProduct', $product->id)}}">{{ $product->name }}</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="description"></div>
                                                            <div class="product-price"><span class="price"> {{ number_format($product->price)}} VNĐ </span>
                                                                <span class="price-before-discount">$ 800</span></div>
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
                                                                    <li class="lnk wishlist"><a class="add-to-cart"
                                                                                                href="#"
                                                                                                title="Wishlist"> <i
                                                                                class="icon fa fa-heart"></i> </a></li>
                                                                    <li class="lnk"><a class="add-to-cart" href="#"
                                                                                       title="Compare"> <i
                                                                                class="fa fa-signal"></i> </a></li>
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
                                            @else
                                                <div class="col-sm-6 col-md-4 wow fadeInUp">
                                                    <div class="products">
                                                        <div class="product">
                                                            <div class="product-image">
                                                                <div class="image"><a
                                                                        href="{{route('shopping.viewProduct', $product->id)}}"><img
                                                                            src="{!!asset('images/'. $product->image)!!}"
                                                                            alt="" style="height: auto;"></a></div>
                                                                <!-- /.image -->
                                                            </div>
                                                            <!-- /.product-image -->

                                                            <div class="product-info text-left">
                                                                <h3 class="name"><a
                                                                        href="{{route('shopping.viewProduct', $product->id)}}">{{ $product->name }}</a>
                                                                </h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="description"></div>
                                                                <div class="product-price"><span class="price"> {{ number_format($product->price)}} VNĐ </span>
                                                                    <span class="price-before-discount">$ 800</span></div>
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
                                                                        <li class="lnk wishlist"><a class="add-to-cart"
                                                                                                    href="#"
                                                                                                    title="Wishlist"> <i
                                                                                    class="icon fa fa-heart"></i> </a></li>
                                                                        <li class="lnk"><a class="add-to-cart" href="#"
                                                                                           title="Compare"> <i
                                                                                    class="fa fa-signal"></i> </a></li>
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
                                            @endif
                                        @endforeach
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.category-product -->

                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane " id="list-container">
                                <div class="category-product">
                                    @foreach($products as $product)
                                        <div class="category-product-inner wow fadeInUp">
                                            <div class="products">
                                                <div class="product-list product">
                                                    <div class="row product-list-row">
                                                        <div class="col col-sm-4 col-lg-4">
                                                            <div class="product-image">
                                                                <div class="image">
                                                                    <a href="{{route('shopping.viewProduct', $product->id)}}">
                                                                        <img
                                                                            src="{!!asset('images/'. $product->image)!!}"
                                                                            alt=""
                                                                            style="    width: 80%; height: 203px;">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-image -->
                                                        </div>
                                                        <!-- /.col -->
                                                        <div class="col col-sm-8 col-lg-8">
                                                            <div class="product-info">
                                                                <h3 class="name"><a
                                                                        href="detail.html">{{ $product->name }}</a></h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="product-price"><span class="price"> {{ number_format($product->price)}} VNĐ </span>
                                                                    <span class="price-before-discount">$ 800</span>
                                                                </div>
                                                                <!-- /.product-price -->
                                                                <div class="description m-t-10">
                                                                    Hàng nhập khẩu Hàn Quốc <br>
                                                                    Bao đẹp, bao chất lượng
                                                                </div>
                                                                <div class="cart clearfix animate-effect">
                                                                    <div class="action">
                                                                        <ul class="list-unstyled">
                                                                            <li class="add-cart-button btn-group">
                                                                                <button class="btn btn-primary icon"
                                                                                        data-toggle="dropdown"
                                                                                        type="button"><i
                                                                                        class="fa fa-shopping-cart"></i>
                                                                                </button>
                                                                                <button class="btn btn-primary cart-btn"
                                                                                        data-toggle="tooltip"
                                                                                        type="button" title="Add Cart"
                                                                                        onclick="AddCart({{$product->id}})"
                                                                                        href="javascript:"
                                                                                        data-text="Add To Cart"
                                                                                        data-text="Add To Cart">
                                                                                    Thêm vào giỏ hàng
                                                                                </button>
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                    <!-- /.action -->
                                                                </div>
                                                                <!-- /.cart -->

                                                            </div>
                                                            <!-- /.product-info -->
                                                        </div>
                                                        <!-- /.col -->
                                                    </div>
                                                    <!-- /.product-list-row -->
                                                </div>
                                                <!-- /.product-list -->
                                            </div>
                                            <!-- /.products -->
                                        </div>
                                @endforeach
                                <!-- /.category-product-inner -->
                                </div>
                                <!-- /.category-product -->
                            </div>
                            <!-- /.tab-pane #list-container -->
                        </div>
                        <!-- /.tab-content -->
                        <div class="clearfix filters-container">
                            <div class="text-right">
{{--                                <div class="pagination-container">--}}
{{--                                    <ul class="list-inline list-unstyled">--}}
                                        {!! $products->links() !!}
{{--                                        <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>--}}

{{--                                        <li><a href="#">{!! $products->links() !!}</a></li>--}}
{{--                                        <li class="active"><a href="#">2</a></li>--}}
{{--                                        <li><a href="#">3</a></li>--}}
{{--                                        <li><a href="#">4</a></li>--}}
{{--                                        <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>--}}
{{--                                    </ul>--}}
                                    <!-- /.list-inline -->
{{--                                </div>--}}
                                <!-- /.pagination-container -->
                            </div>
                            <!-- /.text-right -->
                        </div>
                        <!-- /.filters-container -->

                    </div>
                    <!-- /.search-result-container -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
    <!-- /.container -->
    </div>
    <!-- /#top-banner-and-menu -->
@endsection

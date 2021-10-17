{{--<header class="header-style-1">--}}
{{--    <!-- ============================================== TOP MENU ============================================== -->--}}
{{--    <div class="top-bar animate-dropdown">--}}
{{--        <div class="container">--}}
{{--            <div class="header-top-inner">--}}
{{--                <div class="cnt-account">--}}
{{--                    <ul class="list-unstyled">--}}
{{--                        @if(Auth::guard('account_customer')->check())--}}
{{--                            <li><a href="{{route('profiles')}}"><i class="icon fa fa-user"></i>Tài khoản</a></li>--}}
{{--                            <li><a href="{{route('showWishlist')}}"><i class="icon fa fa-heart"></i>Yêu thích</a></li>--}}
{{--                            <li><a href="#"><i class="icon fa fa-shopping-cart"></i>Giỏ hàng</a></li>--}}
{{--                            <li><a href="#"><i class="icon fa fa-user"></i>Xin chào--}}
{{--                                    bạn {{Auth::guard('account_customer')->user()->name}} </a></li>--}}
{{--                            <li><a href="{{ route('customer.getLogout') }}"><i class="icon fa fa-lock"></i>Đăng xuất</a>--}}
{{--                            </li>--}}
{{--                        @else--}}
{{--                            <li><a href="{{route('shopping.login')}}"><i class="icon fa fa-user"></i>Tài khoản</a></li>--}}
{{--                            <li><a href="{{route('showWishlist')}}"><i class="icon fa fa-heart"></i>Yêu thích</a></li>--}}
{{--                            <li><a href="#"><i class="icon fa fa-shopping-cart"></i>Giỏ hàng</a></li>--}}
{{--                            <li><a href="{{route('shopping.login')}}"><i class="icon fa fa-lock"></i>Đăng nhập</a></li>--}}
{{--                            <li><a href="{{route('shopping.login')}}"><i class="icon fa fa-lock"></i>Đăng ký</a></li>--}}
{{--                        @endif--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <!-- /.cnt-account -->--}}

{{--                <div class="cnt-block">--}}
{{--                    <ul class="list-unstyled list-inline">--}}
{{--                        <li class="dropdown dropdown-small"><a href="#" class="dropdown-toggle" data-hover="dropdown"--}}
{{--                                                               data-toggle="dropdown"><span class="value">USD </span><b--}}
{{--                                    class="caret"></b></a>--}}
{{--                            <ul class="dropdown-menu">--}}
{{--                                <li><a href="#">USD</a></li>--}}
{{--                                <li><a href="#">INR</a></li>--}}
{{--                                <li><a href="#">GBP</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li class="dropdown dropdown-small"><a href="#" class="dropdown-toggle" data-hover="dropdown"--}}
{{--                                                               data-toggle="dropdown"><span--}}
{{--                                    class="value">English </span><b class="caret"></b></a>--}}
{{--                            <ul class="dropdown-menu">--}}
{{--                                <li><a href="#">English</a></li>--}}
{{--                                <li><a href="#">French</a></li>--}}
{{--                                <li><a href="#">German</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    <!-- /.list-unstyled -->--}}
{{--                </div>--}}
{{--                <!-- /.cnt-cart -->--}}
{{--                <div class="clearfix"></div>--}}
{{--            </div>--}}
{{--            <!-- /.header-top-inner -->--}}
{{--        </div>--}}
{{--        <!-- /.container -->--}}
{{--    </div>--}}
{{--    <!-- /.header-top -->--}}
{{--    <!-- ============================================== TOP MENU : END ============================================== -->--}}
{{--    <div class="main-header">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">--}}
{{--                    <!-- ============================================================= LOGO ============================================================= -->--}}
{{--                    <div class="logo">--}}
{{--                        <a href="{{route('shopping.home')}}">--}}
{{--                            <img src="{{asset('public/images/'. $logos->logo_image)}}" alt="logo" style="width: auto;">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <!-- ============================================================= LOGO : END ============================================================= -->--}}
{{--                </div>--}}
{{--                <!-- /.logo-holder -->--}}

{{--                --}}{{--                <div class="col-xs-12 col-sm-12 col-md-6 top-search-holder">--}}
{{--                --}}{{--                    <!-- /.contact-row -->--}}
{{--                --}}{{--                    <!-- ============================================================= SEARCH AREA ============================================================= -->--}}
{{--                --}}{{--                    <div class="search-area">--}}
{{--                --}}{{--                        <form action="{{route('search-product')}}" method="GET">--}}
{{--                --}}{{--                            @csrf--}}
{{--                --}}{{--                            <div class="control-group">--}}
{{--                --}}{{--                                <ul class="categories-filter animate-dropdown">--}}
{{--                --}}{{--                                    <select name="categories" id="categories"--}}
{{--                --}}{{--                                            style="width: 100%;border: 0px;padding: 13px;">--}}
{{--                --}}{{--                                        <option value="0">Danh mục</option>--}}
{{--                --}}{{--                                        @foreach($categorys as $key => $category)--}}
{{--                --}}{{--                                            <option value="{{$key+1}}">{{$category->category_name}}</option>--}}
{{--                --}}{{--                                        @endforeach--}}
{{--                --}}{{--                                        <svg class="svg-arrow select-arrow">--}}
{{--                --}}{{--                                            <use xlink:href="#svg-arrow"></use>--}}
{{--                --}}{{--                                        </svg>--}}
{{--                --}}{{--                                    </select>--}}
{{--                --}}{{--                                </ul>--}}
{{--                --}}{{--                                <input type="text" class="search-field" name="keyword_search" placeholder="Tìm kiếm..."--}}
{{--                --}}{{--                                       style="width: 55.5%;padding: 14px;">--}}
{{--                --}}{{--                                <input type="submit" name="search_items" class="search-button" value="Tìm kiếm"--}}
{{--                --}}{{--                                       style="padding: 14px 19px 12px; border-radius: 5px 0px 0px 5px;">--}}
{{--                --}}{{--                                --}}{{----}}{{--                                <a class="search-button" href="#"></a>--}}
{{--                --}}{{--                            </div>--}}
{{--                --}}{{--                        </form>--}}
{{--                --}}{{--                    </div>--}}
{{--                --}}{{--                    <!-- /.search-area -->--}}
{{--                --}}{{--                    <!-- ============================================================= SEARCH AREA : END ============================================================= -->--}}
{{--                --}}{{--                </div>--}}
{{--                --}}{{--                <!-- /.top-search-holder -->--}}
{{--                <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">--}}
{{--                    <!-- /.contact-row -->--}}
{{--                    <!-- ============================================================= SEARCH AREA ============================================================= -->--}}
{{--                    <div class="search-area">--}}
{{--                        <form>--}}
{{--                            <div class="control-group">--}}
{{--                                <ul class="categories-filter animate-dropdown">--}}
{{--                                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"--}}
{{--                                                            href="category.html">Categories <b class="caret"></b></a>--}}
{{--                                        <ul class="dropdown-menu" role="menu">--}}
{{--                                            <li class="menu-header">Computer</li>--}}
{{--                                            <li role="presentation"><a role="menuitem" tabindex="-1"--}}
{{--                                                                       href="category.html">- Clothing</a></li>--}}
{{--                                            <li role="presentation"><a role="menuitem" tabindex="-1"--}}
{{--                                                                       href="category.html">- Electronics</a></li>--}}
{{--                                            <li role="presentation"><a role="menuitem" tabindex="-1"--}}
{{--                                                                       href="category.html">- Shoes</a></li>--}}
{{--                                            <li role="presentation"><a role="menuitem" tabindex="-1"--}}
{{--                                                                       href="category.html">- Watches</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                                <input class="search-field" placeholder="Search here...">--}}
{{--                                <a class="search-button" href="#"></a></div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                    <!-- /.search-area -->--}}
{{--                    <!-- ============================================================= SEARCH AREA : END ============================================================= -->--}}
{{--                </div>--}}
{{--                <!-- /.top-search-holder -->--}}

{{--                <div class="col-xs-12 col-sm-12 col-md-3 animate-dropdown top-cart-row">--}}
{{--                    <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->--}}
{{--                    <div id="change-item-cart">--}}
{{--                        <div class="dropdown dropdown-cart">--}}
{{--                            <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">--}}
{{--                                <div class="items-cart-inner">--}}
{{--                                    <div class="basket"><i class="glyphicon glyphicon-shopping-cart"></i></div>--}}
{{--                                    <div class="basket-item-count">--}}
{{--                                    <span class="count">--}}
{{--                                        @if(Session::has('Cart') != null)--}}
{{--                                            {{Session::get('Cart')->totalQuanty}}--}}
{{--                                        @else--}}
{{--                                            0--}}
{{--                                        @endif--}}
{{--                                    </span></div>--}}
{{--                                    <div class="total-price-basket"><span class="lbl">Giỏ hàng </span></div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <ul class="dropdown-menu">--}}
{{--                                                            <div id="change-item-cart">--}}
{{--                                <li>--}}
{{--                                    @if(Session::has('Cart') != null)--}}
{{--                                        @foreach(Session::get('Cart')->products as $item)--}}
{{--                                            <div class="cart-item product-summary">--}}
{{--                                                <div class="row cart-detail">--}}
{{--                                                    <div class="col-xs-4">--}}
{{--                                                        <div class="image"><a href="detail.html"><img--}}
{{--                                                                    src="{{asset('images/'.$item['productInfo']->image)}}"--}}
{{--                                                                    alt=""></a></div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-xs-7">--}}
{{--                                                        <h3 class="name"><a--}}
{{--                                                                href="index.php?page-detail">{{$item['productInfo']->name}}</a>--}}
{{--                                                        </h3>--}}
{{--                                                        <div--}}
{{--                                                            class="price">{{number_format($item['productInfo']->price - $item['productInfo']->discount)}}--}}
{{--                                                            x {{$item['quanty']}} VNĐ--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                <!-- <div class="col-xs-1 cart-detail-product"> <a type="button"  class="fa fa-close" href="javascrip:" data-id="{{$item['productInfo']->id}}"></a> </div> -->--}}
{{--                                                <!-- <div  class="col-lg-2 col-sm-2 col-2 cart-detail-product">--}}
{{--													<a style="background: white; color: black" class="fa fa-close" type="button"  href="javascrip:" data-id="{{$item['productInfo']->id}}">--}}
{{--													</a>--}}
{{--												</div> -->--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        <!-- <input hidden id="total-quanty-card" type="number" value="{{Session::get('Cart')->totalQuanty}}"> -->--}}
{{--                                            <hr>--}}
{{--                                    @endforeach--}}

{{--                                    <!-- /.cart-item -->--}}
{{--                                        <div class="clearfix"></div>--}}


{{--                                        <div class="clearfix cart-total">--}}

{{--                                            <div class="pull-right">--}}
{{--                                                <span class="text">Tổng tiền:</span><span class='price'>{{number_format(Session::get('Cart')->totalPrice)}} VNĐ</span>--}}
{{--                                            </div>--}}
{{--                                            @else--}}
{{--                                                <span style="color: black;margin-left: 40px;">- Giỏ hàng trống -</span>--}}
{{--                                            @endif--}}
{{--                                            <div class="clearfix"></div>--}}
{{--                                            <a href="{{route('shopping.viewCart')}}"--}}
{{--                                               class="btn btn-upper btn-primary btn-block m-t-20">Mua hàng</a>--}}
{{--                                        </div>--}}
{{--                                        <!-- /.cart-total-->--}}

{{--                                </li>--}}
{{--                                                            </div>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- /.dropdown-menu-->--}}

{{--                    <!-- /.dropdown-cart -->--}}

{{--                    <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->--}}
{{--                </div>--}}
{{--                <!-- /.top-cart-row -->--}}
{{--            </div>--}}
{{--            <!-- /.row -->--}}

{{--        </div>--}}
{{--        <!-- /.container -->--}}

{{--    </div>--}}
{{--    <!-- /.main-header -->--}}

{{--    <!-- ============================================== NAVBAR ============================================== -->--}}
{{--    <div class="header-nav animate-dropdown">--}}
{{--        <div class="container">--}}
{{--            <div class="yamm navbar navbar-default" role="navigation">--}}
{{--                <div class="navbar-header">--}}
{{--                    <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse"--}}
{{--                            class="navbar-toggle collapsed" type="button">--}}
{{--                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span--}}
{{--                            class="icon-bar"></span> <span class="icon-bar"></span></button>--}}
{{--                </div>--}}
{{--                <div class="nav-bg-class">--}}
{{--                    <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">--}}
{{--                        <div class="nav-outer">--}}
{{--                            <ul class="nav navbar-nav">--}}
{{--                                <li class="active dropdown yamm-fw"><a href="{{route('shopping.home')}}">Trang Chủ</a>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown hidden-sm"><a href="{{route('shopping.show-product')}}">Sản--}}
{{--                                        Phẩm<span--}}
{{--                                            class="menu-label new-menu hidden-xs">Mới</span> </a></li>--}}
{{--                                @foreach($categorys as $category)--}}
{{--                                    @if($category->category_status==1)--}}
{{--                                        <li class="dropdown"><a--}}
{{--                                                href="{{route('shopping.show-category',$category->category_id)}}">{{$category->category_name}}</a>--}}
{{--                                        </li>--}}
{{--                                    @endif--}}
{{--                                @endforeach--}}

{{--                                <li class="dropdown"><a href="{{route('shopping.blog')}}">Tin Tức</a></li>--}}
{{--                                <li class="dropdown"><a href="{{route('showForm')}}">Liên Hệ</a></li>--}}
{{--                                <li class="dropdown"><a href="{{route('shopping.faq')}}">FAQ</a></li>--}}


{{--                                <li class="dropdown  navbar-right special-menu"><a href="{{route('shopping.coupon')}}">Nhận--}}
{{--                                        Voucher ngay<span--}}
{{--                                            class="menu-label hot-menu hidden-xs">Hot</span></a></li>--}}
{{--                            </ul>--}}
{{--                            <!-- /.navbar-nav -->--}}
{{--                            <div class="clearfix"></div>--}}
{{--                        </div>--}}
{{--                        <!-- /.nav-outer -->--}}
{{--                    </div>--}}
{{--                    <!-- /.navbar-collapse -->--}}

{{--                </div>--}}
{{--                <!-- /.nav-bg-class -->--}}
{{--            </div>--}}
{{--            <!-- /.navbar-default -->--}}
{{--        </div>--}}
{{--        <!-- /.container-class -->--}}

{{--    </div>--}}
{{--    <!-- /.header-nav -->--}}
{{--    <!-- ============================================== NAVBAR : END ============================================== -->--}}
{{--    <a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"--}}
{{--       style="background-color: #3498db; color: #ecf0f1; padding: 7px 9px;">--}}
{{--        <i class="fa fa-chevron-up"></i>--}}
{{--    </a>--}}
{{--</header>--}}


{{--<!-- ============================================== HEADER : END ============================================== -->--}}
<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">

    <!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">
                <div class="cnt-account">
                    <ul class="list-unstyled">
                        @if(Auth::guard('account_customer')->check())
                            <li><a href="{{route('customer.profiles')}}"><i class="icon fa fa-user"></i>Tài khoản</a>
                            </li>
                            <li><a href="{{route('shopping.showWishlist')}}"><i class="icon fa fa-heart"></i>Yêu
                                    thích</a></li>
                            <li><a href="{{route('shopping.cart')}}"><i class="icon fa fa-shopping-cart"></i>Giỏ
                                    hàng</a></li>
                            <li><a href="{{route('customer.profiles')}}"><i class="icon fa fa-user"></i>Xin chào
                                    bạn {{Auth::guard('account_customer')->user()->name}} </a></li>
                            <li><a href="{{ route('customer.getLogout') }}"><i class="icon fa fa-lock"></i>Đăng xuất</a>
                            </li>
                        @else
                            <li><a href="{{route('shopping.login')}}"><i class="icon fa fa-user"></i>Tài khoản</a></li>
                            <li><a href="{{route('shopping.showWishlist')}}"><i class="icon fa fa-heart"></i>Yêu
                                    thích</a></li>
                            <li><a href="{{route('shopping.cart')}}"><i class="icon fa fa-shopping-cart"></i>Giỏ
                                    hàng</a></li>
                            <li><a href="{{route('shopping.login')}}"><i class="icon fa fa-lock"></i>Đăng nhập</a></li>
                            <li><a href="{{route('shopping.login')}}"><i class="icon fa fa-lock"></i>Đăng ký</a></li>
                        @endif
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- /.header-top-inner -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.header-top -->
    <!-- ============================================== TOP MENU : END ============================================== -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                    <!-- ============================================================= LOGO ============================================================= -->
                    <div class="logo">
                        <a href="{{route('shopping.home')}}"> <img src="{{asset('public/images/'. $logos->logo_image)}}"
                                                                   alt="logo"></a>
                    </div>
                    <!-- ============================================================= LOGO : END ============================================================= -->
                </div>

                <div class="col-xs-12 col-sm-12 col-md-5 top-search-holder">
                    <!-- ============================================================= SEARCH AREA ============================================================= -->
                    <div class="search-area">
                        <form action="{{route('product.search')}}" method="GET">
                            @csrf
                            <div class="control-group" style="background: #fff;border-radius: 3px;">
                                {{--                                <div class="row">--}}
                                {{--                                <div class="col-xs-9">--}}
                                <input class="search-field" name="search_key" placeholder="Tìm kiếm sản phẩm của bạn..."
                                       autocomplete="off" required>
                                {{--                                <ul class="hidden" id="myUL">--}}
                                {{--                                    <li><a href="#">Adele</a></li>--}}
                                {{--                                    <li><a href="#">Agnes</a></li>--}}

                                {{--                                    <li><a href="#">Billy</a></li>--}}
                                {{--                                    <li><a href="#">Bob</a></li>--}}

                                {{--                                    <li><a href="#">Calvin</a></li>--}}
                                {{--                                    <li><a href="#">Christina</a></li>--}}
                                {{--                                    <li><a href="#">Cindy</a></li>--}}
                                {{--                                </ul>--}}
                                {{--                                </div>--}}
                                {{--                                    <div class="col-xs-3">--}}
                                <button type="submit" class="search-button">Tìm kiếm</button>
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                            </div>
                        </form>
                    </div>
                    <!-- ============================================================= SEARCH AREA : END ============================================================= -->
                </div>

                <div class="col-xs-12 col-sm-12 col-md-1"></div>
                <div class="col-xs-12 col-sm-12 col-md-3 animate-dropdown top-cart-row">
                    <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
                    <div id="change-item-cart">
                        <div class="dropdown dropdown-cart">
                            <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                                <div class="items-cart-inner">
                                    <div class="basket"><i class="glyphicon glyphicon-shopping-cart"></i></div>
                                    <div class="basket-item-count">
                                        <span class="count">
                                            @if(Session::has('Cart') != null)
                                                {{Session::get('Cart')->totalQuanty}}
                                            @else
                                                0
                                            @endif
                                        </span>
                                    </div>
                                    <div class="total-price-basket"><span class="lbl">Giỏ hàng</span></div>
                                </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    @if(Session::has('Cart') != null)
                                        @foreach(Session::get('Cart')->products as $item)
                                            <div class="cart-item product-summary">
                                                <div class="row cart-detail">
                                                    <div class="col-xs-4">
                                                        <div class="image">
                                                            <a href="detail.html"><img
                                                                    src="{{asset('public/images/'.$item['productInfo']->image)}}"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-7" style="padding: 0px;">
                                                        <h3 class="name"><a
                                                                href="index.php?page-detail">{{$item['productInfo']->name}}</a>
                                                        </h3>
                                                        <div
                                                            class="price">{{number_format($item['productInfo']->price - $item['productInfo']->discount)}}
                                                            VNĐ
                                                            x {{$item['quanty']}}
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-1 action" style="text-align: right"><a
                                                            href="#"><i class="fa fa-trash"></i></a></div>
                                                {{--                                                    <div class="col-xs-1">--}}
                                                {{--                                                        <a type="button"  class="fa fa-close" href="javascrip:" data-id="{{$item['productInfo']->id}}"></a>--}}
                                                {{--                                                    </div>--}}
                                                <!-- <div  class="col-lg-2 col-sm-2 col-2 cart-detail-product">
													<a style="background: white; color: black" class="fa fa-close" type="button"  href="javascrip:" data-id="{{$item['productInfo']->id}}">
													</a>
												</div> -->
                                                </div>
                                            </div>
                                        <!-- <input hidden id="total-quanty-card" type="number" value="{{Session::get('Cart')->totalQuanty}}"> -->
                                            <hr>
                                    @endforeach
                                    <!-- /.cart-item -->
                                        <div class="clearfix"></div>
                                        <div class="clearfix cart-total">
                                            <div class="pull-right">
                                                <span class="text">Tổng tiền:</span><span class='price'>{{number_format(Session::get('Cart')->totalPrice)}} VNĐ</span>
                                            </div>
                                            @else
                                                <span style="color: black;margin-left: 40px;">- Giỏ hàng trống -</span>
                                            @endif
                                            <div class="clearfix"></div>
                                            <a href="{{route('shopping.cart')}}"
                                               class="btn btn-upper btn-primary btn-block m-t-20">Mua hàng</a>
                                        </div>
                                        <!-- /.cart-total-->
                                </li>
                            </ul>
                            <!-- /.dropdown-menu-->
                        </div>
                        <!-- /.dropdown-cart -->
                        <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
                    </div>
                    <!-- /.top-cart-row -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.main-header -->

    <!-- ============================================== NAVBAR ============================================== -->
    <div class="header-nav animate-dropdown">
        <div class="container">
            <div class="yamm navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse"
                            class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                            class="icon-bar"></span> <span class="icon-bar"></span></button>
                </div>
                <div class="nav-bg-class">
                    <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                        <div class="nav-outer">
                            <ul class="nav navbar-nav">
                                <li class="active dropdown yamm-fw">
                                    <a href="{{route('shopping.home')}}">Trang chủ</a>
                                </li>
                                <li class="dropdown"><a href="{{route('shopping.blog')}}">Giới Thiệu</a></li>
                                <li class="dropdown yamm mega-menu"><a href="home.html" data-hover="dropdown"
                                                                       class="dropdown-toggle" data-toggle="dropdown">Sản
                                        Phẩm<span class="menu-label new-menu hidden-xs">sale</span></a>
                                    <ul class="dropdown-menu container">
                                        <li>
                                            <div class="yamm-content ">
                                                <div class="row">
                                                    {{--                                                    @foreach($categorys as $key => $cate)--}}
                                                    {{--                                                    <div class="col-xs-12 col-sm-6 col-md-1 col-menu">--}}
                                                    {{--                                                        <h2 class="title">{{$cate->category_name}}</h2>--}}
                                                    {{--                                                        <ul class="links">--}}
                                                    {{--                                                            @foreach($brands as $brand)--}}
                                                    {{--                                                                @if($brand->category_id==$cate->category_id)--}}
                                                    {{--                                                            <li><a href="{{route('product.show-brand',$brand->brand_id)}}">{{$brand->brand_name}}</a></li>--}}
                                                    {{--                                                                @endif--}}
                                                    {{--                                                            @endforeach--}}
                                                    {{--                                                        </ul>--}}
                                                    {{--                                                    </div>--}}
                                                    {{--                                                @endforeach--}}
                                                    {{--                                                    <!-- /.col -->--}}
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image"><img
                                                            class="img-responsive"
                                                            src="{!! asset('public\frontend\assets\images\banners\1629820918.png') !!}"
                                                            alt=""></div>
                                                    <!-- /.yamm-content -->
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown mega-menu">
                                    <a href="#" data-hover="dropdown" class="dropdown-toggle"
                                       data-toggle="dropdown">Sản phẩm <span
                                            class="menu-label new-menu hidden-xs">sale</span>
                                    </a>
                                    <ul class="dropdown-menu container">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    @foreach($categorys as $key => $category)

                                                        <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                                                            <h2 class="title"><a
                                                                    href="{{route('shopping.loaisp', $category->category_id)}}"
                                                                    style="padding:0px">{{$category->category_name}}</a>
                                                            </h2>
                                                            <ul class="links">
                                                                @foreach($cate->unique('brand_id')->where('idcat',$category->category_id) as $brand)
                                                                    <li>
                                                                        <a href="{{route('product.show-brand',$brand->brand_id)}}">{{$brand->brand_name}}</a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                @endforeach
                                                <!-- /.col -->
                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-menu custom-banner"><a
                                                            href="#"><img alt=""
                                                                          src="{!! asset('public\frontend\assets\images\banners\banner-side.png') !!}"></a>
                                                    </div>
                                                </div>
                                                <!-- /.row -->
                                            </div>
                                            <!-- /.yamm-content --> </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="category.html">Sửa chữa & bảo trì</a></li>
                                <li class="dropdown hidden-sm"><a href="{{route('shopping.blog')}}">Tin Tức<span
                                            class="menu-label hot-menu hidden-xs">hot</span> </a></li>
                                <li class="dropdown"><a href="{{route('shopping.contact')}}">Liên hệ</a></li>
                                <li class="dropdown"><a href="{{route('shopping.faq')}}">Hỗ trợ</a></li>
                                <li class="dropdown  navbar-right special-menu"><a
                                        href="{{route('shopping.coupon')}}"><span
                                            class="menu-label hot-menu hidden-xs">hot</span>Mã giảm giá hôm nay</a></li>
                            </ul>
                            <!-- /.navbar-nav -->
                            <div class="clearfix"></div>
                        </div>
                        <!-- /.nav-outer -->
                    </div>
                    <!-- /.navbar-collapse -->

                </div>
                <!-- /.nav-bg-class -->
            </div>
            <!-- /.navbar-default -->
        </div>
        <!-- /.container-class -->

    </div>
    <!-- /.header-nav -->
    <!-- ============================================== NAVBAR : END ============================================== -->
    {{--    <div id=”backtotop”>--}}
    {{--        <a href=”javascript:void(0)” class=”backtotop”></a>--}}
    {{--    </div>--}}
</header>

<header class="header-style-1">

    <!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">
                <div class="cnt-account">
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="icon fa fa-user"></i>Tài khoản</a></li>
                        <li><a href="{{route('showWishlist')}}"><i class="icon fa fa-heart"></i>Yêu thích</a></li>
                        <li><a href="#"><i class="icon fa fa-shopping-cart"></i>Giỏ hàng</a></li>
                        @if(Auth::guard('account_customer')->check())
                            <li><a href="#"><i class="icon fa fa-user"></i>Xin chào bạn  {{Auth::guard('account_customer')->user()->name}} </a></li>
                            <li><a href="{{ route('customer.getLogout') }}"><i class="icon fa fa-lock"></i>Đăng xuất</a></li>
                        @else
                            <li><a href="{{route('shopping.login')}}"><i class="icon fa fa-lock"></i>Đăng nhập</a></li>
                            <li><a href="{{route('shopping.login')}}"><i class="icon fa fa-lock"></i>Đăng ký</a></li>
                        @endif
                    </ul>
                </div>
                <!-- /.cnt-account -->

                <div class="cnt-block">
                    <ul class="list-unstyled list-inline">
                        <li class="dropdown dropdown-small"><a href="#" class="dropdown-toggle" data-hover="dropdown"
                                                               data-toggle="dropdown"><span class="value">USD </span><b
                                    class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">USD</a></li>
                                <li><a href="#">INR</a></li>
                                <li><a href="#">GBP</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-small"><a href="#" class="dropdown-toggle" data-hover="dropdown"
                                                               data-toggle="dropdown"><span
                                    class="value">English </span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">English</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">German</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- /.list-unstyled -->
                </div>
                <!-- /.cnt-cart -->
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
{{--                    @foreach($logos as $logo)--}}
{{--                        <div class="logo">--}}
{{--                            <a href="{{route('shopping.index')}}">--}}
{{--                                <img src="{{asset('images/'. $logo->logo_image)}}" alt="logo">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                @endforeach--}}
                <!-- /.logo -->
                    <div class="logo">
                        <a href="">
                            <img src="" alt="logo">
                        </a>
                    </div>
                    <!-- ============================================================= LOGO : END ============================================================= -->
                </div>
                <!-- /.logo-holder -->

                <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder" style="padding-right: 126px;">
                    <!-- /.contact-row -->
                    <!-- ============================================================= SEARCH AREA ============================================================= -->
                    <div class="search-area">
                        <form action="{{route('search-product')}}" method="GET">
                            @csrf
                            <div class="control-group">
{{--                                <ul class="categories-filter animate-dropdown">--}}
{{--                                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"--}}
{{--                                                            href="category.html">Danh mục<b class="caret"></b></a>--}}
{{--                                        <ul class="dropdown-menu" role="menu">--}}
{{--                                            @foreach($categorys as $category)--}}
{{--                                                <li role="presentation"><a role="menuitem" tabindex="-1"--}}
{{--                                                                           href="category.html">{{$category->name}}</a>--}}
{{--                                                </li>--}}
{{--                                            @endforeach--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
                                <input type="text" class="search-field" name="keyword_search" placeholder="Tìm kiếm..." style="width: 82%;">
                                <input type="submit" name="search_items" class="search-button" value="Tìm kiếm">
{{--                                <a class="search-button" href="#"></a>--}}
                            </div>
                        </form>
                    </div>
                    <!-- /.search-area -->
                    <!-- ============================================================= SEARCH AREA : END ============================================================= -->
                </div>
                <!-- /.top-search-holder -->

                <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
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
                                    </span></div>
                                    <div class="total-price-basket"><span class="lbl">Giỏ hàng </span></div>
                                </div>
                            </a>
                            <ul class="dropdown-menu" style="width: 200%;">
                                {{--                            <div id="change-item-cart">--}}
                                <li>
                                    @if(Session::has('Cart') != null)
                                        @foreach(Session::get('Cart')->products as $item)
                                            <div class="cart-item product-summary">
                                                <div class="row cart-detail">
                                                    <div class="col-xs-4">
                                                        <div class="image"><a href="detail.html"><img
                                                                    src="{{asset('images/'.$item['productInfo']->image)}}"
                                                                    alt=""></a></div>
                                                    </div>
                                                    <div class="col-xs-7">
                                                        <h3 class="name"><a
                                                                href="index.php?page-detail">{{$item['productInfo']->name}}</a>
                                                        </h3>
                                                        <div
                                                            class="price">{{number_format($item['productInfo']->price - $item['productInfo']->discount)}}
                                                            x {{$item['quanty']}} VNĐ
                                                        </div>
                                                    </div>
                                                <!-- <div class="col-xs-1 cart-detail-product"> <a type="button"  class="fa fa-close" href="javascrip:" data-id="{{$item['productInfo']->id}}"></a> </div> -->
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
                                            <a href="{{route('shopping.viewCart')}}"
                                               class="btn btn-upper btn-primary btn-block m-t-20">Mua hàng</a>
                                        </div>
                                        <!-- /.cart-total-->

                                </li>
                                {{--                            </div>--}}
                            </ul>
                        </div>
                    </div>
                    <!-- /.dropdown-menu-->

                    <!-- /.dropdown-cart -->

                    <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
                </div>
                <!-- /.top-cart-row -->
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
                                <li class="active dropdown yamm-fw"><a href="{{route('shopping.index')}}">Trang Chủ</a>
                                </li>
                                <li class="dropdown hidden-sm"><a href="{{route('shopping.category')}}">Sản Phẩm<span
                                            class="menu-label new-menu hidden-xs">Mới</span> </a></li>
                                @foreach($categorys as $category)
{{--                                    @if($category->name=='Điện thoại'||$category->name=='Máy tính Laptop'||$category->name=='Đồng hồ thông minh'||$category->name=='Phụ kiện')--}}
                                        <li class="dropdown"><a
                                                    href="{{route('shopping.show-category',$category->id)}}">{{$category->name}}</a>
                                        </li>
{{--                                    @endif--}}
                                @endforeach

                                <li class="dropdown"><a href="{{route('shopping.blog')}}">Tin Tức</a></li>
                                <li class="dropdown"><a href="{{route('showForm')}}">Liên Hệ</a></li>
                                <li class="dropdown"><a href="{{route('shopping.faq')}}">FAQ</a></li>


                                <li class="dropdown  navbar-right special-menu"><a href="{{route('shopping.coupon')}}">Nhận Voucher ngay<span
                                            class="menu-label hot-menu hidden-xs">Hot</span></a></li>
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

</header>

<!-- ============================================== HEADER : END ============================================== -->

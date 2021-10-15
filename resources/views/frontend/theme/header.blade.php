<header class="header">

    <!-- Topbar - start -->
    <div class="header_top">
        <div class="container">
            <ul class="contactinfo nav nav-pills">
                <li>
                    <i class='fa fa-phone'></i> +84 911 150 326
                </li>
                <li>
                    <i class="fa fa-envelope"></i> dinhtrongak123@gmail.com
                </li>
            </ul>
            <!-- Social links -->
            <ul class="social-icons nav navbar-nav">
                <li>
                    <a href="https://www.facebook.com/v.luong.giap" rel="nofollow" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="http://google.com" rel="nofollow" target="_blank">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </li>
                <li>
                    <a href="http://twitter.com" rel="nofollow" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="http://vk.com" rel="nofollow" target="_blank">
                        <i class="fa fa-vk"></i>
                    </a>
                </li>
                <li>
                    <a href="http://instagram.com" rel="nofollow" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Topbar - end -->

    <!-- Logo, Shop-menu - start -->
    <div class="header-middle">
        <div class="container header-middle-cont">
            <div class="toplogo">
                <a href="index.html">
                    <img src="{{asset('public/images/'. $logos->logo_image)}}"
                         alt="AllStore - MultiConcept eCommerce Template">
                </a>
            </div>
            <div class="shop-menu">
                <ul>
                    @if(Auth::guard('account_customer')->check())
                        <li>
                            <a href="{{route('yeu-thich')}}">
                                <i class="fa fa-heart"></i>
                                <span class="shop-menu-ttl">Yêu thích</span>
                                (<span id="topbar-favorites">1</span>)
                            </a>
                        </li>

                        <li>
                            <a href="{{route('so-sanh')}}">
                                <i class="fa fa-bar-chart"></i>
                                <span class="shop-menu-ttl">So sánh</span> (5)
                            </a>
                        </li>

                        <li class="topauth">
                            <a href="#">
                                <i class="fa fa-user-circle-o"></i>
                                <span
                                    class="shop-menu-ttl">Xin chào! {{Auth::guard('account_customer')->user()->name}}</span>
                            </a>
                            <a href="{{route('customer.getLogout')}}">
                                <span class="shop-menu-ttl">Đăng xuất</span>
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="{{route('yeu-thich')}}">
                                <i class="fa fa-heart"></i>
                                <span class="shop-menu-ttl">Yêu thích</span>
                                (<span id="topbar-favorites">1</span>)
                            </a>
                        </li>

                        <li>
                            <a href="{{route('so-sanh')}}">
                                <i class="fa fa-bar-chart"></i>
                                <span class="shop-menu-ttl">So sánh</span> (5)
                            </a>
                        </li>
                        <li class="topauth">
                            <a href="{{route('dang-nhap')}}">
                                <i class="fa fa-lock"></i>
                                <span class="shop-menu-ttl">Đăng ký</span>
                            </a>
                            <a href="{{route('dang-nhap')}}">
                                <span class="shop-menu-ttl">Đăng nhập</span>
                            </a>
                        </li>
                    @endif
                    <li>
                        <div id="change-item-cart">
                            <div class="h-cart">
                                <a href="{{route('gio-hang')}}">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="shop-menu-ttl">Giỏ hàng</span>
                                    @if(Session::has('Cart') != null)
                                        (<b> {{Session::get('Cart')->totalQuanty}}</b>)
                                    @else
                                        (<b>0</b>)
                                    @endif
                                </a>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <!-- Logo, Shop-menu - end -->

    <!-- Topmenu - start -->
    <div class="header-bottom" style="background: #0f6cb2;">
        <div class="container">
            <nav class="topmenu">

                <!-- Catalog menu - start -->
                <div class="topcatalog">
                    <a class="topcatalog-btn" href="{{route('san-pham')}}"><span>Menu</span> Danh mục</a>
                    <ul class="topcatalog-list">
                        @foreach($categorys as $cate)
                            <li>
                                <a href="{{route('danh-muc',$cate->category_id)}}?{{$cate->category_name}}">
                                    {{$cate->category_name}}
                                </a>
                                <i class="fa fa-angle-right"></i>
                                <ul>
                                    @foreach($brands as $brand)
                                        @if($brand->category_id==$cate->category_id)
                                            <li>
                                                <a href="{{route('thuong-hieu',$brand->brand_id)}}?{{$brand->brand_name}}">
                                                    {{$brand->brand_name}}
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                    <li>
                                        <a href="catalog-list.html">
                                            Bags
                                        </a>
                                        <i class="fa fa-angle-right"></i>
                                        <ul>
                                            <li>
                                                <a href="catalog-list.html">
                                                    Shoulder Bags
                                                </a>
                                            </li>
                                            <li>
                                                <a href="catalog-list.html">
                                                    Falabella
                                                </a>
                                            </li>
                                            <li>
                                                <a href="catalog-list.html">
                                                    Becks
                                                </a>
                                            </li>
                                            <li>
                                                <a href="catalog-list.html">
                                                    Clutches
                                                </a>
                                            </li>
                                            <li>
                                                <a href="catalog-list.html">
                                                    Travel Bags
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!-- Catalog menu - end -->

                <!-- Main menu - start -->
                <button type="button" class="mainmenu-btn">Menu</button>

                <ul class="mainmenu">
                    <li>
                        <a href="{{route('trang-chu')}}" class="active" style="background-color: #085b9a;color: white;">
                            Trang chủ
                        </a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{route('san-pham')}}">
                            Sản phẩm <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="catalog-list.html">
                                    Catalog List - Style 1
                                </a>
                            </li>
                            <li>
                                <a href="catalog-list-2.html">
                                    Catalog List - Style 2
                                </a>
                            </li>
                            <li>
                                <a href="catalog-gallery.html">
                                    Catalog Gallery - Style 1
                                </a>
                            </li>
                            <li>
                                <a href="catalog-gallery-2.html">
                                    Catalog Gallery - Style 2
                                </a>
                            </li>
                            <li>
                                <a href="catalog-table.html">
                                    Catalog Table
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{route('bai-viet')}}">
                            Bài viết
                        </a>
                    </li>

                    <li>
                        <a href="{{route('lien-he')}}">
                            Liên hệ
                        </a>
                    </li>
                    <li>
                        <a href="{{route('trang-chu')}}">
                            Hỗ trợ
                        </a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">
                            Trang <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="contacts.html">
                                    Liên hệ
                                </a>
                            </li>
                            <li>
                                <a href="contacts.html">
                                    Câu hỏi thường gặp
                                </a>
                            </li>
                            <li>
                                <a href="cart.html">
                                    Giỏ hàng
                                </a>
                            </li>
                            <li>
                                <a href="auth.html">
                                    Authorization
                                </a>
                            </li>
                            <li>
                                <a href="compare.html">
                                    So sánh
                                </a>
                            </li>
                            <li>
                                <a href="wishlist.html">
                                    Yêu thích
                                </a>
                            </li>
                            <li>
                                <a href="404.html">
                                    Error 404
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('trang-chu')}}">
                            Voucher
                        </a>
                    </li>
                    <li class="mainmenu-more">
                        <span>...</span>
                        <ul class="mainmenu-sub"></ul>
                    </li>
                </ul>
                <!-- Main menu - end -->

                <!-- Search - start -->
                <div class="topsearch">
                    <a id="topsearch-btn" class="topsearch-btn" href="#"><i class="fa fa-search"></i></a>
                    <form class="topsearch-form" action="{{route('tim-kiem')}}" method="GET">
                        @csrf
                        <input type="text" placeholder="Tìm kiếm sản phẩm" name="keyword_search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!-- Search - end -->

            </nav>
        </div>
    </div>
    <!-- Topmenu - end -->
    <div id=”backtotop”>
        <a href=”javascript:void(0)” class=”backtotop”></a>
    </div>
</header>
<!-- Header - end -->

<!-- ============================================== HEADER : END ============================================== -->

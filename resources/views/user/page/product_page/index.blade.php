@extends('user.theme.layout')
@section('content')
    <!-- ============================================== HEADER : END ============================================== -->
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="{{route('shopping.home')}}">Trang chủ</a></li>
                    <li class='active'>Handbags</li>
                </ul>
            </div>
            <!-- /.breadcrumb-inner -->
        </div>
        <!-- /.container -->
    </div>
    <div class="body-content outer-top-xs" id="top-banner-and-menu">
        <div class="container">
            <div class="row">
                <!-- ============================================== SIDEBAR ============================================== -->
                <div class="col-xs-12 col-sm-12 col-md-3 sidebar">

                    <!-- ================================== TOP NAVIGATION ================================== -->
                @include('user.page.home.category_menu.categorys_menu')
                <!-- ================================== TOP NAVIGATION : END ================================== -->

                    <div class="sidebar-module-container">
                        <div class="sidebar-filter">
                        @include('user.page.product_page.search')
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
                                    <div class="tag-list"><a class="item" title="Phone" href="category.html">Phone</a>
                                        <a class="item active" title="Vest" href="category.html">Vest</a> <a
                                            class="item" title="Smartphone" href="category.html">Smartphone</a> <a
                                            class="item" title="Furniture" href="category.html">Furniture</a> <a
                                            class="item" title="T-shirt" href="category.html">T-shirt</a> <a
                                            class="item" title="Sweatpants" href="category.html">Sweatpants</a> <a
                                            class="item" title="Sneaker" href="category.html">Sneaker</a> <a
                                            class="item" title="Toys" href="category.html">Toys</a> <a class="item"
                                                                                                       title="Rose"
                                                                                                       href="category.html">Rose</a>
                                    </div>
                                    <!-- /.tag-list -->
                                </div>
                                <!-- /.sidebar-widget-body -->
                            </div>
                            <!-- /.sidebar-widget -->
                            <!----------- Testimonials------------->
                            <div class="sidebar-widget  wow fadeInUp outer-top-vs ">
                                <div id="advertisement" class="advertisement">
                                    <div class="item">
                                        <div class="avatar"><img src="assets\images\testimonials\member1.png"
                                                                 alt="Image"></div>
                                        <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus
                                            port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em>
                                        </div>
                                        <div class="clients_author">John Doe <span>Abc Company</span></div>
                                        <!-- /.container-fluid -->
                                    </div>
                                    <!-- /.item -->

                                    <div class="item">
                                        <div class="avatar"><img src="assets\images\testimonials\member3.png"
                                                                 alt="Image"></div>
                                        <div class="testimonials"><em>"</em>Vtae sodales aliq uam morbi non sem lacus
                                            port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em>
                                        </div>
                                        <div class="clients_author">Stephen Doe <span>Xperia Designs</span></div>
                                    </div>
                                    <!-- /.item -->

                                    <div class="item">
                                        <div class="avatar"><img src="assets\images\testimonials\member2.png"
                                                                 alt="Image"></div>
                                        <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus
                                            port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em>
                                        </div>
                                        <div class="clients_author">Saraha Smith <span>Datsun &amp; Co</span></div>
                                        <!-- /.container-fluid -->
                                    </div>
                                    <!-- /.item -->

                                </div>
                                <!-- /.owl-carousel -->
                            </div>

                            <!-- ============================================== Testimonials: END ============================================== -->
                        </div>
                        <!-- /.sidebar-filter -->
                    </div>
                </div>
                <!-- /.sidemenu-holder -->
                <!-- ============================================== CONTENT ============================================== -->
                <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                    <!-- ========================================== SECTION – HERO ========================================= -->
                @include('user.page.product_page.banner')
                <!-- ========================================= SECTION – HERO : END ========================================= -->
                @include('user.page.product_page.products')
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

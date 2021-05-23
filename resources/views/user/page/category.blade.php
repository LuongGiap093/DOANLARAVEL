@extends('user.theme.layout')
@section('content')
<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-xs" id="top-banner-and-menu">
  <div class="container">
    <div class="row"> 
      <!-- ============================================== SIDEBAR ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-3 sidebar"> 
        
        <!-- ================================== TOP NAVIGATION ================================== -->
        <div class="side-menu animate-dropdown outer-bottom-xs">
          <div class="head"><i class="icon fa fa-align-justify fa-fw"></i>Danh mục sản phẩm</div>
          <nav class="yamm megamenu-horizontal">
            <ul class="nav">            
            @foreach($categorys as $category)   
              <li> <a href="{{route('shopping.loaisp', $category->id)}}"><i class="icon fa fa-futbol-o"></i>{{$category->name}}</a> 
                <!-- /.dropdown-menu --> </li>
                @endforeach 
              <!-- /.menu-item -->
              
            </ul>
            <!-- /.nav --> 
          </nav>
          <!-- /.megamenu-horizontal --> 
        </div>
        <!-- /.side-menu --> 
        <!-- ================================== TOP NAVIGATION : END ================================== --> 
        
        <!-- ============================================== HOT DEALS ============================================== -->
        <div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
          <h3 class="section-title">ưu đãi khủng</h3>
          <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
          @foreach($products as $product)
            <div class="item">
              <div class="products">
                <div class="hot-deal-wrapper">
                  <div class="image"> 
                  <a href="{{route('shopping.viewProduct', $product->id)}}">
                  <img src="{!!asset('images/'. $product->image)!!}" alt="">
                    </a>
                    </div>
                  <div class="sale-offer-tag"><span>Đến<br>
                  49%</span></div>
                  <div class="timing-wrapper">
                    <div class="box-wrapper">
                      <div class="date box"> <span class="key">120</span> <span class="value">NGÀY</span> </div>
                    </div>
                    <div class="box-wrapper">
                      <div class="hour box"> <span class="key">20</span> <span class="value">GIỜ</span> </div>
                    </div>
                    <div class="box-wrapper">
                      <div class="minutes box"> <span class="key">36</span> <span class="value">PHÚT</span> </div>
                    </div>
                    <div class="box-wrapper hidden-md">
                      <div class="seconds box"> <span class="key">60</span> <span class="value">GIÂY</span> </div>
                    </div>
                  </div>
                </div>
                <!-- /.hot-deal-wrapper -->
                
                <div class="product-info text-left m-t-20">
                  <h3 class="name"><a href="{{route('shopping.viewProduct', $product->id)}}">{{ $product->name }}</a></h3>
                  <div class="rating rateit-small"></div>
                  <div class="product-price"> <span class="price">{{ number_format($product->price)}} VNĐ</span> <span class="price-before-discount">$800.00</span> </div>
                  <!-- /.product-price --> 
                  
                </div>
                <!-- /.product-info -->
                
                <div class="cart clearfix animate-effect">
                  <div class="action">
                    <div class="add-cart-button btn-group">
                      <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                      <button class="btn btn-primary cart-btn" data-toggle="tooltip" type="button" title="Add Cart" onclick="AddCart({{$product->id}})" href="javascript:" data-text="Add To Cart" data-text="Add To Cart">
                      Thêm vào giỏ hàng
                      </button>
                    </div>
                  </div>
                  <!-- /.action --> 
                </div>
                <!-- /.cart --> 
              </div>
            </div>
            @endforeach
          </div>
          <!-- /.sidebar-widget --> 
        </div>
        <!-- ============================================== HOT DEALS: END ============================================== --> 
    
 
      </div>
      <!-- /.sidemenu-holder --> 
      <!-- ============================================== CONTENT ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder"> 
        <!-- ========================================== SECTION – HERO ========================================= -->       
        <div id="category" class="category-carousel hidden-xs">
          <div class="item">
            <div class="image"> <img src="{{asset('frontend\assets\images\banners\cat-banner-1.jpg')}}" alt="" class="img-responsive"> </div>
            <div class="container-fluid">
              <div class="caption vertical-top text-left">
                <div class="big-text"> Big Sale </div>
                <div class="excerpt hidden-sm hidden-md"> Save up to 49% off </div>
                <div class="excerpt-normal hidden-sm hidden-md"> Lorem ipsum dolor sit amet, consectetur adipiscing elit </div>
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
                  <li class="active"> <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>Grid</a> </li>
                  <li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-th-list"></i>List</a></li>
                </ul>
              </div>
              <!-- /.filter-tabs --> 
            </div>
            <!-- /.col -->
            <div class="col col-sm-12 col-md-6">
              <!-- /.col -->
            </div>
            <!-- /.col -->
            <div class="col col-sm-6 col-md-4 text-right">
              <div class="pagination-container">
                <ul class="list-inline list-unstyled">
                  <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
                <!-- /.list-inline --> 
              </div>
              <!-- /.pagination-container --> </div>
            <!-- /.col --> 
          </div>
          <!-- /.row --> 
        </div>
        <!-- product-->
        <div class="search-result-container ">
          <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active " id="grid-container">
              <div class="category-product">
                <div class="row">
                @foreach($products as $product)
                  <div class="col-sm-6 col-md-4 wow fadeInUp">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="{{route('shopping.viewProduct', $product->id)}}"><img src="{!!asset('images/'. $product->image)!!}" alt="" style="height: 251px;"></a> </div>
                          <!-- /.image -->                          
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{route('shopping.viewProduct', $product->id)}}">{{ $product->name }}</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> {{ number_format($product->price)}} VNĐ </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                              <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart">
                                <a onclick="AddCart({{$product->id}})" href="javascript:" data-text="Add To Cart" data-text="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                                </button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="#" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
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
                            <img src="{!!asset('images/'. $product->image)!!}" alt="" style="    width: 80%; height: 203px;">
                            </a>
                            </div>
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-sm-8 col-lg-8">
                          <div class="product-info">
                            <h3 class="name"><a href="detail.html">{{ $product->name }}</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> {{ number_format($product->price)}} VNĐ </span> <span class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->
                            <div class="description m-t-10">
                            Hàng nhập khẩu Hàn Quốc <br>
                            Bao đẹp, bao chất lượng</div>
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                    <button class="btn btn-primary cart-btn" data-toggle="tooltip" type="button" title="Add Cart" onclick="AddCart({{$product->id}})" href="javascript:" data-text="Add To Cart" data-text="Add To Cart">
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
              <div class="pagination-container">
                <ul class="list-inline list-unstyled">
                  <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
                <!-- /.list-inline --> 
              </div>
              <!-- /.pagination-container --> </div>
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
    <!-- /.row --> 
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
    <div id="brands-carousel" class="logo-slider wow fadeInUp">
      <div class="logo-slider-inner">
        <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
          <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="{!! asset('frontend/assets/images/brands/brand1.png') !!}" src="{!! asset('frontend\assets\images\blank.gif') !!}" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item m-t-10"> <a href="#" class="image"> <img data-echo="{!! asset('frontend/assets/images/brands/brand2.png') !!}" src="{!! asset('frontend\assets\images\blank.gif') !!}" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="{!! asset('frontend/assets/images/brands/brand3.png') !!}" src="{!! asset('frontend\assets\images\blank.gif') !!}" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="{!! asset('frontend/assets/images/brands/brand4.png') !!}" src="{!! asset('frontend\assets\images\blank.gif') !!}" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="{!! asset('frontend/assets/images/brands/brand5.png') !!}" src="{!! asset('frontend\assets\images\blank.gif') !!}" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="{!! asset('frontend/assets/images/brands/brand6.png') !!}" src="{!! asset('frontend\assets\images\blank.gif') !!}" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="{!! asset('frontend/assets/images/brands/brand2.png') !!}" src="{!! asset('frontend\assets\images\blank.gif') !!}" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="{!! asset('frontend/assets/images/brands/brand4.png') !!}" src="{!! asset('frontend\assets\images\blank.gif') !!}" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="{!! asset('frontend/assets/images/brands/brand1.png') !!}" src="{!! asset('frontend\assets\images\blank.gif') !!}" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="{!! asset('frontend/assets/images/brands/brand5.png') !!}" src="{!! asset('frontend\assets\images\blank.gif') !!}" alt=""> </a> </div>
          <!--/.item--> 
        </div>
        <!-- /.owl-carousel #logo-slider --> 
      </div>
      <!-- /.logo-slider-inner --> 
      
    </div>
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== --> 
  </div>
  <!-- /.container --> 
</div>
<!-- /#top-banner-and-menu --> 
@endsection
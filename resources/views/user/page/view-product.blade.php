@extends('user.theme.layout')
@section('content')
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li><a href="#">Clothing</a></li>
				<li class='active'>Floral Print Buttoned</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
	<div class='container'>
		<div class='row single-product'>
			<div class='col-md-3 sidebar'>
				<div class="sidebar-module-container">
					<div class="home-banner outer-top-n">
						<img src="{!! asset('frontend\assets\images\banners\LHS-banner.jpg') !!}" alt="Image">
					</div>		
  
    
    
					<!-- ============================================== HOT DEALS ============================================== -->
					
					<!-- ============================================== HOT DEALS: END ============================================== -->					
				</div>
			</div><!-- /.sidebar -->
			<div class='col-md-9'>
            	<div class="detail-block">
					<div class="row  wow fadeInUp">                
					     <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
    						<div class="product-item-holder size-big single-product-gallery small-gallery">

        						<div id="owl-single-product">
            						<div class="single-product-gallery-item" id="slide1">
										<a data-lightbox="image-1" data-title="Gallery" href="{{asset('images/'.$products->image)}}">
											<img class="img-responsive" alt="" src="{{asset('images/'.$products->image)}}" data-echo="{{asset('images/'.$products->image)}}">
										</a>
            						</div><!-- /.single-product-gallery-item -->
            						<div class="single-product-gallery-item" id="slide2">
										<a data-lightbox="image-1" data-title="Gallery" href="{{asset('images/'.$products->image)}}">
											<img class="img-responsive" alt="" src="{{asset('images/'.$products->image)}}" data-echo="{{asset('images/'.$products->image)}}">
										</a>
            						</div><!-- /.single-product-gallery-item -->
        						</div><!-- /.single-product-slider -->


        						<div class="single-product-gallery-thumbs gallery-thumbs">
									<div id="owl-single-product-thumbnails">
										<div class="item">
											<a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide1">
												<img class="img-responsive" width="85" alt="" src="{{asset('images/'.$products->image)}}" data-echo="{{asset('images/'.$products->image)}}">
											</a>
										</div>

										<div class="item">
											<a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide2">
												<img class="img-responsive" width="85" alt="" src="{{asset('images/'.$products->image)}}" data-echo="{{asset('images/'.$products->image)}}">
											</a>
										</div>
										<div class="item">

											<a class="horizontal-thumb" data-target="#owl-single-product" data-slide="3" href="#slide3">
												<img class="img-responsive" width="85" alt="" src="{{asset('images/'.$products->image)}}" data-echo="{{asset('images/'.$products->image)}}">
											</a>
										</div>
										<div class="item">

											<a class="horizontal-thumb" data-target="#owl-single-product" data-slide="4" href="#slide4">
												<img class="img-responsive" width="85" alt="" src="{{asset('images/'.$products->image)}}" data-echo="{{asset('images/'.$products->image)}}">
											</a>
										</div>										
									</div><!-- /#owl-single-product-thumbnails -->
        						</div><!-- /.gallery-thumbs -->

    						</div><!-- /.single-product-gallery -->
						</div><!-- /.gallery-holder -->        			
						<div class='col-sm-6 col-md-7 product-info-block'>
							<div class="product-info">
								<h1 class="name">{{$products->name}}</h1>								
								<div class="rating-reviews m-t-20">
									<div class="row">
										<div class="col-sm-3">
											<div class="rating rateit-small"></div>
										</div>
										<div class="col-sm-8">
											<div class="reviews">
												<a href="#" class="lnk">(13 Đánh Giá)</a>
											</div>
										</div>
									</div><!-- /.row -->		
								</div><!-- /.rating-reviews -->

								<div class="stock-container info-container m-t-10">
									<div class="row">
										<div class="col-sm-2">
											<div class="stock-box">
												<span class="label">Số lượng tồn :</span>
											</div>	
										</div>
										<div class="col-sm-9">
											<div class="stock-box">
												<span class="value">.10</span>
											</div>	
										</div>
									</div><!-- /.row -->	
								</div><!-- /.stock-container -->

								<div class="description-container m-t-20">
									Bao đẹp
								</div><!-- /.description-container -->

								<div class="price-container info-container m-t-20">
									<div class="row">
										

										<div class="col-sm-6">
											<div class="price-box">
												<span class="price">{{$products->price}} VNĐ</span>
												
											</div>
										</div>

										<div class="col-sm-6">
											<div class="favorite-button m-t-10">
												<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist" href="#">
													<i class="fa fa-heart"></i>
												</a>
												<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Add to Compare" href="#">
												<i class="fa fa-signal"></i>
												</a>
												<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="E-mail" href="#">
													<i class="fa fa-envelope"></i>
												</a>
											</div>
										</div>

									</div><!-- /.row -->
								</div><!-- /.price-container -->

								<div class="quantity-container info-container">
									<div class="row">
										
										<div class="col-sm-2">
											<span class="label">Quantity :</span>
										</div>
										
										<div class="col-sm-2">
											<div class="cart-quantity">
												<div class="quant-input">
													<div class="arrows">
													<div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
													<div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
													</div>
													<input min="0" max="100" type="text" value="1" type="number">
												</div>
											</div>
										</div>
                                         <!--quantity-->
                                         <script>
                                            $('.value-plus1').on('click', function(){
                                                var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
                                                divUpd.text(newVal);
                                            });

                                            $('.value-minus1').on('click', function(){
                                                var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
                                                if(newVal>=1) divUpd.text(newVal);
                                            });
                                            </script>
                                        <!--quantity-->
										<div class="col-sm-7">
											<a href="javascripts:" onclick="AddCart({{$products->id}})" data-text="Add To Cart" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> Thêm Vào Giỏi Hàng</a>
										</div>									
									</div><!-- /.row -->
								</div><!-- /.quantity-container -->
							</div><!-- /.product-info -->
						</div><!-- /.col-sm-7 -->
					</div><!-- /.row -->
                </div>
				<!-- ============================================== UPSELL PRODUCTS ============================================== -->
                <!-- ============================================== UPSELL PRODUCTS : END ============================================== -->			
			</div><!-- /.col -->
			
			<div class="clearfix"></div>
			
		</div><!-- /.row -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
        <div id="brands-carousel" class="logo-slider wow fadeInUp">

                <div class="logo-slider-inner">	
                    <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                        <div class="item m-t-15">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand1.png" src="assets\images\blank.gif" alt="">
                            </a>	
                        </div><!--/.item-->

                        <div class="item m-t-10">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand2.png" src="assets\images\blank.gif" alt="">
                            </a>	
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand3.png" src="assets\images\blank.gif" alt="">
                            </a>	
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand4.png" src="assets\images\blank.gif" alt="">
                            </a>	
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand5.png" src="assets\images\blank.gif" alt="">
                            </a>	
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand6.png" src="assets\images\blank.gif" alt="">
                            </a>	
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand2.png" src="assets\images\blank.gif" alt="">
                            </a>	
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand4.png" src="assets\images\blank.gif" alt="">
                            </a>	
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand1.png" src="assets\images\blank.gif" alt="">
                            </a>	
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand5.png" src="assets\images\blank.gif" alt="">
                            </a>	
                        </div><!--/.item-->
                    </div><!-- /.owl-carousel #logo-slider -->
                </div><!-- /.logo-slider-inner -->
            
        </div><!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
    </div>
</div><!-- /.body-content -->
@stop
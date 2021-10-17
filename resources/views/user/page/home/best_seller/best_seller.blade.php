<div class="best-deal wow fadeInUp outer-bottom-xs">
    <h3 class="section-title">Phụ kiện điện tử</h3>
    <div class="sidebar-widget-body outer-top-xs">
        <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
            @foreach($phu_kien->chunk(2) as $chunk)
                <div class="item">
                    <div class="products best-product">
                        @foreach($chunk as $key => $product)
                                <div class="product">
                                    <div class="product-micro">
                                        <div class="row product-micro-row">
                                            <div class="col col-xs-5">
                                                <div class="product-image">
                                                    <div class="image"><a
                                                            href="{{route('shopping.viewProduct', $product->id)}}"> <img
                                                                src="{{asset('public/images/'. $product->image)}}"
                                                                alt=""> </a></div>
                                                    <!-- /.image -->

                                                </div>
                                                <!-- /.product-image -->
                                            </div>
                                            <!-- /.col -->
                                            <div class="col2 col-xs-7">
                                                <div class="product-info">
                                                    <h3 class="name"><a
                                                            href="{{route('shopping.viewProduct', $product->id)}}">{{ $product->name }}</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="product-price"><span class="price">{{ number_format($product->price - $product->discount,'0',',','.') }} VNĐ</span>
                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.product-micro-row -->
                                    </div>
                                    <!-- /.product-micro -->

                                </div>

                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- /.sidebar-widget-body -->
</div>
<!-- /.sidebar-widget -->

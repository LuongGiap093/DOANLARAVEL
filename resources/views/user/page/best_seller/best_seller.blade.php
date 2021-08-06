<div class="best-deal wow fadeInUp outer-bottom-xs">
    <h3 class="section-title">Phụ kiện điện tử</h3>
    <div class="sidebar-widget-body outer-top-xs">
        <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
            <?php
            $count = 0;
            $count_2 = 0;
            ?>
            @for($i=0;$i<10;$i++)
                <div class="item">
                    <div class="products best-product">
                        @foreach($best_seller as $key => $product)
                            @if($product->id > $count)
                                <div class="product">
                                    <div class="product-micro">
                                        <div class="row product-micro-row">
                                            <div class="col col-xs-5">
                                                <div class="product-image">
                                                    <div class="image"><a
                                                            href="{{route('shopping.viewProduct', $product->id)}}"> <img
                                                                src="{{asset('images/'. $product->image)}}"
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
                                                    <div class="product-price"><span class="price">{{ number_format($product->price - $product->discount) }} VNĐ</span>
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
                                <?php
                                $count = $product->id;
                                ?>
                                @break
                            @endif
                        @endforeach
                        @foreach($best_seller_2 as $key => $product)
                            @if($product->id > $count_2)
                                <div class="product">
                                    <div class="product-micro">
                                        <div class="row product-micro-row">
                                            <div class="col col-xs-5">
                                                <div class="product-image">
                                                    <div class="image"><a
                                                            href="{{route('shopping.viewProduct', $product->id)}}"> <img
                                                                src="{{asset('images/'. $product->image)}}"
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
                                                    <div class="product-price"><span class="price"> {{ number_format($product->price - $product->discount) }} VNĐ </span>
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
                                <?php
                                $count_2 = $product->id;
                                ?>
                                @break
                            @endif
                        @endforeach
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <!-- /.sidebar-widget-body -->
</div>
<!-- /.sidebar-widget -->

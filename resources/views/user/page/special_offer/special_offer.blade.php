<div class="sidebar-widget outer-bottom-small wow fadeInUp">
    <h3 class="section-title">Đề nghị đặc biệt</h3>
    <div class="sidebar-widget-body outer-top-xs">
        <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
            <?php
            $count = 0;
            ?>
            @foreach($categoryss as $cate)
                <div class="item">
                    <div class="products special-product">
                        @foreach($special_offer as $key => $product)
                            @if($product->idcat==$cate->category_id)
                                <div class="product" style="margin-bottom: 20px;">
                                    <div class="product-micro">
                                        <div class="row product-micro-row">
                                            <div class="col col-xs-5">
                                                <div class="product-image">
                                                    <div class="image"><a
                                                            href="{{route('shopping.viewProduct', $product->id)}}"> <img
                                                                src="{!!asset('images/'. $product->image)!!}" alt="">
                                                        </a></div>
                                                    <!-- /.image -->

                                                </div>
                                                <!-- /.product-image -->
                                            </div>
                                            <!-- /.col -->
                                            <div class="col col-xs-7">
                                                <div class="product-info" style="padding: 0px 15px 0px 0px;">
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
                                $count++;
                                ?>
                            @endif

                            @if($count==5)
                                @break
                            @endif
                        @endforeach
                        <?php
                        $count = 0;
                        ?>
                    </div>
                </div>
            @endforeach
            {{--            <div class="item">--}}
            {{--                <div class="products special-product">--}}
            {{--                    <div class="product">--}}
            {{--                        <div class="product-micro">--}}
            {{--                            <div class="row product-micro-row">--}}
            {{--                                <div class="col col-xs-5">--}}
            {{--                                    <div class="product-image">--}}
            {{--                                        <div class="image"><a href="#"> <img src="assets\images\products\p27.jpg"--}}
            {{--                                                                             alt=""> </a></div>--}}
            {{--                                        <!-- /.image -->--}}

            {{--                                    </div>--}}
            {{--                                    <!-- /.product-image -->--}}
            {{--                                </div>--}}
            {{--                                <!-- /.col -->--}}
            {{--                                <div class="col col-xs-7">--}}
            {{--                                    <div class="product-info">--}}
            {{--                                        <h3 class="name"><a href="#">Floral Print Shirt</a></h3>--}}
            {{--                                        <div class="rating rateit-small"></div>--}}
            {{--                                        <div class="product-price"><span class="price"> $450.99 </span></div>--}}
            {{--                                        <!-- /.product-price -->--}}

            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <!-- /.col -->--}}
            {{--                            </div>--}}
            {{--                            <!-- /.product-micro-row -->--}}
            {{--                        </div>--}}
            {{--                        <!-- /.product-micro -->--}}

            {{--                    </div>--}}
            {{--                    <div class="product">--}}
            {{--                        <div class="product-micro">--}}
            {{--                            <div class="row product-micro-row">--}}
            {{--                                <div class="col col-xs-5">--}}
            {{--                                    <div class="product-image">--}}
            {{--                                        <div class="image"><a href="#"> <img src="assets\images\products\p26.jpg"--}}
            {{--                                                                             alt=""> </a></div>--}}
            {{--                                        <!-- /.image -->--}}

            {{--                                    </div>--}}
            {{--                                    <!-- /.product-image -->--}}
            {{--                                </div>--}}
            {{--                                <!-- /.col -->--}}
            {{--                                <div class="col col-xs-7">--}}
            {{--                                    <div class="product-info">--}}
            {{--                                        <h3 class="name"><a href="#">Floral Print Shirt</a></h3>--}}
            {{--                                        <div class="rating rateit-small"></div>--}}
            {{--                                        <div class="product-price"><span class="price"> $450.99 </span></div>--}}
            {{--                                        <!-- /.product-price -->--}}

            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <!-- /.col -->--}}
            {{--                            </div>--}}
            {{--                            <!-- /.product-micro-row -->--}}
            {{--                        </div>--}}
            {{--                        <!-- /.product-micro -->--}}

            {{--                    </div>--}}
            {{--                    <div class="product">--}}
            {{--                        <div class="product-micro">--}}
            {{--                            <div class="row product-micro-row">--}}
            {{--                                <div class="col col-xs-5">--}}
            {{--                                    <div class="product-image">--}}
            {{--                                        <div class="image"><a href="#"> <img src="assets\images\products\p25.jpg"--}}
            {{--                                                                             alt=""> </a></div>--}}
            {{--                                        <!-- /.image -->--}}

            {{--                                    </div>--}}
            {{--                                    <!-- /.product-image -->--}}
            {{--                                </div>--}}
            {{--                                <!-- /.col -->--}}
            {{--                                <div class="col col-xs-7">--}}
            {{--                                    <div class="product-info">--}}
            {{--                                        <h3 class="name"><a href="#">Floral Print Shirt</a></h3>--}}
            {{--                                        <div class="rating rateit-small"></div>--}}
            {{--                                        <div class="product-price"><span class="price"> $450.99 </span></div>--}}
            {{--                                        <!-- /.product-price -->--}}

            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <!-- /.col -->--}}
            {{--                            </div>--}}
            {{--                            <!-- /.product-micro-row -->--}}
            {{--                        </div>--}}
            {{--                        <!-- /.product-micro -->--}}

            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--            <div class="item">--}}
            {{--                <div class="products special-product">--}}
            {{--                    <div class="product">--}}
            {{--                        <div class="product-micro">--}}
            {{--                            <div class="row product-micro-row">--}}
            {{--                                <div class="col col-xs-5">--}}
            {{--                                    <div class="product-image">--}}
            {{--                                        <div class="image"><a href="#"> <img src="assets\images\products\p24.jpg"--}}
            {{--                                                                             alt=""> </a></div>--}}
            {{--                                        <!-- /.image -->--}}

            {{--                                    </div>--}}
            {{--                                    <!-- /.product-image -->--}}
            {{--                                </div>--}}
            {{--                                <!-- /.col -->--}}
            {{--                                <div class="col col-xs-7">--}}
            {{--                                    <div class="product-info">--}}
            {{--                                        <h3 class="name"><a href="#">Floral Print Shirt</a></h3>--}}
            {{--                                        <div class="rating rateit-small"></div>--}}
            {{--                                        <div class="product-price"><span class="price"> $450.99 </span></div>--}}
            {{--                                        <!-- /.product-price -->--}}

            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <!-- /.col -->--}}
            {{--                            </div>--}}
            {{--                            <!-- /.product-micro-row -->--}}
            {{--                        </div>--}}
            {{--                        <!-- /.product-micro -->--}}

            {{--                    </div>--}}
            {{--                    <div class="product">--}}
            {{--                        <div class="product-micro">--}}
            {{--                            <div class="row product-micro-row">--}}
            {{--                                <div class="col col-xs-5">--}}
            {{--                                    <div class="product-image">--}}
            {{--                                        <div class="image"><a href="#"> <img src="assets\images\products\p23.jpg"--}}
            {{--                                                                             alt=""> </a></div>--}}
            {{--                                        <!-- /.image -->--}}

            {{--                                    </div>--}}
            {{--                                    <!-- /.product-image -->--}}
            {{--                                </div>--}}
            {{--                                <!-- /.col -->--}}
            {{--                                <div class="col col-xs-7">--}}
            {{--                                    <div class="product-info">--}}
            {{--                                        <h3 class="name"><a href="#">Floral Print Shirt</a></h3>--}}
            {{--                                        <div class="rating rateit-small"></div>--}}
            {{--                                        <div class="product-price"><span class="price"> $450.99 </span></div>--}}
            {{--                                        <!-- /.product-price -->--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <!-- /.col -->--}}
            {{--                            </div>--}}
            {{--                            <!-- /.product-micro-row -->--}}
            {{--                        </div>--}}
            {{--                        <!-- /.product-micro -->--}}

            {{--                    </div>--}}
            {{--                    <div class="product">--}}
            {{--                        <div class="product-micro">--}}
            {{--                            <div class="row product-micro-row">--}}
            {{--                                <div class="col col-xs-5">--}}
            {{--                                    <div class="product-image">--}}
            {{--                                        <div class="image"><a href="#"> <img src="assets\images\products\p22.jpg"--}}
            {{--                                                                             alt=""> </a></div>--}}
            {{--                                        <!-- /.image -->--}}

            {{--                                    </div>--}}
            {{--                                    <!-- /.product-image -->--}}
            {{--                                </div>--}}
            {{--                                <!-- /.col -->--}}
            {{--                                <div class="col col-xs-7">--}}
            {{--                                    <div class="product-info">--}}
            {{--                                        <h3 class="name"><a href="#">Floral Print Shirt</a></h3>--}}
            {{--                                        <div class="rating rateit-small"></div>--}}
            {{--                                        <div class="product-price"><span class="price"> $450.99 </span></div>--}}
            {{--                                        <!-- /.product-price -->--}}

            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <!-- /.col -->--}}
            {{--                            </div>--}}
            {{--                            <!-- /.product-micro-row -->--}}
            {{--                        </div>--}}
            {{--                        <!-- /.product-micro -->--}}

            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
    </div>
    <!-- /.sidebar-widget-body -->
</div>
<!-- /.sidebar-widget -->

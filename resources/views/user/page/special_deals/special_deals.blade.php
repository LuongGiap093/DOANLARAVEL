<div class="sidebar-widget outer-bottom-small wow fadeInUp">
    <h3 class="section-title">ưu đãi đặc biệt</h3>
    <div class="sidebar-widget-body outer-top-xs">
        <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
            <?php
            $count=0;
            ?>
            @for($i=0;$i<=5;$i++)
                <div class="item">
                    <div class="products special-product">
                        @foreach($products as $key => $product)
                            @if($product->discount>0)
                        <div class="product">
                            <div class="product-micro">
                                <div class="row product-micro-row">
                                    <div class="col col-xs-5">
                                        <div class="product-image">
                                            <div class="image"><a href="{{route('shopping.viewProduct', $product->id)}}"> <img
                                                        src="{{asset('images/'. $product->image)}}" alt=""> </a></div>
                                            <!-- /.image -->

                                        </div>
                                        <!-- /.product-image -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col col-xs-7">
                                        <div class="product-info" style="padding: 0px 15px 0px 0px;">
                                            <h3 class="name"><a href="{{route('shopping.viewProduct', $product->id)}}">{{ $product->name }}</a></h3>
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
                            @if($count==3)
                                @break
                                @endif
                        @endforeach
                    </div>
                </div>
                    <?php
                    $count=0;
                    ?>
            @endfor
        </div>
    </div>
    <!-- /.sidebar-widget-body -->
</div>
<!-- /.sidebar-widget -->

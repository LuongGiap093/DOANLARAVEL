<div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
    <h3 class="section-title">ưu đãi khủng</h3>
    <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
        @foreach($products as $product)
            @if((($product->discount*100)/$product->price) >= 20 )
                <div class="item">
                    <div class="products">
                        <div class="hot-deal-wrapper">
                            <div class="image">
                                <a href="{{route('shopping.viewProduct', $product->id)}}">
                                    <img src="{!!asset('images/'. $product->image)!!}" alt="">
                                </a>
                            </div>
                            <div class="sale-offer-tag"><span>Đến<br>
                  {{ number_format(($product->discount*100)/$product->price) }}%</span></div>
                            <div class="timing-wrapper">
                                <div class="box-wrapper">
                                    <div class="date box"><span class="key">120</span> <span class="value">NGÀY</span>
                                    </div>
                                </div>
                                <div class="box-wrapper">
                                    <div class="hour box"><span class="key">20</span> <span class="value">GIỜ</span>
                                    </div>
                                </div>
                                <div class="box-wrapper">
                                    <div class="minutes box"><span class="key">36</span> <span class="value">PHÚT</span>
                                    </div>
                                </div>
                                <div class="box-wrapper hidden-md">
                                    <div class="seconds box"><span class="key">60</span> <span class="value">GIÂY</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.hot-deal-wrapper -->

                        <div class="product-info text-left m-t-20">
                            <h3 class="name"><a href="detail.html">{{ $product->name }}</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price">
                                <span class="price-before-discount"> {{ number_format($product->price) }} VNĐ</span>
                            </div>
                            <div class="product-price"><span
                                    class="price">{{ number_format($product->price - $product->discount) }} VNĐ</span>
                            </div>
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->

                        <div class="cart clearfix animate-effect">
                            <div class="action">
                                <div class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"><i
                                            class="fa fa-shopping-cart"></i></button>
                                    <button class="btn btn-primary cart-btn" data-toggle="tooltip" type="button"
                                            title="Add Cart" onclick="AddCart({{$product->id}})" href="javascript:"
                                            data-text="Add To Cart" data-text="Add To Cart">
                                    <!--<a onclick="AddCart({{$product->id}})" href="javascript:" data-text="Add To Cart" data-text="Add To Cart">Thêm vào giỏ hàng</a>-->
                                        Thêm vào giỏ hàng
                                    </button>
                                </div>
                            </div>
                            <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                    </div>
                </div>
            @else
            @endif
        @endforeach
    </div>
    <!-- /.sidebar-widget -->
</div>


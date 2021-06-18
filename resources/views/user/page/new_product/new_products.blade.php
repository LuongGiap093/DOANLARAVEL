<div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
    <div class="more-info-tab clearfix ">
        <h3 class="new-product-title pull-left">Sản phẩm mới</h3>
        <!-- /.nav-tabs -->
    </div>
    <div class="tab-content outer-top-xs">

        <div class="tab-pane in active" id="all">
            <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                    @foreach($products as $product)
                        <div class="item item-carousel">

                            <div class="products">

                                <div class="product">
                                    <div class="product-image">
                                        <div class="image"> <a href="{{route('shopping.viewProduct', $product->id)}}"><img src="{{asset('images/'. $product->image)}}" alt="" style="height: 201px;"></a> </div>
                                        <!-- /.image -->
                                        <div class="tag new"><span>new</span></div>
                                    </div>
                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{route('shopping.viewProduct', $product->id)}}">{{ $product->name }}</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="product-discount">Giảm giá: {{ number_format(($product->discount*100)/$product->price) }}%</div>
                                        <div class="product-price"> <span class="price"> {{ number_format($product->price - $product->discount) }} VNĐ</span> <span class="price-before-discount">{{ number_format($product->price) }}</span>
                                        </div>
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
                                                <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="#" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
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
                @endforeach
                <!-- /.item -->
                </div>
                <!-- /.home-owl-carousel -->
            </div>
            <!-- /.product-slider -->
        </div>
        <!-- /.tab-pane -->
    </div>
    <!-- /.tab-content -->
</div>
<!-- /.scroll-tabs -->

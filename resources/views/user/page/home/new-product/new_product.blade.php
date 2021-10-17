<!-- ============================================== SCROLL TABS ============================================== -->
<div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
    <div class="more-info-tab clearfix ">
        <h3 class="new-product-title pull-left">Sản phẩm mới</h3>
        <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">

            @foreach($categorys as $key => $cate)
                @if($key==0)
                    <li class="active"><a data-transition-type="backSlide" href="#{{$cate->category_id}}"
                                          data-toggle="tab">{{$cate->category_name}}</a></li>
                @else
                    <li><a data-transition-type="backSlide" href="#{{$cate->category_id}}"
                           data-toggle="tab">{{$cate->category_name}}</a></li>
                @endif
            @endforeach
        </ul>
        <!-- /.nav-tabs -->
    </div>
    <div class="tab-content outer-top-xs" style="margin-bottom: 20px;">
        <!-- /.tab-pane -->
        @foreach($categorys as $key => $cate)
            @if($key==0)
                <div class="tab-pane in active" id="{{$cate->category_id}}">
                    <div class="product-slider">
                        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                            @foreach($products as $product)
                                @if($product->idcat==$cate->category_id)
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image" style="border: 1px solid #e0e4f6;padding: 10px;">
                                                    <div class="image"><a
                                                            href="{{route('product.viewProduct', $product->id)}}"><img
                                                                src="{{asset('public/images/'. $product->image)}}"
                                                                alt=""></a></div>
                                                    <!-- /.image -->

                                                    @if(($product->discount*100)/$product->price <=0)
                                                        <div class="tag new"><span>new</span></div>
                                                    @elseif(($product->discount*100)/$product->price > 20)
                                                        <div class="tag hot"><span>Hot</span></div>
                                                    @else
                                                        <div class="tag sale"><span>Sale</span></div>
                                                    @endif
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                            href="{{route('shopping.viewProduct', $product->id)}}">{{ $product->name }}</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="product-price">Giảm:
                                                        <span class="price-before-discount">{{ number_format($product->price,'0',',','.') }}đ</span>
                                                        <span style="position: absolute;">-{{ number_format(($product->discount*100)/$product->price) }}%</span>
                                                    </div>
                                                    <div class="product-price"><span class="price"> {{ number_format($product->price - $product->discount,'0',',','.') }} VNĐ </span>
                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button onclick="AddCart({{$product->id}})"
                                                                        href="javascript:"
                                                                        data-text="Add To Cart" data-toggle="tooltip"
                                                                        class="btn btn-primary icon"
                                                                        type="button" title="giỏ hàng"><i
                                                                        class="fa fa-shopping-cart"></i></button>
                                                                <button class="btn btn-primary cart-btn" type="button">
                                                                    Add
                                                                    to cart
                                                                </button>
                                                            </li>
                                                            <li class="lnk wishlist"><a onclick="AddWishlist({{$product->id}})" data-toggle="tooltip"
                                                                                        class="add-to-cart"
                                                                                        href="javascript:"
                                                                                        title="Yêu thích">
                                                                    <i class="icon fa fa-heart"></i> </a>
                                                            </li>
                                                            <li class="lnk"><a data-toggle="tooltip" class="add-to-cart"
                                                                               href="detail.html" title="So sánh"> <i
                                                                        class="fa fa-signal" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
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
                            @endif
                        @endforeach
                        <!-- /.item -->
                        </div>
                        <!-- /.home-owl-carousel -->
                    </div>
                    <!-- /.product-slider -->
                </div>
                <!-- /.tab-pane -->
            @else
                <div class="tab-pane" id="{{$cate->category_id}}">
                    <div class="product-slider">
                        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                            @foreach($products as $product)
                                @if($product->idcat==$cate->category_id)
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image" style="border: 1px solid #e0e4f6;padding: 10px;">
                                                    <div class="image"><a
                                                            href="{{route('product.viewProduct', $product->id)}}"><img
                                                                src="{{asset('public/images/'. $product->image)}}"
                                                                alt=""></a></div>
                                                    <!-- /.image -->

                                                    @if(($product->discount*100)/$product->price <=0)
                                                        <div class="tag new"><span>new</span></div>
                                                    @elseif(($product->discount*100)/$product->price > 20)
                                                        <div class="tag hot"><span>Hot</span></div>
                                                    @else
                                                        <div class="tag sale"><span>Sale</span></div>
                                                    @endif
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                            href="{{route('shopping.viewProduct', $product->id)}}">{{ $product->name }}</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="product-price">Giảm:
                                                        <span class="price-before-discount">{{ number_format($product->price,'0',',','.') }}đ</span>
                                                        <span style="position: absolute;">-{{ number_format(($product->discount*100)/$product->price) }}%</span>
                                                    </div>
                                                    <div class="product-price"><span class="price"> {{ number_format($product->price - $product->discount,'0',',','.') }} VNĐ </span>
                                                    </div>
                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button onclick="AddCart({{$product->id}})"
                                                                        href="javascript:"
                                                                        data-text="Add To Cart" data-toggle="tooltip"
                                                                        class="btn btn-primary icon"
                                                                        type="button" title="giỏ hàng"><i
                                                                        class="fa fa-shopping-cart"></i></button>
                                                                <button class="btn btn-primary cart-btn" type="button">
                                                                    Add
                                                                    to cart
                                                                </button>
                                                            </li>
                                                            <li class="lnk wishlist"><a data-toggle="tooltip"
                                                                                        class="add-to-cart"
                                                                                        href="{{ url('add/to-wishlist/'.$product->id) }}"
                                                                                        title="Yêu thích">
                                                                    <i class="icon fa fa-heart"></i> </a></li>
                                                            <li class="lnk"><a data-toggle="tooltip" class="add-to-cart"
                                                                               href="detail.html" title="So sánh"> <i
                                                                        class="fa fa-signal" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
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
                                @endif
                            @endforeach
                        </div>
                        <!-- /.home-owl-carousel -->
                    </div>
                    <!-- /.product-slider -->
                </div>
                <!-- /.tab-pane -->
            @endif
        @endforeach
    </div>
    <!-- /.tab-content -->
</div>
<!-- /.scroll-tabs -->
<!-- ============================================== SCROLL TABS : END ============================================== -->
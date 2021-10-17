<section class="section featured-product wow fadeInUp">
    <h3 class="section-title">Điện thoại nổi bật</h3>
    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
        @foreach($featured_phone as $product)
            <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image" style="border: 1px solid #e0e4f6;padding: 10px;">
                            <div class="image"><a href="{{route('shopping.viewProduct', $product->id)}}"><img
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
                            <div class="product-price">
                                Giảm: <span
                                    class="price-before-discount"> {{ number_format($product->price) }}đ</span>
                                <span style="position: absolute;">-{{ number_format(($product->discount*100)/$product->price) }}%</span>
                            </div>
                            <div class="description"></div>
                            <div class="product-price">
                                    <span
                                        class="price"> {{ number_format($product->price - $product->discount) }} VNĐ</span>

                            </div>
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                            <div class="action">
                                <ul class="list-unstyled">
                                    <li class="add-cart-button btn-group">
                                        <button data-toggle="tooltip" class="btn btn-primary icon"
                                                type="button" title="Add Cart">
                                            <a onclick="AddCart({{$product->id}})" href="javascript:"
                                               data-text="Add To Cart" data-text="Add To Cart"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                        </button>
                                    </li>
                                    <li class="lnk wishlist"><a data-toggle="tooltip" class="add-to-cart"
                                                                href="{{ url('add/to-wishlist/'.$product->id) }}"
                                                                title="Wishlist"> <i
                                                class="icon fa fa-heart"></i> </a></li>
                                    <li class="lnk"><a data-toggle="tooltip" class="add-to-cart" href="#"
                                                       title="Compare"> <i class="fa fa-signal"
                                                                           aria-hidden="true"></i> </a></li>
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
</section>
<!-- /.section -->

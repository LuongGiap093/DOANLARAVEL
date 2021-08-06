<section class="section featured-product wow fadeInUp">
    <h3 class="section-title">Laptop nổi bật nhất</h3>
    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
        @foreach($products as $product)
            @if(($product->discount*100)/$product->price <=0)
            @if($product->idcat==2)
                <div class="item item-carousel">
                    <div class="products">
                        <div class="product">
                            <div class="product-image">
                                <div class="image"><a href="{{route('shopping.viewProduct', $product->id)}}"><img
                                            src="{{asset('images/'. $product->image)}}"
                                            alt=""></a></div>
                                <!-- /.image -->

                                <div class="tag new"><span>new</span></div>
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
        @endif
        @elseif(($product->discount*100)/$product->price > 10)
                @if($product->idcat==2)
                    <div class="item item-carousel">
                        <div class="products">
                            <div class="product">
                                <div class="product-image">
                                    <div class="image"><a href="{{route('shopping.viewProduct', $product->id)}}"><img
                                                src="{{asset('images/'. $product->image)}}"
                                                alt=""></a></div>
                                    <!-- /.image -->

                                    <div class="tag hot"><span>hot</span></div>
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
            @endif
        @else
                @if($product->idcat==2)
                    <div class="item item-carousel">
                        <div class="products">
                            <div class="product">
                                <div class="product-image">
                                    <div class="image"><a href="{{route('shopping.viewProduct', $product->id)}}"><img
                                                src="{{asset('images/'. $product->image)}}"
                                                alt=""></a></div>
                                    <!-- /.image -->

                                    <div class="tag sale"><span>Sale</span></div>
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
            @endif
        @endif
    @endforeach
    <!-- /.item -->
    </div>
    <!-- /.home-owl-carousel -->
</section>
<!-- /.section -->

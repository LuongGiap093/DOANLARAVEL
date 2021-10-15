<!-- Popular Products -->
<div class="fr-pop-wrap">

    <h3 class="component-ttl"><span>Sản phẩm nổi bật</span></h3>

    <ul class="fr-pop-tabs sections-show">
        <li><a data-frpoptab-num="0" data-frpoptab="#frpoptab-tab-0" href="#" class="active">Tất cả danh mục</a></li>
        @foreach($categorys as $key => $category)
            <li><a data-frpoptab-num="{{$category->category_position}}"
                   data-frpoptab="#frpoptab-tab-{{$category->category_position}}"
                   href="#">{{$category->category_name}}</a></li>
        @endforeach
    </ul>

    <div class="fr-pop-tab-cont">
        <p data-frpoptab-num="0" class="fr-pop-tab-mob active" data-frpoptab="#frpoptab-tab-0">Tất cả danh mục</p>
        <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-0">

            <ul class="slides">
                @foreach($products as $product)
                    <li class="prod-i">
                        <div class="prod-i-top">
                            <a href="{{route('shopping.viewProduct', $product->id)}}?chi-tiet-san-pham/{{$product->name}}" class="prod-i-img">
                                <!-- NO SPACE -->
                                <img style="width: 230px;" src="{{asset('public/images/'. $product->image)}}"
                                     alt="Aspernatur excepturi rem">
                                <!-- NO SPACE -->
                            </a>
                            <p class="prod-i-info">
                                <a href="{{ url('add/to-wishlist/'.$product->id) }}" class="prod-i-favorites"><span>Yêu thích</span><i
                                        class="fa fa-heart"></i></a>
                                <a href="#" class="qview-btn prod-i-qview"><span>Xem nhanh</span><i
                                        class="fa fa-search"></i></a>
                                <a class="prod-i-compare" href="#"><span>So sánh</span><i
                                        class="fa fa-bar-chart"></i></a>
                            </p>
                            <p class="prod-i-addwrap">
                                <a onclick="AddCart({{$product->id}})" href="javascript:"
                                   data-text="Add To Cart" class="prod-i-add">giỏ hàng</a>
                            </p>
                            <div class="prod-sticker">
                                <p class="prod-sticker-1">New</p>
                                @if(($product->discount*100)/$product->price >0 && ($product->discount*100)/$product->price <20)
                                    <br>
                                    <p class="prod-sticker-3">
                                        -{{ number_format(($product->discount*100)/$product->price) }}%</p><p
                                        class="prod-sticker-4 countdown" data-date="29 Jan 2022, 0:30:00"></p>
                                @elseif(($product->discount*100)/$product->price >=20)
                                    <br>
                                    <p class="prod-sticker-2">HOT</p>
                                    <br>
                                    <p class="prod-sticker-3">
                                        -{{ number_format(($product->discount*100)/$product->price) }}%</p><p
                                        class="prod-sticker-4 countdown" data-date="29 Jan 2022, 0:30:00"></p>
                                @endif
                            </div>
                        </div>
                        <h3>
                            <a href="{{route('shopping.viewProduct', $product->id)}}?chi-tiet-san-pham/{{$product->name}}">{{$product->name}}</a>
                        </h3>
                        <p class="prod-i-price">
                            <b>{{ number_format($product->price - $product->discount,'0',',','.')}} VNĐ</b>
                        </p>
                        <div class="prod-i-skuwrapcolor">
                            <ul class="prod-i-skucolor">
                                <li class="bx_active"><img src="{!! asset('public\user\assets\img/color/red.jpg') !!}"
                                                           alt="Red"></li>
                                <li><img src="{!! asset('public\user\assets\img/color/blue.jpg') !!}" alt="Blue"></li>
                            </ul>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

        @foreach($categorys as $key => $category)
            <p data-frpoptab-num="{{$category->category_position}}" class="fr-pop-tab-mob"
               data-frpoptab="#frpoptab-tab-{{$category->category_position}}">{{$category->category_name}}</p>
            <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-{{$category->category_position}}">

                <ul class="slides">
                    @foreach($products as $product)
                        @if($product->idcat==$category->category_id)
                            <li class="prod-i">
                                <div class="prod-i-top">
                                    <a href="{{route('shopping.viewProduct', $product->id)}}?chi-tiet-san-pham/{{$product->name}}" class="prod-i-img">
                                        <!-- NO SPACE --><img style="width: 230px;" src="{{asset('public/images/'. $product->image)}}"
                                                              alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                    <p class="prod-i-info">
                                        <a href="{{ url('add/to-wishlist/'.$product->id) }}" class="prod-i-favorites"><span>Yêu thích</span><i
                                                class="fa fa-heart"></i></a>
                                        <a href="#" class="prod-i-qview"><span>Xem nhanh</span><i
                                                class="fa fa-search"></i></a>
                                        <a class="prod-i-compare" href="#"><span>So sánh</span><i
                                                class="fa fa-bar-chart"></i></a>
                                    </p>
                                    <p class="prod-i-addwrap">
                                        <a onclick="AddCart({{$product->id}})" href="javascript:"
                                           data-text="Add To Cart" class="prod-i-add">Giỏ hàng</a>
                                    </p>
                                    <div class="prod-sticker">
                                        <p class="prod-sticker-1">Mới</p>
                                        @if(($product->discount*100)/$product->price >0 && ($product->discount*100)/$product->price <20)
                                            <br>
                                            <p class="prod-sticker-3">
                                                -{{ number_format(($product->discount*100)/$product->price) }}%</p><p
                                                class="prod-sticker-4 countdown" data-date="29 Jan 2022, 0:30:00"></p>
                                        @elseif(($product->discount*100)/$product->price >=20)
                                            <br>
                                            <p class="prod-sticker-2">HOT</p>
                                            <br>
                                            <p class="prod-sticker-3">
                                                -{{ number_format(($product->discount*100)/$product->price) }}%</p><p
                                                class="prod-sticker-4 countdown" data-date="29 Jan 2022, 0:30:00"></p>
                                        @endif
                                    </div>
                                </div>
                                <h3>
                                    <a href="{{route('shopping.viewProduct', $product->id)}}?chi-tiet-san-pham/{{$product->name}}">{{$product->name}}</a>
                                </h3>
                                <p class="prod-i-price">
                                    <b>{{ number_format($product->price - $product->discount,'0',',','.')}} VNĐ</b>
                                </p>
                                <div class="prod-i-skuwrapcolor">
                                    <ul class="prod-i-skucolor">
                                        <li class="bx_active"><img
                                                src="{!! asset('public\user\assets\img/color/red.jpg') !!}" alt="Red">
                                        </li>
                                        <li><img src="{!! asset('public\user\assets\img/color/blue.jpg') !!}"
                                                 alt="Blue"></li>
                                    </ul>
                                </div>
                            </li>
                        @endif
                    @endforeach

                </ul>
            </div>
        @endforeach
    </div><!-- .fr-pop-tab-cont -->


</div><!-- .fr-pop-wrap -->

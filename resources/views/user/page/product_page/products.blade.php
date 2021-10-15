<div class="clearfix filters-container m-t-10">
    <div class="row">
        <div class="col col-sm-6 col-md-2">
            <div class="filter-tabs">
                <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                    <li class="active"> <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>Grid</a> </li>
                    <li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-th-list"></i>List</a></li>
                </ul>
            </div>
            <!-- /.filter-tabs -->
        </div>
        <!-- /.col -->
        <div class="col col-sm-12 col-md-10">
            <div class="col col-sm-3 col-md-6 no-padding" style="padding: 0px; text-align: right;">
                <div class="lbl-cnt"> <span class="lbl">Sắp xếp</span>
                    <div class="fld inline">
                        <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                            <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> Sắp xếp mặc định <span class="caret"></span> </button>
                            <ul role="menu" class="dropdown-menu">
                                <li role="presentation"><a href="#">Mức độ phổ biến</a></li>
                                <li role="presentation"><a href="#">Giá thấp đến cao</a></li>
                                <li role="presentation"><a href="#">Giá cao đến thấp</a></li>
                                <li role="presentation"><a href="#">Ký tự từ A > Z</a></li>
                                <li role="presentation"><a href="#">Ký tự từ Z > A</a></li>
                                <li role="presentation"><a href="#">Sắp xếp mặc định</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.fld -->
                </div>
                <!-- /.lbl-cnt -->
            </div>
            <!-- /.col -->
            <div class="col col-sm-3 col-md-6 no-padding" style="padding: 0px;text-align: right;">
                <div class="lbl-cnt"> <span class="lbl">Show</span>
                    <div class="fld inline">
                        <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                            <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> 1 <span class="caret"></span> </button>
                            <ul role="menu" class="dropdown-menu">
                                <li role="presentation"><a href="#">1</a></li>
                                <li role="presentation"><a href="#">2</a></li>
                                <li role="presentation"><a href="#">3</a></li>
                                <li role="presentation"><a href="#">4</a></li>
                                <li role="presentation"><a href="#">5</a></li>
                                <li role="presentation"><a href="#">6</a></li>
                                <li role="presentation"><a href="#">7</a></li>
                                <li role="presentation"><a href="#">8</a></li>
                                <li role="presentation"><a href="#">9</a></li>
                                <li role="presentation"><a href="#">10</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.fld -->
                </div>
                <!-- /.lbl-cnt -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
<div class="search-result-container ">
    <div id="myTabContent" class="tab-content category-list">
        <div class="tab-pane active " id="grid-container">
            <div class="category-product">
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-sm-6 col-md-4 wow fadeInUp">
                        <div class="products">
                            <div class="product">
                                <div class="product-image" style="border: 1px solid #e0e4f6; padding: 10px;height: 249.16px;">
                                    <div class="image"> <a href="{{route('shopping.viewProduct', $product->id)}}"><img src="{!!asset('public/images/'. $product->image)!!}" alt=""></a> </div>
                                    <!-- /.image -->

                                    <div class="tag new"><span>new</span></div>
                                </div>
                                <!-- /.product-image -->

                                <div class="product-info text-left" style="height: 88px">
                                    <h3 class="name"><a href="{{route('shopping.viewProduct', $product->id)}}">{{ $product->name }}</a></h3>
                                    <div class="rating rateit-small"></div>
                                    <div class="description"></div>
                                    <div class="product-price"> <span class="price"> {{ number_format($product->price-$product->discount,'0',',','.')}} VNĐ </span> <span class="price-before-discount">{{ number_format($product->price,'0',',','.')}} VNĐ</span> </div>
                                    <!-- /.product-price -->

                                </div>
                                <!-- /.product-info -->
                                <div class="cart clearfix animate-effect">
                                    <div class="action">
                                        <ul class="list-unstyled">
                                            <li class="add-cart-button btn-group">
                                                <button onclick="AddCart({{$product->id}})" href="javascript:" class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                            </li>
                                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
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
                    @endforeach
                </div>
                <!-- /.row -->
            </div>
            <!-- /.category-product -->

        </div>
        <!-- /.tab-pane -->

        <div class="tab-pane " id="list-container">
            <div class="category-product">
                @foreach($products as $product)
                <div class="category-product-inner wow fadeInUp">
                    <div class="products">
                        <div class="product-list product">
                            <div class="row product-list-row">
                                <div class="col col-sm-4 col-lg-4">
                                    <div class="product-image">
                                        <div class="image"> <img src="{!!asset('public/images/'. $product->image)!!}" alt=""> </div>
                                    </div>
                                    <!-- /.product-image -->
                                </div>
                                <!-- /.col -->
                                <div class="col col-sm-8 col-lg-8">
                                    <div class="product-info">
                                        <h3 class="name"><a href="{{route('shopping.viewProduct', $product->id)}}">{{ $product->name }}</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="product-price"> <span class="price"> {{ number_format($product->price-$product->discount,'0',',','.')}} VNĐ </span> <span class="price-before-discount">{{ number_format($product->price,'0',',','.')}} VNĐ</span> </div>
                                        <!-- /.product-price -->
                                        <div class="description m-t-10">Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget, lacinia id purus. Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget.</div>
                                        <div class="cart clearfix animate-effect">
                                            <div class="action">
                                                <ul class="list-unstyled">
                                                    <li class="add-cart-button btn-group">
                                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                        <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                    </li>
                                                    <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                    <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                                                </ul>
                                            </div>
                                            <!-- /.action -->
                                        </div>
                                        <!-- /.cart -->

                                    </div>
                                    <!-- /.product-info -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.product-list-row -->
                            <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-list -->
                    </div>
                    <!-- /.products -->
                </div>
                <!-- /.category-product-inner -->
                @endforeach
            </div>
            <!-- /.category-product -->
        </div>
        <!-- /.tab-pane #list-container -->
    </div>
    <!-- /.tab-content -->
    <div class="clearfix filters-container">
        <div class="text-right">


                    {!! $products->links() !!}

                <!-- /.list-inline -->

            <!-- /.pagination-container --> </div>
        <!-- /.text-right -->

    </div>
    <!-- /.filters-container -->

</div>
<!-- /.search-result-container -->

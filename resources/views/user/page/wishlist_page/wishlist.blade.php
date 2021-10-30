@extends('user.theme.layout')
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="{{route('shopping.home')}}">Trang chủ</a></li>
                    <li class='active'>Danh sách yêu thích</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->
    <div class="body-content">
        <div class="container">
            <div class="my-wishlist-page">
                <div class="row">
                    <div class="col-md-12 my-wishlist">
                        <div class="table-responsive">
                            <table class="table">
                                @if(Session::has('wishlist'))
                                    <div class="alert alert-danger">
                                        {{Session::get('wishlist')}}
                                    </div>
                                @endif
                                <thead>
                                <tr>
                                    <th colspan="4" class="heading-title">SẢN PHẨM YÊU THÍCH CỦA TÔI </th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($wishlists as $row )
                                <tr style="border-top: 1px solid #ddd;">
                                    <td class="col-md-2"><img src="{{asset('public/images/'. $row->product->image)}}" alt="imga"></td>
                                    <td class="col-md-7">
                                        <div class="product-name"><a href="{{route('product.viewProduct', $row->product->id)}}">{{$row->product->name}}</a></div>
                                        <?php
                                        $avg_star=round(DB::table('comment')->where('product_id',$row->product->id)->avg('star'));
                                        ?>
                                        @for($i=1;$i<=$avg_star;$i++)
                                            <span class="fa fa-star checked"></span>
                                        @endfor
                                        @for($i=1;$i<=5-$avg_star;$i++)
                                            <span class="fa fa-star"></span>
                                        @endfor
                                            <span class="review">( có {{DB::table('comment')->where('product_id',$row->product->id)->count()}} nhận xét)</span>
                                        <div class="price">
                                            {{number_format($row->product->price,'0',',','.')}} VNĐ
                                            <span>{{number_format($row->product->discount,'0',',','.')}}đ</span>
                                        </div>
                                    </td>
                                    <td class="col-md-2">
                                        <a onclick="AddCart({{$row->product->id}})" href="javascript:" data-text="Add To Cart" data-text="Add To Cart" class="btn-upper btn btn-primary">Thêm vào giỏ hàng</a>
                                    </td>

                                    <td class="col-md-1 close-btn">
                                        <a href="{{ url('danh-sach-yeu-thich/xoa/'.$row->id) }}" class="btn-wishlist"><i class="fa fa-times" style="color: white;"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>			</div><!-- /.row -->
            </div><!-- /.sigin-in-->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
            <div id="brands-carousel" class="logo-slider wow fadeInUp">

                <div class="logo-slider-inner">
                    <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                        <div class="item m-t-15">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand1.png" src="assets\images\blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item m-t-10">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand2.png" src="assets\images\blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand3.png" src="assets\images\blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand4.png" src="assets\images\blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand5.png" src="assets\images\blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand6.png" src="assets\images\blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand2.png" src="assets\images\blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand4.png" src="assets\images\blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand1.png" src="assets\images\blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand5.png" src="assets\images\blank.gif" alt="">
                            </a>
                        </div><!--/.item-->
                    </div><!-- /.owl-carousel #logo-slider -->
                </div><!-- /.logo-slider-inner -->

            </div><!-- /.logo-slider -->
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
    </div><!-- /.body-content -->
@stop

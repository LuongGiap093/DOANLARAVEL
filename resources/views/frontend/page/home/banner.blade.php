<!-- Banners -->
<div class="banners-wrap" style="margin-top: 30px;">
    <div class="banners-list">
        @foreach($collection as $key => $collect)
            @if($collect->collection_position==1)
                <div class="banner-i style_11">
                    <span class="banner-i-bg"
                          style="background: url({{asset('public/images/'. $collect->collection_image)}});border: 1px solid #e0e4f6;"></span>
                    <div class="banner-i-cont">
                        <p class="banner-i-subttl">{{$collect->collection_title}}</p>
                        <h3 class="banner-i-ttl">{{$collect->collection_name}}</h3>
                        <p class="banner-i-link"><a href="section.html">Xem ngay</a></p>
                    </div>
                </div>
            @elseif($collect->collection_position==2)
                <div class="banner-i style_22">
                    <span class="banner-i-bg" style="border: 1px solid #e0e4f6;background: url({{asset('public/images/'. $collect->collection_image)}});"></span>
                    <div class="banner-i-cont">
                        <h3 class="banner-i-ttl">{{$collect->collection_title}}</h3>
                        <p class="banner-i-subttl">{{$collect->collection_name}}</p>
                        <p class="banner-i-link"><a href="section.html">Xem nhiều hơn</a></p>
                    </div>
                </div>
            @elseif($collect->collection_position==3)
                <div class="banner-i style_21">
                    <span class="banner-i-bg" style="border: 1px solid #e0e4f6;background: url({{asset('public/images/'. $collect->collection_image)}});"></span>
                    <div class="banner-i-cont">
                        <h3 class="banner-i-ttl">{{$collect->collection_name}}</h3>
                        <p class="banner-i-link"><a href="section.html">Đi tới ngay</a></p>
                    </div>
                </div>
            @elseif($collect->collection_position==4)
                <div class="banner-i style_21">
                    <span class="banner-i-bg" style="border: 1px solid #e0e4f6;background: url({{asset('public/images/'. $collect->collection_image)}});"></span>
                    <div class="banner-i-cont">
                        <h3 class="banner-i-ttl">{{$collect->collection_name}}</h3>
                        <p class="banner-i-link"><a href="section.html">Xem thêm</a></p>
                    </div>
                </div>
            @elseif($collect->collection_position==5)
                <div class="banner-i style_22">
                    <span class="banner-i-bg" style="border: 1px solid #e0e4f6;background: url({{asset('public/images/'. $collect->collection_image)}});"></span>
                    <div class="banner-i-cont">
                        <p class="banner-i-subttl">{{$collect->collection_title}}</p>
                        <h3 class="banner-i-ttl">{{$collect->collection_name}}</h3>
                        <p class="banner-i-link"><a href="section.html">Mua sắm ngay</a></p>
                    </div>
                </div>
            @elseif($collect->collection_position==6)
                <div class="banner-i style_12">
                    <span class="banner-i-bg" style="border: 1px solid #e0e4f6;background: url({{asset('public/images/'. $collect->collection_image)}});"></span>
                    <div class="banner-i-cont">
                        <p class="banner-i-subttl">{{$collect->collection_title}}</p>
                        <h3 class="banner-i-ttl">{{$collect->collection_name}}</h3>
                        <p>A great selection of dresses, <br>blouses and women's suits</p>
                        <p class="banner-i-link"><a href="section.html">Xem thêm</a></p>
                    </div>
                </div>
            @else
            @endif
        @endforeach
    </div>
</div>


<!-- Special offer -->
<div class="discounts-wrap">
    <h3 class="component-ttl"><span>Đề nghị đặc biệt</span></h3>
    <div class="flexslider discounts-list">
        <ul class="slides">
            @foreach($products as $product)
            <li class="discounts-i">
                <a href="{{route('shopping.viewProduct', $product->id)}}?chi-tiet-san-pham/{{$product->name}}" class="discounts-i-img">
                    <img src="{{asset('public/images/'. $product->image)}}" alt="Dicta doloremque">
                </a>
                <h3 class="discounts-i-ttl">
                    <a href="{{route('shopping.viewProduct', $product->id)}}?chi-tiet-san-pham/{{$product->name}}">{{$product->name}}</a>
                </h3>
                <p class="discounts-i-price">
                    <b>{{ number_format($product->price - $product->discount,'0',',','.')}}₫</b> <del>{{number_format($product->price,'0',',','.')}}₫</del>
                </p>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="discounts-info" style="text-align: center;margin: 20px;">
        <p>Ưu đãi đặc biệt!<br>Thời gian có hạn</p>
        <a href="{{route('san-pham')}}" style="width: 100%;">Mua sắm ngay bây giờ</a>
    </div>
</div>

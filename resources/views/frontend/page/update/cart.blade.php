<div class="h-cart">
    <a href="{{route('gio-hang')}}">
        <i class="fa fa-shopping-cart"></i>
        <span class="shop-menu-ttl">Giỏ hàng</span>
        @if(Session::has('Cart') != null)
            (<b> {{Session::get('Cart')->totalQuanty}}</b>)
        @else
            (<b>0</b>)
        @endif
    </a>
</div>

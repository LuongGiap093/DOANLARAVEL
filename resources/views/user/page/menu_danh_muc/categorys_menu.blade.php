<div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i>Danh mục sản phẩm</div>
    <nav class="yamm megamenu-horizontal">
        <ul class="nav">
            @foreach($categorys as $category)
                <li> <a href="{{route('shopping.loaisp', $category->id)}}"><i class="icon fa fa-futbol-o"></i>{{$category->name}}</a>
                    <!-- /.dropdown-menu --> </li>
        @endforeach
        <!-- /.menu-item -->

        </ul>
        <!-- /.nav -->
    </nav>
    <!-- /.megamenu-horizontal -->
</div>

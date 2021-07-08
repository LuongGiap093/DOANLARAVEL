<div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i>Danh mục sản phẩm</div>
    <nav class="yamm megamenu-horizontal">
        <ul class="nav">
            @foreach($categoryss as $category)
                {{--                <li class="dropdown menu-item"><a href="{{route('shopping.loaisp', $category->id)}}"><i--}}
                {{--                            class="icon fa fa-futbol-o"></i>{{$category->name}}</a>--}}
                {{--                    <!-- /.dropdown-menu -->--}}
                <li class="dropdown menu-item">
                    <a href="{{route('shopping.loaisp', $category->id)}}" class="dropdown-toggle"
                       data-toggle="dropdown">
                        <i class="{{$category->icon}}" aria-hidden="true"></i>
                        {{$category->name}}
                    </a>
                    <ul class="dropdown-menu mega-menu" style="padding: 0px; min-width: 178%;">
                        <li class="yamm-content">
                            <div class="row">
                                @foreach($brands as $brand)
                                    @if($brand->category_id==$category->id)
                                    <div class="col-sm-12 col-md-3">
                                        <ul class="links list-unstyled">
                                            <li><a href="{{route('shopping.show-brand',$brand->brand_id)}}">{{$brand->brand_name}}</a></li>
                                        </ul>
                                    </div>
                                @endif
                            @endforeach
                                    <div class="col-sm-12 col-md-3">
                                        <ul class="links list-unstyled">
                                            <li><a href="{{route('shopping.show-category',$category->id)}}">View all</a></li>
                                        </ul>
                                    </div>
                            {{--                                    <div class="dropdown-banner-holder"> <a href="#"><img alt="" src="{{asset('frontend\assets\images\banners\banner-side.png')}}"></a> </div>--}}
                            <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- /.yamm-content -->
                    </ul>
                </li>
        @endforeach
        <!-- /.menu-item -->

        </ul>
        <!-- /.nav -->
    </nav>
    <!-- /.megamenu-horizontal -->
</div>

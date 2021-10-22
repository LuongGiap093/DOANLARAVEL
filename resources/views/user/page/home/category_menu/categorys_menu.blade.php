<div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i>Danh mục sản phẩm</div>
    <nav class="yamm megamenu-horizontal">
        <ul class="nav">
            @foreach($cate->unique('category_id') as $category)
                <li class="dropdown menu-item">
                    <a href="{{route('shopping.loaisp', $category->category_id)}}" class="dropdown-toggle"
                       data-toggle="dropdown">
                        @if($category->category_icon!=null)
                            <i class="{{$category->category_icon}}" aria-hidden="true"></i>
                        @else
                            <i class="icon fa fa-paw" aria-hidden="true"></i>
                        @endif
                        {{$category->category_name}}
                    </a>
                    <ul class="dropdown-menu mega-menu" style="padding: 0px; min-width: 178%;">
                        <li class="yamm-content">
                            <div class="row">
                                @foreach($cate->unique('brand_id')->where('idcat',$category->category_id) as $brand)
                                        <div class="col-sm-12 col-md-3">
                                            <ul class="links list-unstyled">
                                                <li>
                                                    <a href="{{route('product.show-brand',$brand->brand_id)}}">{{$brand->brand_name}}</a>
                                                </li>
                                            </ul>
                                        </div>
                                @endforeach
                                <div class="col-sm-12 col-md-3">
                                    <ul class="links list-unstyled">
                                        <li><a href="{{route('product.show-category',$category->category_id)}}?{{$category->category_name}}">Xem tất cả</a></li>
                                    </ul>
                                </div>
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

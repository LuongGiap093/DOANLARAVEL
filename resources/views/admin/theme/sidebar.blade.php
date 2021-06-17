{{--<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background: #2a353a;">--}}
{{--  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">--}}
{{--      <div class="sidebar-brand-icon rotate-n-15">--}}
{{--          <i class="fas fa-laugh-wink"></i>--}}
{{--      </div>--}}
{{--      <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>--}}
{{--  </a>--}}
{{--  <hr class="sidebar-divider my-0">--}}
{{--  <hr class="sidebar-divider my-0">--}}
{{--  <li class="nav-item">--}}
{{--      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"--}}
{{--          aria-expanded="true" aria-controls="collapseTwo">--}}
{{--          <i class="fas fa-fw fa-folder"></i>--}}
{{--          <span>TÀI KHOẢN</span>--}}
{{--      </a>--}}
{{--      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">--}}
{{--          <div class="bg-white py-2 collapse-inner rounded">--}}
{{--              <h6 class="collapse-header">Quản lý tài khoản:</h6>--}}
{{--              <a class="collapse-item" href="{{route('user.index')}}">Tài khoản của tôi</a>--}}

{{--          </div>--}}
{{--      </div>--}}
{{--  </li>--}}
{{--  <li class="nav-item">--}}
{{--      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"--}}
{{--          aria-expanded="true" aria-controls="collapseUtilities">--}}
{{--          <i class="fas fa-fw fa-folder"></i>--}}
{{--          <span>SẢN PHẨM</span>--}}
{{--      </a>--}}
{{--      <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"--}}
{{--          data-parent="#accordionSidebar">--}}
{{--          <div class="bg-white py-2 collapse-inner rounded">--}}
{{--              <h6 class="collapse-header">Quản lý sản phẩm:</h6>--}}
{{--              <a class="collapse-item" href="{{route('category.index')}}">Loại sản phẩm</a>--}}
{{--              <a class="collapse-item" href="{{route('product.index')}}">Tất cả sản phẩm</a>--}}
{{--          </div>--}}
{{--      </div>--}}
{{--  </li>--}}
{{--  <!-- <li class="nav-item">--}}
{{--      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"--}}
{{--          aria-expanded="true" aria-controls="collapsePages">--}}
{{--          <i class="fas fa-fw fa-folder"></i>--}}
{{--          <span>LOẠI SẢN PHẨM</span>--}}
{{--      </a>--}}
{{--      <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">--}}
{{--          <div class="bg-white py-2 collapse-inner rounded">--}}
{{--              <h6 class="collapse-header">Quản lý loại sản phẩm:</h6>--}}
{{--              <a class="collapse-item" href="{{route('category.index')}}">Loại sản phẩm</a>--}}
{{--          </div>--}}
{{--      </div>--}}
{{--  </li> -->--}}
{{--  <!-- <li class="nav-item">--}}
{{--      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages1"--}}
{{--          aria-expanded="true" aria-controls="collapsePages1">--}}
{{--          <i class="fas fa-fw fa-folder"></i>--}}
{{--          <span>QL NHÂN SỰ</span>--}}
{{--      </a>--}}
{{--      <div id="collapsePages1" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">--}}
{{--          <div class="bg-white py-2 collapse-inner rounded">--}}
{{--              <h6 class="collapse-header">Quản lý nhân viên:</h6>--}}
{{--              <a class="collapse-item" href="#">Danh mục nhân sự</a>--}}
{{--              <a class="collapse-item" href="#">Danh sách nhân sự</a>--}}


{{--          </div>--}}
{{--      </div>--}}
{{--  </li> -->--}}
{{--  <li class="nav-item">--}}
{{--      <a class="nav-link" href="{{route('customer.index')}}">--}}
{{--          <i class="fas fa-fw fa-folder"></i>--}}
{{--          <span>KHÁCH HÀNG</span></a>--}}
{{--  </li>--}}
{{--  <li class="nav-item">--}}
{{--      <a class="nav-link" href="{{route('order.index')}}">--}}
{{--          <i class="fas fa-fw fa-folder"></i>--}}
{{--          <span>HÓA ĐƠN</span></a>--}}
{{--  </li>--}}
{{--    <li class="nav-item">--}}
{{--        <a class="nav-link" href="{{route('slider.index')}}">--}}
{{--            <i class="fas fa-fw fa-folder"></i>--}}
{{--            <span>Slider</span></a>--}}
{{--    </li>--}}
{{--  <hr class="sidebar-divider d-none d-md-block">--}}
{{--  <div class="text-center d-none d-md-inline">--}}
{{--      <button class="rounded-circle border-0" id="sidebarToggle"></button>--}}
{{--  </div>--}}
{{--</ul>--}}
{{--///asdasdasd--}}
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ion-md-speedometer"></i>
                        <span>  Dashboard  </span>
                        <span class="badge badge-info badge-pill float-right"> 3 </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="index.html">Dashboard 1</a></li>
                        <li><a href="dashboard-2.html">Dashboard 2</a></li>
                        <li><a href="dashboard-3.html">Dashboard 3</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{route('slider.index')}}" class="waves-effect">
                        <i class="ion-md-basket"></i>
                        <span> Slider </span>
{{--                        <span class="menu-arrow"></span>--}}
                    </a>
                </li>
                <li>
                    <a href="{{route('category.index')}}" class="waves-effect">
                        <i class="ion-ios-apps"></i>
                        <span> Category </span>
                        {{--                        <span class="menu-arrow"></span>--}}
                    </a>
                </li>
                <li>
                    <a href="{{route('product.index')}}" class="waves-effect">
                        <i class="ion-ios-apps"></i>
                        <span> Product </span>
                        {{--                        <span class="menu-arrow"></span>--}}
                    </a>
                </li>
                <li>
                    <a href="{{route('order.index')}}" class="waves-effect">
                        <i class="ion-ios-apps"></i>
                        <span> Order </span>
                        {{--                        <span class="menu-arrow"></span>--}}
                    </a>
                </li>
                <li>
                    <a href="{{route('customer.index')}}" class="waves-effect">
                        <i class="ion-ios-apps"></i>
                        <span> Customer </span>
                        {{--                        <span class="menu-arrow"></span>--}}
                    </a>
                </li>
                <li>
                    <a href="{{route('user.index')}}" class="waves-effect">
                        <i class="ion-ios-apps"></i>
                        <span> User </span>
                        {{--                        <span class="menu-arrow"></span>--}}
                    </a>
                </li>
                <li>
                    <a href="{{route('blog.index')}}" class="waves-effect">
                        <i class="ion-ios-apps"></i>
                        <span>Blog </span>
                        {{--                        <span class="menu-arrow"></span>--}}
                    </a>
                </li>
                <li>
                    <a href="{{route('faq.index')}}" class="waves-effect">
                        <i class="ion-ios-apps"></i>
                        <span>Faq</span>
                        {{--                        <span class="menu-arrow"></span>--}}
                    </a>
                </li>
                <li>
                    <a href="{{route('contact.index')}}" class="waves-effect">
                        <i class="ion-ios-apps"></i>
                        <span>Contact</span>
                        {{--                        <span class="menu-arrow"></span>--}}
                    </a>
                </li>



                {{--                <li>--}}
{{--                    <a href="javascript: void(0);" class="waves-effect">--}}
{{--                        <i class="ion-ios-apps"></i>--}}
{{--                        <span> Components </span>--}}
{{--                        <span class="menu-arrow"></span>--}}
{{--                    </a>--}}
{{--                    <ul class="nav-second-level" aria-expanded="false">--}}
{{--                        <li><a href="components-grid.html">Grid</a></li>--}}
{{--                        <li><a href="components-portlets.html">Portlets</a></li>--}}
{{--                        <li><a href="components-widgets.html">Widgets</a></li>--}}
{{--                        <li><a href="components-nestable-list.html">Nesteble</a></li>--}}
{{--                        <li><a href="components-calendar.html">Calendar</a></li>--}}
{{--                        <li><a href="components-range-sliders.html">Range Slider</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
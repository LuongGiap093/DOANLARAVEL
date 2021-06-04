<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background: #2a353a;">
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
  </a>
  <hr class="sidebar-divider my-0">
  <hr class="sidebar-divider my-0">
  <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
          aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-folder"></i>
          <span>TÀI KHOẢN</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Quản lý tài khoản:</h6>
              <a class="collapse-item" href="{{route('user.index')}}">Tài khoản của tôi</a>

          </div>
      </div>
  </li>
  <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
          aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-folder"></i>
          <span>SẢN PHẨM</span>
      </a>
      <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
          data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Quản lý sản phẩm:</h6>
              <a class="collapse-item" href="{{route('category.index')}}">Loại sản phẩm</a>
              <a class="collapse-item" href="{{route('product.index')}}">Tất cả sản phẩm</a>
          </div>
      </div>
  </li>
  <!-- <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
          aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>LOẠI SẢN PHẨM</span>
      </a>
      <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Quản lý loại sản phẩm:</h6>
              <a class="collapse-item" href="{{route('category.index')}}">Loại sản phẩm</a>
          </div>
      </div>
  </li> -->
  <!-- <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages1"
          aria-expanded="true" aria-controls="collapsePages1">
          <i class="fas fa-fw fa-folder"></i>
          <span>QL NHÂN SỰ</span>
      </a>
      <div id="collapsePages1" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Quản lý nhân viên:</h6>
              <a class="collapse-item" href="#">Danh mục nhân sự</a>
              <a class="collapse-item" href="#">Danh sách nhân sự</a>


          </div>
      </div>
  </li> -->
  <li class="nav-item">
      <a class="nav-link" href="{{route('customer.index')}}">
          <i class="fas fa-fw fa-folder"></i>
          <span>KHÁCH HÀNG</span></a>
  </li>
  <li class="nav-item">
      <a class="nav-link" href="{{route('order.index')}}">
          <i class="fas fa-fw fa-folder"></i>
          <span>HÓA ĐƠN</span></a>
  </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('slider.index')}}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Slider</span></a>
    </li>
  <hr class="sidebar-divider d-none d-md-block">
  <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>

<div class="sidebar-widget product-tag wow fadeInUp">
    <h3 class="section-title">Thẻ sản phẩm</h3>
    <div class="sidebar-widget-body outer-top-xs">

        <div class="tag-list">
            @foreach($product_tag as $product)
                <a class="item" title="Phone" href="#">{{ $product->name }}</a>
            @endforeach
        </div>
        <!-- /.tag-list -->
    </div>
    <!-- /.sidebar-widget-body -->
</div>
<!-- /.sidebar-widget -->

@extends('admin.product.layout')
@section('content')
    <form action="{{route('product.update', $product->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="idcat">Danh mục:</label>
            <select name="idcat" class="form-control">
                @foreach ($categorys as $cate)
                    @if($cate->category_id==$product->idcat)
                    <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                    @endif
                @endforeach
                    @foreach ($categorys as $cate)
                        @if($cate->category_id!=$product->idcat)
                            <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                        @endif
                    @endforeach

            </select>
        </div>
        <div class="form-group">
            <label for="brand_id">Thương hiệu:</label>
            <select name="brand_id" class="form-control">
                    @foreach ($brands as $bra)
                        @if($bra->brand_id==$product->brand_id)
                            <option value="{{$bra->brand_id}}">{{$bra->brand_name}}</option>
                        @endif
                    @endforeach
                    @foreach ($brands as $bra)
                        @if($bra->brand_id!=$product->brand_id)
                            <option value="{{$bra->brand_id}}">{{$bra->brand_name}}</option>
                        @endif
                    @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="name">Tên sản phẩm:</label>
            <input type="text" class="form-control" name="name" value="{{$product->name}}">
        </div>
        <div class="form-group">
            <label for="image">Hình ảnh sản phẩm:</label>
            <input type="text" class="form-control" name="image" value="{{$product->image}}">
        </div>
        <div class="form-group">
            <label for="price">Đơn giá:</label>
            <input type="text" class="form-control" name="price" value="{{$product->price}}">
        </div>
        <div class="form-group">
            <label for="discount">Giảm giá:</label>
            <input type="text" class="form-control" name="discount" value="{{$product->discount}}">
        </div>
        <div class="form-group">
            <label for="content">Nội dung:</label>
            <textarea class="form-control" name="product_content" id="contents">{{$product->content}}</textarea>
        </div>

        <div class="form-group">
            <label for="describe">Mô tả:</label>
            <textarea class="form-control" name="describe" id="describe">{{$product->describe}}</textarea>
        </div>
        <div class="form-group">
            <label for="status">Tình trạng sản phẩm:</label>
            <select name="status" class="form-control" id="status">
                @if($product->status==1)
                    <option value='1'>Sản phẩm mới</option>
                    <option value='0'>Hết hàng</option>
                    <option value='2'>Sản phẩm nổi bậc</option>
                    <option value='3'>Sản phẩm Big sale</option>
                @elseif($product->status==2)
                    <option value='2'>Sản phẩm nổi bậc</option>
                    <option value='1'>Sản phẩm mới</option>
                    <option value='0'>Hết hàng</option>
                    <option value='3'>Sản phẩm Big sale</option>
                @elseif($product->status==3)
                    <option value='3'>Sản phẩm Big sale</option>
                    <option value='1'>Sản phẩm mới</option>
                    <option value='0'>Hết hàng</option>
                    <option value='2'>Sản phẩm nổi bậc</option>
                @else
                    <option value='0'>Hết hàng</option>
                    <option value='1'>Sản phẩm mới</option>
                    <option value='2'>Sản phẩm nổi bậc</option>
                    <option value='3'>Sản phẩm Big sale</option>
                @endif
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Trạng thái: </label>
            <select name="status_product" class="form-control input-sm m-bot15">
                <option value="1">Hiển Thị</option>
                <option value="0">Ẩn</option>
            </select>
        </div>
        <button type="submit" name="btn_editor's" class="btn btn-primary">Thực Hiện</button>
    </form>
    </div>
@stop

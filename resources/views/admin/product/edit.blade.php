@extends('admin.product.layout')
@section('content')
    <form action="{{route('product.update', $product->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="idcat">Danh mục:</label>
            <select name="idcat" class="form-control">
                @foreach ($categorys as $cate)
                    @if($cate->id==$product->idcat)
                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                    @endif
                @endforeach
                    @foreach ($categorys as $cate)
                        @if($cate->id!=$product->idcat)
                            <option value="{{$cate->id}}">{{$cate->name}}</option>
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
            <label for="status">Trạng thái:</label>
            <select name="status" class="form-control" id="status">
                @if($product->status==1)
                    <option value="1">true</option>
                    <option value="0">flase</option>
                @else
                    <option value="0">flase</option>
                    <option value="1">true</option>
                @endif
            </select>
        </div>

        <button type="submit" name="btn_editor's" class="btn btn-primary">Thực Hiện</button>
    </form>
    </div>
@stop

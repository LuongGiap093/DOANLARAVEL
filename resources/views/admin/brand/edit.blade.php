@extends('admin.brand.layout')
@section('content')
    <form action="{{route('brand.update', $brand->brand_id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="brand_name">Name:</label>
            <input type="text" class="form-control" name="brand_name" value="{{$brand->brand_name}}">
        </div>

        <div class="form-group">
            <label for="brand_desc">Content:</label>
            <textarea class="form-control" id="contents" name="brand_desc">{{$brand->brand_desc}}</textarea>
            <script>CKEDITOR.replace('brand_desc');</script>
        </div>
        <div class="form-group">
            <label for="brand_status">Status:</label>
            <select name="brand_status" class="form-control" id="brand_status">
                @if($brand->brand_status==1)
                    <option value="1">true</option>
                    <option value="0">flase</option>
                @else
                    <option value="0">flase</option>
                    <option value="1">true</option>
                @endif
            </select>
        </div>
        <button type="submit" name="btn_editbrand" class="btn btn-primary">Thực Hiện</button>
    </form>
    </div>
@stop

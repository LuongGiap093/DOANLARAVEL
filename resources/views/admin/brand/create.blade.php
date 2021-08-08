@extends('admin.brand.layout')
@section('content')
<form action="{{ route('brand.store') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="category_id">Danh Mục:</label>
        <select name="category_id" class="form-control">
            <option value=''>---Vui lòng chọn danh mục---</option>
            >
            @foreach ($categorys as $key =>$cat)
                <option value="{{$cat->category_id}}">{{($key+1).'. '.$cat->category_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
     <label for="brand_name">Name:</label>
     <input type="text" class="form-control" name="brand_name">
   </div>
  <div class="form-group">
    <label for="brand_desc">Content:</label>
    <textarea class="form-control" id="contents" name="brand_desc"></textarea>
      <script>CKEDITOR.replace('brand_desc');</script>
  </div>
    <div class="form-group">
        <label for="brand_status">Status:</label>
        <select name="brand_status" class="form-control" id="brand_status">
                <option value="1">true</option>
                <option value="0">flase</option>
        </select>
    </div>
   <button type="submit" name="btn_addcategory"class="btn btn-primary">Thực Hiện</button>
 </form>
 </div>
 @stop


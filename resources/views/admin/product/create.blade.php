@extends('admin.product.layout')
@section('content')
<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
     <label for="idcat">Category:</label>
        <select name="idcat" class="form-control">
            <option value=''>---Vui lòng chọn danh mục sản phẩm---</option>>
            @foreach ($categorys as $key =>$cat)
            <option value="{{$cat->id}}">{{($key+1).'. '.$cat->name}}</option>
            @endforeach
        </select>
   </div>
    <div class="form-group">
     <label for="name">Name:</label>
     <input type="text" class="form-control" name="name">
   </div>
   <div class="form-group">
     <label for="image">Image:</label>
     <input type="file" class="form-control"name="image" value=""/>
   </div>
    <!--<div class="form-group" >
        <label>Choose Images</label>
        <input type="file" class="form-control" name="images[]" id="images" multiple >
    </div>-->
   <div class="form-group">
    <label for="price">Price:</label>
    <input type="text" class="form-control"name="price">
  </div>
  <div class="form-group">
    <label for="discount">Discount:</label>
    <input type="text" class="form-control"name="discount">
  </div>
  <div class="form-group">
    <label for="content">Content:</label>
    <textarea class="form-control" name="content" id="contents"></textarea>
  </div>
    <div class="form-group">
        <label for="describe">Describe:</label>
        <textarea class="form-control" name="describe" id="describe"></textarea>
    </div>
    <div class="form-group">
        <label for="status">Status:</label>
        <select name="status" class="form-control" id="product_status">
            <option value='1'>True</option>
            <option value='0'>False</option>
        </select>
    </div>

   <button class="btn btn-primary" name="btn_product" type="submit">Thực Hiện</button>
 </form>
 </div>
 @stop

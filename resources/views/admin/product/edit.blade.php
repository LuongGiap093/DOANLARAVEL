@extends('admin.product.layout')
@section('content')
<form action="{{route('product.update', $product->id)}}" method="POST">
    @csrf
    @method('PUT')
   <div class="form-group">
     <label for="idcat">Category:</label>
        <select name="idcat" class="form-control">
            @foreach ($categorys as $cate)
            <option value="{{$cate->id}}">{{$cate->name}}</option>
                
            @endforeach
           
        </select>
   </div>
    <div class="form-group">
     <label for="name">Name:</label>
     <input type="text" class="form-control" name="name" value="{{$product->name}}">
   </div>
   <div class="form-group">
     <label for="image">Image:</label>
     <input type="text" class="form-control"name="image" value="{{$product->image}}">
   </div>
   <div class="form-group">
    <label for="price">Price:</label>
    <input type="text" class="form-control"name="price" value="{{$product->price}}">
  </div>
  <div class="form-group">
    <label for="discount">Discount:</label>
    <input type="text" class="form-control"name="discount" value="{{$product->discount}}">
  </div>
  <div class="form-group">
    <label for="content">Content:</label>
    <textarea class="form-control" name="content" id="contents">{{$product->content}}</textarea>
    
  </div>

   <button type="submit" name="btn_editproduct"class="btn btn-primary">Thực Hiện</button>
 </form>
 </div>
 @stop

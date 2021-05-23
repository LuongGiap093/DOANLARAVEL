@extends('admin.order.layout')
@section('content')
<form action="{{route('order.update', $order->order_id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="name">Link:</label>
    <input type="text" class="form-control" name="order_link" value="{{$order->order_link}}">
    </div>
   <button type="submit" name="btn_editorder"class="btn btn-primary">Thực Hiện</button>
 </form>
 </div>
 @stop
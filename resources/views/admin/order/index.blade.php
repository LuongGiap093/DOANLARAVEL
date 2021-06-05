@extends('admin.order.layout')
@section('content')
<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
  <thead>
    <th>Mã Hóa Đơn</th>
    <th>Tên Khách Hàng</th>
    <th>Phương thức thanh toán</th>     
    <th>Edit</th>
    <th>Lock</th>
    <th>Delete</th>
  </thead>
  <tbody>                
    @foreach($orders as $order)  
        <tr>                          
        <td>{{$order->order_id}} </td>
     <td>
     @foreach ($customers as $customer)
     @if($customer->customer_id==$order->customer_id)
         {{$customer->customer_name}}
     @endif
     @endforeach
     </td>
     <td>{{$order->order_payment}} </td>
   
      <td><a href="#" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>  
      <td><a href="" class="btn btn-warning"><i class="fa fa-lock"></i></a></td>
      <td>
        <form action="{{route('order.destroy', $order->order_id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
      
        </form>   
      </td> 
        
        @endforeach
    </tbody>
</table>
     
@stop
  
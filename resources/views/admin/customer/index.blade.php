@extends('admin.customer.layout')
@section('content')
<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
  <thead>
    <th>Tên khách hàng</th>             
    <th>Email</th>             
    <th>Địa chỉ</th>            
    <th>Số điện thoại</th>           
    <th>Ghi chú</th>             
    <th>Edit</th>             
    <th>Lock</th>             
    <th>Delete</th>
  </thead>
  <tbody>                
    @foreach($customers as $customer)   
        <tr>                          
            <td>{{$customer->customer_name}} </td>
            <td>{{$customer->customer_email}} </td>
            <td>{{$customer->customer_address}} </td>
            <td>{{$customer->customer_phone_number}} </td>
            <td>{{$customer->customer_note}} </td>
             <td><a href="{{route('customer.edit', $customer->customer_id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>  
             <td><a href="" class="btn btn-warning"><i class="fa fa-lock"></i></a></td>
             <td>
               <form action="{{route('customer.destroy', $customer->customer_id)}}" method="POST">
               @csrf
               @method('DELETE')
               <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>                    
               </form>   
             </td>             
        </tr>
        
        @endforeach
    </tbody>
</table>

@stop
  
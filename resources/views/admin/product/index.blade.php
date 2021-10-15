@extends('admin.product.layout')
@section('content')
    <div style="padding: 20px;border: 1px solid #eaeaea;">
    <table id="datatable" class="table table-bordered dt-responsive nowrap"
           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
        <th>Hình ảnh</th>
        <th>Tên</th>
        <th>Thư viện ảnh</th>
        <th>Giá</th>
        <th>Giảm giá</th>
        <th>Trạng thái</th>
        <th>Edit</th>
        <th>Lock</th>
        <th>Delete</th>
        </thead>
        <tbody>
        @foreach($products ?? '' as $product)
            <tr>
                <td><img src="{{asset('public/images/'. $product->image)}}" width="40"/></td>
                <td>{{$product->name}} </td>
                <td><a href="{{route('add-gallery', $product->id)}}" class="btn btn-outline-primary"><i class="fa fa-eye"></i></a></td>
                <td>{{$product->price}} </td>
                <td>{{$product->discount}} </td>
                @if($product->status==0)
                    <td>Hết hàng</td>
                @elseif($product->status==1)
                    <td>Mới</td>
                @elseif($product->status==2)
                    <td>Nổi bậc</td>
                @else
                    <td>Big Sale</td>
                @endif
                <td><a href="{{route('product.edit', $product->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                </td>
                <td><a href="" class="btn btn-warning"><i class="fa fa-lock"></i></a></td>
                <td>
                    <form action="{{route('product.destroy', $product->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>

                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@stop

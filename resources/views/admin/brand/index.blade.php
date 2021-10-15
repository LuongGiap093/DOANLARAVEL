@extends('admin.brand.layout')
@section('content')
    <div style="padding: 20px;border: 1px solid #eaeaea;">
        <table id="datatable" class="table table-bordered dt-responsive nowrap"
               style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead>

            <th>Tên thương hiệu</th>
            <th>Hiển thị</th>
            <th>Xem sản phẩm</th>
            <th>Sửa</th>
            <th>Khóa</th>
            <th>Xóa+</th>
            </thead>
            <tbody>
            @foreach($brands ?? '' as $brand)
                <tr>

                    <td>{{$brand->brand_name}} </td>
                    <td>
                        <form method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" autocomplete="on">
                            @if($brand->brand_status==1)
                                <input type="checkbox" style="width: 20px; height: 20px" checked id="myCheck" class="checkBox">
                            @else
                                <input type="checkbox" style="width: 20px; height: 20px" id="myCheck" class="checkBox">
                            @endif
                        </form>
                    </td>
                    <td><a href="{{route('brand.show', $brand->brand_id)}}" class="btn btn-outline-primary"><i class="fa fa-eye"></i></a></td>
                    <td><a href="{{route('brand.edit', $brand->brand_id)}}" class="btn btn-primary"><i
                                class="fa fa-edit"></i></a></td>
                    <td><a href="" class="btn btn-warning"><i class="fa fa-lock"></i></a></td>
                    <td>
                        <form action="{{route('brand.destroy', $brand->brand_id)}}" method="POST">
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

@extends('admin.brand.layout')
@section('content')
<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
  <thead>

    <th>Tên thương hiệu</th>
    <th>Trạng thái</th>
    <th>View product</th>
    <th>Edit</th>
    <th>Lock</th>
    <th>Delete</th>
  </thead>
  <tbody>
  @foreach($brands ?? '' as $brand)
      <tr>

        <td>{{$brand->brand_name}} </td>
          @if($brand->brand_status==1)
              <td>True</td>
          @else
              <td>Flase</td>
          @endif
        <td><a href="#" class="btn btn-outline-primary"><i class="fa fa-eye"></i></a></td>
        <td><a href="{{route('brand.edit', $brand->brand_id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
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
@stop

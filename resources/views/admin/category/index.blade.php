@extends('admin.category.layout')
@section('content')
<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
  <thead style="text-align: center">
  <th style="width: 30px;">STT</th>
    <th>Tên danh mục</th>
    <th>Trạng thái</th>
    <th>View product</th>
    <th>Edit</th>
    <th>Lock</th>
    <th>Delete</th>
  </thead>
  <tbody style="text-align: center">
  @foreach($categorys ?? '' as $category)
      <tr>
          <td>
              <input type="number" min="0" class="form-control" style="width: 60px" value="{{$category->category_position + 1}}">
          </td>
        <td>{{$category->category_name}} </td>
          @if($category->category_status==1)
              <td>True</td>
          @else
              <td>Flase</td>
          @endif
        <td><a href="#" class="btn btn-outline-primary"><i class="fa fa-eye"></i></a></td>
        <td><a href="{{route('category.edit', $category->category_id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
        <td><a href="" class="btn btn-warning"><i class="fa fa-lock"></i></a></td>
        <td>
        <form action="{{route('category.destroy', $category->category_id)}}" method="POST">
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

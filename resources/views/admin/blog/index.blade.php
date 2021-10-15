@extends('admin.blog.layout')
@section('content')
    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
        <th>Hình ảnh</th>
        <th>Tiêu đề </th>
        <th>Người đăng</th>
        <th>Thời gian</th>
        <th>Mô tả</th>
        <th>Option</th>
{{--        <th>Edit</th>--}}
{{--        <th>Lock</th>--}}
{{--        <th>Delete</th>--}}
        </thead>
        <tbody>
        @foreach($blogs as $blog)
            <tr>
                <td width="5%"><img src="{{asset('public/images/'. $blog->image)}}" width="100px" height="70px"/></td>
                <td width="5%">{{$blog->blog_title}} </td>
                <td>{{$blog->blog_author}}</td>
                <td>{{$blog->blog_time}}</td>
                <td>{{$blog->blog_description}}</td>
{{--                <td><a href="#" class="btn btn-outline-primary"><i class="fa fa-eye"></i></a>--}}
{{--                    <a href="{{route('slider.edit', $slider->slider_id)}}" class="btn btn-primary"><i--}}
{{--                                class="fa fa-edit"></i></a>--}}
{{--                    <a href="" class="btn btn-warning"><i class="fa fa-lock"></i></a>--}}
{{--                </td>--}}
{{--                <td><a href="{{route('slider.edit', $slider->slider_id)}}" class="btn btn-primary"><i--}}
{{--                                class="fa fa-edit"></i></a></td>--}}
{{--                <td><a href="" class="btn btn-warning"><i class="fa fa-lock"></i></a></td>--}}
                <td>
                    <form action="{{route('blog.destroy', $blog->blog_id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        <a href="#" class="btn btn-outline-primary"><i class="fa fa-eye"></i></a>
                        <a href="{{route('blog.edit', $blog->blog_id)}}" class="btn btn-primary"><i
                                    class="fa fa-edit"></i></a>
                        <a href="" class="btn btn-warning"><i class="fa fa-lock"></i></a>
                    </form>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
{{----}}
@stop

@extends('admin.slider.layout')
@section('content')
    <table class="table table-hover">
        <thead>
        <th>Hình ảnh</th>
        <th>Tiêu đề nhỏ</th>
        <th>Tiêu đề lớn</th>
        <th>Highlight</th>
        <th>Tiêu đề button</th>
        <th>Mô tả</th>
        <th>View product</th>
        <th>Edit</th>
        <th>Lock</th>
        <th>Delete</th>
        </thead>
        <tbody>
        @foreach($sliders as $slider)
            <tr>
                <td><img src="{{asset('images/'. $slider->image)}}" width="120"/></td>
                <td>{{$slider->slider_small_title}} </td>
                <td>{{$slider->slider_big_title}}</td>
                <td>{{$slider->highlight_text}}</td>
                <td>{{$slider->slider_title_button}}</td>
                <td>{{$slider->slider_description}}</td>
                <td><a href="#" class="btn btn-outline-primary"><i class="fa fa-eye"></i></a></td>
                <td><a href="{{route('slider.edit', $slider->slider_id)}}" class="btn btn-primary"><i
                                class="fa fa-edit"></i></a></td>
                <td><a href="" class="btn btn-warning"><i class="fa fa-lock"></i></a></td>
                <td>
                    <form action="{{route('slider.destroy', $slider->slider_id)}}" method="POST">
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

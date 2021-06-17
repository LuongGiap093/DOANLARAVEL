@extends('admin.faq.layout')
@section('content')
    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
        <th> Số thứ tự </th>
        <th>Tiêu đề </th>

        <th>Mô tả</th>
        <th>Option</th>
{{--        <th>Edit</th>--}}
{{--        <th>Lock</th>--}}
{{--        <th>Delete</th>--}}
        </thead>
        <tbody>
        @foreach($faqs as $faq)
            <tr>
                <td width="5%">{{$faq->faq_serial}} </td>
                <td>{{$faq->faq_title}}</td>
                <td>{{$faq->faq_description}}</td>
{{--                <td><a href="#" class="btn btn-outline-primary"><i class="fa fa-eye"></i></a>--}}
{{--                    <a href="{{route('slider.edit', $slider->slider_id)}}" class="btn btn-primary"><i--}}
{{--                                class="fa fa-edit"></i></a>--}}
{{--                    <a href="" class="btn btn-warning"><i class="fa fa-lock"></i></a>--}}
{{--                </td>--}}
{{--                <td><a href="{{route('slider.edit', $slider->slider_id)}}" class="btn btn-primary"><i--}}
{{--                                class="fa fa-edit"></i></a></td>--}}
{{--                <td><a href="" class="btn btn-warning"><i class="fa fa-lock"></i></a></td>--}}
                <td>
                    <form action="{{route('faq.destroy', $faq->faq_id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        <a href="#" class="btn btn-outline-primary"><i class="fa fa-eye"></i></a>
                        <a href="{{route('faq.edit', $faq->faq_id)}}" class="btn btn-primary"><i
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

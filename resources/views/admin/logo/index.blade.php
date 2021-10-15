@extends('admin.logo.layout')
@section('content')
    <div style="padding: 20px;border: 1px solid #eaeaea;">
        <table id="datatable" class="table table-bordered dt-responsive nowrap"
               style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead>
            <th>Hình ảnh</th>
            <th>Hiển thị</th>
            <th>Khóa</th>
            <th>Sửa</th>
            <th>Xóa</th>
            </thead>
            <tbody>
            @foreach($logos as $logo)
                <tr>
                    <td><img src="{{asset('public/images/'. $logo->logo_image)}}" style="height: 50px;width: 200px;"/>
                    </td>
                    <td style="width: 10%">
                        <form method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" autocomplete="on">
                            <label class="switch">
                                @if($logo->logo_status !=0)
                                    <input type="checkbox" checked id="myCheck" class="checkBox" value="{{$logo->logo_id}}" checked>
                                @else
                                    <input type="checkbox" id="myCheck" class="checkBox" value="{{$logo->logo_id}}">
                                @endif
                                <span class="slider round"></span>
                            </label>
                        </form>
                    </td>
                    <td style="width: 10%"><a href="" class="btn btn-warning"><i class="fa fa-unlock"></i></a></td>
                    <td style="width: 10%">
                        <a href="{{route('logo.edit', $logo->logo_id)}}" class="btn btn-primary"><i
                                class="fa fa-edit"></i></a>
                    </td>
                    <td style="width: 10%">
                        <form action="{{route('logo.destroy', $logo->logo_id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
        {{----}}
    </div>
@stop

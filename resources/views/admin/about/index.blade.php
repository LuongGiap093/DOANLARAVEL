@extends('admin.about.layout')
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            <p>{{ session('success') }}</p>
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            <p>{{ session('error') }}</p>
        </div>
    @endif
    @if($count>0)
    <form action="{{route('about.update', $about->about_id)}}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')


        <div class="form-group">
            <label for="image">Hình ảnh:</label>
            <input type="file" class="form-control" name="image" value=""/>
            <input type="text" class="form-control" name="about_image" value="{{$about->about_image}}" hidden/>
            @error('image')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="about_title">Tiêu đề:</label>
            <input type="text" class="form-control" name="about_title" value="{{$about->about_title}}" required="required">
        </div>
        <div class="form-group">
            <label for="about_description">Nội dung:</label>
            <textarea class="form-control" id="contents"
                      name="about_content">{{$about->about_content}}</textarea>
            <script>CKEDITOR.replace('contents');</script>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Trạng thái:</label>
            <select name="about_status" class="form-control input-sm m-bot15">
                @if($about->about_status==1)
                    <option value="1">Hiển Thị</option>
                    <option value="0">Ẩn</option>
                @else
                    <option value="0">Ẩn</option>
                    <option value="1">Hiển Thị</option>
                @endif
            </select>
        </div>
        <button type="submit" name="btn_editcategory" class="btn btn-primary">Thực Hiện</button>
    </form>
    @else
        <form action="{{route('about.store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="image">Hình ảnh:</label>
                <input type="file" class="form-control" name="image" value=""/>
                @error('image')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="about_title">Tiêu đề:</label>
                <input type="text" class="form-control" name="about_title" value="">
            </div>
            <div class="form-group">
                <label for="about_description">Nội dung:</label>
                <textarea class="form-control" id="contents"
                          name="about_content"></textarea>
                <script>CKEDITOR.replace('contents');</script>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Trạng thái:</label>
                <select name="about_status" class="form-control input-sm m-bot15">
                    <option value="1">Hiển Thị</option>
                    <option value="0">Ẩn</option>
                </select>
            </div>
            <button type="submit" name="btn_editcategory" class="btn btn-primary">Thực Hiện</button>
        </form>
    @endif
@stop

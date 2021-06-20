{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
{{--    <meta name="description" content="">--}}
{{--    <meta name="author" content="">--}}
{{--    <title>SB Admin 2 - Dashboard</title>--}}
{{--    <link href="{!! asset('admin/vendor/fontawesome-free/css/all.min.css') !!}" rel="stylesheet" type="text/css">--}}
{{--    <link--}}
{{--        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"--}}
{{--        rel="stylesheet">--}}
{{--    <link href="{!! asset('admin/css/sb-admin-2.min.css') !!}" rel="stylesheet">--}}
{{--</head>--}}
{{--<body id="page-top">--}}
{{--  <div id="wrapper">--}}
{{--     @include('admin.theme.sidebar')	--}}
{{--      <div id="content-wrapper" class="d-flex flex-column">--}}
{{--        <div id="content">--}}
{{--          @include('admin.theme.nav')	   --}}
{{--         <form action="{{route('user.postadd')}}" method="POST">--}}
{{--           {{ csrf_field() }}--}}
{{--          <div class="form-group">--}}
{{--            <label for="name">Name:</label>--}}
{{--            <input type="text" class="form-control" id="name" name="txtname">--}}
{{--          </div>--}}
{{--           <div class="form-group">--}}
{{--            <label for="email">Email:</label>--}}
{{--            <input type="text" class="form-control" id="email" name="txtemail">--}}
{{--          </div>--}}
{{--          <div class="form-group">--}}
{{--            <label for="pwd">Password:</label>--}}
{{--            <input type="password" class="form-control" id="pwd" name="txtpassword">--}}
{{--          </div>--}}
{{--          <button type="submit" name="btnregister"class="btn btn-primary">Thực Hiện</button>--}}
{{--        </form>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--	</div>--}}
{{--  <script src="{!! asset('admin/vendor/jquery/jquery.min.js') !!}"></script>--}}
{{--  <script src="{!! asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>--}}
{{--  <script src="{!! asset('admin/vendor/jquery-easing/jquery.easing.min.js') !!}"></script>--}}
{{--  <script src="{!! asset('admin/js/sb-admin-2.min.js') !!}"></script>--}}
{{--  <script src="{!! asset('admin/vendor/chart.js/Chart.min.js') !!}"></script>--}}
{{--  <script src="{!! asset('admin/js/demo/chart-area-demo.js') !!}"></script>--}}
{{--  <script src="{!! asset('admin/js/demo/chart-pie-demo.js') !!}"></script>--}}
{{--  </body>--}}
{{--</html>--}}

@extends('admin.user.layout')
@section('content')
    <form action="{{route('user.postadd')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Tên:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter Password">
        </div>

        <div class="form-group">
            <label for="image">Hình ảnh:</label>
            <input type="file" class="form-control"name="image" value="" />
        </div>
{{--        <div class="form-group">--}}
{{--            <label for="background_image">Hình ảnh:</label>--}}
{{--            <input type="file" class="form-control"name="background_image" value="" />--}}
{{--        </div>--}}
        <div class="form-group">
            <label for="title">Công việc:</label>
            <textarea class="form-control" name="title"></textarea>
        </div>
        <div class="form-group">
            <label for="description">Mô tả:</label>
            <textarea class="form-control" id="contents"  name="description"></textarea>
            <script>CKEDITOR.replace('contents');</script>
        </div>
        <div class="form-group">
            <label for="phone">Điện thoại:</label>
            <input type="text" class="form-control"  name="phone" placeholder="số điện thoại">
        </div>
        <div class="form-group">
            <label for="address">Địa chỉ:</label>
            <input type="text" class="form-control"  name="address" placeholder="địa chỉ">
        </div>
        <div class="form-group">
            <label for="contact">Liên hệ:</label>
            <input type="url" class="form-control"  name="contact" placeholder="liên hệ">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Trạng thái</label>
            <select name="status" class="form-control input-sm m-bot15">
                <option value="1">Hiển Thị</option>
                <option value="0">Ẩn</option>
            </select>
        </div>
{{--        <div class="form-group">--}}
{{--            <label for="title">Mô tả:</label>--}}
{{--            <textarea class="form-control" id="contents"  name="description"></textarea>--}}
{{--            <script>CKEDITOR.replace('contents');</script>--}}
{{--        </div>--}}
        <button type="submit" name="btnregister"class="btn btn-primary">Thực Hiện</button>
    </form>
    <@stop
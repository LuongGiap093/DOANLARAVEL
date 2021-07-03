@extends('admin.logo.layout')
@section('content')
    <form action="{{ route('logo.store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="image">Hình ảnh:</label>
            <input type="file" class="form-control" name="image" value=""/>
        </div>
        <div class="form-group">
            <label for="logo_status">Trạng thái:</label>
            <select name="logo_status" class="form-control" id="logo_status">
                <option value='1'>True</option>
                <option value='0'>False</option>
            </select>
        </div>
        <button type="submit" name="btn_logo" class="btn btn-primary">Thực Hiện</button>
    </form>
    </div>
@stop


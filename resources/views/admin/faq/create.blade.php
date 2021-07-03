@extends('admin.faq.layout')
@section('content')
    <form action="{{ route('faq.store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="faq_serial">Số thứ tự </label>
            <input type="text" class="form-control" name="faq_serial">
        </div>
        <div class="form-group">
            <label for="faq_title">Tiêu đề </label>
            <input type="text" class="form-control" name="faq_title"/>
        </div>
        <div class="form-group">
            <label for="faq_description">Mô tả:</label>
            <textarea class="form-control" id="data" name="faq_description"></textarea>
        </div>
        <button type="submit" name="btn_addfaq" class="btn btn-primary">Thực Hiện</button>
    </form>
    </div>
@stop

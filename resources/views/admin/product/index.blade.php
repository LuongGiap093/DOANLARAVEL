@extends('admin.product.layout')
@section('content')

    @foreach($products as $product)
        <div class="modal fade" id="exampleModal{{$product->id}}" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Chi tiết sản phẩm
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                </thead>
                                <tbody>
                                <tr>
                                    <th style="width: 200px">Tên Sản Phẩm: </th>
                                    <td>{{$product->name}}</td>
                                </tr>
                                <tr>
                                    <th>Hình ảnh : </th>
                                    <td><img src="{{asset('public\images/'. $product->image)}}" width="200px" height="180px"/></td>
                                </tr>
                                <tr>
                                    <th>Giá : </th>
                                    <td>{{number_format($product->price)}} VNĐ</td>
                                </tr>
                                <tr>
                                    <th>Giảm giá </th>
                                    <td>{{number_format($product->discount)}} VNĐ</td>
                                </tr>
                                <tr>
                                    <th>Nội dung : </th>
                                    <td>{!! $product->content  !!}</td>
                                </tr>
                                <tr>
                                    <th>Chi tiết sản phẩm : </th>
                                    <td>{!! $product->describe !!}</td>
                                </tr>
                                <tr>
                                    <th>Lượt xem : </th>
                                    <td>{{$product->view_number}}</td>
                                </tr>
                                <tr>
                                    <th>Trạng thái : </th>
                                    @if($product->status==0)
                                        <td>Hết hàng</td>
                                    @elseif($product->status==1)
                                        <td>Mới</td>
                                    @elseif($product->status==2)
                                        <td>Nổi bậc</td>
                                    @else
                                        <td>Big Sale</td>
                                    @endif
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
    @endforeach
    <div style="padding: 20px;border: 1px solid #eaeaea;">
    <table id="datatable" class="table table-bordered dt-responsive nowrap"
           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
        <th>Hình ảnh</th>
        <th>Tên</th>
        <th>Thư viện ảnh</th>
        <th>Giá</th>
        <th>Giảm giá</th>
        <th>Trạng thái</th>
        <th>Xem chi tiết</th>
        <th>Edit</th>
        <th>Lock</th>
        <th>Delete</th>
        </thead>
        <tbody>
        @foreach($products ?? '' as $product)
            <tr>
                <td><img src="{{asset('public/images/'. $product->image)}}" width="40"/></td>
                <td>{{$product->name}} </td>
                <td><a href="{{route('add-gallery', $product->id)}}" class="btn btn-outline-primary"><i class="fas fa-image" aria-hidden="true"></i></a></td>
                <td>{{$product->price}} </td>
                <td>{{$product->discount}} </td>
                @if($product->status==0)
                    <td>Hết hàng</td>
                @elseif($product->status==1)
                    <td>Mới</td>
                @elseif($product->status==2)
                    <td>Nổi bậc</td>
                @else
                    <td>Big Sale</td>
                @endif
                <td>
                    <button class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal{{$product->id}}"><i class="fa fa-eye"></i></button>
                </td>
                <td><a href="{{route('product.edit', $product->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                </td>
                <td>
                    @if($product->status_product == 1)
                        <a href="{{route('product.changestatus',$product->id)}}" class="btn btn-success"><i
                                    class="fa fa-unlock"></i></a>
                    @else
                        <a href="{{route('product.changestatus',$product->id)}}" class="btn btn-warning"> <i
                                    class="fa fa-lock"></i></a>
                    @endif
                </td>
                <td>
                    <form action="{{route('product.destroy', $product->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>

                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@stop

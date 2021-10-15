@extends('admin.user.layout')
@section('content')
    <table id="datatable" class="table table-bordered dt-responsive nowrap"
           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
        <th>Image</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Descrition</th>
        <th>Option</th>

        </thead>
        <tbody>
        @foreach($users ?? '' as $user)
            <tr>

                <td width="5%"><img src="{{asset('public\images/'. $user->image)}}" width="100px" height="70px"/></td>

                <td>{{$user->name}} </td>
                <td>{{$user->email}} </td>
                <td>{{$user->password}} </td>
                <td>{{$user->title}} </td>

                <td><a href="{{route('user.getedit',$user->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                    <a href="{{route('user.delete',$user->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>

                    @if($user->status==1)
                        <a href="{{route('user.changestatus',$user->id)}}"  class="btn btn-success"><i class="fa fa-unlock"></i></a>

                    @else
                        <a href="{{route('user.changestatus',$user->id)}}" class="btn btn-warning"> <i class="fa fa-lock"></i></a>
                    @endif

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop

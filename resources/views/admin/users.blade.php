@extends('admin/layout')

@section('users')

<div class="tables">
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>نام کاربری</th>
                <th>رمز عبور</th>
                <th>ادرس ایمیل</th>
                <th>مدیریت</th>
              
            </tr>
        </thead>
        <tbody>
        @if(isset($use))
        @foreach($use as $user)
            <tr>
                <td>{{$user -> email}}</td>
                <td>{{$user -> number}}</td>
                <td>{{$user -> active}}</td>
                <td>
                    <?php
                        $rols =$user->roles()->orderBy('name')->get();
                    ?>
                 @foreach($rols as $role)
                    @if($role->name != "admin")
                    @if($user->active == 1)
                        <form action="{{route('user.deactive',$user->id)}}" method="post">
                            @csrf
                            <input type="submit" class="btn bg-danger fontdelete" value="غیر فعال سازی">
                        </form> 
                        @else
                        <form action="{{route('user.active',$user->id)}}" method="post">
                            @csrf
                            <input type="submit" class="btn bg-success fontdelete" value=" فعال سازی">
                        </form> 
                        @endif
                    @endif
                @endforeach
                <!-- <a href="#" class="btn bg-danger fontdelete" >غیرفعال سازی</a> -->
                </td>
            </tr>
        @endforeach
        @endif
        </tbody>
        <tfoot>
            <tr>
                <th>نام کاربری</th>
                <th>رمز عبور</th>
                <th>ادرس ایمیل</th>
                <th>مدیریت</th>
            </tr>
        </tfoot>
    </table>
    </div>

@endsection
@section('extantion')
  <script src="{{url('/')}}/admin-style/js/datatables.min.js"></script>
  <script src="{{url('/')}}/admin-style/js/infodatatable.js"></script>
@endsection
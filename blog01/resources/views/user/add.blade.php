@extends('layouts.backend')
@section('tieu_de','Chức năng thêm')

@section('noi_dung')
    <h2>Thêm tài khoản</h2>
    <form action="{{route('User.saveNew')}}" method="post">
       <input type="text" name="username" placeholder="Username"> <br>
        <button>Save</button>
        @csrf
    </form>
@endsection

@section('block_them','Đây là phần thêm')

@extends('layout.admin')
@section('content')
    <div class="row loginform">
        @if (Session::has('message'))

            {!! Session::get('message')  !!}


        @endif
    <form method="POST" action="">
        {{csrf_field()}}
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="UserName" name="username">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
        </div>
    <link rel="stylesheet" href="{{asset('assets\css\index.css')}}" type="text/css">
    @endsection
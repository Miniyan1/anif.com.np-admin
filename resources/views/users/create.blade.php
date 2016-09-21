@extends('layout.homelay')
@section('home')

    <div class="row">
        <form action="{{route('saveuesrs')}}" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Role</label>
                <select class="form-control" name="role_id">
                    @foreach($roles as $role)
                        <option   value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Username</label>
                <input type="TEXT" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>


            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>


    @endsection
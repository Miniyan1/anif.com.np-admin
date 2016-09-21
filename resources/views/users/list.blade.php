@extends('layout.homelay')
@section('home')
    <script>
        baseUrl= "{{url('')}}";
    </script>
    <div class="row">

        {{csrf_field()}}
        <table class="table">
            <tr>
                <th>Full Name</th>
                <th>User Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
            @foreach($users as $user)

                <tr>

                    <td>{{$user->fullname }}</td>
                    <td>{{$user->username }}</td>
                    <td>{{$user->address }}</td>
                    <td>{{$user->phone }}</td>
                    <td>{{$user->email }}</td>
                    <td>{{empty($user->role) ? "Not Specified" : $user->role->name}}</td>
                    <td><a href="">Edit</a>
                        <a class="btn btn-danger delete-user" data-id="{{$user->id}}">Delete</a> </td>
                </tr>
            @endforeach
        </table>

    </div>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
@endsection
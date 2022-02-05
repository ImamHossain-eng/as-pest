@extends('layouts.admin')
@section('content')
<body>
    <div class="card">
        <div class="card-header">
            <h3 class="title">Edit User: {{$user->name}}</h3>
        </div>
        <div class="card-body">
            {{Form::open(['route'=>['admin.user_update', $user->id], 'method'=>'PATCH', 'enctype'=>'multipart/form-data'])}}

                <div class="form-group">
                    <input type="text" name="name" value="{{$user->name}}" placeholder="Enter User Name" class="form-control">
                </div><br>

                <div class="form-group">
                    <input type="email" name="email" value="{{$user->email}}" placeholder="Enter User Email Address" class="form-control">
                </div><br>

                <div class="form-group">
                    <input type="password" name="password" placeholder="Enter User Password or skip it to hold previous password" class="form-control">
                </div><br>

                <div class="form-group">
                    <select name="role_id" class="form-control">
                        <option value="{{$user->role_id}}">Current Role: {{$user->role->name}} </option>
                        @foreach($roles as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
                    </select>
                </div><br>

                <input type="submit" class="btn btn-primary" value="Update">
                
            {{Form::close()}}
        </div>
    </div>
</body>
@endsection
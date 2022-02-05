@extends('layouts.admin')
@section('content')
<body>
    <div class="card">
        <div class="card-header">
            <h3 class="title">Create New User</h3>
        </div>
        <div class="card-body">
            {{Form::open(['route'=>'admin.user_store', 'method'=>'POST', 'enctype'=>'multipart/form-data'])}}

                <div class="form-group">
                    <input type="text" name="name" value="{{old('name')}}" placeholder="Enter User Name" class="form-control">
                </div><br>

                <div class="form-group">
                    <input type="email" name="email" value="{{old('email')}}" placeholder="Enter User Email Address" class="form-control">
                </div><br>

                <div class="form-group">
                    <input type="password" name="password" placeholder="Enter User Password" class="form-control">
                </div><br>

                <div class="form-group">
                    <input type="password" name="password_confirmation" placeholder="Enter User Password Again" class="form-control">
                </div><br>

                <div class="form-group">
                    <select name="role_id" class="form-control">
                        <option value="null">Choose User Role...</option>
                        @foreach($roles as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
                    </select>
                </div><br>

                <input type="submit" class="btn btn-primary" value="Save">
                
            {{Form::close()}}
        </div>
    </div>
</body>
@endsection
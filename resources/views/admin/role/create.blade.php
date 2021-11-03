@extends('layouts.admin')
@section('content')
<body>
    <div class="card">
        <div class="card-header">
            <h3 class="heading">
                Create User Role
            </h3>
        </div>
        <div class="card-body">
            {{Form::open(['route'=>'admin.role_store', 'method'=>'POST'])}}
                <div class="form-group">
                    <input type="text" name="name" placeholder="Enter name of the role" class="form-control">
                </div>
                <br>
                <input type="submit" value="Save" class="btn btn-primary">
            {{Form::close()}}
        </div>
    </div>
</body>
@endsection
@extends('layouts.admin')
@section('content')
<body>
    <div class="card">
        <div class="card-header">
            <h3 class="heading">
                Edit User Role
            </h3>
        </div>
        <div class="card-body">
            {{Form::open(['route'=>['admin.role_update', $role->id], 'method'=>'PUT'])}}
                <div class="form-group">
                    <input type="text" name="name" value="{{$role->name}}" placeholder="Enter name of the role" class="form-control">
                </div>
                <br>

                <div class="form-group">
                    <select name="status" class="form-control">
                        <option value="{{$role->id}}">Current Status: 
                            @if($role->status == true)
                                Active 
                            @else 
                                Disabled
                            @endif
                        </option>
                        <option value="0">Disable</option>
                        <option value="1">Active</option>
                    </select>
                </div><br>


                <input type="submit" value="Save" class="btn btn-primary">

            {{Form::close()}}
        </div>
    </div>
</body>
@endsection
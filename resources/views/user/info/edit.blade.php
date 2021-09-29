@extends('layouts.user')
@section('content')
<body>
    <div class="card">
        <div class="card-header">
            <h3 class="heading">Update Your Necessary Information</h3>
        </div>
        <div class="card-body">
            {{Form::open(['route' => 'user.info_update', 'method' => 'POST', 'enctype' => 'multipart/form-data'])}}
            {{method_field('PUT')}}
            <div class="form-group">
                <input type="text" name="profession" value="{{$info->profession}}" class="form-control" placeholder="Enter Your Profession" required>
            </div><br>

            <div class="form-group">
                <input type="number" name="number" value="{{$info->number}}" class="form-control" placeholder="Enter Your Contact Number" required>
            </div><br>

            <div class="form-group">
                <input type="text" name="address" value="{{$info->address}}" class="form-control" placeholder="Enter Your address" required>
            </div><br>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <h4>Current Profile Pic</h4>
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('/images/user/'.$info->image)}}" alt="{{$info->image}}" style="width:40%;">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <input type="file" name="image" class="form-control">
            </div><br>

            <input type="submit" value="Update" class="btn btn-primary" style="width: 100%;">

            {{Form::close()}}
        </div>
    </div>
</body>
@endsection
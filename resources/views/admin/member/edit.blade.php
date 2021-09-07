@extends('layouts.admin')
@section('content')
<head>
    <style>
        input{
            width:100%;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h3 class="heading">Editing Team Member</h3>
        </div>
        <div class="card-body">
            {{Form::open(['route' => ['admin.member_update', $member->id], 'method'=> 'POST', 'enctype'=>'multipart/form-data'])}}
            {{method_field('PUT')}}
                <div class="form-group input-group input-group-lg">
                    <span class="input-group-addon ab">Name</span>
                    <input type="text" name="name" value="{{$member->name}}" class="form-control" placeholder="Enter Name of the Employee">
                </div><br>

                <div class="form-group input-group input-group-lg">
                    <span class="input-group-addon">Designation</span>
                    <input type="text" name="designation" value="{{$member->designation}}" class="form-control" placeholder="Enter Designation of the Employee">
                </div><br>

                <div class="form-group input-group input-group-lg">
                    <span class="input-group-addon">Profile Picture</span>
                    <input type="file" name="image" class="form-control">
                </div><br>


                <div class="form-group input-group input-group-lg">
                    <span class="input-group-addon">Facebook Link</span>
                    <input type="text" name="fb" value="{{$member->fb}}" class="form-control" placeholder="Enter Facebook link of the Employee">
                </div><br>

                <div class="form-group input-group input-group-lg">
                    <span class="input-group-addon">Twitter Link</span>
                    <input type="text" name="twitter" value="{{$member->twitter}}" class="form-control" placeholder="Enter Twitter link of the Employee">
                </div><br>

                <div class="form-group input-group input-group-lg">
                    <span class="input-group-addon">LinkedIn Link</span>
                    <input type="text" name="linkedin" value="{{$member->linkedin}}" class="form-control" placeholder="Enter LinkedIn link of the Employee">
                </div><br>

                <div class="form-group input-group input-group-lg">
                    <span class="input-group-addon">Instagram Link</span>
                    <input type="text" name="instagram" value="{{$member->instagram}}" class="form-control" placeholder="Enter Instagram link of the Employee">
                </div><br>

                <button class="btn btn-primary" style="width: 100%;">
                    Save
                </button> 
            {{Form::close()}}
        </div>
    </div>
</body>

@endsection
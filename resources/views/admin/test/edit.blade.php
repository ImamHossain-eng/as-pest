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
            <h3 class="heading">Editing Existing Testimonial</h3>
        </div>
        <div class="card-body">
            {{Form::open(['route' => ['admin.test_update', $test->id], 'method'=> 'POST', 'enctype'=>'multipart/form-data'])}}
            {{method_field('PUT')}}
            <div class="form-group input-group input-group-lg">
                <span class="input-group-addon ab">Name</span>
                <input type="text" name="name" value="{{$test->name}}" class="form-control" placeholder="Enter Name of the Customer">
            </div><br>

            <div class="form-group input-group input-group-lg">
                <span class="input-group-addon">Designation</span>
                <input type="text" name="profession" value="{{$test->profession}}" class="form-control" placeholder="Enter Profession of the Customer">
            </div><br>

            <div class="form-group input-group input-group-lg">
                <span class="input-group-addon">Profile Picture</span>
                <input type="file" name="image" class="form-control">
            </div><br>

            <div class="form-group">
                <textarea name="body" id="ckview" class="form-control"  placeholder="Enter the Body Text">{{$test->body}}</textarea>
            </div>

                <button class="btn btn-primary">
                    Save
                </button> 
            {{Form::close()}}
        </div>
    </div>
</body>

@endsection
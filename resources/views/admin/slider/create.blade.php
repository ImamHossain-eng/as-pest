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
            <h3 class="heading">Adding New Slider Image</h3>
        </div>
        <div class="card-body">
            {{Form::open(['route' => 'admin.slider_store', 'method'=> 'POST', 'enctype'=>'multipart/form-data'])}}
            <div class="form-group input-group input-group-lg">
                <span class="input-group-addon ab">Title</span>
                <input type="text" name="title" class="form-control" placeholder="Enter Title of the Image">
            </div><br>

            <div class="form-group input-group input-group-lg">
                <span class="input-group-addon">Sub-Title</span>
                <input type="text" name="sub_title" class="form-control" placeholder="Enter SUb Title  of the Image">
            </div><br>

            <div class="form-group input-group input-group-lg">
                <span class="input-group-addon">Profile Picture</span>
                <input type="file" name="image" class="form-control">
            </div><br>


                <button class="btn btn-primary" style="width: 100%;">
                    Save
                </button> 
            {{Form::close()}}
        </div>
    </div>
</body>

@endsection
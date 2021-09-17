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
            <h3 class="heading">Adding New Testimonial</h3>
        </div>
        <div class="card-body">
            {{Form::open(['route' => 'admin.test_store', 'method'=> 'POST', 'enctype'=>'multipart/form-data'])}}
            <div class="form-group input-group input-group-lg">
                <span class="input-group-addon ab">Name</span>
                <input type="text" name="name" class="form-control" placeholder="Enter Name of the Customer">
            </div><br>

            <div class="form-group input-group input-group-lg">
                <span class="input-group-addon">Designation</span>
                <input type="text" name="profession" class="form-control" placeholder="Enter Profession of the Customer">
            </div><br>

            <div class="form-group input-group input-group-lg">
                <span class="input-group-addon">Profile Picture</span>
                <input type="file" name="image" class="form-control">
            </div><br>

            <div class="form-group input-group input-group-lg">
                <span class="input-group-addon">Testimonial Status</span>
                <select name="show" class="form-control">
                    <option value="null">Choose Option</option>
                    <option value="0">Pending</option>
                    <option value="1">Published</option>
                </select>
            </div><br>

            <div class="form-group">
                <textarea name="body" id="ckview" class="form-control"  placeholder="Enter the Body Text"></textarea>
            </div>

                <button class="btn btn-primary">
                    Save
                </button> 
            {{Form::close()}}
        </div>
    </div>
</body>

@endsection
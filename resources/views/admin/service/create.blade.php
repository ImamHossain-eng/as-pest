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
            <h3 class="heading">Adding New Service</h3>
        </div>
        <div class="card-body">
            {{Form::open(['route' => 'admin.service_store', 'method'=> 'POST', 'enctype'=>'multipart/form-data'])}}
            <div class="form-group input-group input-group-lg">
                <span class="input-group-addon ab">Service Name</span>
                <input type="text" name="name" class="form-control" placeholder="Enter Name of the Service">
            </div><br>

            <div class="form-group input-group input-group-lg">
                <span class="input-group-addon">Aim / Objective</span>
                <input type="text" name="motto" class="form-control" placeholder="Enter Motto / Objective / Aim / Purpose of the Service">
            </div><br>

            <div class="form-group input-group input-group-lg">
                <span class="input-group-addon">Profile Picture</span>
                <input type="file" name="image" class="form-control">
            </div><br>

            <div class="form-group">
                <textarea name="body" id="ckview" class="form-control"  placeholder="Enter the Body Text"></textarea>
            </div>

                <button class="btn btn-primary" style="width: 100%;">
                    Save
                </button> 
            {{Form::close()}}
        </div>
    </div>
</body>

@endsection
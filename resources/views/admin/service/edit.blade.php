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
            <h3 class="heading">Editing Existing Service</h3>
        </div>
        <div class="card-body">
            {{Form::open(['route' => ['admin.service_update', $service->id], 'method'=> 'POST', 'enctype'=>'multipart/form-data'])}}
            {{method_field('PUT')}}
            <div class="form-group input-group input-group-lg">
                <span class="input-group-addon ab">Service Name</span>
                <input type="text" name="name" value="{{$service->name}}" class="form-control" placeholder="Enter Name of the Service">
            </div><br>

            <div class="form-group input-group input-group-lg">
                <span class="input-group-addon">Aim / Objective</span>
                <input type="text" name="motto" value="{{$service->motto}}" class="form-control" placeholder="Enter Motto / Objective / Aim / Purpose of the Service">
            </div><br>

            <div class="form-group input-group input-group-lg">
                <span class="input-group-addon">Profile Picture</span>
                <input type="file" name="image" class="form-control">
            </div><br>

            <div class="form-group">
                <textarea name="body" id="ckview" class="form-control"  placeholder="Enter the Body Text">
                    {{$service->body}}
                </textarea>
            </div>
                <button class="btn btn-primary" style="width: 100%;">
                    Update
                </button> 
            {{Form::close()}}
        </div>
    </div>
</body>

@endsection
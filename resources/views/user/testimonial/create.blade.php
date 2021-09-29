@extends('layouts.user')
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
            {{Form::open(['route' => 'user.testimonial_store', 'method'=> 'POST', 'enctype'=>'multipart/form-data'])}}
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
@extends('layouts.admin')
@section('content')
<head>
    <style>
        
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h3 class="heading">Editing Existing Frequently Asked Question (FAQ)</h3>
        </div>
        <div class="card-body">
            {{Form::open(['route' => ['admin.faq_update', $faq->id], 'method'=> 'POST'])}}
            {{method_field('PUT')}}
                <div class="form-group">
                    <input type="text" name="question" value="{{$faq->question}}" class="form-control" placeholder="Enter the Question">
                </div><br>
                <div class="form-group">
                    <textarea name="ans" id="" class="form-control" placeholder="Enter the Answer">{{$faq->ans}}</textarea>
                </div><br>
                <button class="btn btn-primary">
                    Save
                </button> 
            {{Form::close()}}
        </div>
    </div>
    
</body>
@endsection
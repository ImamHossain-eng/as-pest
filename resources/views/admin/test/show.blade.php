@extends('layouts.admin')

@section('content')
<head>
    <style>
        .head{
            background-color:#dcee8d;
            padding: 1em;
            box-shadow: 2px 5px 2px #636161;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h3 class="heading"> Testimonial Show </h3>
            <div class="head">
               <div class="row">
                <div class="col-md-3">
                    <img src="{{asset('/images/testimonial/'.$test->image)}}" alt="{{$test->image}}" style="width: 175px; height: 200px;border-radius: 5px;">
                </div>
                <div class="col-md-8"><br><br>
                    <h3>{{$test->name}}</h3>
                    <hr>
                    <h5>{{$test->profession}}</h5>
                </div>
               </div>
                
            </div>
            <br>     
        </div>
        <div class="card-body">
                        
            <div style="background-color: #d4c7c7;padding:1em;box-shadow: 2px 5px 2px #636161;">

                <strong>Testimonial:</strong>
                {!!$test->body!!}
            </div>
            <br>  
            <div class="row">
                <div class="col-md-6">
                    <p class="card-subtitle">
                        <strong><i class="fa fa-clock-o"></i> Inserted:</strong> {{ date('F d, Y', strtotime($test->created_at))}} at {{ date('g:ia', strtotime($test->created_at))}} / {{$test->created_at->diffForHumans()}}
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="card-subtitle">
                        <strong><i class="fa fa-clock-o"></i> Updated:</strong> {{ date('F d, Y', strtotime($test->updated_at))}} at {{ date('g:ia', strtotime($test->updated_at))}} / {{$test->updated_at->diffForHumans()}} 
                    </p>  
                </div>
            </div>                   
                
            
        </div>
    </div>
</body>


@endsection
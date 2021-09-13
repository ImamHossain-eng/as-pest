@extends('layouts.admin')
@section('content')
<body>
    <div class="card">
        <div class="card-header">
            <h3 class="heading">{{$service->name}}</h3>
            <h5 class="bg-success text-center" style="padding:1em;box-shadow: 2px 2px 2px #807070;">{{$service->motto}}</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{asset('images/service/'.$service->image)}}" alt="{{$service->image}}" style="width: 100%;">
                    <p><strong>Inserted At:</strong> {{$service->created_at->diffForHumans()}} <br>
                    <strong>Updated At:</strong> {{$service->updated_at->diffForHumans()}} </p>
                </div>
                <div class="col-md-8">
                    <div  style="background: #202020; color:#EFEFEF; padding: 1em;">
                        {!!$service->body!!}
                    </div>
                </div>                
            </div>
        </div>
    </div>
</body>
@endsection
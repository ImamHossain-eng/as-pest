@extends('layouts.admin')
@section('content')
<body>
    <div class="card-header m-b-15">
        <h4>From {{$message->name}}</h4>	 
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                Name: {{$message->name}}<br>
                Email: {{$message->email}}<br>
                Phone: {{$message->mobile}}<br>
                Received: {{ date('F d, Y (D)', strtotime($message->created_at))}}
                 at {{ date('g:ia', strtotime($message->created_at))}}
                 <br> Seen: {{ date('F d, Y (D)', strtotime($message->updated_at))}}
                 at {{ date('g:ia', strtotime($message->updated_at))}}
            </div>
            <div class="col-md-7">
                {{$message->msg}}
            </div>
        </div>
        
    </div>
</body>
@endsection
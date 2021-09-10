@extends('layouts.admin')

@section('content')
<body>
    <div class="card">
        <div class="card-header">
            <h3 class="heading"> {{$faq->question}} </h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p class="card-subtitle">
                        <strong><i class="fa fa-clock-o"></i> Inserted:</strong> {{ date('F d, Y', strtotime($faq->created_at))}} at {{ date('g:ia', strtotime($faq->created_at))}} / {{$faq->created_at->diffForHumans()}}
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="card-subtitle">
                        <strong><i class="fa fa-clock-o"></i> Updated:</strong> {{ date('F d, Y', strtotime($faq->updated_at))}} at {{ date('g:ia', strtotime($faq->updated_at))}} / {{$faq->updated_at->diffForHumans()}} 
                    </p>  
                </div>
            </div>                
            <div style="background-color: #d4c7c7;padding:1em;box-shadow: 2px 5px 2px #636161;">
                <p>
                    <strong>Display:</strong>
                    @if($faq->side == 1)
                        Left Side
                    @elseif($faq->side == 2)
                        Right Side
                    @else 
                        Nothing
                    @endif
                </p>

                <strong>Answer:</strong>
                {!!$faq->ans!!}
            </div>
            <br>
            <div> Admin Operation:
                <a href="/admin/faq/{{$faq->id}}/edit" class="btn btn-success">
                    <i class="fa fa-check"></i>
                </a>
                {{Form::open(['route' => ['admin.faq_destroy', $faq->id], 'method' => 'DELETE', 'style'=>'display:inline;'])}}
                     <button class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                    </button>
                {{Form::close()}}
            </div>                   
                
            
        </div>
    </div>
</body>


@endsection
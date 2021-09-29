@extends('layouts.user')
@section('content')
<body>
    <div class="card">
        <div class="card-header">
            <h3 class="heading">Show User Profile</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{asset('/images/user/'.Auth::user()->info->image)}}" alt="{{Auth::user()->info->image}}" style="width:80%;">
                </div>
                <div class="col-md-4">
                    Name: {{Auth::user()->name}} <br>
                    Profession: {{Auth::user()->info->profession}} <br>
                    Name: {{Auth::user()->info->address}} <br>
                    Email: {{Auth::user()->email}} <br>
                    Number: 0{{Auth::user()->info->number}} <br>
                    First Login: {{Auth::user()->created_at->diffForHumans()}}
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
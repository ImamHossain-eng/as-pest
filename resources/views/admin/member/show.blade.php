@extends('layouts.admin')
@section('content')
<body>
    <section style="background-color: #EFEFEF;">
        <div class="container">
          
      
          <div class="row">
            <div class="col-lg-8">
              <div class="card mb-4">
                <div class="card-body text-center">
                  <img src="{{asset('images/staffs/'.$member->image)}}" alt="avatar" class="rounded-circle img-fluid" style="width: 20%;">
                  <h3 class="my-3">{{$member->name}}</h3>
                  <p class="text-muted mb-1">{{$member->designation}}</p>
                  <p class="text-muted mb-4">A.S Pest Control</p>
                </div>
              </div>
              <div class="card mb-4 mb-lg-0">
                <div class="card-body p-0">
                  <ul class="list-group list-group-flush rounded-3">
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fa fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                        <p class="mb-0">
                            <a href="{{$member->fb}}" target="_blank">{{$member->fb}}</a>
                        </p>
                      </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                      <i class="fa fa-twitter fa-lg" style="color: #55acee;"></i>
                      <p class="mb-0">
                        <a href="{{$member->twitter}}" target="_blank">{{$member->twitter}}</a>
                      </p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fa fa-instagram fa-lg" style="color: #ac2bac;"></i>
                        <p class="mb-0">
                            <a href="{{$member->instagram}}" target="_blank">{{$member->instagram}}</a>
                        </p>
                      </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fa fa-linkedin fa-lg" style="color: #333333;"></i>
                        <p class="mb-0">
                            <a href="{{$member->linkedin}}" target="_blank">{{$member->linkedin}}</a>
                        </p>
                      </li>
                    
                    
                  </ul>
                </div>
              </div>
            </div>
            
            

            </div>
          </div>

          <div class="row">
            <div class="col-md-4" style="margin-left:1em;">
                <strong><i class="fa fa-clock-o"></i> Created At:</strong>
                {{$member->created_at->diffForHumans()}}
            </div>
            <div class="col-md-4" style="margin-left:1em;">
                <strong><i class="fa fa-clock-o"></i> Updated At:</strong>
                {{$member->updated_at->diffForHumans()}}
            </div>
        </div>
        </div>
      </section>
</body>
@endsection
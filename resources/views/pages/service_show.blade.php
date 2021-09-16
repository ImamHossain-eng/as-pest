@extends('layouts.home')
@section('content')
<body>
    <!-- Single Post Start-->
    <div class="single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-content wow fadeInUp">
                        <img src="{{asset('/images/service/'.$service->image)}}" />
                        <h2>{{$service->name}}</h2>
                        
                        <p>
                            {!! $service->body !!}
                        </p>
                    </div>

                    <div class="single-bio wow fadeInUp">
                        <div class="single-bio-text">
                            <h3>{{$service->name}}</h3>
                            <p>
                                {{$service->motto}}
                            </p>
                        </div>
                    </div>
                    <div class="single-related wow fadeInUp">
                        <h2>Our Team</h2>
                        <div class="owl-carousel related-slider">
                           

                            @foreach($members as $member)
                            <div class="post-item">
                                <div class="post-img">
                                    <img src="{{asset('/images/staffs/'.$member->image)}}" />
                                </div>
                                <div class="post-text">
                                    <a href="">{{$member->name}}</a>
                                    <div class="post-meta">
                                        <p>Position:<a href="">{{$member->designation}}</a></p>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar">
                        <!--
                        <div class="sidebar-widget wow fadeInUp">
                            <div class="search-widget">
                                {{Form::open(['route'=>'service_search', 'method'=>'POST'])}}
                                    <input class="form-control" name="search" type="text" placeholder="Search Service">
                                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                                {{Form::close()}}
                            </div>
                        </div>
                    -->
                        

                        <div class="sidebar-widget wow fadeInUp">
                            <h2 class="widget-title">Other Services</h2>
                            <div class="recent-post">
                                
                                @foreach($services as $service)
                                <div class="post-item">
                                    <div class="post-img">
                                        <img src="{{asset('/images/service/'.$service->image)}}" />
                                    </div>
                                    <div class="post-text">
                                        <a href="/service/{{$service->id}}"> {{$service->name}} </a>
                                        <div class="post-meta">
                                            <p>
                                                <a href="/service/{{$service->id}}">
                                                    {{Str::limit($service->motto, 30, $end='...')}}
                                                </a>
                                            </p>                                            
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>

                      


                       

                        <div class="sidebar-widget wow fadeInUp">
                            <h2 class="widget-title">Service Tags </h2>
                            <div class="tag-widget">
                                @foreach($services as $service)
                                    <a href="/service/{{$service->id}}">{{$service->name}}</a>
                                @endforeach
                                
                            </div>
                        </div>

                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Post End-->   
</body>
@endsection
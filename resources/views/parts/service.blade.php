<div class="service">
    <div class="container">
        <div class="section-header text-center">
            <p style="text-align: center;">Our Services</p>
            <h2>We Provide Services</h2>
        </div>
        <div class="row">
            

            @foreach($services as $service)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{asset('images/service/'.$service->image)}}" alt="Image">
                        <div class="service-overlay">
                            <p>
                                {{$service->motto}}
                            </p>
                        </div>
                    </div>
                    <div class="service-text">
                        <h3>{{$service->name}}</h3>
                        <a class="btn" href="{{asset('images/service/'.$service->image)}}" data-lightbox="service">+</a>
                    </div>
                </div>
            </div>
            @endforeach

            
            
        </div>
    </div>
</div>
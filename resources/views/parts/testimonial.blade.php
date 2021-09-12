<div class="testimonial wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="testimonial-slider-nav">
                    @foreach($testimonials as $test)
                    <div class="slider-nav"><img src="{{asset('images/testimonial/'.$test->image)}}" alt="Testimonial" style="border-radius: 50%;"></div>
                    @endforeach   
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="testimonial-slider">
                    @foreach($testimonial_images as $testi)
                    <div class="slider-item">
                        <h3>{{$testi->name}}</h3>
                        <h4>{{$testi->profession}}</h4>
                        <p>{!!$testi->body!!}</p>
                    </div>
                    @endforeach     
                </div>
            </div>
        </div>
    </div>
</div>
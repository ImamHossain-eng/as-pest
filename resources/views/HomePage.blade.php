@extends('layouts.home')
@section('content')
<body>    
        <!-- Carousel Start -->
        @include('parts.carousel')
        <!-- Carousel End -->


        <!-- Feature Start-->
        @include('parts.feature')
        <!-- Feature End-->


        <!-- About Start -->
        @include('parts.about')
        <!-- About End -->
        
        @include('parts.brand2')


        <!-- Fact Start -->
        @include('parts.fact')
        <!-- Fact End -->


        <!-- Service Start -->
        @include('parts.service')
        <!-- Service End -->


        <!-- Video Start -->
        <div class="video wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                    <span></span>
                </button>
            </div>
        </div>
        
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video End -->


        <!-- Team Start -->
        @include('parts.team')
        <!-- Team End -->

        
        <!-- FAQs Start -->
        @include('parts.faq')
        <!-- FAQs End -->


        <!-- Testimonial Start -->
        @include('parts.testimonial')
        <!-- Testimonial End -->
        
        <div class="container">
            <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();" scrollamount="5" vspace="2px">
                AS Pest Control is a well known pest control company in Bangladesh. Older Clients are always waiting for our service . They became our permanent client due to our quality work and their priority. Our popular services are Termite Proofing, Mosquito Control, Rodent Control, Bed Bug Service, Fumigation, and Household Pest Control.
              </marquee>
        </div>  
</body>

@endsection
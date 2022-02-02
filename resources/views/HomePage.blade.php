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
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </marquee>
        </div>  
</body>

@endsection
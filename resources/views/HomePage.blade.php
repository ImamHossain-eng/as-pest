@extends('layouts.home')
@section('content')
<body>
    
    <div class="wrapper">
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="logo">
                            <a href="/">
                                <h1>A.S Pest Control</h1>
                                <!-- <img src="img/logo.jpg" alt="Logo"> -->
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 d-none d-lg-block">
                        <div class="row">
                            <div class="col-6">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="flaticon-call"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Call Us</h3>
                                        <p><strong>+8801727265633</strong></p>
                                        <p><strong>+8801833669945</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="flaticon-send-mail"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Email Us</h3>
                                        <p><strong>aspestcontrol09@gmail.com</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="#" class="nav-item nav-link active">Home</a>
                            <a href="#" class="nav-item nav-link">About</a>
                            <a href="#" class="nav-item nav-link">Team</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Our Services</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Household Pest Control</a>
                                    <a href="#" class="dropdown-item">Termite Profing</a>
                                    <a href="#" class="dropdown-item">Mosquito Control</a>
                                    <a href="#" class="dropdown-item">Rodent Control</a>
                                    <a href="#" class="dropdown-item">Bed-Bug Service</a>
                                    <a href="#" class="dropdown-item">Fumigation</a>

                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="ml-auto">
                            <a class="btn" href="#">Get A Quote</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Carousel Start -->
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('images/slider/1.jpg')}}" alt="Carousel Image">
                    <div class="carousel-caption">
                        <p class="animated fadeInRight">We Are Professional</p>
                        <h1 class="animated fadeInLeft">For Your Dream Home</h1>
                        <a class="btn animated fadeInUp" href="#">Get A Quote</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{asset('images/slider/2.jpg')}}" alt="Carousel Image">
                    <div class="carousel-caption">
                        <p class="animated fadeInRight">Professional Worker</p>
                        <h1 class="animated fadeInLeft">We Clean Your Home</h1>
                        <a class="btn animated fadeInUp" href="#">Get A Quote</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{asset('images/slider/3.jpg')}}" alt="Carousel Image">
                    <div class="carousel-caption">
                        <p class="animated fadeInRight">We Are Trusted</p>
                        <h1 class="animated fadeInLeft">For Your Dream Home</h1>
                        <a class="btn animated fadeInUp" href="#">Get A Quote</a>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Carousel End -->


        <!-- Feature Start-->
        <div class="feature wow fadeInUp" data-wow-delay="0.1s">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="flaticon-worker"></i>
                            </div>
                            <div class="feature-text">
                                <h3>Expert Worker</h3>
                                <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="flaticon-building"></i>
                            </div>
                            <div class="feature-text">
                                <h3>Quality Work</h3>
                                <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="flaticon-call"></i>
                            </div>
                            <div class="feature-text">
                                <h3>24/7 Support</h3>
                                <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End-->


        <!-- About Start -->
        <div class="about wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="section-header text-left">
                            <p>Welcome to AS Pest Control</p>
                            <h2>10 Years Experience</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                            </p>
                            <a class="btn" href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="{{asset('images/pest.jpg')}}" alt="Image">
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Fact Start -->
        <div class="fact">
            <div class="container-fluid">
                <div class="row counters">
                    <div class="col-md-6 fact-left wow slideInLeft">
                        <div class="row">
                            <div class="col-6">
                                <div class="fact-icon">
                                    <i class="flaticon-worker"></i>
                                </div>
                                <div class="fact-text">
                                    <h2 data-toggle="counter-up">13</h2>
                                    <p>Expert Workers</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="fact-icon">
                                    <i class="flaticon-building"></i>
                                </div>
                                <div class="fact-text">
                                    <h2 data-toggle="counter-up">151</h2>
                                    <p>Happy Clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 fact-right wow slideInRight">
                        <div class="row">
                            <div class="col-6">
                                <div class="fact-icon">
                                    <i class="flaticon-address"></i>
                                </div>
                                <div class="fact-text">
                                    <h2 data-toggle="counter-up">63</h2>
                                    <p>Completed Tasks</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="fact-icon">
                                    <i class="flaticon-crane"></i>
                                </div>
                                <div class="fact-text">
                                    <h2 data-toggle="counter-up">2</h2>
                                    <p>Running Tasks</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p style="text-align: center;">Our Services</p>
                    <h2>We Provide Services</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{asset('images/service/household.jpg')}}" alt="Image">
                                <div class="service-overlay">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                    </p>
                                </div>
                            </div>
                            <div class="service-text">
                                <h3>Household Pest Control</h3>
                                <a class="btn" href="{{asset('images/service/household.jpg')}}" data-lightbox="service">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{asset('images/service/termite.jpg')}}" alt="Image">
                                <div class="service-overlay">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                    </p>
                                </div>
                            </div>
                            <div class="service-text">
                                <h3>Termite Profing</h3>
                                <a class="btn" href="{{asset('images/service/termite.jpg')}}" data-lightbox="service">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{asset('images/service/mosa.jpg')}}" alt="Image">
                                <div class="service-overlay">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                    </p>
                                </div>
                            </div>
                            <div class="service-text">
                                <h3>Mosquito Control</h3>
                                <a class="btn" href="{{asset('images/service/mosa.jpg')}}" data-lightbox="service">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{asset('images/service/rodent.jpeg')}}" alt="Image">
                                <div class="service-overlay">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                    </p>
                                </div>
                            </div>
                            <div class="service-text">
                                <h3>Rodent Control</h3>
                                <a class="btn" href="{{asset('images/service/rodent.jpeg')}}" data-lightbox="service">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{asset('images/service/Bed-Bug.jpg')}}" alt="Image">
                                <div class="service-overlay">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                    </p>
                                </div>
                            </div>
                            <div class="service-text">
                                <h3>Bed-Bug Service</h3>
                                <a class="btn" href="{{asset('images/service/Bed-Bug.jpg')}}" data-lightbox="service">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{asset('images/service/fumigation.jpg')}}" alt="Image">
                                <div class="service-overlay">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                    </p>
                                </div>
                            </div>
                            <div class="service-text">
                                <h3>Furmigation</h3>
                                <a class="btn" href="{{asset('images/service/fumigation.jpg')}}" data-lightbox="service">+</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p style="text-align:center;">Our Team</p>
                    <h2>Meet Our Worker</h2>
                </div>
                <div class="row">

                    @foreach($members as $member)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{asset('images/staffs/'.$member->image)}}" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>{{$member->name}}</h2>
                                <p>{{$member->designation}}</p>
                            </div>
                            <div class="team-social">
                                <a class="social-tw" target="_blank" href="{{$member->twitter}}"><i class="fab fa-twitter"></i></a>
                                <a class="social-fb" target="_blank" href="{{$member->fb}}"><i class="fab fa-facebook-f"></i></a>
                                <a class="social-li" target="_blank" href="{{$member->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                                <a class="social-in" target="_blank" href="{{$member->instagram}}"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                   
                   
                   
                </div>
            </div>
        </div>
        <!-- Team End -->
        

        <!-- FAQs Start -->
        @include('parts.faq')
        <!-- FAQs End -->


        <!-- Testimonial Start -->
        <div class="testimonial wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="testimonial-slider-nav">
                            <div class="slider-nav"><img src="{{asset('images/testimonial-1.jpg')}}" alt="Testimonial"></div>
                            <div class="slider-nav"><img src="{{asset('images/testimonial-2.jpg')}}" alt="Testimonial"></div>
                            <div class="slider-nav"><img src="{{asset('images/testimonial-3.jpg')}}" alt="Testimonial"></div>
                            <div class="slider-nav"><img src="{{asset('images/testimonial-4.jpg')}}" alt="Testimonial"></div>
                            <div class="slider-nav"><img src="{{asset('images/testimonial-1.jpg')}}" alt="Testimonial"></div>
                            <div class="slider-nav"><img src="{{asset('images/testimonial-2.jpg')}}" alt="Testimonial"></div>
                            <div class="slider-nav"><img src="{{asset('images/testimonial-3.jpg')}}" alt="Testimonial"></div>
                            <div class="slider-nav"><img src="{{asset('images/testimonial-4.jpg')}}" alt="Testimonial"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="testimonial-slider">
                            <div class="slider-item">
                                <h3>Customer Name</h3>
                                <h4>profession</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                            </div>
                            <div class="slider-item">
                                <h3>Customer Name</h3>
                                <h4>profession</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                            </div>
                            <div class="slider-item">
                                <h3>Customer Name</h3>
                                <h4>profession</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                            </div>
                            <div class="slider-item">
                                <h3>Customer Name</h3>
                                <h4>profession</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                            </div>
                            <div class="slider-item">
                                <h3>Customer Name</h3>
                                <h4>profession</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                            </div>
                            <div class="slider-item">
                                <h3>Customer Name</h3>
                                <h4>profession</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                            </div>
                            <div class="slider-item">
                                <h3>Customer Name</h3>
                                <h4>profession</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                            </div>
                            <div class="slider-item">
                                <h3>Customer Name</h3>
                                <h4>profession</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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


        <!-- Footer Start -->
        <div class="footer wow fadeIn" data-wow-delay="0.3s">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-contact">
                            <h2>Office Contact</h2>
                            <table>
                                <tr>
                                    <td><i class="fa fa-map-marker-alt" style="padding-right:.5em;"></i></td>
                                    <td>1198/1/C, Khilgaon Chowdhury Para, Dhaka-1219</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-phone-alt" style="padding-right:.5em;"></i></td>
                                    <td>+8801727265633 <br>+8801727265633 </td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-envelope" style="padding-right:.5em;"></i></td>
                                    <td>aspestcontrol09@gmail.com</td>

                                </tr>
                            </table>
                            
                            <div class="footer-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-link">
                            <h2>Our Services </h2>
                            <a href="#">Household Pest Control</a>
                            <a href="#">Termite Profing</a>
                            <a href="#">Mosquito Control</a>
                            <a href="#">Rodent Control</a>
                            <a href="#">Bed-Bug Service</a>
                            <a href="#">Furmigation</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-link">
                            <h2>Useful Pages</h2>
                            <a href="#">About Us</a>
                            <a href="#">Contact Us</a>
                            <a href="#">Our Team</a>
                            <a href="#">Projects</a>
                            <a href="#">Testimonial</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="newsletter">
                            <h2>Newsletter</h2>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu
                            </p>
                            <div class="form">
                                <input class="form-control" placeholder="Email here">
                                <button class="btn">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container footer-menu">
                <div class="f-menu">
                    <a href="">Terms of use</a>
                    <a href="">Privacy policy</a>
                    <a href="">Cookies</a>
                    <a href="">Help</a>
                    <a href="">FQAs</a>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="/">AS Pest Control</a>, All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Developed By <a href="#">Imam Hossain</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>
</body>

@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="AS Pest Control Bangladesh is one of the Front Liner Pest Control. A S PestControl Best Better Pest Control BD bd Bangladesh. pest control dhaka low budget pest control in dhaka">
    <!-- Favicon -->
    <link href="{{asset('images/AS_Logo.png')}}" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{asset('js/home/lib/flaticon/font/flaticon.css')}}" rel="stylesheet"> 
    <link href="{{asset('js/home/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('js/home/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('js/home/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('js/home/lib/slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('js/home/lib/slick/slick-theme.css')}}" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="{{asset('css/home/style.css')}}" rel="stylesheet">
    <title>A.S Pest Control</title>
    <style>
       
    </style>
    

</head>
<body>
    <div class="wrapper">
    <!-- Top Bar Start -->
    @include('parts.top_bar')
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    @include('parts.navbar')
    <!-- Nav Bar End -->
    @include('parts.message')
    
    @yield('content')

    <!-- Footer Start -->
    @include('parts.footer')
    <!-- Footer End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="{{asset('js/home/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('js/home/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('js/home/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/home/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js/home/lib/lightbox/js/lightbox.min.js')}}"></script>
    <script src="{{asset('js/home/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('js/home/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('js/home/lib/slick/slick.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/home/main.js')}}"></script>
    
</body>
</html>
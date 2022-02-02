<head>
    <style>
        .brand-cls{
            background-color: #081a3d;
            /* max-height: 40vh; */
        }
    </style>

</head>
<body>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        {{-- <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol> --}}
        <div class="carousel-inner brand-cls">
            <div class="container">
    
                <div class="carousel-item active">
                    <img src="{{asset('images/slider/4.jpg')}}" class="d-block w-100" alt="...">
                </div>
    
                <div class="carousel-item">
                    <img src="{{asset('images/slider/no_image.png')}}" class="d-block w-100" alt="...">
                </div>
    
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-3" style="margin-top: 5em; padding-bottom: 5em;">
                            <div class="card" style="width: 100%;">
                                <img src="{{asset('images/slider/4.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                              </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card" style="width: 100%;">
                                <img src="{{asset('images/slider/4.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                              </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card" style="width: 100%;">
                                <img src="{{asset('images/slider/4.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                              </div>
                        </div>

                    </div>
                </div>
    
            </div>
            
          
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>
</body>
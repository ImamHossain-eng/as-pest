<div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        
        @foreach($sliders as $key => $slide)
        <li data-target="#carousel" data-slide-to="{{$key}}" 
        @if($key==0) class="active" 
        @endif></li>
        @endforeach
        
    </ol>
    <div class="carousel-inner">

        @foreach($sliders as $key => $slider)
        <div @if($key==0) class="carousel-item active"
             @else class="carousel-item"
             @endif
        >
            <img src="{{asset('images/slider/'.$slider->image)}}" alt="Carousel Image">
            <div class="carousel-caption">
                <p class="animated fadeInRight">{{$slider->sub_title}}</p>
                <h1 class="animated fadeInLeft">{{$slider->title}}</h1>
                <!--<a class="btn animated fadeInUp" href="#">Get A Quote</a>-->
            </div>
        </div>
        @endforeach

        
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
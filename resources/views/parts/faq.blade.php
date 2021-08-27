<div class="faqs">
            <div class="container">
                <div class="section-header text-center">
                    <p style="text-align:center;">Frequently Asked Question</p>
                    <h2>You May Ask</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div id="accordion-1">

                            @foreach($faq_lefts as $key => $faq)
                            <div class="card wow fadeInLeft" data-wow-delay="0.1s">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapse{{$faq->id}}">
                                        {{$faq->question}}
                                    </a>
                                </div>
                                <div id="collapse{{$faq->id}}" class="collapse" data-parent="#accordion-1">
                                    <div class="card-body">
                                        {!!$faq->ans!!}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="accordion-2">         
                            @foreach($faq_rights as $key => $faq)
                            <div class="card wow fadeInRight" data-wow-delay="0.5s">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapse{{$faq->id}}">
                                        {{$faq->question}}
                                    </a>
                                </div>
                                <div id="collapse{{$faq->id}}" class="collapse" data-parent="#accordion-2">
                                    <div class="card-body">
                                        {!!$faq->ans!!}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
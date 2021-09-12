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
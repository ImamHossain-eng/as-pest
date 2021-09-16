<div class="nav-bar">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="/" class="{{ Request::is('/') ? 'nav-item nav-link active' : 'nav-item nav-link' }}">Home</a>
                    
                    <a href="#" class="{{ Request::is('about') ? 'nav-item nav-link active' : 'nav-item nav-link' }}">About</a>
                    <a href="/team" class="{{ Request::is('team') ? 'nav-item nav-link active' : 'nav-item nav-link' }}">Team</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Our Services</a>
                        <div class="dropdown-menu">
                            @php($abs = Service::all())
                            @foreach($abs as $ab)
                                <a href="/service/{{$ab->id}}" class="dropdown-item">{{$ab->name}}</a>                            
                            @endforeach

                        </div>
                    </div>
                    <a href="/contact" class="{{ Request::is('contact') ? 'nav-item nav-link active' : 'nav-item nav-link' }}">Contact</a>
                </div>
                <div class="ml-auto">
                    {{Form::open(['route'=>'service_search', 'method'=>'POST', 'style'=>'display:flex'])}}
                                <input class="form-control" name="search" type="text" placeholder="Search Service">
                                <button class="btn" type="submit" style="border-radius:5px;margin-left:5px;"><i class="fa fa-search"></i></button>
                    {{Form::close()}}
                     
                    
                </div>
            </div>
        </nav>
    </div>
</div>
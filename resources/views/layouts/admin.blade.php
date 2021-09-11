<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

   
    <!-- BOOTSTRAP STYLES-->
    <link href="{{asset('/css/admin/bootstrap.css')}}" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="{{asset('/css/admin/font-awesome.css')}}" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="{{asset('/css/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="{{asset('/css/admin/custom.css')}}" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel="stylesheet" href="{{asset('css/admin/style.css')}}">
   <style>
       .fa{
           font-size: 25px;
       }
   </style>
  
</head>
<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/admin">Admin Panel</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> First Login : {{Auth::user()->created_at->diffForHumans()}} &nbsp; 

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" style="display:inline;">
    @csrf
    <button class="btn btn-danger square-btn-adjust">Logout</button>
</form>
</div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="{{asset('/images/admin/find_user.png')}}" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="{{ Request::is('admin') ? 'active-menu' : '' }}"  href="/admin"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="{{ Request::is('admin/faq*') ? 'active-menu' : '' }}">
                            <i class="fa  fa-question-circle-o fa-3x"></i> 
                            FAQ <span class="fa arrow"></span>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin/faq/create"><i class="fa fa-plus-square"></i>Add New</a>
                                </li>
                                <li>
                                    <a href="/admin/faq"><i class="fa fa-pencil"></i>Manage</a>
                                </li>
                            </ul>
                        </a>
                    </li>
                    
                    <li>
                        <a href="#" class="{{ Request::is('admin/member*') ? 'active-menu' : '' }}">
                            <i class="fa  fa-user-o"></i> 
                            Member List <span class="fa arrow"></span>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin/member/create"><i class="fa fa-plus-square"></i>Add New</a>
                                </li>
                                <li>
                                    <a href="/admin/member"><i class="fa fa-pencil"></i>Manage</a>
                                </li>
                            </ul>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="{{ Request::is('admin/testimonial*') ? 'active-menu' : '' }}">
                            <i class="fa fa-comments"></i> 
                            Testimonial List <span class="fa arrow"></span>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin/testimonial/create"><i class="fa fa-plus-square"></i>Add New</a>
                                </li>
                                <li>
                                    <a href="/admin/testimonial"><i class="fa fa-pencil"></i>Manage</a>
                                </li>
                            </ul>
                        </a>
                    </li>
					                   
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>
                               
                            </li>
                        </ul>
                      </li>  
                  <li  >
                        <a  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            @include('parts.message')
            @yield('content')              
              

              
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{asset('/js/admin/jquery-1.10.2.js')}}"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{asset('/js/admin/bootstrap.min.js')}}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{asset('/js/admin/jquery.metisMenu.js')}}"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="{{asset('/js/admin/morris/raphael-2.1.0.min.js')}}"></script>
    <script src="{{asset('/js/admin/morris/morris.js')}}"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="{{asset('/js/admin/custom.js')}}"></script>

    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script>
            var ckview = document.getElementById("ckview");
            CKEDITOR.replace(ckview,{
                language:'en-gb'
            });
    </script>
    
</body>
</html>
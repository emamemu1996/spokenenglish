<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Novus Admin Panel an Admin Panel Category Flat Bootstrap Responsive Website Template | Inbox :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="{{asset('admin/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="{{asset('admin/css/style.css')}}" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="{{asset('admin/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="{{asset('admin/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('admin/js/modernizr.custom.js')}}"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="{{asset('admin/css/animate.css')}}" rel="stylesheet" type="text/css" media="all">
<script src="{{asset('admin/js/wow.min.js')}}"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="{{asset('admin/js/metisMenu.min.js')}}"></script>
<script src="{{asset('admin/js/custom.js')}}"></script>
<link href="{{asset('admin/css/custom.css')}}" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
			<div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						<li>
							<a href="index.html" class="active"><i class="fa fa-home nav_icon"></i>Dashboard</a>
						</li>
						<li>
							<a href="{{route('homepagesetting')}}"><i class="fa fa-cogs nav_icon"></i>Homepage setting<span class="nav-badge">10</span> <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="{{route('homepagesetting')}}">Homepage setting section</a>
								</li>

								<li>
									<a href="{{route('slidesection')}}">slide section</a>
								</li>


								<li>
									<a href="{{route('experiencesection')}}">Experience section</a>
								</li>

								<li>
									<a href="{{route('aboutmesec')}}">Aboutme section</a>
								</li>
								<li>
									<a href="{{route('resumesec')}}">Resume section</a>
								</li>

								<li>
									<a href="{{route('skillsec')}}">Skill section</a>
								</li>

								<li>
									<a href="{{route('galarysec')}}">Galary section</a>
								</li>
								<li>
									<a href="{{route('servicessec')}}">Service section</a>
								</li>

								<li>
									<a href="{{route('testimonialsec')}}">Testimonial section</a>
								</li>

								<li>
									<a href="{{route('socialicons')}}">Social section</a>
								</li>
							
							</ul>
							<!-- /nav-second-level -->
						</li>
						<li class="">
							<a href="#"><i class="fa fa-book nav_icon"></i>About Page  <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="{{route('adminaboutsetting')}}">About page setting</a>
								</li>
								<li>
									<a href="{{route('workdetails')}}">About page Work</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
						<li>
							<a href="{{route('dialogue_panel')}}"><i class="fa fa-th-large nav_icon"></i> Dialogue panel </a>
						</li>

						<li>
							<a href="{{route('sentence_panel')}}"><i class="fa fa-th-large nav_icon"></i> Sentence panel </a>
						</li>

						<li>
							<a href="{{route('grammar_panel')}}"><i class="fa fa-th-large nav_icon"></i> Grammar panel </a>
						</li>	

						<li>
							<a href="{{route('quiz_panel')}}"><i class="fa fa-th-large nav_icon"></i> Quiz panel </a>
						</li>

						<li>
							<a href="{{route('ordersec')}}"><i class="fa fa-th-large nav_icon"></i>Order now section </a>
						</li>

						<li>
							<a href="{{route('contactresponse')}}"><i class="fa fa-envelope nav_icon"></i>Contact Response
								@foreach( $countcontact as $countcont)
							 <span class="nav-badge-btm">{{$countcont->cuntcon}}</span>
							 @endforeach
							</a>
						</li>

					
						<li>
							<a href="{{route('contactsetting')}}" class="chart-nav"><i class="fa fa-bar-chart nav_icon"></i>Contact setting <span class="nav-badge-btm pull-right">contact</span></a>
						</li>
					</ul>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<!--logo -->
				<div class="logo">
					<a href="index.html">
						<h1>NOVUS</h1>
						<span>AdminPanel</span>
					</a>
				</div>
				<!--//logo-->
				<!--search-box-->
				<div class="search-box">
					<form class="input">
						<input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
						<label class="input__label" for="input-31">
							<svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
								<path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
							</svg>
						</label>
					</form>
				</div><!--//end-search-box-->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				  @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

				<!--notification menu end -->
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="images/a.png" alt=""> </span> 
									<div class="user-name">
										<p>{{ Auth::user()->name }}</p>
										<span>Administrator</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
								<li> <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> <i class="fa fa-cog"></i> 
                                        {{ __('Logout') }}  </a> </li> 


								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
								
							</ul>
						</li>
					</ul>
				</div>

				@endguest
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
@include('layouts.header_css')

<body>
    <!-- header -->
    <header id="site-header" class="fixed-top">
        <div class="container">
            @foreach($slidesetting as $slide)
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.html">
                     <img src="{{asset('images/'.$slide->logo)}}" width="50px" height="50px">

                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                 @endforeach



               @include('layouts.nav_section')

               
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!-- //header -->
    @foreach($aboutpageset as $aboutpagsetting)

    <!-- inner banner -->
    <section class="inner-banner py-5" style="background: url({{asset('images/'.$aboutpagsetting->image)}}) no-repeat center;">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">About Me</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>My Intro</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

   <!-- about section -->
    <section class="w3l-aboutblock1 pt-lg-5 pt-2 pb-5" id="about">
        <div class="container py-md-5 py-4">
            <div class="row align-items-center">
                  @foreach($aboutsetting as $abot)
                <div class="col-lg-4">
                    <div class="position-relative">
                        <img src="{{asset('images/'.$abot->image)}}" alt="" class="radius-image img-fluid">
                    </div>
                </div>
                <div class="col-lg-8 ps-lg-5 mt-lg-0 mt-5">
                    <h5 class="title-small mb-1">{{$abot->title1}}</h5>
                    <h3 class="title-style">{{$abot->title2}}</h3>
                    <p class="mt-3">{{$abot->des}}</p>

                      

                        
                    <div class="my-info mt-md-5 mt-4">


                         @foreach($aboutintrosetting as $abotintro)
                        
                
                        <ul class="single-info">
                            <li class="name-style">{{$abotintro->title1}}</li>
                            <li>:</li>
                            <li>
                                <p>{{$abotintro->title2}}</p>
                            </li>
                        </ul>

                   @endforeach


                    </div>
                    <a href="{{$abot->downloadcv}}" class="btn btn-style mt-5">Download CV</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //about section -->
    @endforeach


 
    <!-- text with button -->
    <section class="w3l-timeline-1 text-center py-5">
        <div class="container py-lg-5 py-4">
            <div class="mx-auto" style="max-width:800px">
                <h3 class="title-style mb-4">{{$aboutpagsetting->title}}</h3>
                <p>{{$aboutpagsetting->des}}</p>
                <a href="{{$aboutpagsetting->btnurl}}" class="btn btn-style mt-5">Learn More</a>
            </div>
        </div>
    </section>
    <!-- //text with button -->

    <!-- about2 section -->
    <section class="w3l-about2 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row align-items-center">
                <div class="col-lg-6 pe-lg-5">
                    <h5 class="title-small mb-1">{{$aboutpagsetting->abouttitle1}}</h5>
                    <h3 class="title-style">{{$aboutpagsetting->abouttitle2}}</h3>
                    <div class="cwp23-text-cols mt-lg-5 mt-4">

                        @foreach($aboutworkdata as $aboutwork)
                        <div class="column">
                            <span>{{$aboutwork->workcount}}</span>
                            <h4>{{$aboutwork->title}}</h4>
                            <p>{{$aboutwork->des}}</p>
                        </div>
                   

                     @endforeach

                    </div>
                </div>
                <div class="col-lg-6 cwp23-text align-self mt-lg-0 mt-5">
                    <img src="{{asset('images/'.$aboutpagsetting->aboutimage)}}" alt="" class="radius-image img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- //about2 section -->

    @endforeach

    <!-- qualification section -->
    <section class="w3l-timeline-1 py-5">
        <div class="container py-lg-5 py-4">
            <div class="title-heading-w3 text-center mb-sm-5 mb-4">
                <h5 class="title-small">Resume</h5>
                <h3 class="title-style">Awesome Journey</h3>
            </div>
            <div class="row">
                <div class="col-lg-6">

                    <h5 class="sub-title-timeline"><i class="fas fa-graduation-cap"></i> Education</h5>
                    <div class="timeline">



                     @foreach($resumeedu as $resumeed)

                        <div class="column">
                            <div class="title">
                                <h2>{{$resumeed->exname}}</h2>
                            </div>
                            <div class="description">
                                <p>{{$resumeed->institute}}</p>
                                <h6><i class="fas fa-calendar-alt"></i> {{$resumeed->duration}}</h6>
                            </div>
                        </div>

                         @endforeach

                      

                    </div>
                </div>

                <div class="col-lg-6 mt-lg-0 mt-4">
                    <h5 class="sub-title-timeline"><i class="fas fa-briefcase"></i> Experience</h5>
                    <div class="timeline">



                        @foreach($resumeexperi as $resumeexp)
                        <div class="column">
                            <div class="title">
                                <h2>{{ $resumeexp->exname}}</h2>
                            </div>
                            <div class="description">
                                <p>{{ $resumeexp->institute}}</p>
                                <h6><i class="fas fa-calendar-alt"></i> {{ $resumeexp->duration}}</h6>
                            </div>
                        </div>

                         @endforeach
                       
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //qualification section -->

     <!-- skills section -->
    <section class="w3l-progress py-5" id="progress">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mb-sm-5 mb-4">
                <h5 class="title-small mb-1">My Skills</h5>
                <h3 class="title-style">My Expertise Area</h3>
            </div>
            <div class="row py-lg-4">

                <div class="col-lg-6 pe-lg-5">

                 @foreach($skillsec1 as $skill1)
                    <div class="progress-info info1">
                        <h6 class="progress-tittle">{{$skill1->skillname}}<span class="">{{$skill1->parcen}}</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped {{$skill1->color}}" role="progressbar"
                                style="width: {{$skill1->parcen}}" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>

                   @endforeach
                   
                   
                </div>


                <div class="col-lg-6 ps-lg-5 mt-lg-0 mt-5">


                    @foreach($skillsec2 as $skill2)
                    <div class="progress-info info1">
                        <h6 class="progress-tittle">{{$skill2->skillname}}<span class="">{{$skill2->parcen}}</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped {{$skill2->color}}" role="progressbar"
                                style="width: {{$skill2->parcen}}" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>

                   @endforeach
                   

                   
                   
                </div>
            </div>
        </div>
    </section>
    <!-- //skills section -->

    @include('layouts.footer_js')
</body>

</html>
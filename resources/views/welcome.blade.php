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
    

    <!-- banner section -->
    <section class="w3l-banner py-5" id="home" style="background: url({{asset('images/'.$slide->slideimage)}}) no-repeat center;">
        <div class="container py-md-5 py-4">
            <div class="row align-items-center pt-4">
                <div class="col-md-6 banner-left pe-xl-5">
                  

                    <h4>{{$slide->slidetext1}}</h4>

                     

                    <h3 class="mb-3 mt-1">{{$slide->slidetext2}}</h3>
                    <p class="banner-sub me-md-5">{{$slide->slidetext3}}
                    </p>
                    <div class="d-flex align-items-center buttons-banner mt-sm-5 mt-4">
                        <a href="{{$slide->slidebtnurl}}" class="btn btn-style me-2">{{$slide->slidebtnnam}}</a>
                    </div>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>

        @endforeach
        
        <!-- animations icons -->
        <div class="icon-effects-w3-1 text-right">
            <img src="assets/images/icon2.png" alt="" class="img-fluid">
        </div>
        <div class="icon-effects-w3-2 text-right">
            <img src="assets/images/icon3.png" alt="" class="img-fluid">
        </div>
        <div class="icon-effects-w3-3 text-right">
            <img src="assets/images/icon1.png" alt="" class="img-fluid">
        </div>
        <div class="icon-effects-w3-4 text-right">
            <img src="assets/images/icon6.png" alt="" class="img-fluid">
        </div>
        <!-- //animations icons -->
    </section>
    <!-- //banner section -->

    <!-- logo partners -->
    <section class="w3l-clients pt-5 pb-4" id="clients">
        <div class="container">
            <div class="company-logos text-center">
                <div class="row mx-auto justify-content-center">
                    <div class="col-md-2 col-sm-4 col-6 ">
                        <img src="{{asset('images/'.$slide->paylogo1)}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2 col-sm-4 col-6">
                        <img src="{{asset('images/'.$slide->paylogo2)}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 mt-sm-0 mt-3">
                        <img src="{{asset('images/'.$slide->paylogo3)}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 mt-md-0 mt-3">
                        <img src="{{asset('images/'.$slide->paylogo4)}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 mt-md-0 mt-3">
                        <img src="{{asset('images/'.$slide->paylogo5)}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //logo partners -->

    <!-- grids section -->
    <section class="w3l-bottom-grids-6 pt-sm-5 pb-5" id="features">
        <div class="container pt-lg-4">
            <div class="grids-area-hny main-cont-wthree-fea row">
                <div class="col-md-3 col-sm-4 ps-xl-5">
                    @foreach($homesettingexduration as $exdura)  
                    <h4 class="ab-exper-count mb-sm-4 ps-lg-4">{{$exdura->exduration}}</h4>
                    <p class="ab-content ps-lg-4">years of experience working</p>
                </div>
                <div class="col-xl-8 col-md-9 col-sm-8 offset-xl-1 ps-xl-0 pe-xl-5 mt-sm-0 mt-4">
                    <h3 class="title-style mb-sm-5 mb-4">{{$exdura->extitle}}</h3>
                    <div class="row">

                        @endforeach


                          @foreach($experiencesetting as $experience)


                        <div class="col-lg-4 col-md-6 grids-feature" style="margin-bottom: 5px;">
                            <div class="area-box">
                                <div class="icon-style">
                                    <i class="{{$experience->icon}}"></i>
                                </div>
                                <h4><a href="#feature" class="title-head">{{$experience->exname}}</a></h4>
                                <a class="btn more p-0">Explore More<i
                                        class="fas fa-long-arrow-alt-right ms-1"></i></a>
                            </div>
                        </div>
                       

                       @endforeach
                     
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //grids section -->

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

    <!-- projects section -->
    <section class="w3l-gallery pb-5" id="gallery">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mb-sm-5 mb-4">
                <h5 class="title-small mb-1">Portfolio</h5>
                <h3 class="title-style">Some of my most recent projects</h3>
            </div>
            <div class="row">

                @foreach($galarysec as $galary)

                <div class="col-lg-4 col-md-6 item" style="margin-bottom:5px;">
                    <a href="{{asset('images/'.$galary->image)}}" data-lightbox="example-set" data-title="Project 1"
                        class="zoom d-block">
                        <img class="card-img-bottom d-block" src="{{asset('images/'.$galary->image)}}" alt="Card image cap">
                        <span class="overlay__hover"></span>
                        <span class="hover-content">
                            <span class="title">{{$galary->title}}</span>
                            <span class="content">{{$galary->des}}</span>
                        </span>
                    </a>
                </div>


               @endforeach



              


             
                
            </div>
        </div>
    </section>
    <!-- //projects section -->

    <!-- home service section -->
    <section class="w3l-servicesblock1 py-5" id="services">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mb-sm-5 mb-4">
                <h5 class="title-small mb-1">What i do?</h5>
                <h3 class="title-style">How I can help your next project</h3>
            </div>
            <div class="w3-services-grids py-lg-4">
                <div class="fea-gd-vv row">
                  
                     @foreach($servicesec as $service)

                    <div class="col-lg-3 col-md-6 mt-md-0 mt-4" style="margin-bottom:20px;">
                        <div class="feature-gd icon-vilot">
                            <div class="icon">
                                <i class="{{$service->icon}}"></i>
                            </div>
                            <div class="icon-info">
                                <a href="#url">{{$service->firstservicename}}<br> {{$service->lastservicename}}</a>
                            </div>
                        </div>
                    </div>

                  @endforeach
                  
                </div>
            </div>
           
        </div>
    </section>
    <!-- //home service section -->

    <!-- testimonials section -->
    <section class="w3l-testimonials py-5" id="testimonials">
        <div class="container py-md-5 py-4">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="owl-two owl-carousel owl-theme">

                    @foreach($testimonialsec as $testimonial)
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="message">
                                    <img src="assets/images/quote.png" alt="" class="img-fluid mb-2" />
                                    <p><q>{{$testimonial->des}}</q></p>
                                    <div class="name mt-4 mb-4">
                                        <h4>{{$testimonial->name}}</h4>
                                        <p>{{$testimonial->designation}}</p>
                                    </div>
                                </div>
                                <div class="img-circle">
                                    <img src="{{asset('images/'.$testimonial->image)}}" class="img-fluid radius-image" alt="client">
                                </div>
                            </div>
                        </div>


                @endforeach
                      
                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //testimonials section -->


   
    <!-- //footer -->

   


      @include('layouts.footer_js')



</body>

</html>
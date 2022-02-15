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
                  @endforeach
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

    <!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">Services</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Services</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

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

    <!-- pricing section -->
    <section class="w3l-pricing py-5">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mb-sm-5 mb-4">
                <h5 class="title-small mb-1">Get Started</h5>
                <h3 class="title-style">The Best Pricing Plans</h3>
            </div>
            <div class="row t-in justify-content-center">


                @foreach($ordertable as $ordertab)

                <div class="col-lg-4 col-md-6 price-main-info">
                    <div class="price-inner card box-shadow">

                        <div class="card-body">
                            <h4 class="text-uppercase text-center mb-3">{{ $ordertab->planname}}</h4>
                            <h5 class="card-title pricing-card-title">
                                {{ $ordertab->planprice}}
                            </h5>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li> <span class="fa fa-check"></span>{{ $ordertab->planservice1}}</li>
                                <li> <span class="fa fa-check"></span> {{ $ordertab->planservice2}}</li>
                                <li class="disable"> <span class="fa fa-check"></span> {{ $ordertab->planservice3}}</li>
                                <li class="disable"> <span class="fa fa-check"></span> {{ $ordertab->planservice4}}</li>
                                <li class="disable"> <span class="fa fa-check"></span> {{ $ordertab->planservice5}}</li>
                            </ul>
                            <div class="read-more mt-4 pt-lg-2 text-center">
                                <a href="contact.html" class="btn btn-style"> Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                 @endforeach

          
            </div>
        </div>
    </section>
    <!-- //pricing section -->

        @include('layouts.footer_js')
</body>

</html>
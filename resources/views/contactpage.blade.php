@include('layouts.header_css')
<body>
    <!-- header -->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.html">
                    <i class="fas fa-bold"></i>.
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

    <!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title pt-sm-5 pt-4">Contact Us</h4>
                <ul class="breadcrumbs-custom-path mt-2">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    @foreach($contactset as $contact)

    <!-- contact -->
    <section class="w3l-contact py-5" id="contact">
        <div class="container py-lg-5 py-4">
            <div class="title-heading-w3 text-center mb-sm-5 mb-4">
                <h5 class="title-small">Get In Touch</h5>
                <h3 class="title-style">Contact Me</h3>
            </div>
            <div class="row contact-block">
                <div class="col-md-6 contact-left pe-lg-5">
                    <h3 class="mb-sm-4 mb-3">Contact Info</h3>
                    <p class="cont-para mb-sm-5 mb-4">{{$contact->des}}</p>
                    <div class="cont-details">
                        <p><i class="fas fa-map-marker-alt"></i>{{$contact->location}}</p>
                        <p><i class="fas fa-phone-alt"></i><a href="tel:+1(21) 234 4567">{{$contact->mobile}}</a></p>
                        <p><i class="fas fa-envelope-open-text"></i><a href="mailto:example@mail.com"
                                class="mail">{{$contact->email}}</a></p>
                    </div>
                    <h4 class="mb-3 mt-5">Follow Me</h4>
                    <iframe scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:80px;width:806px" allowTransparency="true"src="//www.facebook.com/plugins/like.php?locale=en_US&href={{$contact->fbpagelink}}&layout=button_count&action=like&show_faces=false&share=true&width=806&"></iframe>
                </div>

                


                <div class="col-md-6 contact-right mt-md-0 mt-5 ps-lg-0">
                    <form action="{{route('sendemail')}}" method="post" class="signin-form">


                     @if (session('status'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                            </div>
                    @endif


                      @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                   {{ csrf_field()}}



                        <div class="input-grids">
                            <input type="text" name="w3lName" id="w3lName" placeholder="Your Name*"
                                class="contact-input" required="" />
                            <input type="email" name="w3lSender" id="w3lSender" placeholder="Your Email*"
                                class="contact-input" required="" />
                            <input type="text" name="w3lSubect" id="w3lSubect" placeholder="Subject*"
                                class="contact-input" required="" />
                            <input type="number" name="w3lWebsite" id="w3lWebsite" placeholder="Mobile Number"
                                class="contact-input" required="" />
                        </div>
                        <div class="form-input">
                            <textarea name="w3lMessage" id="w3lMessage" placeholder="Type your message here*"
                                required=""></textarea>
                        </div>

                          
                        <button class="btn btn-style">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- map -->
  




    <div class="map-iframe">
        <iframe
            src="https://maps.google.com/maps?q={{$contact->maplocation}}&t=&z=13&ie=UTF8&iwloc=&output=embed"
            width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>


    </div>
    <!-- //contact -->

    @endforeach

     @include('layouts.footer_js')
</body>

</html>
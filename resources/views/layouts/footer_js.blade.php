 <!-- footer -->
    <footer class="footer-w3ls text-center py-5">
         @foreach($slidesetdata as $sliderset)
        <div class="container pt-4">
            <div class="mx-auto" style="max-width:600px;">
                <a href="index.html" class="footer-logo py-1">
                   <img src="{{asset('images/'.$sliderset->logo)}}" width="50px" height="50px">
                </a>
                @endforeach
                @foreach($footerdes as $footdes)
                <p class="mt-4 text-white">{{$footdes->footerdes}}.</p>

                    @endforeach
                <div class="social-icons-main mt-4 pb-3">
                    <ul class="social-icons3">

                        @foreach($socialicon as $social)
                        <li>
                            <a href="{{$social->iconurl}}">
                                <i class="{{$social->iconcode}}"></i>
                            </a> 
                        </li>
                        @endforeach

                        
                      
                    </ul>
                </div>
            </div>
         
        </div>
    </footer>


 <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <!-- //common jquery plugin -->

    <!-- libhtbox -->
    <script src="{{ asset('assets/js/lightbox-plus-jquery.min.js') }}"></script>
    <!-- libhtbox -->

    <!-- testimonials owlcarousel -->
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.owl-two').owlCarousel({
                loop: true,
                margin: 30,
                nav: false,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 1,
                        nav: false
                    },
                    667: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 1,
                        nav: false
                    }
                }
            })
        })
    </script>
    <!-- //script for Testimonials-->

    <!-- theme switch js (light and dark)-->
    <script src="{{ asset('assets/js/theme-change.js') }}"></script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!-- bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- //bootstrap -->
    <!-- //Js scripts -->
    
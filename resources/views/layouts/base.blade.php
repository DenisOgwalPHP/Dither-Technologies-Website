<!DOCTYPE html>
<html>
<head>
	<title>Dither Technologies| Home </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/user/Dither 1.png') }}" />


	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.css') }}"> <!-- Bootstrap-Core-CSS -->

	<link href="{{ asset('assets/css/all.min.css') }}" rel='stylesheet' type='text/css' />
	{{-- <link href="{{ asset('assets/css/style.css') }}" rel='stylesheet' type='text/css' /> --}}
	{{-- <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet"> --}}

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" />
    <!-- Owl-carousel-CSS -->
	<link href="{{ asset('assets/css/fontawesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/swiper-bundle.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
	{{-- <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('assets/css/animate.min.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('assets/css/new.css') }}" rel='stylesheet' type='text/css' />
	<link href="//fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    @livewireStyles

</head>

<body>
    {{-- <div class="preloader">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div> --}}


    @livewire('header-component')

    <main class="creasoft-wrap ">

        <div class="line_wrap">
            <div class="line_item"></div>
            <div class="line_item"></div>
            <div class="line_item"></div>
            <div class="line_item"></div>
            <div class="line_item"></div>
        </div>
        {{ $slot }}

        <section class="subscribe-newsletter sec-mar-top">
            <div class="container">
                <div class="news-letter-content">
                    <div class="row align-items-center">
                        <div
                            class="col-lg-6 wow animate fadeInLeft"
                            data-wow-delay="200ms"
                            data-wow-duration="1500ms"
                        >
                            <div class="subscribe-cnt">
                                <span>Get In Touch</span>
                                <h3>Subscribe Our</h3>
                                <strong>Newsletter</strong>
                            </div>
                        </div>
                        <div
                            class="col-lg-6 wow animate fadeInRight"
                            data-wow-delay="200ms"
                            data-wow-duration="1500ms"
                        >
                            <div class="subscribe-form">
                                <form action="#" method="post">
                                    <input
                                        type="email"
                                        name="email"
                                        placeholder="Type Your Email"
                                    />
                                    <input type="submit" value="connect" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    @livewire('footer-component')


<!-- js -->
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- custom JS code after importing jquery and owl -->

<script type="text/javascript" src="{{ asset('assets/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/waypoints.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
 <!-- Necessary-JavaScript-File-For-Bootstrap -->


<!-- //requried-jsfiles-for owl -->	<!-- //testimonials -->
<!-- start-smooth-scrolling -->
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->


	<!-- smooth scrolling js -->
	<script src="{{ asset('assets/js/wow.min.js') }}"></script>
	<script src="{{ asset('assets/js/particles.min.js') }}"></script>
	{{-- <script src="{{ asset('assets/js/app.js') }}"></script> --}}
	<script src="{{ asset('assets/js/custom.js') }}"></script>
	<!-- //smooth scrolling js -->
    <script src="https://cdn.tiny.cloud/1/2njikv0ll2zrbxiokj4kfcipou54050t1nmwtzjp5190tsm0/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    @livewireScripts
    @stack('scripts')
 </body>
</html>

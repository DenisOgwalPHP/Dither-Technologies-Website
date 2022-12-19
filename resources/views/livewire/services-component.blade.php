<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrapper">
                    <div class="breadcrumb-cnt">
                        <h1>Service</h1>
                        <span
                            ><a href="/">Home</a
                            ><i class="bi bi-arrow-right"></i
                            >Service</span
                        >
                        <div class="breadcrumb-video">
                            <img
                                src="{{ asset('assets/images/customer_service_1.640.jpg') }}"
                                alt=""
                            />
                            {{-- <div class="video-inner">
                                <a
                                    class="video-popup"
                                    href="https://www.youtube.com/watch?v=0O2aH4XLbto"
                                    ><i class="fas fa-play"></i
                                ></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services-grid sec-mar">
    <div class="container">
        <div class="title-wrap">
            <div class="sec-title">
                <span>Our Solutions</span>
                <h2>Services</h2>

            </div>
        </div>
        <div class="row g-4">
            <div
                class="col-md-6 col-lg-4 wow animate fadeInUp"
                data-wow-delay="200ms"
                data-wow-duration="1500ms"
            >
                <div class="single-service layout2">
                    <span>01</span>
                    <div class="icon">
                        {{-- <img src="assets/img/icons/service-icon-1.png" alt=""> --}}
                        <i class="fas fa-home"></i>
                    </div>
                    <h4>Software Development</h4>
                        <p>We develop software Ranging from Desktop Applications, Mobile Applications(Android) to Embedded systems Software. </p>
                    <div class="read-btn">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div
                class="col-md-6 col-lg-4 wow animate fadeInUp"
                data-wow-delay="400ms"
                data-wow-duration="1500ms"
            >
                <div class="single-service layout2">
                    <span>02</span>
                    <div class="icon">
                        {{-- <img src="assets/img/icons/service-icon-2.png" alt=""> --}}
                        <i class="fas fa-server"></i>
                    </div>
                    <h4>Computer Networking</h4>
                            <p>We establish Computer Networks in offices, homes, Labaratories, Internet Cafe and organisation environments. We also Install CCTV Cameras.</p>
                    <div class="read-btn">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div
                class="col-md-6 col-lg-4 wow animate fadeInUp"
                data-wow-delay="600ms"
                data-wow-duration="1500ms"
            >
                <div class="single-service layout2">
                    <span>03</span>
                    <div class="icon">
                        {{-- <img src="assets/img/icons/service-icon-3.png" alt=""> --}}
                        <i class="fas fa-globe"></i>
                    </div>
                    <h4>Web development And Hosting</h4>
                            <p>We design websites, develop web applications as well do web hosting at cheaper costs.</p>
                    <div class="read-btn">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div
                class="col-md-6 col-lg-4 wow animate fadeInUp"
                data-wow-delay="800ms"
                data-wow-duration="1500ms"
            >
            <div class="single-service layout2">
                <span>04</span>
                <div class="icon">
                    {{-- <img src="assets/img/icons/service-icon-3.png" alt=""> --}}
                    <i class="fas fa-globe"></i>
                </div>
                <h4>IT Consultancy</h4>
                        <p>We install A number of software products, system servers, database servers, etc. as well as IT Research,configurations and maintaining computers. </p>
                <div class="read-btn">
                    <a href="#">Read More</a>
                </div>
            </div>
            </div>

        </div>

        <div class="project-slider">
            <h4>Some Of Our Projects</h4>

            <div class="swiper project-slide">
                <div class="swiper-wrapper owl-carousel owl-theme owl2">
                    @foreach ($projects as $project)
                    <div class="swiper-slide slide slider-1 item">
                        <div class="single-item">
                            <div class="item-img">
                                <a href="{{ route('project.detail',['slug' =>$project->slug]) }}">
                                    <img src="{{ asset('images/projects') }}/{{ $project->image }}" alt="{{ $project->name }}" >
                                </a>
                            </div>
                            <div class="item-inner-cnt">
                                <span>{{ $project->name }}</span>
                                <h4>[{{ $project->short_description }}]</h4>
                                <div class="view-btn">
                                    <a href="{{ route('project.detail',['slug' =>$project->slug]) }}">view details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
    <script type="text/javascript">
        var slideIndex = 0;
        carousel();
        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > x.length) {slideIndex = 1}
            x[slideIndex-1].style.display = "block";
            setTimeout(carousel, 5000); // Change image every 2 seconds
        }
    </script>
    <script type="text/javascript">
        var slides = document.querySelectorAll('.slide');
        var btns = document.querySelectorAll('.btn');
        let currentSlide = 1;
        // Owlcarousel
        $(document).ready(function(){
        $(".owl1").owlCarousel({
                    items:1,
                    loop:true,
                    nav:true,
                    dots:true,
                    autoplay:true,
                    autoplaySpeed:1000,
                    smartSpeed:1500,
                    autoplayHoverPause:true
                });
        $(".owl2").owlCarousel({
            items:3,
            loop:true,
            margin:10,
            dots:true,
            nav:true,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            center: true,
            navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
            // responsive:{
            //     0:{
            //         items:1
            //     },
            //     600:{
            //         items:1
            //     },
            //     1000:{
            //         items:3
            //     }
            // }
        });
        });

        // Javascript for image slider manual navigation
        var manualNav = function(manual){
        slides.forEach((slide) => {
            slide.classList.remove('active');

            btns.forEach((btn) => {
            btn.classList.remove('active');
            });
        });

        slides[manual].classList.add('active');
        btns[manual].classList.add('active');
        }

        btns.forEach((btn, i) => {
        btn.addEventListener("click", () => {
            manualNav(i);
            currentSlide = i;
        });
        });

        // Javascript for image slider autoplay navigation
        var repeat = function(activeClass){
        let active = document.getElementsByClassName('active');
        let i = 1;

        var repeater = () => {
            setTimeout(function(){
            [...active].forEach((activeSlide) => {
                activeSlide.classList.remove('active');
            });

            slides[i].classList.add('active');
            btns[i].classList.add('active');
            i++;

            if(slides.length == i){
            i = 0;
            }
            if(i >= slides.length){
            return;
            }
            repeater();
        }, 10000);
        }
        repeater();
        }
        repeat();
    </script>
@endpush



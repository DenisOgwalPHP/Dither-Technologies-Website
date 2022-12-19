<section class="hero-area">
    <style>
        /* .banner-top{
            margin-top: 20px;
        }
        .owl1{
            margin: 60px 0px;
        }

        .slide-1 {
            position: relative;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        } */



        /* .slide-content {
            text-align: center;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: #fff;
            padding: 0 20%;
        } */

        .slide-content h1 {
            font-family: "Anton", serif;
            font-size: 45px;
            text-transform: uppercase;
            color: #fff;
        }

        .slide-content p {
            /* font-family: "Lato", serif; */
            font-size: 20px;
            font-weight:500 !important;
            margin-bottom: 20px;
        }
        @keyframes heartbeat
        {
        0%
        {
            transform: scale( .75 );
        }
        20%
        {
            transform: scale( 1 );
        }
        40%
        {
            transform: scale( .75 );
        }
        60%
        {
            transform: scale( 1 );
        }
        80%
        {
            transform: scale( .75 );
        }
        100%
        {
            transform: scale( .75 );
        }
        }

        .slide-content a {
            font-family: "Roboto", serif;
            font-size: 25px;
            text-transform: uppercase;
            font-weight: bolder;
            padding: 10px 0;
            border: none;
            color: rgb(255, 255, 255);
            background-color: transparent;
        }
        .slide-content a:hover {
            color: #59aee9;
        }
        .slide-content a i {
            margin-left: 10px;
            animation: heartbeat 1s infinite;
        }
        .owl2 .owl-prev, .owl2 .owl-next{
            color: rgb(255, 255, 255) !important;
            height: 40px;
            width: 40px;
            font-size: 20px !important;
            border-radius: 50% !important;
            background-color: #2a2a2a !important;
        }
        .owl2 .owl-prev{
            left: 0% !important;
        }
        .owl2 .owl-next{
            right: 0% !important;
        }
        .owl2 .owl-dots {
            display: none !important;
        }
        .owl-dots {
            width: 100%;
            text-align: center;
            position: absolute;
            bottom: 1%;
        }

         .owl-dots span {
            width: 10px !important;
            height: 10px !important;
        }
        .owl-dots .owl-dots.active {
            background: #59aee9  !important;
        }

        .owl-dots button {
            border: none !important;
            outline: none !important;
        }

        .owl-nav button {
            border: none !important;
            outline: none !important;
        }

        .owl-prev, .owl-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            border-radius: 50%;
            background-color: #2a2a2a !important;
            color: #e4e4e4 !important;
            font-size: 65px !important;
            font-weight: bolder !important;
            background:none !important;
        }

        .owl-prev {
            left: 1%;
        }

        .owl-next {
            right: 1%;
        }
    </style>

    <div id="particles-js"></div>
    <div class="verticale-social">
        <ul class="vertical-media">
            <li><a href="{{ $setting->facebook }}" target="_blank">facebook</a></li>
            <li><a href="{{ $setting->instagram }}" target="_blank">instagram</a></li>
            <li><a href="{{ $setting->linkedIn }}" target="_blank">linkedIn</a></li>
        </ul>
    </div>
    <div class="hero-wrapper">

        <div class="container owl-carousel owl-theme owl1">
            <div class="row align-items-center slide slide-1 item">
                <div class="col-lg-6">
                    <div class="hero-content layout2">
                        <h1>Software Development</h1>
                        <p >Trust us today to develop you a system to manage your Business/Company Or Select From A list of Our Products</p>
                        <div class="buttons">
                            <div class="cmn-btn">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                                <a href="{{ route('about') }}">About Us</a>
                            </div>

                            <div class="cmn-btn layout-two">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                                <a href="{{ route('services') }}" role="button">View Details<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-img">
                        <img src="{{ asset('assets/images/ban11.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row align-items-center slide slide-1 item">
                <div class="col-lg-6">
                    <div class="hero-content layout2">
                            <h1>Computer Networking</h1>
                                <p>We are Proffessionals when it comes to Computer Network Design and Installations</p>
                        <div class="buttons">
                            <div class="cmn-btn">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                                <a href="{{ route('about') }}">About Us</a>
                            </div>

                            <div class="cmn-btn layout-two">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                                    <a href="{{ route('services') }}"   role="button">View Details <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-img">
                        <img src="{{ asset('assets/images/ban22.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row align-items-center slide slide-1 item">
                <div class="col-lg-6">
                    <div class="hero-content layout2">
                            <h1>Mobile Apps Development</h1>
                                <p>We Develop Cross plartform Mobile Apps for Android, IOS and Windows </p>
                        <div class="buttons">
                            <div class="cmn-btn">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                            <a href="{{ route('services') }}"  role="button">View Details <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            </div>

                            <div class="cmn-btn layout-two">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                                <a href="portfolio.html">See Project</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-img">
                        <img src="{{ asset('assets/images/ban33.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row align-items-center slide slide-1 item">
                <div class="col-lg-6">
                    <div class="hero-content layout2">
                            <h1>Website Development</h1>
                                    <p> We develop Websites/Web Applications for Our Clients But Also Host what we Develop</p>
                        <div class="buttons">
                            <div class="cmn-btn">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                                <a href="{{ route('about') }}">About Us</a>
                            </div>

                            <div class="cmn-btn layout-two">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                            <a href="{{ route('services') }}"   role="button">View Details<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-img">
                        <img src="{{ asset('assets/images/ban44.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row align-items-center slide slide-1 item">
                <div class="col-lg-6">
                    <div class="hero-content layout2">
                            <h1>IT Consultancy</h1>
                                    <p >We Install Windows Servers and Database Servers but also install any other Softwares for our Clients</p>
                        <div class="buttons">
                            <div class="cmn-btn">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                                <a href="{{ route('about') }}">About Us</a>
                            </div>

                            <div class="cmn-btn layout-two">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                            <a href="{{ route('services') }}"   role="button">View Details<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-img">
                        <img src="{{ asset('assets/images/ban55.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row align-items-center slide slide-1 item">
                <div class="col-lg-6">
                    <div class="hero-content layout2">
                            <h1>CCTV Camera Installation</h1>
                                    <p >We Install CCTV Cameras In Homes, Supermarkets, Stores, Pharmacy, Shop,etc</p>
                        <div class="buttons">
                            <div class="cmn-btn">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                                <a href="{{ route('about') }}">About Us</a>
                            </div>

                            <div class="cmn-btn layout-two">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                            <a href="{{ route('services') }}"   role="button">View Details<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-img">
                        <img src="{{ asset('assets/images/ban66.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="services-area  sec-mar">
    <div class="container">
        <div class="title-wrap wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <div class="sec-title ">
                <span>Our Solutions</span>
                <h2>Services</h2>
                <p>Dither Technologies Overtime has developed a number of Management systems/ Software Products ranging from Schools systems, Hospital/Clinic systems, SACCO/Money Lender Management System, Point of Sale software, etc. But also Dither Technologies has Developed A number of Custom Software for different Companies.
                    We also offer services like Networks Installation for Laboratories and Buildings, CCTV Camera Installations, Web Development and Hosting, Software and Server Installations.</p>
            </div>
        </div>
        <div class="swiper services-slider">
            <div class="swiper-wrapper owl-carousel owl-theme owl2">
                <div class="swiper-slide wow animate fadeInUp slide slider-1 item" data-wow-delay="200ms" data-wow-duration="1500ms">
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
                <div class="swiper-slide wow animate fadeInUp slide slider-1 item" data-wow-delay="400ms" data-wow-duration="1500ms">
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
                <div class="swiper-slide wow animate fadeInUp slide slider-1 item" data-wow-delay="600ms" data-wow-duration="1500ms">
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
                <div class="swiper-slide wow animate fadeInUp slide slider-1 item" data-wow-delay="800ms" data-wow-duration="1500ms">
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
        </div>

    </div>
</section>


<section class="about-area sec-mar-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 or-2 wow animate fadeIn" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="sec-title  ">
                    <span>Dither-Tech</span>
                    <h2>About Us</h2>
                </div>
                <div class="about-left">
                    <h2>We do design, code & develop Software finally launch.</h2>
                    <p>{{ str_limit(strip_tags("Dither Technologies, Developers and Designers of software solutions for the service Delivery Sector, Proffessional Computer Network Experts. Its A registered Ugandan company Limited By shares. The company’s flagship products are Essential POS,Essential Schools, Essential Hospitals and Essential Finance. There are Prospective leading software packages for entrepreneurs and institutions seeking to improve Service Delivery, Records keeping, Reports and accountability in their investments. Essential Applications allow a user To really Store And Retrieve records as well perform analysis and generate reports from the records while offline but as well can backup data to online database that can be accessed anywhere using online access web application and this helps to coordinate and manage multi branch businesses/investments with little ease for investors but also its offline accessibility allows continuous working at different branches even in absence of WAN network connections(Internet). There is no other desktop publishing software company focused exclusively on Cross platform systems like Dither Technologies is."),150,'...')  }}</p>
                    <div class="company-since ">
                        <div class="company-logo">
                            <a href="{{ route('about') }}">Dither Technologies(About US)</a>
                        </div>
                        <strong>#1</strong>
                        <h4>Best Creative IT Agency And Solutions <span>Since 2019.</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 or-1 wow animate fadeIn" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="about-right ">
                    <div class="banner-1">
                        <img src="{{ asset('assets/user/IMG_1793.JPG') }}" alt="">
                    </div>
                    <div class="banner-2">
                        <img src="{{ asset('assets/user/IMG_1804.JPG') }}" alt="">
                        {{-- <div class="banner2-inner">
                            <div class="play">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=0O2aH4XLbto"><i class="fas fa-play"></i></a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="features-area">
    <div class="container">
        <div class="title-wrap wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <div class="sec-title white">
                <span>Care Study</span>
                <h2>Features</h2>
                {{-- <p>Curabitur sed facilisis erat. Vestibulum pharetra eros eget fringilla porttitor. on Duis a orci nunc. Suspendisse ac convallis sapien, quis commodo libero.</p> --}}
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="single-feature">
                    <a href="{{ route('projects') }}">
                    <div class="feature-inner">
                        <div class="icon">
                            <i class="far fa-star fa-3x"></i>
                        </div>
                        <span class="counter">8</span><sup>+</sup>
                        <h4>Project Completed</h4>
                    </div>
                </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow animate fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <div class="single-feature">
                    <div class="feature-inner">
                        <div class="icon">
                            <i class="far fa-grin-tears fa-3x"></i>
                        </div>
                        <span class="counter">25</span><sup>+</sup>
                        <h4>Satisfied Clients</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow animate fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                <div class="single-feature">
                    <div class="feature-inner">
                        <div class="icon">
                            <i class="fas fa-users fa-3x"></i>
                        </div>
                        <span class="counter">7</span><sup>+</sup>
                        <h4>Expert Teams</h4>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="project-area sec-mar">
    <div class="container">
        <div class="title-wrap">
            <div class="sec-title ">
                <span>Case Study</span>
                <h2>Our Products</h2>
                {{-- <p>Curabitur sed facilisis erat. Vestibulum pharetra eros eget fringilla porttitor. on Duis a orci nunc. Suspendisse ac convallis sapien, quis commodo libero.</p> --}}
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="isotope-menu layout2">
                    <li class="active" data-filter="*">All</li>
                    {{-- <li data-filter=".ui">UI/UX</li> --}}
                    @foreach ($categories as $category)
                    {{-- <a href="{{ route('project.category',['category_slug' => $category->slug]) }}"> --}}
                        <li data-filter=".{{ $category->slug }}">{{ $category->name }}</li>
                    {{-- </a> --}}
                    @endforeach

                    {{-- <li data-filter=".graphic">Graphic Design</li> --}}
                </ul>
            </div>
        </div>
        <div class="row g-4 project-items">
            @foreach ($projects as $project)
            <div class="col-md-6 col-lg-4 single-item graphic {{ $project->category->slug }}">
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
            @endforeach
        </div>

    </div>
</section>


{{-- <section class="our-partner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="sec-title white layout2">
                    <span>Satisfied Client</span>
                    <h2>Our Partner</h2>
                    <div class="-partnerslider-navigator">
                        <div class="swiper-button-prev-c"><i class="bi bi-chevron-left"></i></div>
                        <div class="swiper-button-next-c"><i class="bi bi-chevron-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="swiper partner-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="single-partner">
                                <img src="assets/img/partner/partner-1.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-partner">
                                <img src="assets/img/partner/partner-2.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-partner">
                                <img src="assets/img/partner/partner-3.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-partner">
                                <img src="assets/img/partner/partner-4.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-partner">
                                <img src="assets/img/partner/partner-5.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}


{{-- <section class="priceing-plan sec-mar">
    <div class="container">
        <div class="title-wrap">
            <div class="sec-title white">
                <span>Getting Start</span>
                <h2>Pricing Plan</h2>
                <p>Curabitur sed facilisis erat. Vestibulum pharetra eros eget fringilla porttitor. on Duis a orci nunc. Suspendisse ac convallis sapien, quis commodo libero.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="price-table-tab layout2">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Pay Monthly</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Pay Yearly</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="price-box layout2">
                            <h3>Small Business</h3>
                            <span>Single Business</span>
                            <strong>$15.99<sub>/Per Month</sub></strong>
                            <ul class="item-list">
                                <li><i class="bi bi-check"></i>10 Pages Responsive Website</li>
                                <li><i class="bi bi-check"></i>5PPC Campaigns</li>
                                <li><i class="bi bi-check"></i>10 SEO Keyword</li>
                                <li><i class="bi bi-check"></i>5 Facebook Camplaigns</li>
                                <li><i class="bi bi-check"></i>2 Video Camplaigns</li>
                            </ul>
                            <div class="price-btn">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                                <a href="contact.html">Pay Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow animate fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="price-box layout2">
                            <h3>Professional</h3>
                            <span>Small team</span>
                            <strong>$99.99<sub>/Per Month</sub></strong>
                            <ul class="item-list">
                                <li><i class="bi bi-check"></i>10 Pages Responsive Website</li>
                                <li><i class="bi bi-check"></i>5PPC Campaigns</li>
                                <li><i class="bi bi-check"></i>10 SEO Keyword</li>
                                <li><i class="bi bi-check"></i>5 Facebook Camplaigns</li>
                                <li><i class="bi bi-check"></i>2 Video Camplaigns</li>
                            </ul>
                            <div class="price-btn">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                                <a href="contact.html">Pay Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow animate fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="price-box layout2">
                            <h3>Enterprice</h3>
                            <span>Large Team</span>
                            <strong>$120.99<sub>/Per Month</sub></strong>
                            <ul class="item-list">
                                <li><i class="bi bi-check"></i>10 Pages Responsive Website</li>
                                <li><i class="bi bi-check"></i>5PPC Campaigns</li>
                                <li><i class="bi bi-check"></i>10 SEO Keyword</li>
                                <li><i class="bi bi-check"></i>5 Facebook Camplaigns</li>
                                <li><i class="bi bi-check"></i>2 Video Camplaigns</li>
                            </ul>
                            <div class="price-btn">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                                <a href="contact.html">Pay Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="price-box layout2">
                            <h3>Small Business</h3>
                            <span>Single Business</span>
                            <strong>$35.99<sub>/Per Year</sub></strong>
                            <ul class="item-list">
                                <li><i class="bi bi-check"></i>10 Pages Responsive Website</li>
                                <li><i class="bi bi-check"></i>5PPC Campaigns</li>
                                <li><i class="bi bi-check"></i>10 SEO Keyword</li>
                                <li><i class="bi bi-check"></i>5 Facebook Camplaigns</li>
                                <li><i class="bi bi-check"></i>2 Video Camplaigns</li>
                            </ul>
                            <div class="price-btn">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                                <a href="contact.html">Pay Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow animate fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="price-box layout2">
                            <h3>Professional</h3>
                            <span>Small team</span>
                            <strong>$199.99<sub>/Per Year</sub></strong>
                            <ul class="item-list">
                                <li><i class="bi bi-check"></i>10 Pages Responsive Website</li>
                                <li><i class="bi bi-check"></i>5PPC Campaigns</li>
                                <li><i class="bi bi-check"></i>10 SEO Keyword</li>
                                <li><i class="bi bi-check"></i>5 Facebook Camplaigns</li>
                                <li><i class="bi bi-check"></i>2 Video Camplaigns</li>
                            </ul>
                            <div class="price-btn">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                                <a href="contact.html">Pay Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow animate fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="price-box layout2">
                            <h3>Enterprice</h3>
                            <span>Large Team</span>
                            <strong>$220.99<sub>/Per Year</sub></strong>
                            <ul class="item-list">
                                <li><i class="bi bi-check"></i>10 Pages Responsive Website</li>
                                <li><i class="bi bi-check"></i>5PPC Campaigns</li>
                                <li><i class="bi bi-check"></i>10 SEO Keyword</li>
                                <li><i class="bi bi-check"></i>5 Facebook Camplaigns</li>
                                <li><i class="bi bi-check"></i>2 Video Camplaigns</li>
                            </ul>
                            <div class="price-btn">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                                <a href="contact.html">Pay Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}




{{-- <section class="testimonial-area">
    <div class="container-fluid p-0">
        <div class="title-wrap">
            <div class="sec-title white">
                <span>Testimonial</span>
                <h2>Client Say About Us</h2>
                <p>Curabitur sed facilisis erat. Vestibulum pharetra eros eget fringilla porttitor. on Duis a orci nunc. Suspendisse ac convallis sapien, quis commodo libero.</p>
            </div>
        </div>
        <div class="swiper testimonial-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="single-testimonial">
                        <div class="quote">
                            <i class="fas fa-quote-right"></i>
                        </div>
                        <h5>Martha Maldonado</h5>
                        <span>Executive Chairman</span>
                        <div class="stars">
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                        </div>
                        <p>Integer purus odio, placerat nec rhoncus in, ullamcorper nec dolor. ani aptent taciti sociosqu ad litora torquent per conubia nostra, per sonic himenaeos. Praesent nec neque at dolor venenatis consectetur europ Donec lacinia
                            placerat felis non aliquam.</p>
                        <div class="reviewer">
                            <img src="assets/img/reivewer.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="single-testimonial">
                        <div class="quote">
                            <i class="fas fa-quote-right"></i>
                        </div>
                        <h5>Jesmin korac</h5>
                        <span>Director</span>
                        <div class="stars">
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                        </div>
                        <p>Integer purus odio, placerat nec rhoncus in, ullamcorper nec dolor. ani aptent taciti sociosqu ad litora torquent per conubia nostra, per sonic himenaeos. Praesent nec neque at dolor venenatis consectetur europ Donec lacinia
                            placerat felis non aliquam.</p>
                        <div class="reviewer">
                            <img src="assets/img/reivewer-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="single-testimonial">
                        <div class="quote">
                            <i class="fas fa-quote-right"></i>
                        </div>
                        <h5>Martha Maldonado</h5>
                        <span>Executive Chairman</span>
                        <div class="stars">
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                        </div>
                        <p>Integer purus odio, placerat nec rhoncus in, ullamcorper nec dolor. ani aptent taciti sociosqu ad litora torquent per conubia nostra, per sonic himenaeos. Praesent nec neque at dolor venenatis consectetur europ Donec lacinia
                            placerat felis non aliquam.</p>
                        <div class="reviewer">
                            <img src="assets/img/reivewer.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="single-testimonial">
                        <div class="quote">
                            <i class="fas fa-quote-right"></i>
                        </div>
                        <h5>Jesmin korac</h5>
                        <span>Director</span>
                        <div class="stars">
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                        </div>
                        <p>Integer purus odio, placerat nec rhoncus in, ullamcorper nec dolor. ani aptent taciti sociosqu ad litora torquent per conubia nostra, per sonic himenaeos. Praesent nec neque at dolor venenatis consectetur europ Donec lacinia
                            placerat felis non aliquam.</p>
                        <div class="reviewer">
                            <img src="assets/img/reivewer-1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section> --}}

{{--
<section class="our-team sec-mar">
    <div class="container">
        <div class="title-wrap wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <div class="sec-title white">
                <span>Our Team</span>
                <h2>Meet Our Team</h2>
                <p>Curabitur sed facilisis erat. Vestibulum pharetra eros eget fringilla porttitor. on Duis a orci nunc. Suspendisse ac convallis sapien, quis commodo libero.</p>
            </div>
        </div>
        <div class="swiper team-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="single-team layout2">
                        <div class="member-img">
                            <img src="assets/img/team/team-1.jpg" alt="">
                            <svg width="185" height="299" viewBox="0 0 167 269" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.25412 0.814453C1.68125 2.62384 0 5.61553 0 8.99991V269H167C167 269 47 269 66.5 112.171C75.5581 39.3209 20.2679 8.22409 4.25412 0.814453Z" fill="#191A1C" />
                           </svg>
                            <ul class="team-social">
                                <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-inner">
                            <h4>Thoren Okendhild</h4>
                            <span>Executive Chairman</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide wow animate fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="single-team layout2">
                        <div class="member-img">
                            <img src="assets/img/team/team-2.jpg" alt="">
                            <svg width="185" height="299" viewBox="0 0 167 269" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.25412 0.814453C1.68125 2.62384 0 5.61553 0 8.99991V269H167C167 269 47 269 66.5 112.171C75.5581 39.3209 20.2679 8.22409 4.25412 0.814453Z" fill="#191A1C" />
                            </svg>
                            <ul class="team-social">
                                <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-inner">
                            <h4>Lincoln Anthony</h4>
                            <span>Software Engeenier</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide wow animate fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="single-team layout2">
                        <div class="member-img">
                            <img src="assets/img/team/team-3.jpg" alt="">
                            <svg width="185" height="299" viewBox="0 0 167 269" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.25412 0.814453C1.68125 2.62384 0 5.61553 0 8.99991V269H167C167 269 47 269 66.5 112.171C75.5581 39.3209 20.2679 8.22409 4.25412 0.814453Z" fill="#191A1C" />
                            </svg>
                            <ul class="team-social">
                                <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-inner">
                            <h4>Adrian Eodri</h4>
                            <span>UI/UX Designer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section> --}}


<section class="blog-area">
    <div class="container">
        <div class="title-wrap wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <div class="sec-title white">
                <span>All Blog</span>
                <h2>Latest Post</h2>
                {{-- <p>Curabitur sed facilisis erat. Vestibulum pharetra eros eget fringilla porttitor. on Duis a orci nunc. Suspendisse ac convallis sapien, quis commodo libero.</p> --}}
            </div>
        </div>
        <div class="row gy-4">
            @foreach ($blogs as $blog)
                <div class="col-md-6 col-lg-4 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="single-blog ">
                        <div class="blog-thumb">
                            <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}"><img src="{{ asset('images/blogs') }}/{{ $blog->image }}" alt=""></a>
                            <div class="tag">
                                <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}">{{ $blog->name }}</a>
                            </div>
                        </div>
                        <div class="blog-inner">
                            <div class="author-date">
                                <a href="#">By, {{ $blog->user->name }}</a>
                                <a href="#">{{date('d F, Y', strtotime(   $blog->created_at )) }}</a>
                            </div>
                            <h4><a href="{{ route('blog.details', ['slug' => $blog->slug]) }}">{{ str_limit(strip_tags($blog->description),50,'...')  }}</a></h4>
                        </div>
                    </div>
                </div>
            @endforeach


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

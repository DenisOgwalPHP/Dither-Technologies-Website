<footer>
    <div class="container">
        <div class="footer-top">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="/">
                                <img src="{{ asset('assets/user/Dither 1.png') }}" width="70" alt="">
                            </a>
                        </div>
                    <p>{{ str_limit(strip_tags("Dither Technologies are Developers and Designers of software solutions for the service Delivery Sector, We do computer Networking and CCTV Camera Installations, Web Development and Hosting, Server Installations, as well we do software installations and computer Maintenance."),100,'...')  }}</p>
                        <a href="{{ route('about') }}">More Info</a>

                        <ul class="social-media-icons">
                            <li><a href="{{ $setting->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ $setting->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="{{ $setting->youtube }}" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="{{ $setting->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="{{ $setting->linkedIn }}" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <div class="footer-widget">
                        <h4>Our Services</h4>
                        <ul class="footer-menu">
                            <li><a href="#">Software Development</a></li>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">Computer Networking</a></li>
                            <li><a href="#">IT Consultancy</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <div class="footer-widget">
                        <h4>Quick Links</h4>
                        @php
                        $navlinks = array ( 'products' => 'Products', 'agri-inputs' => 'Agri-Inputs', 'blogs' => 'Blogs', 'contact-us' => 'Contact Us');
                        $current_page = substr($_SERVER['REQUEST_URI'], 1);  // trim off the leading slash
                        $current_page = str_replace('.php', '', $current_page);  // trim off the extension
                    @endphp
                        <ul class="footer-menu">
                            <li class=" {{ $current_page == '' ? 'active': '' }}">
                                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="{{ $current_page == 'about-us' ? 'active': '' }}">
                                <a class="nav-link" href="{{ route('about') }}">About</a>
                              </li>
                               <li class="{{ $current_page == 'services' ? 'active': '' }}">
                                <a class="nav-link" href="{{ route('services') }}">Services</a>
                              </li>
                               <li class="{{ $current_page == 'projects' ? 'active': '' }}">
                                <a class="nav-link" href="{{ route('projects') }}">Projects</a>
                              </li>
                              <li class="{{ $current_page == 'blogs' ? 'active': '' }}">
                                <a class="nav-link" href="{{ route('blogs') }}">Blogs</a>
                              </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <div class="footer-widget">
                        <h4>Contacts</h4>
                        <div class="number">
                            <div class="num-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="phone">
                                <a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a>
                                <a href="tel:{{ $setting->phone2 }}">{{ $setting->phone2 }}</a>
                            </div>
                        </div>
                        <div class="office-mail">
                            <div class="mail-icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="email">
                                <a href="mail:{{ $setting->email }}"><span class="__cf_email__" data-cfemail="2841464e47684d50494558444d064b4745">{{ $setting->email }}</span></a>
                            </div>
                        </div>
                        <div class="address">
                            <div class="address-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <p>{{ $setting->address }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="footer-bottom">
            <div class="row align-items-center">
                <div class="col-12 col-md-4 col-lg-4 col-xl-5">
                    <div class="copy-txt">
                        <span>Copyright 2022 <b>Crea soft</b> | Design By <a href="#">Egens Theme</a></span>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-8 col-xl-7">
                    <ul class="footer-bottom-menu">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div> --}}
    </div>
</footer>

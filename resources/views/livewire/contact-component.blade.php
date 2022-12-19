    <div>
        <section class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrapper">
                            <div class="breadcrumb-cnt">
                                <h1>Dither Tech</h1>
                                <span
                                    ><a href="/">Home</a
                                    ><i class="bi bi-arrow-right"></i>Contact Us</span
                                >
                                <div class="breadcrumb-video">
                                    <img
                                        src="{{ asset('assets/images/contact.jpg') }}"
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

        <section class="contact-area sec-mar" >
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-5">
                        <div class="contact-left">
                            <div class="sec-title layout2">
                                <span>Get in touch</span>
                                <h2>
                                    Contact us if you have more questions.
                                </h2>
                            </div>
                            <ul class="social-follow">
                                <li>
                                    <a href="{{ $setting->facebook }}" target="_blank"
                                        ><i class="fab fa-facebook-f"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href="{{ $setting->twitter }}" target="_blank"
                                        ><i class="fab fa-twitter"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href="{{ $setting->youtube }}" target="_blank"
                                        ><i class="fab fa-youtube"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href="{{ $setting->instagam }}" target="_blank"
                                        ><i class="fab fa-instagram"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href="{{ $setting->linkedIn }}" target="_blank"
                                        ><i class="fab fa-linkedin"></i
                                    ></a>
                                </li>
                            </ul>
                            <div class="informations">
                                <div class="single-info">
                                    <div class="icon">
                                        <i
                                            class="fas fa-map-marker-alt"
                                        ></i>
                                    </div>
                                    <div class="info">
                                        <h3>Location</h3>
                                        <p>{{ $setting->address }}</p>

                                    </div>
                                </div>
                                <div class="single-info">
                                    <div class="icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="info">
                                        <h3>Phone</h3>
                                        <a href="tel:256787045644"
                                            >TEL:+256 787045644</a
                                        >
                                        <a href="tel:256703950394"
                                            >TEL:+256 703950394</a
                                        >
                                    </div>
                                </div>
                                <div class="single-info">
                                    <div class="icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="info">
                                        <h3>Email</h3>
                                        <a href="mailto:info@ditherug.tech"
                                            ><span
                                                class="__cf_email__"
                                                data-cfemail="90f9fef6ffd0f5e8f1fde0fcf5bef3fffd"
                                                >Email: info@ditherug.tech</span
                                            ></a
                                        >

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-7">
                        <div class="mapouter">
                            <div class="gmap_canvas" style="border-radius: 20px">
                                <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.734028108685!2d32.5556453147533!3d0.37243939972827617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbb48f8668e45%3A0x79db301650a762da!2sDither%20Technologies%20(U)%20LTD!5e0!3m2!1sen!2sug!4v1629967629758!5m2!1sen!2sug"
                                ></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="getin-touch">
                    <div class="row">
                        <div class="col-md-6 col-lg-7">
                            <div
                                class="contact-form wow animate fadeInUp"
                                data-wow-delay="200ms"
                                data-wow-duration="1500ms"
                            >
                                <h3>Have Any Questions</h3>
                                @if (Session::has('message'))
                                <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                @endif
                                <form  wire:submit.prevent="sendMessage">
                                    <div class="row">
                                        <div class="col-12">
                                            <input
                                                type="text"
                                                name="name"
                                                placeholder="Enter your name"
                                                wire:model="name"
                                            />
                                            @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <input
                                            type="email"
                                            name="email"
                                            placeholder="Enter your email"
                                            wire:model="email"
                                        />
                                        @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <input
                                                type="text"
                                                name="phone"
                                                placeholder="Enter your phone number"
                                                wire:model="phone"
                                            />
                                            @error('phone')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <input
                                                type="text"
                                                name="subject"
                                                placeholder="Subject"
                                                wire:model="subject"
                                            />
                                            @error('subject')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        </div>
                                        <div class="col-12">
                                            <textarea
                                                name="message"
                                                cols="30"
                                                rows="10"
                                                placeholder="Your message"
                                                wire:model="comment"
                                            ></textarea>

                                            @error('comment')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <button  type="submit"  class=" btn btn-success" >Submit</button>
                                            {{-- <input
                                                type="submit"
                                                value="Send Message"
                                            /> --}}
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div
                            class="col-md-6 col-lg-5 wow animate fadeInUp"
                            data-wow-delay="300ms"
                            data-wow-duration="1500ms"
                        >
                            <div class="call-banner">
                                <img
                                    src="assets/img/call-center.png"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

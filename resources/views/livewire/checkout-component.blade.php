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
                                ><i class="bi bi-arrow-right"></i>Checkout</span
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

            <div class="getin-touch">
                <div class="row">
                    <div class="col-md-6 col-lg-7">
                        <div
                            class="contact-form wow animate fadeInUp"
                            data-wow-delay="200ms"
                            data-wow-duration="1500ms"
                        >
                            <h3>Order for Project ({{ $project->name }})</h3>
                            @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                            @endif
                            <form  wire:submit.prevent="placeOrder">
                                <div class="row">
                                    <div class="col-6">
                                        <input
                                            type="text"
                                            name="firstname"
                                            placeholder="Enter your first-name"
                                            wire:model="firstname"
                                        />
                                        @error('firstname')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    </div>
                                    <div class="col-6">
                                        <input
                                            type="text"
                                            name="lastname"
                                            placeholder="Enter your last-name"
                                            wire:model="lastname"
                                        />
                                        @error('lastname')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    </div>
                                    <div class="col-6">
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
                                            wire:model="mobile"
                                        />
                                        @error('mobile')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <input
                                            type="text"
                                            name="city"
                                            placeholder="city"
                                            wire:model="city"
                                        />
                                        @error('city')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <input
                                            type="text"
                                            name="location"
                                            placeholder="District"
                                            wire:model="location"
                                        />
                                        @error('location')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <input
                                            type="text"
                                            name="country"
                                            placeholder="country"
                                            wire:model="country"
                                        />
                                        @error('country')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-12">

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

<div>
    <section class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrapper">
                        <div class="breadcrumb-cnt">
                            <h1>{{ $project->name }}</h1>
                            <span
                                ><a href="/">Home</a
                                ><i class="bi bi-arrow-right"></i
                                >{{ $project->name }}</span
                            >
                            <div class="breadcrumb-video">
                                <img
                                    src="{{ asset('images/projectBG') }}/{{ $project->bgImage }}"
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

    <section class="project-details sec-mar-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="project-details-content">
                        <div class="project-thumb">
                            <img
                                src="{{ asset('images/projects') }}/{{ $project->image }}"
                                alt=""
                            />
                            <div class="tag">
                                <a href="#" wire:click.prevent="checkout"
                                    >Order Now</a
                                >
                            </div>
                        </div>
                        <h3>{!! $project->short_description !!}</h3>
                        <p class="desc">{!! $project->description !!}</p>
                        <p>Feel Free to contact us today for a 30 days trial version of this software, which will be delivered right to your email inbox and you will be guided on installation. you can do this by clicking on the order now button or visit our <a href="{{ route('contact') }}">contacts us</a>.</p>

                        <div class="working-process">
                            <h4>{{ $project->name }} Description</h4>
                            <div class="swiper work-process-slide">
                                <div class="swiper-wrapper">
                                    @foreach ($projectDetails as $projectDetail)
                                    <div class="swiper-slide">
                                        <div class="work-thumb">
                                            <img
                                                src="{{ asset('images/projects') }}/{{ $projectDetail->image }}"
                                                alt=""
                                            />
                                            <div class="label">
                                                <span
                                                    >
                                                    {{ $projectDetail->name }}</span
                                                >
                                            </div>
                                        </div>
                                        <div>
                                            <p class="card-text">
                                                <small class="text-muted">{!! $projectDetail->short_description !!}</small>
                                            </p>
                                            <p class="card-text">{!! $projectDetail->description !!}</p>
                                        </div>
                                    </div>
                                    @endforeach


                                </div>
                                <div class="arrow">
                                    <div class="swiper-button-next-c">
                                        <i
                                            class="bi bi-arrow-right"
                                        ></i>
                                    </div>
                                    <div class="swiper-button-prev-c">
                                        <i class="bi bi-arrow-left"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="check-lunch">
                            <h4>System Major Functionality</h4>
                            <div class="row">


                                    <ul class="check" >
                                        @foreach ($aminities as $aminity)
                                        <div class="col-lg-6" style="float: left">
                                            <li >
                                                <i><img src="{{ asset('assets/icons/check.svg') }}" alt="" /></i>{{ $aminity->name }}
                                            </li>
                                        </div>
                                        @endforeach
                                    </ul>

                            </div>
                        </div>

                        <div class="comments">
                            <div class="product-rating">
                                @php
                                    $avgRating = 0
                                @endphp
                                @if ($reviews)
                                @foreach ($reviews as $review)
                                    @php
                                        $avgRating = $avgRating + $review->rating;
                                    @endphp
                                @endforeach

                                <h3>{{ $reviews->count() }} Comment(s)</h3>
                                {{-- <a href="#" class="count-review">({{ $reviews->count() }} review)</a> --}}
                                @endif
                            </div>

                            @foreach ($reviews as $review)
                                <div class="single-comment">
                                    <div class="author-post">
                                        {{-- <div class="reply">
                                            <a href="#"
                                                ><i class="bi bi-reply"></i
                                                >Reply</a
                                            >
                                        </div> --}}
                                        <div class="author-thumb">
                                            <img
                                                src="{{ asset('assets/user/user.png') }}"
                                                alt=""
                                            />
                                        </div>
                                        <div class="author-info">
                                            <h5>{{ $review->user->name}}</h5>
                                            <span
                                                >{{date('d F, Y', strtotime(   $review->created_at )) }}</span
                                            >
                                        </div>
                                    </div>
                                    <p>
                                        {{ $review->comment }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                        <div class="comment-form">
                            <h5>Leave A Comment</h5>
                            @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                            @endif
                            @if (Route::has('login'))
                            @auth
                            <form wire:submit.prevent="addReview">


                                <div class="row">

                                    <div class="col-12">
                                        <label for="msg"
                                        >Message*

                                            <textarea
                                                required
                                                wire:model="comment"
                                                name="message"
                                                cols="30"
                                                rows="10"
                                                placeholder="Type your Message"
                                                id="msg"
                                            ></textarea>
                                        </label>
                                        @error('comment')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <button  type="submit"  class=" btn btn-success" >Submit</button>
                                    {{-- <input
                                        type="submit"
                                        value="Submit Comment"
                                    /> --}}
                                    </div>
                                </div>
                            </form>
                            @else
                            <a href="/login" class="btn btn-danger">You ned to login to add a review</a>

                            @endauth
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-widget">

                        <div class="client-box">
                            <span>Company:</span>
                            <h5>Dither Technologies</h5>
                        </div>

                        <div class="client-box">
                            <span>Project Type:</span>
                            <h5>{{ $project->category->name }}</h5>
                        </div>
                        <div class="client-box">
                            <span>Duration:</span>
                            <h5>{{ $project->duration }} Year</h5>
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <div class="contact-info">
                            <h3>Need help?</h3>
                            {{-- <p>
                                Interdum et malesuada fames ac ante
                                tolds alli ipsum primis in faucibus.
                                Etiam eu nibh.
                            </p> --}}
                            <div class="cmpy-info">
                                <div class="icon">
                                    <i
                                        class="fas fa-map-marker-alt"
                                    ></i>
                                </div>
                                <div class="cnt">
                                    <h5>Location</h5>
                                    <p>
                                        {{ $setting->address }}
                                    </p>
                                </div>
                            </div>
                            <div class="cmpy-info">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="cnt">
                                    <h5>Phone</h5>
                                    <a href="tel:{{ $setting->phone }}"
                                        >{{ $setting->phone }}</a
                                    >
                                    <a href="tel:{{ $setting->phone2 }}"
                                        >{{ $setting->phone2 }}</a
                                    >
                                </div>
                            </div>
                            <div class="cmpy-info">
                                <div class="icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="cnt">
                                    <h5>Email</h5>
                                    <a href="mail:{{ $setting->email }}"
                                        ><span
                                            class="__cf_email__"
                                            data-cfemail="046d6a626b44617c65697468612a676b69"
                                            >{{ $setting->email }}</span
                                        ></a
                                    >

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-slider">
                    <h4>Related Projects</h4>
                    <div class="arrow">
                        <div class="swiper-button-next-c">
                            <i class="bi bi-arrow-right"></i>
                        </div>
                        <div class="swiper-button-prev-c">
                            <i class="bi bi-arrow-left"></i>
                        </div>
                    </div>
                    <div class="swiper project-slide">
                        <div class="swiper-wrapper">
                            @foreach ($related_projects as $related_projects)
                            <div class="swiper-slide">
                                <div class="single-item">
                                    <div class="item-img">
                                        <a href="{{ route('project.detail',['slug' =>$related_projects->slug]) }}">
                                            <img src="{{ asset('images/projects') }}/{{ $related_projects->image }}" alt="{{ $related_projects->name }}" >
                                        </a>
                                    </div>
                                    <div class="item-inner-cnt">
                                        <span>{{ $related_projects->name }}</span>
                                        <h4>[{{ $related_projects->short_description }}]</h4>
                                        <div class="view-btn">
                                            <a href="{{ route('project.detail',['slug' =>$related_projects->slug]) }}">view details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

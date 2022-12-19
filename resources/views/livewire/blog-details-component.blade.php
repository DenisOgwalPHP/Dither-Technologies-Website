<div>
    <section class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrapper">
                        <div class="breadcrumb-cnt">
                            <h1>Blog Details</h1>
                            <span
                                ><a href="/">Home</a
                                ><i class="bi bi-arrow-right"></i>Blog
                                details</span
                            >
                            <div class="breadcrumb-video">
                                <img
                                    src="{{ asset('images/blogs') }}/{{ $blog->image }}"
                                    alt="{{ $blog->name }}"
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

    <section class="blog-details-area sec-mar-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-content">
                        <h3>
                            {{ $blog->name }}
                        </h3>
                        <div class="author-date layout2">

                            <a href="#">By, {{ $blog->user->name }}</a>
                            @php
                            $avgRating = 0
                        @endphp
                        @if ($reviews)
                        @foreach ($reviews as $review)
                            @php
                                $avgRating = $avgRating + $review->rating;
                            @endphp
                        @endforeach
                        <a href="#"> Comment({{ $reviews->count() }})</a>
                        {{-- <a href="#" class="count-review">({{ $reviews->count() }} review)</a> --}}
                        @endif

                            <a href="#">{{date('d F, Y', strtotime(   $blog->created_at )) }}</a>
                        </div>
                        <div class="details-thumb">
                            <img
                                src="{{ asset('images/blogs') }}/{{ $blog->image }}"
                                alt="{{ $blog->name }}"
                            />
                        </div>
                        <div>
                            {!! $blog->description !!}
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
                                            <h5>{{ $review->name}}</h5>
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
                            <form wire:submit.prevent="addReview">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="name"
                                            >Name*
                                            <input
                                                type="text"
                                                name="name"
                                                wire:model="name"
                                                placeholder="Your Name"
                                                id="name"
                                            />
                                        </label>
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email"
                                            >Email*
                                            <input
                                                type="email"
                                                name="email"
                                                wire:model="email"
                                                placeholder="Enter Your Email"
                                                id="email"
                                            />
                                        </label>
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
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
                                    {{-- <button  type="submit"  class=" btn btn-success" >Submit</button> --}}
                                        <input
                                            type="submit"
                                            value="Submit Comment"
                                        />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-widget">
                        <div class="widget-search">
                            <form action="#" method="post">
                                <input
                                    type="text"
                                    name="search"
                                    placeholder="Search Here"
                                />
                                <button type="submit">
                                    <i class="bi bi-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="sidebar-widget">
                        <h4>Newest Post</h4>
                        @foreach ($l_blogs as $l_blog)
                        <div class="recent-post">
                            <div class="recent-thumb">
                                <a href="{{ route('blog.details', ['slug' => $l_blog->slug]) }}"
                                    ><img
                                        src="{{ asset('images/blogs') }}/{{ $l_blog->image }}"
                                        alt=""
                                /></a>
                            </div>
                            <div class="recent-post-cnt">
                                <span>{{date('d F, Y', strtotime(   $l_blog->created_at )) }}</span>
                                <h5>
                                    <a href="{{ route('blog.details', ['slug' => $l_blog->slug]) }}"
                                        >{{ $l_blog->name }}</a
                                    >
                                </h5>
                            </div>
                        </div>
                        @endforeach


                    </div>

                    <div class="sidebar-banner" style="margin-bottom: 20px;">
                        <img
                            src="{{ asset('assets/user/Dither 1.png') }}"
                            alt=""
                        />
                        <div class="banner-inner">
                            <h3>
                                Any Project <span>Call Now.</span>

                            </h3>
                            <a  href="tel:{{ $setting->phone }}"
                                >{{ $setting->phone }}</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

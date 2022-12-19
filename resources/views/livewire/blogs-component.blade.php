<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrapper">
                    <div class="breadcrumb-cnt">
                        <h1>Blogs </h1>
                        <span
                            ><a href="/">Home</a
                            ><i class="bi bi-arrow-right"></i>Blogs
                            </span
                        >
                        <div class="breadcrumb-video">
                            <img
                                src="{{ asset('assets/images/blog.jpg') }}"
                                alt=""
                            />

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-grid sec-mar-top" style="margin-bottom: 10px;">
    <div class="container">
        <div class="row">
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
                {{-- <div class="sidebar-widget">
                    <h4>Category</h4>
                    <ul class="category">
                        <li>
                            <a href="project.html"
                                >Web Design<i
                                    class="bi bi-arrow-right"
                                ></i
                            ></a>
                        </li>
                        <li>
                            <a href="project.html"
                                >Apps Development<i
                                    class="bi bi-arrow-right"
                                ></i
                            ></a>
                        </li>
                        <li>
                            <a href="project.html"
                                >Software Development<i
                                    class="bi bi-arrow-right"
                                ></i
                            ></a>
                        </li>
                        <li>
                            <a href="project.html"
                                >Motion Graphics<i
                                    class="bi bi-arrow-right"
                                ></i
                            ></a>
                        </li>
                        <li>
                            <a href="project.html"
                                >UI/UX Design<i
                                    class="bi bi-arrow-right"
                                ></i
                            ></a>
                        </li>
                        <li>
                            <a href="project.html"
                                >Graphic Design<i
                                    class="bi bi-arrow-right"
                                ></i
                            ></a>
                        </li>
                    </ul>
                </div> --}}
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
                {{-- <div class="sidebar-widget">
                    <h4>Post Tag</h4>
                    <ul class="tag-list">
                        <li><a href="project.html">Website</a></li>
                        <li>
                            <a href="project.html">Web Design</a>
                        </li>
                        <li>
                            <a href="project.html">Development</a>
                        </li>
                        <li>
                            <a href="project.html"
                                >Graphic Design</a
                            >
                        </li>
                        <li><a href="project.html">Graphic</a></li>
                        <li>
                            <a href="project.html">UI/UX Design</a>
                        </li>
                        <li>
                            <a href="project.html">Activities</a>
                        </li>
                        <li>
                            <a href="project.html"
                                >Software Design</a
                            >
                        </li>
                        <li>
                            <a href="project.html">3d Design</a>
                        </li>
                    </ul>
                </div> --}}
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
            <div class="col-lg-8">
                <div class="blog-item-grid">
                    <div class="row g-4">
                        @foreach ($blogs as $blog)
                        <div class="col-md-6">
                            <div class="single-blog">
                                <div class="blog-thumb">
                                    <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}"
                                        ><img
                                            src="{{ asset('images/blogs') }}/{{ $blog->image }}"
                                            alt=""
                                    /></a>
                                    <div class="tag">
                                        <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}"
                                            >{{ $blog->name }}</a
                                        >
                                    </div>
                                </div>
                                <div class="blog-inner">
                                    <div class="author-date">
                                        <a href="#">By, {{ $blog->user->name }}</a>
                                        <a href="#">{{date('d F, Y', strtotime(   $blog->created_at )) }}</a>
                                    </div>
                                    <p>
                                        <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}"
                                            >{!! str_limit(strip_tags($blog->description),50,'...')  !!}</a
                                        >
                                        </p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="load-more">
                    {{-- <ul class="paginations">
                        <li>
                            <a href="#"
                                ><i
                                    class="fas fa-long-arrow-alt-left"
                                ></i
                            ></a>
                        </li>
                        <li><a href="#">01</a></li>
                        <li class="active"><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                        <li><a href="#">04</a></li>
                        <li>
                            <a href="#"
                                ><i
                                    class="fas fa-long-arrow-alt-right"
                                ></i
                            ></a>
                        </li>
                    </ul> --}}
                    {{ $blogs->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</section>


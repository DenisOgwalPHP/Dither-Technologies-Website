<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrapper">
                    <div class="breadcrumb-cnt">
                        <h1>Projects</h1>
                        <span
                            ><a href="/">Home</a
                            ><i class="bi bi-arrow-right"></i
                            >Projects</span
                        >
                        <div class="breadcrumb-video">
                            <img
                                src="{{ asset('assets/images/projects.png') }}"
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

<section class="project-area sec-mar">
    <div class="container">
        <div class="title-wrap">
            <div class="sec-title ">
                {{-- <span>Case Study</span> --}}
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

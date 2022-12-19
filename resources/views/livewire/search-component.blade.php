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
                                src="{{ asset('assets/images/search.jpg') }}"
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
                <h2>Results for ({{ $search }})</h2>
                {{-- <p>Curabitur sed facilisis erat. Vestibulum pharetra eros eget fringilla porttitor. on Duis a orci nunc. Suspendisse ac convallis sapien, quis commodo libero.</p> --}}
            </div>
        </div>

        <div class="row g-4 project-items">
            @foreach ($projects as $project)
            <div class="col-md-6 col-lg-4 single-item graphic ui">
                <div class="item-img">
                    <a href="{{ route('project.detail',['slug' =>$project->slug]) }}">
                        <img src="{{ asset('images/projectBG') }}/{{ $project->bgImage }}" alt="{{ $project->name }}" >
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

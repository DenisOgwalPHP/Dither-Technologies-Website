<header class="header-area position_top">
    <div class="container-fluid">
        <div class="row">
            <div class="topbar-menu-area">
                <div class="container">
                    <div class="topbar-menu left-menu">
                        <ul>
                            <li class="menu-item" >
                                <a title="Hotline: {{ $setting->phone }}" href="Hotline: {{ $setting->phone }}" ><span class="icon label-before fa fa-mobile"></span>Hotline: {{ $setting->phone }} &nbsp;</a>
                            </li>
                            <li>&nbsp; | &nbsp;</li>
                            <li class="menu-item" >
                                <a title="Hotline: {{ $setting->phone2 }}" href="Hotline: {{ $setting->phone2 }}" > &nbsp; {{ $setting->phone2 }}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="topbar-menu right-menu">
                        <ul>
                            <li class="search-option">
                                @livewire('header-search-component')

                           </li>
                            @if (Route::has('login'))
                            @auth
                            @if (Auth::user()->utype === 'ADM')
                            <li class="menu-item menu-item-has-children parent" >
                                <a title="My Account" href="#">My Account ({{ Auth::user()->name }})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="submenu">
                                    <li class="menu-item" >
                                        <a title="projects" href="{{ route('admin.projects') }}">Projects</a>
                                    </li>
                                    <li class="menu-item" >
                                        <a title="Categories" href="{{ route('admin.categories') }}">Categories</a>
                                    </li>
                                    {{-- <li class="menu-item" >
                                        <a title="Orders" href="{{ route('admin.orders') }}">Orders</a>
                                    </li> --}}
                                    <li class="menu-item" >
                                        <a title="Orders" href="{{ route('admin.blogs') }}">Blogs</a>
                                    </li>
                                    <li class="menu-item" >
                                        <a title="Conatct Messages" href="{{ route('admin.contact') }}">Conatct Messages</a>
                                    </li>

                                    <li class="menu-item" >
                                        <a title="Settings" href="{{ route('admin.settings') }}">Settings</a>
                                    </li>
                                    <li class="menu-item" >
                                        <a title="Orders" href="{{ route('admin.orders') }}">Orders</a>
                                    </li>
                                    <li class="menu-item dropdown-item" >
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a>
                                    </li>
                                    <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                        @csrf

                                    </form>
                                </ul>
                            </li>

                            @else
                            <li class="menu-item menu-item-has-children parent" >
                                <a title="My Account" href="#">My Account ({{ Auth::user()->name }})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="submenu">
                                    <li class="menu-item dropdown-item" >
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a>
                                    </li>
                                    <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                        @csrf

                                    </form>
                                </ul>
                            </li>
                        @endif
                        @else
                        <li class="menu-item" ><a title="Register or Login" href="{{ route('login') }}">Login</a></li>
                        <li class="menu-item" ><a title="Register or Login" href="{{ route('register') }}">Register</a></li>
                        @endauth
                        @endif

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-logo">
        <div class="logo">
            <a href="/">Dither Technologies</a>
        </div>
    </div>
    <div class="main-menu">
        <nav class="main-nav">
            @php
                $navlinks = array ( 'products' => 'Products', 'agri-inputs' => 'Agri-Inputs', 'blogs' => 'Blogs', 'contact-us' => 'Contact Us');
                $current_page = substr($_SERVER['REQUEST_URI'], 1);  // trim off the leading slash
                $current_page = str_replace('.php', '', $current_page);  // trim off the extension
            @endphp
            <ul>
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
                    <a class="nav-link" href="{{ route('projects') }}">
                     Products
                    </a>
                    <i class="bi bi-chevron-down"></i>
                    <ul class="sub-menu">
                        @foreach ($projects as $project)
                            <li><a class="dropdown-item" href="{{ route('project.detail',['slug' =>$project->slug]) }}">{{ $project->name }}</a></li>
                            <li role="separator" class="divider"></li>
                        @endforeach

                    </ul>
                  </li>
                  <li class="{{ $current_page == 'blogs' ? 'active': '' }}">
                    <a class="nav-link" href="{{ route('blogs') }}">Blogs</a>
                  </li>
            </ul>
        </nav>
    </div>
    <div class="nav-right">
        <div class="get-qoute">
            <div class="cmn-btn">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <a  href="{{ route('contact') }}">Contact US</a>
            </div>
        </div>
        <div class="mobile-menu">
            <a href="javascript:void(0)" class="cross-btn">
                <span class="cross-top"></span>
                <span class="cross-middle"></span>
                <span class="cross-bottom"></span>
            </a>
        </div>

    </div>
</header>

<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
                <img src="{{ asset('backend/img/kaiadmin/logo_light.svg') }}" alt="navbar brand" class="navbar-brand"
                    height="20" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item active">
                    <a href="{{ route('home') }}" target="_blank" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Visit Site</p>
                    </a>
                </li>
                <li class="nav-item active">
                    <a href="{{ route('admin.dashbord') }}" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Components</h4>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#base">
                        <i class="fas fa-layer-group"></i>
                        <p>Home Page</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.home-banner') }}">
                                    <span class="sub-item">Home Banner</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('admin.services.index')}}">
                                  <span class="sub-item">Our Services</span>
                                </a>
                              </li>
                              <li>
                                <a href="{{route('admin.testimonials.index')}}">
                                  <span class="sub-item">Testimonials</span>
                                </a>
                              </li>
                              <li>
                                <a href="{{route('admin.awesome.index')}}">
                                  <span class="sub-item">Some Awesome Things About Us</span>
                                </a>
                              </li>
                              
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</div>

<header class="main-nav">
    <div class="sidebar-user text-center">
        <a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="{{asset(Auth::user()->file_path)}}" alt="" />
        <div class="badge-bottom"><span class="badge badge-primary">New</span></div>
        <a href="user-profile"> <h6 class="mt-3 f-14 f-w-600">{{ Auth::user()->name }}</h6></a>
        <ul>
            <li>
                <span><span class="counter">{{ Auth::user()->total_login }}</span>Times</span>
                <p>Total Login</p>
            </li>
            <li>
                <span>{{ \Carbon\Carbon::parse(Auth::user()->last_login)->diffForHumans() }}</span>
                <p>Last Login</p>
            </li>
            <!-- <li>
                <span><span class="counter">95.2</span>k</span>
                <p>Follower</p>
            </li> -->
        </ul>
    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Deshboard</h6>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="home"></i><span>General Setting</span></a>                  
                        <ul class="nav-submenu menu-content" style="display:;">
                            @permission('system-setup-show')
                            <li><a href="{{ route('system-setup.index') }}" class="">System Setup</a></li>
                            @endpermission
                            @permission('user-profile-show')
                            <li><a href="{{ route('admin-users.index') }}" class="">User & Access Control</a></li>
                            @endpermission
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="airplay"></i><span>Website/Blog</span></a>
                        <ul class="nav-submenu menu-content">
                            @permission('content-category-show')
                            <li><a href="{{ route('content-category.index') }}" class="">Content Category</a></li>
                            @endpermission
                            @permission('content-information-show')
                            <li><a href="{{ route('content-information.index') }}" class="">Content</a></li>
                            @endpermission
                            @permission('gallery-show')
                            <li><a href="{{ route('gallery-category.index') }}" class="">Gallery</a></li>
                            @endpermission
                        </ul>
                    </li>

                    {{-- <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="airplay"></i><span>Message</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="" class="">Email</a></li>
                            <li><a href="" class="">SMS</a></li>
                            <li><a href="" class="">Marketing</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="airplay"></i><span>Other</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="" class="">Bill</a></li>
                            <li><a href="" class="">Support</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="airplay"></i><span>HRM</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="" class="">Category</a></li>
                            <li><a href="" class="">Content</a></li>
                            <li><a href="" class="">Gallery</a></li>
                        </ul>
                    </li> --}}
                    <!-- <li class="sidebar-main-title">
                        <div>
                            <h6>Components</h6>
                        </div>
                    </li> -->
                    
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>

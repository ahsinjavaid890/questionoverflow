<header class="header-area bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2">
                <div class="logo-box">
                    <a href="{{ url('') }}" class="logo"><img src="{{ url('front/images/logo-black.png') }}" alt="logo"></a>
                    <div class="user-action">
                        <div class="search-menu-toggle icon-element icon-element-xs shadow-sm mr-1" data-toggle="tooltip" data-placement="top" title="Search">
                            <i class="la la-search"></i>
                        </div>
                        <div class="off-canvas-menu-toggle icon-element icon-element-xs shadow-sm" data-toggle="tooltip" data-placement="top" title="Main menu">
                            <i class="la la-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col-lg-2 -->
            <div class="col-lg-10">
                <div class="menu-wrapper border-left border-left-gray pl-4 justify-content-end">
                    <nav class="menu-bar mr-auto">
                        <ul>
                            <li>
                                <a href="{{ url('') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ url('allsubjects') }}">All Subjects</a>
                            </li>
                            <li>
                                <a href="{{ url('tutorials') }}">Tutorials</a>
                            </li>
                        </ul>
                        <!-- end ul -->
                    </nav>
                    <!-- end main-menu -->
                    <form method="post" class="mr-4">
                        <div class="form-group mb-0">
                            <input class="form-control form--control form--control-bg-gray" type="text" name="search" placeholder="Type your search words...">
                            <button class="form-btn" type="button"><i class="la la-search"></i></button>
                        </div>
                    </form>
                    <div class="nav-right-button">
                        @if(Auth::check())
                        <ul class="user-action-wrap d-flex align-items-center">
                            <li class="dropdown">
                                <span class="ball red ball-lg noti-dot"></span>
                                <a class="nav-link dropdown-toggle dropdown--toggle" href="#" id="notificationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="la la-bell"></i>
                                </a>
                                <div class="dropdown-menu dropdown--menu dropdown-menu-right mt-3 keep-open" aria-labelledby="notificationDropdown">
                                    <h6 class="dropdown-header"><i class="la la-bell pr-1 fs-16"></i>Notifications</h6>
                                    <div class="dropdown-divider border-top-gray mb-0"></div>
                                    <div class="dropdown-item-list">
                                        <a class="dropdown-item" href="notifications.html">
                                            <div class="media media-card media--card shadow-none mb-0 rounded-0 align-items-center bg-transparent">
                                                <div class="media-img media-img-sm flex-shrink-0">
                                                    <img src="images/img3.jpg" alt="avatar">
                                                </div>
                                                <div class="media-body p-0 border-left-0">
                                                    <h5 class="fs-14 fw-regular">John Doe following your post</h5>
                                                    <small class="meta d-block lh-24">
                                                        <span>45 secs ago</span>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="notifications.html">
                                            <div class="media media-card media--card shadow-none mb-0 rounded-0 align-items-center bg-transparent">
                                                <div class="media-img media-img-sm flex-shrink-0">
                                                    <img src="images/img4.jpg" alt="avatar">
                                                </div>
                                                <div class="media-body p-0 border-left-0">
                                                    <h5 class="fs-14 fw-regular">Arnold Smith answered on your post</h5>
                                                    <small class="meta d-block lh-24">
                                                        <span>5 mins ago</span>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="notifications.html">
                                            <div class="media media-card media--card shadow-none mb-0 rounded-0 align-items-center bg-transparent">
                                                <div class="media-img media-img-sm flex-shrink-0">
                                                    <img src="images/img4.jpg" alt="avatar">
                                                </div>
                                                <div class="media-body p-0 border-left-0">
                                                    <h5 class="fs-14 fw-regular">Saeed bookmarked your post</h5>
                                                    <small class="meta d-block lh-24">
                                                        <span>1 hour ago</span>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <a class="dropdown-item pb-1 border-bottom-0 text-center btn-text fw-regular" href="notifications.html">View All Notifications <i class="la la-arrow-right icon ml-1"></i></a>
                                </div>
                            </li>
                            <li class="dropdown user-dropdown">
                                <a class="nav-link dropdown-toggle dropdown--toggle pl-2" href="#" id="userMenuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="media media-card media--card shadow-none mb-0 rounded-0 align-items-center bg-transparent">
                                        <div class="media-img media-img-xs flex-shrink-0 rounded-full mr-2">
                                            @if(Auth::user()->profileimage)
                                            <img src="{{ url('images') }}/{{ Auth::user()->profileimage }}" alt="{{ Auth::user()->name }}" class="rounded-full">
                                            @else
                                            <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="Profile Avatar | Question Overflow">
                                            @endif
                                        </div>
                                        <div class="media-body p-0 border-left-0">
                                            <h5 class="fs-14">{{ Auth::user()->name }}</h5>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown--menu dropdown-menu-right mt-3 keep-open" aria-labelledby="userMenuDropdown" style="">
                                    <h6 class="dropdown-header">Hi, {{ Auth::user()->name }}</h6>
                                    <div class="dropdown-divider border-top-gray mb-0"></div>
                                    <div class="dropdown-item-list">
                                        <a class="dropdown-item" href="{{ url('dashboard') }}"><i class="la la-user mr-2"></i>Profile</a>
                                        <a class="dropdown-item" href="{{ url('notifications') }}"><i class="la la-bell mr-2"></i>Notifications</a>
                                        <a class="dropdown-item" href="{{ url('profile-settings') }}"><i class="la la-gear mr-2"></i>Settings</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"><i class="la la-power-off mr-2"></i>Log out</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        @else
                        <a href="#" class="btn theme-btn theme-btn-outline mr-2" data-toggle="modal" data-target="#loginModal"><i class="la la-sign-in mr-1"></i> Login</a>
                        <a href="#" class="btn theme-btn" data-toggle="modal" data-target="#signUpModal"><i class="la la-user mr-1"></i> Sign up</a>
                        @endif
                    </div>
                    <!-- end nav-right-button -->
                </div>
                <!-- end menu-wrapper -->
            </div>
            <!-- end col-lg-10 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
    <div class="off-canvas-menu custom-scrollbar-styled">
        <div class="off-canvas-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="left" title="Close menu">
            <i class="la la-times"></i>
        </div>
        <!-- end off-canvas-menu-close -->
        <ul class="generic-list-item off-canvas-menu-list pt-90px">
            <li>
                <a href="{{ url('') }}">Home</a>
            </li>
            <li>
                <a href="{{ url('allsubjects') }}">All Subjects</a>
            </li>
            <li>
                <a href="{{ url('tutorials') }}">Tutorials</a>
            </li>
        </ul>
        @if(!Auth::check())
        <div class="off-canvas-btn-box px-4 pt-5 text-center">
            <a href="#" class="btn theme-btn theme-btn-sm theme-btn-outline" data-toggle="modal" data-target="#loginModal"><i class="la la-sign-in mr-1"></i> Login</a>
            <span class="fs-15 fw-medium d-inline-block mx-2">Or</span>
            <a href="#" class="btn theme-btn theme-btn-sm" data-toggle="modal" data-target="#signUpModal"><i class="la la-plus mr-1"></i> Sign up</a>
        </div>
        @endif
    </div>
    @if(Auth::check())
    <div class="user-off-canvas-menu custom-scrollbar-styled">
        <div class="user-off-canvas-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Close menu">
            <i class="la la-times"></i>
        </div><!-- end user-off-canvas-menu-close -->
        <ul class="nav nav-tabs generic-tabs generic--tabs pt-90px pl-4 shadow-sm" id="myTab2" role="tablist">
            <li class="nav-item"><div class="anim-bar" style="left: 24px; width: 96.8438px;"></div></li>
            <li class="nav-item">
                <a class="nav-link active" id="user-notification-menu-tab" data-toggle="tab" href="#user-notification-menu" role="tab" aria-controls="user-notification-menu" aria-selected="true">Notifications</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="user-profile-menu-tab" data-toggle="tab" href="#user-profile-menu" role="tab" aria-controls="user-profile-menu" aria-selected="false">Profile</a>
            </li>
        </ul>
        <div class="tab-content pt-3" id="myTabContent2">
            <div class="tab-pane fade show active" id="user-notification-menu" role="tabpanel" aria-labelledby="user-notification-menu-tab">
                <div class="dropdown--menu shadow-none w-auto rounded-0">
                    <div class="dropdown-item-list">
                        <a class="dropdown-item" href="notifications.html">
                            <div class="media media-card media--card shadow-none mb-0 rounded-0 align-items-center bg-transparent">
                                <div class="media-img media-img-sm flex-shrink-0">
                                    <img src="images/img3.jpg" alt="avatar">
                                </div>
                                <div class="media-body p-0 border-left-0">
                                    <h5 class="fs-14 fw-regular">John Doe following your post</h5>
                                    <small class="meta d-block lh-24">
                                        <span>45 secs ago</span>
                                    </small>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="notifications.html">
                            <div class="media media-card media--card shadow-none mb-0 rounded-0 align-items-center bg-transparent">
                                <div class="media-img media-img-sm flex-shrink-0">
                                    <img src="images/img4.jpg" alt="avatar">
                                </div>
                                <div class="media-body p-0 border-left-0">
                                    <h5 class="fs-14 fw-regular">Arnold Smith answered on your post</h5>
                                    <small class="meta d-block lh-24">
                                        <span>5 mins ago</span>
                                    </small>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="notifications.html">
                            <div class="media media-card media--card shadow-none mb-0 rounded-0 align-items-center bg-transparent">
                                <div class="media-img media-img-sm flex-shrink-0">
                                    <img src="images/img4.jpg" alt="avatar">
                                </div>
                                <div class="media-body p-0 border-left-0">
                                    <h5 class="fs-14 fw-regular">Saeed bookmarked your post</h5>
                                    <small class="meta d-block lh-24">
                                        <span>1 hour ago</span>
                                    </small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <a class="dropdown-item border-bottom-0 text-center btn-text fw-regular" href="notifications.html">View All Notifications <i class="la la-arrow-right icon ml-1"></i></a>
                </div>
            </div><!-- end tab-pane -->
            <div class="tab-pane fade" id="user-profile-menu" role="tabpanel" aria-labelledby="user-profile-menu-tab">
                <div class="dropdown--menu shadow-none w-auto rounded-0">
                    <div class="dropdown-item-list">
                        <a class="dropdown-item" href="user-profile.html"><i class="la la-user mr-2"></i>Profile</a>
                        <a class="dropdown-item" href="notifications.html"><i class="la la-bell mr-2"></i>Notifications</a>
                        <a class="dropdown-item" href="referrals.html"><i class="la la-user-plus mr-2"></i>Referrals</a>
                        <a class="dropdown-item" href="setting.html"><i class="la la-gear mr-2"></i>Settings</a>
                        <a class="dropdown-item" href="index.html"><i class="la la-power-off mr-2"></i>Log out</a>
                    </div>
                </div>
            </div><!-- end tab-pane -->
        </div>
    </div>
    @endif
    <!-- end off-canvas-menu -->
    <div class="mobile-search-form">
        <div class="d-flex align-items-center">
            <form method="post" class="flex-grow-1 mr-3">
                <div class="form-group mb-0">
                    <input class="form-control form--control pl-40px" type="text" name="search" placeholder="Type your search words...">
                    <span class="la la-search input-icon"></span>
                </div>
            </form>
            <div class="search-bar-close icon-element icon-element-sm shadow-sm">
                <i class="la la-times"></i>
            </div>
            <!-- end off-canvas-menu-close -->
        </div>
    </div>
    <!-- end mobile-search-form -->
    <div class="body-overlay"></div>
</header>
<!-- end header-area -->
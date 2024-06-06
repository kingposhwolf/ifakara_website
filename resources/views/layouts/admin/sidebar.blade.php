  <!-- ========== Left Sidebar Start ========== -->
  <div class="left-side-menu">

<div class="h-100" data-simplebar>

    <!-- User box -->
    <div class="user-box text-center">
        <img src="../assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
            class="rounded-circle avatar-md">
        <div class="dropdown">
            <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                data-bs-toggle="dropdown">Geneva Kennedy</a>
            <div class="dropdown-menu user-pro-dropdown">

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-user me-1"></i>
                    <span>My Account</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-settings me-1"></i>
                    <span>Settings</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-lock me-1"></i>
                    <span>Lock Screen</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-log-out me-1"></i>
                    <span>Logout</span>
                </a>

            </div>
        </div>
        <p class="text-muted">Admin Head</p>
    </div>

    <!--- Sidemenu -->
    <div id="sidebar-menu">

        <ul id="side-menu">

            <li class="menu-title">Navigation</li>

            <li>
                <a href="{{route('dashboard')}}">
                    <i data-feather="airplay"></i>

                    <span> Dashboards </span>
                </a>

            </li>

            <li class="menu-title">App</li>
            <li>
                <a href="#sidebarEcommerce1" data-bs-toggle="collapse">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span>Home</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEcommerce1">
                    <ul class="nav-second-level">
                        <li>
                            <a href="{{ route('admin_slider') }}">Slider</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="#sidebarEcommerce" data-bs-toggle="collapse">
                    <i class="fa fa-file" aria-hidden="true"></i>
                    <span> What's New</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEcommerce">
                    <ul class="nav-second-level">
                        <li>
                            <a href="{{ route('admin_events') }}">Events</a>
                        </li>
                        <li>
                            <a href="{{ route('admin_news') }}">News</a>
                        </li>
                        <li>
                            <a href="{{ route('admin_verse') }}">Verse of Day</a>
                        </li>
                        <li>
                            <a href="{{ route('admin_sermons') }}">Sermons</a>
                        </li>
                        {{--  <li>
                            <a href="{{ route('admin_gallery') }}">Gallery</a>
                        </li>  --}}
                    </ul>
                </div>
            </li>


            <li>
                <a href="#sidebarProjects" data-bs-toggle="collapse">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span> Staff </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarProjects">
                    <ul class="nav-second-level">
                        <li>
                            <a href="{{route('admin_exactive_staff')}}">Exacutive staff</a>
                        </li>
                        <li>
                            <a href="{{route('admin_management_staff')}}">Management staff</a>
                        </li>
                        <li>
                            <a href="#historicalStaffs" data-bs-toggle="collapse">
                                <span> Historical staff </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="historicalStaffs">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{route('admin_historical_staff_executive')}}">Exacutive staff</a>
                                    </li>
                                    <li>
                                        <a href="{{route('admin_historical_staff_management')}}">Management staff</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a href="#sidebarPr" data-bs-toggle="collapse">
                    <i class="fe-briefcase " aria-hidden="true"></i>
                    <span>Library </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPr">
                    <ul class="nav-second-level">
                        <li>
                            <a href="{{route('admin_library_photos')}}">Photos</a>
                        </li>
                        <li>
                            <a href="{{route('admin_library_videos')}}">Videos</a>
                        </li>

                    </ul>
                </div>
            </li>

            <li>
                <a href="{{route('admin_careers')}}">
                    <i class="fa fa-bullhorn" aria-hidden="true"></i>
                     <span> Careers </span>
                </a>

            </li>
            <li>
                <a href="#sidebarTasks" data-bs-toggle="collapse">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span> Diocese </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarTasks">
                    <ul class="nav-second-level">
                        <li>
                            <a href="{{route('admin_parish')}}">Parish</a>
                        </li>
                        <li>
                            <a href="{{route('admin_school')}}">School</a>
                        </li>
                        <li>
                            <a href="{{route('admin_health')}}">Health</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="#sidebarLayouts" data-bs-toggle="collapse">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <span> Documents </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarLayouts">
                    <ul class="nav-second-level">
                        <li>
                            <a href="{{route('admin_research')}}">Research</a>
                        </li>
                        <li>
                            <a href="{{route('admin_service')}}">Services</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="#sidebarContacts" data-bs-toggle="collapse">
                    <i class="fa fa-puzzle-piece" aria-hidden="true"></i>
                    <span> Department </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarContacts">
                    <ul class="nav-second-level">
                        <li>
                            <a href="{{route('admin_DioceseDepartment')}}">Diocese Department</a>
                        </li>
                        {{--  <li>
                            <a href="{{route('admin_ParishDepartment')}}">Parish Department</a>
                        </li>  --}}
                    </ul>
                </div>
            </li>

            <li>
                <a href="#sidebarTickets" data-bs-toggle="collapse">
                    <i class="fa fa-table" aria-hidden="true"></i>
                    <span> About Us </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarTickets">
                    <ul class="nav-second-level">
                        <li>
                            <a href="{{ route('diocese_summary') }}">Diocese Summary</a>
                        </li>
                        <li>
                            <a href="tickets-detail.html">Detail</a>
                        </li>
                    </ul>
                </div>
            </li>


            <li>
                <a href="#sidebarTickets">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span>Contact us </span>

                </a>

            </li>
            <hr>

            <li>
                <a href="{{route('feedback')}}">
                    <i class="fa fa-comments" aria-hidden="true"></i>
                     <span> Feedback </span>
                </a>

            </li>

            <li>
                <a href="#">
                    <i class="fa fa-question-circle" aria-hidden="true"></i>

                    <span> Help </span>
                </a>

            </li>

        </ul>

    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>

</div>
<!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->

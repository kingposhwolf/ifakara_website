<!DOCTYPE html>
<html lang="en">
@include('layouts.admin.head')

<!-- body start -->

<body class="loading"
    data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

    <!-- Begin page -->
    <div id="wrapper">
        <!-- Topbar Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <ul class="list-unstyled topnav-menu float-end mb-0">


                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light"
                            data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                            aria-expanded="false">
                            <span class="pro-user-name ms-1">
                                Admin <i class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-lock"></i>
                                <span>Lock Screen</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>

                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.html" class="logo logo-dark text-center">
                        <span class="logo-sm">
                            <img src="../assets/images/logo-sm.png" alt="" height="22">
                            <!-- <span class="logo-lg-text-light">UBold</span> -->
                        </span>
                        <span class="logo-lg">
                            <img src="../assets/images/logo-dark.png" alt="" height="20">
                            <!-- <span class="logo-lg-text-light">U</span> -->
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light text-center">
                        <span class="logo-sm">
                            <img src="../assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="../assets/images/logo-light.png" alt="" height="20">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="fe-menu"></i>
                        </button>
                    </li>

                    <li>
                        <!-- Mobile menu toggle (Horizontal Layout)-->
                        <a class="navbar-toggle nav-link" data-bs-toggle="collapse"
                            data-bs-target="#topnav-menu-content">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>

                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- end Topbar -->

        @include('layouts.admin.sidebar')



        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">

                            <h4 class="page-title mb-3">Historical Staff</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    @foreach ($exactive_historical_staff as $exactive_historical_staff)
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="{{ asset('admin/assets/images/staff/'. $exactive_historical_staff->image) }}" height="150px" width="150px" alt="logo"
                                        class="mb-1">
                                    <h4 class="mb-1 font-20">{{ $exactive_historical_staff->name }}</h4>
                                    <p class="text-muted  font-14">{{ $exactive_historical_staff->category }}</p>
                                </div>
                                <div class="row mt-1 text-center">
                                    <div class="col-6">
                                        <a href="{{ url('admin/update_staff/'.$exactive_historical_staff->id) }}" class="action-icon"> <i
                                                class="mdi mdi-square-edit-outline"></i></a>

                                    </div>
                                    <div class="col-6">
                                        <a href="{{ url('admin/delete_staff/'.$exactive_historical_staff->id) }}" class="action-icon"> <i
                                                class="mdi mdi-delete"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card -->
                    </div><!-- end col -->
                    @endforeach
                    <hr>
                    @foreach ($management_historical_staff as $management_historical_staff)
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="{{ asset('admin/assets/images/staff/'. $management_historical_staff->image) }}" height="150px" width="150px" alt="logo"
                                        class="mb-1">
                                    <h4 class="mb-1 font-20">{{ $management_historical_staff->name }}</h4>
                                    <p class="text-muted  font-14">{{ $management_historical_staff->category }}</p>
                                </div>
                                <div class="row mt-1 text-center">
                                    <div class="col-6">
                                        <a href="{{ url('admin/update_staff/'.$management_historical_staff->id) }}" class="action-icon"> <i
                                                class="mdi mdi-square-edit-outline"></i></a>

                                    </div>
                                    <div class="col-6">
                                        <a href="{{ url('admin/delete_staff/'.$management_historical_staff->id) }}" class="action-icon"> <i
                                                class="mdi mdi-delete"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card -->
                    </div><!-- end col -->
                    @endforeach
                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->
        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <b>IFAKARA DIOCESE Ⓒ 2023</b>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
        <!-- end Footer -->

    </div>




    </div>
    <!-- END wrapper -->



    <script src="{{ asset('admin/assets/js/vendor.min.js') }}"></script>


    <script src="{{ asset('admin/assets/js/pages/crm-dashboard.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('admin/assets/js/app.min.js') }}"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.admin.head')
</head>

<!-- body start -->

<body class="loading"
    data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        @include('layouts.admin.topbar')
        <!-- end Topbar -->

        @include('layouts.admin.sidebar')

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Dashboard</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-6 col-xl-3">
                            <div class="card bg-pattern">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-md bg-blue rounded">
                                                <i class="fe-layers avatar-title font-22 text-white"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            @foreach ($member as $member)
                                                <div class="text-end">
                                                    <h3 class="text-dark my-1"><span
                                                            data-plugin="counterup">{{ $member->amount }}</span></h3>
                                                    <p class="text-muted mb-0 text-truncate">{{ $member->name }}</p>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col -->

                        <div class="col-lg-6 col-xl-3">
                            <div class="card bg-pattern">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-md bg-success rounded">
                                                <i class="fe-award avatar-title font-22 text-white"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            @foreach ($parish as $parish)
                                                <div class="text-end">
                                                    <h3 class="text-dark my-1"><span
                                                            data-plugin="counterup">{{ $parish->amount }}</span></h3>
                                                    <p class="text-muted mb-0 text-truncate">{{ $parish->name }}</p>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                        <div class="col-lg-6 col-xl-3">
                            <div class="card bg-pattern">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-md bg-danger rounded">
                                                <i class="fe-delete avatar-title font-22 text-white"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            @foreach ($school as $school)
                                                <div class="text-end">
                                                    <h3 class="text-dark my-1"><span
                                                            data-plugin="counterup">{{ $school->amount }}</span></h3>
                                                    <p class="text-muted mb-0 text-truncate">{{ $school->name }}</p>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                        <div class="col-lg-6 col-xl-3">
                            <div class="card bg-pattern">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-md bg-warning rounded">
                                                <i class="fe-dollar-sign avatar-title font-22 text-white"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            @foreach ($health as $health)
                                                <div class="text-end">
                                                    <h3 class="text-dark my-1"><span
                                                            data-plugin="counterup">{{ $health->amount }}</span></h3>
                                                    <p class="text-muted mb-0 text-truncate">{{ $health->name }}</p>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row-->

                    <div class="row">
                        <div class="col-md-4">
                            <!-- Simple card -->
                            <div class="card">
                                <div class="card-title mt-2">
                                    <h4 class="m-3"><a href="project-detail.html" class="text-dark">Recent News
                                            Publish</a></h4>

                                </div>
                                @foreach ($new as $new)
                                    <img class="card-img-top img-fluid"
                                        src="{{ asset('admin/assets/images/news/' . $new->image) }}"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $new->news_title }}</h5>
                                        <p class="card-text">{{ $new->initial_description }}</p>
                                        <h6>{{ $new->news_date }}</h6>
                                    </div>
                                @endforeach
                            </div>
                        </div><!-- end col -->

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-title mt-2">
                                    <h4 class="m-3"><a href="project-detail.html" class="text-dark">Recent Event
                                            Publish</a></h4>

                                </div>
                                @foreach ($event as $event)
                                    <img class="card-img-top img-fluid"
                                        src="{{ asset('admin/assets/images/events/' . $event->image) }}"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $event->events_title }}</h5>
                                        <p class="card-text">{{ $event->events_description }}</p>
                                    </div>
                                @endforeach

                            </div>
                        </div><!-- end col -->
                        <div class="col-md-4">

                            <div class="card project-box">
                                <div class="card-body">


                                    <h4 class="mt-0"><a href="project-detail.html" class="text-dark">Message and
                                            Feedback</a></h4>

                                    @foreach ($feedback as $feedback)
                                        <p class=" text-larger" style="font-size: 14px"><i
                                                class="mdi mdi-account-circle"></i>
                                            <span style="font-size: 14px">{{ $feedback->name }}<span> ,
                                                    {{ $feedback->email }}
                                        </p>
                                        <p class="mb-2 fw-semibold">Subject : <span
                                                class="float-center">{{ $feedback->subject }}</span></p>
                                        <!-- Desc-->
                                        <p class="font-14 mb-3 text-justify">{{ $feedback->message }}
                                        </p>

                                        <p class="mb-1">
                                            <span class="pe-2 text-nowrap mb-2 d-inline-block">

                                                <b>Date</b> {{ $feedback->created_at }}
                                            </span>

                                        </p>
                                        <hr>
                                    @endforeach

                                </div>
                            </div> <!-- end card box-->
                        </div>

                    </div>



                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            @include('layouts.admin.footer')
            <!-- end Footer -->

        </div>


    </div>

    <script src="{{ asset('admin/assets/js/vendor.min.js') }}"></script>


    <script src="{{ asset('admin/assets/js/pages/crm-dashboard.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('admin/assets/js/app.min.js') }}"></script>
    <!-- Datatables init -->
    <script src="{{ asset('admin/assets/js/pages/datatables.init.js') }}"></script>

</body>

</html>


{{-- #fcc015 --}}

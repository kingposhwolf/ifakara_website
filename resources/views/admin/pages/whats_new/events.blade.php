<!DOCTYPE html>
<html lang="en">
@include('layouts.admin.head')

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

                                <h4 class="page-title">Events</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row justify-content-between mb-2">
                                        <div class="col-auto">
                                            <form>
                                                <div class="mb-2">
                                                    <label for="inputPassword2" class="visually-hidden">Search</label>
                                                    <input type="search" class="form-control" id="inputPassword2"
                                                        placeholder="Search...">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="text-sm-end">
                                                {{-- <button type="button" class="btn btn-danger waves-effect waves-light mb-2" data-bs-toggle="modal" data-bs-target="#custom-modal">Add Contact</button> --}}
                                                <Span class="bg-info p-2" style="color:#fff" data-bs-toggle="modal"
                                                    data-bs-target="#custom-modal-events"><a href="#"
                                                        data-bs-toggle="modal" data-bs-target="#custom-modal-events"
                                                        style="color:#fff">Add Events</a> </Span>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap table-hover dt-responsive mb-0" id="basic-datatable">
                                            <thead>
                                                <tr>
                                                    <th>Sn</th>
                                                    <th>Image</th>
                                                    <th>Title</th>
                                                    <th>Guest</th>
                                                    <th>Discription</th>
                                                    <th>Location</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th style="width: 82px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($events as $event)
                                                <tr>
                                                    <td class="table-user">
                                                        {{ $event->id }}
                                                    </td>
                                                    <td>
                                                        <img src="{{ asset('admin/assets/images/events/' . $event->image) }}" alt="table-user"
                                                            class="me-2" width="100px" height="50px">
                                                    </td>
                                                    <td>
                                                        {{ $event->events_title }}
                                                    </td>
                                                    <td>
                                                        {{ $event->guest_of_honor }}
                                                    </td>
                                                    <td>
                                                        {{ $event->events_description }}
                                                    </td>
                                                    <td>
                                                        {{ $event->location }}
                                                    </td>
                                                    <td>
                                                        {{ $event->start_date }}
                                                    </td>
                                                    <td>
                                                        {{ $event->end_date }}
                                                    </td>
                                                    <td>
                                                        <a href="{{ url('admin/edit_events/'. $event->id) }}" class="action-icon"> <i
                                                                class="mdi mdi-square-edit-outline"></i></a>
                                                        <a href="{{ url('admin/delete_events/'.$event->id) }}" onclick="return confirm('Are you sure you want to delete?');" class="action-icon"> <i
                                                                class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card-->
                        </div>
                        <!-- end col -->

                    </div>
                    <!-- end row -->

                </div>
                <!-- container -->

            </div>
            <!-- content -->
            <!-- Modal -->
            <div class="modal fade" id="custom-modal-events" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-light">
                            <h4 class="modal-title" id="myCenterModalLabel">Add Events</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                            <form action="{{ url('/admin/add_events') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-12">
                                        <label for="name" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="name"
                                            placeholder="Enter Event Title" name="events_title">
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="exampleInputEmail1" class="form-label">Image</label>
                                        <input type="file" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter email" name="image">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="name" class="form-label">Guest</label>
                                        <input type="text" class="form-control" id="name"
                                            placeholder="Enter Guest Name" name="guest_of_honor">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="name" class="form-label">Location</label>
                                        <input type="text" class="form-control" id="name"
                                            placeholder="Enter Event Location" name="location">
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="position" class="form-label">Description</label>
                                        <textarea name="events_description" id="" cols="12" rows="4" class="form-control"></textarea>
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="name" class="form-label">Start Date</label>
                                        <input type="date" class="form-control" id="name"
                                        name="start_date" >
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="name" class="form-label">End Date</label>
                                        <input type="date" class="form-control" id="name"
                                        name="end_date"  >
                                    </div>

                                    <div class="text-end">
                                        <button type="submit" class="bg-info p-2">Publish </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->

            <!-- Footer Start -->
            @include('layouts.admin.footer')
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>

    <script src="{{ asset('admin/assets/js/vendor.min.js') }}"></script>


    <script src="{{ asset('admin/assets/js/pages/crm-dashboard.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('admin/assets/js/app.min.js') }}"></script>

    <!-- third party js -->
    <script src="{{ asset('admin/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/pages/form-wizard.init.js') }}"></script>

    <script src="{{ asset('admin/assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>

    <script src="{{ asset('admin/assets/js/pages/datatables.init.js') }}"></script>

</body>

</html>

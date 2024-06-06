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

                                <h4 class="page-title">Healths</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row justify-content-end mb-2">
                                        <div class="col-sm-6">
                                            <div class="text-sm-end">
                                                {{-- <button type="button" class="btn btn-danger waves-effect waves-light mb-2" data-bs-toggle="modal" data-bs-target="#custom-modal">Add Contact</button> --}}
                                                <Span class="bg-info p-2" style="color:#fff" data-bs-toggle="modal"
                                                    data-bs-target="#custom-modal-health"><a href="#"
                                                        data-bs-toggle="modal" data-bs-target="#custom-modal-health"
                                                        style="color:#fff">Add Health</a> </Span>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap table-hover dt-responsive mb-0" id="basic-datatable">
                                            <thead>
                                                <tr>
                                                    <th>sn</th>
                                                    <th>Institute Title</th>
                                                    <th>Image</th>
                                                    <th>Head of Institute</th>
                                                    <th>Location</th>
                                                    <th>P. O. Box</th>
                                                    <th>Description</th>
                                                    <th>Website Link</th>
                                                    <th style="width: 82px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($health_institutes as $health_institute)
                                            <tr>
                                                <td class="table-user">
                                                    {{ $health_institute->id }}
                                                </td>
                                                <td>
                                                    {{ $health_institute->name }}
                                                </td>
                                                <td>
                                                    <img src="{{ asset('admin/assets/images/health/' . $health_institute->image) }}" alt="table-user"
                                                    class="me-2" width="100px" height="50px">
                                                </td>
                                                <td>
                                                    {{ $health_institute->head }}
                                                </td>
                                                <td>
                                                    {{ $health_institute->location }}
                                                </td>
                                                <td>
                                                    {{ $health_institute->p_o_box }}
                                                </td>
                                                <td>
                                                    {{ $health_institute->description }}
                                                </td>
                                                <td>
                                                    {{ $health_institute->website_link }}
                                                </td>
                                                <td>
                                                    <a href="{{ url('admin/edit_health/'. $health_institute->id) }}" class="action-icon"> <i
                                                            class="mdi mdi-square-edit-outline"></i></a>
                                                    <a href="{{ url('admin/delete_health/'.$health_institute->id) }}" onclick="return confirm('Are you sure you want to delete?');" class="action-icon"> <i
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
            <div class="modal fade" id="custom-modal-health" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-light">
                            <h4 class="modal-title" id="myCenterModalLabel">Add Health</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                            <form action="{{ url('/admin/add_health') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-12">
                                        <label for="name" class="form-label">Institute Name</label>
                                        <input type="text" class="form-control" id="name"
                                            placeholder="Enter Institute Name" name="name">
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="exampleInputEmail1" class="form-label">Image</label>
                                        <input type="file" class="form-control" id="exampleInputEmail1"
                                            name="image">
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="name" class="form-label">Head Of Center</label>
                                        <input type="text" class="form-control" id="name"
                                            placeholder="Enter Head Name" name="head">
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="name" class="form-label">Location</label>
                                        <input type="text" class="form-control" id="name"
                                            placeholder="Enter Location" name="location">
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="name" class="form-label">P. O. Box</label>
                                        <input type="text" class="form-control" id="name"
                                            placeholder="Enter Health P. O. Box" name="p_o_box">
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="name" class="form-label">Website Link</label>
                                        <input type="text" class="form-control" id="name"
                                            placeholder="Enter Hospital Website link" name="website_link">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="company" class="form-label">Description</label>
                                        <textarea name="description" id="" cols="12" rows="5" class="form-control" required></textarea>
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

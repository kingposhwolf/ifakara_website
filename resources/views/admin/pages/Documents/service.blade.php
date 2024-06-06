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

                                <h4 class="page-title">Diocese Services</h4>
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
                                                    data-bs-target="#custom-modal-service"><a href="#"
                                                        data-bs-toggle="modal" data-bs-target="#custom-modal-service"
                                                        style="color:#fff">Add Services</a> </Span>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="table-responsive">
                                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>sn</th>
                                                    <th>Title</th>
                                                    <th>Initial Descriptions</th>
                                                    <th>Description</th>
                                                    <th style="width: 82px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($services as $service)
                                                <tr>
                                                    <td class="table-user">
                                                        {{ $service->id }}
                                                    </td>
                                                    <td>
                                                        {{ $service->title }}
                                                    </td>
                                                    <td style="white-space:nowrap; text-overflow:ellipsis; max-width: 20ch; overflow:hidden;">
                                                        {{ $service->initial_description }}
                                                    </td>
                                                    <td style="white-space:nowrap; text-overflow:ellipsis; max-width: 35ch; overflow:hidden;">
                                                        {{ $service->description }}
                                                    </td>
                                                    <td>
                                                        <a href="{{ url('admin/edit_service/'. $service->id) }}" class="action-icon"> <i
                                                                class="mdi mdi-square-edit-outline"></i></a>
                                                        <a href="{{ url('admin/delete_service/'.$service->id) }}" class="action-icon"> <i
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
            <div class="modal fade" id="custom-modal-service" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-light">
                            <h4 class="modal-title" id="myCenterModalLabel">Add Services</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                            <form action="{{ url('/admin/add_service') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-12">
                                        <label for="name" class="form-label">Title of Service</label>
                                        <input type="text" class="form-control" id="name" name="title"
                                            placeholder="Enter title of service">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="dropdown">
                                            <label for="category" class="form-label">Category of Service</label><br>
                                            <select name="category" id="category" class="form-control" style="width: 100%">
                                                <option selected>--Select Service--</option>
                                                <option value="Education">Education</option>
                                                <option value="Health">Health</option>
                                                <option value="Bible">Bible</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="position" class="form-label">Initial description</label>
                                        <textarea name="initial_description" id="" cols="12" rows="3" class="form-control" required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="company" class="form-label">Description</label>
                                        <textarea name="description" id="" cols="12" rows="10" class="form-control" required></textarea>
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

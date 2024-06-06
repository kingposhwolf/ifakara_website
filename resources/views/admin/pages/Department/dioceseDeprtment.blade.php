<!DOCTYPE html>
<html lang="en">
@include('layouts.admin.head')

<!-- body start -->

<body class="loading"
    data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

    @if(Session::has('status'))
        <div class="alert {{ Session::get('status_class') }} alert-dismissible fade show" role="alert" style="position: fixed; top: 10%; left: 50%; transform: translate(-50%, -50%); z-index: 9999;">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        {{ Session::get('status') }}
        </div>
    @endif
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

                                <h4 class="page-title">Diocese Department</h4>
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
                                                    data-bs-target="#custom-modal-DioDepartment"><a href="#"
                                                        data-bs-toggle="modal" data-bs-target="#custom-modal-DioDepartment"
                                                        style="color:#fff">Add Diocese Department</a> </Span>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap table-hover dt-responsive mb-0" id="basic-datatable">
                                            <thead>
                                                <tr>
                                                    <th>sn</th>
                                                    <th>Department Name</th>
                                                    <th>Head of Department</th>
                                                    <th>Descriptions</th>
                                                    <th>Staffs</th>
                                                    <th>Location</th>
                                                    <th style="width: 82px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($diocese_department as $department)

                                                <tr>
                                                    <td class="table-user">
                                                        {{ $department->id }}
                                                    </td>
                                                    <td>
                                                        {{ $department->name }}
                                                    </td>
                                                    <td>
                                                    {{ $department->head }}
                                                    </td>
                                                    <td>
                                                    {{ $department->description }}
                                                    </td>
                                                    <td>
                                                    {{ $department->staffs }}
                                                    </td>
                                                    <td>
                                                    {{ $department->location }}
                                                    </td>
                                                    <td>
                                                        <div class="row mt-1 text-center">
                                                            <div class="col-6">
                                                                <a href="{{ route('edit_DioceseDepartment', ['id' => $department->id]) }}" class="action-icon"> <i
                                                                        class="mdi mdi-square-edit-outline"></i></a>

                                                            </div>
                                                            <div class="col-6">
                                                                <a href="{{ route('delete_DioceseDepartment', ['id' => $department->id]) }}" class="action-icon" onclick="return confirm('Are you sure you want to delete this staff?')"> <i class="mdi mdi-delete"></i></a>
                                                            </div>
                                                        </div>
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
            <div class="modal fade" id="custom-modal-DioDepartment" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-light">
                            <h4 class="modal-title" id="myCenterModalLabel">Add Diocese Department</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                            <form action="{{ route('create_DioceseDepartment') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-12">
                                        <label for="name" class="form-label">Department Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Enter Department Name">
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="head" class="form-label">Head of Department</label>
                                        <input type="text" class="form-control" id="head" name="head"
                                            placeholder="Enter Head of Department">
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="staffs" class="form-label">Number of Staffs</label>
                                        <input type="number" class="form-control" id="staffs" name="staffs"
                                            placeholder="Enter Number of staffs in the Department">
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="location" class="form-label">Location</label>
                                        <input type="text" class="form-control" id="location" name="location"
                                            placeholder="Enter Department Location">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="description" class="form-label">About Department</label>
                                        <textarea name="description" id="description" cols="12" rows="5" class="form-control" placeholder="Enter Department short Description" required></textarea>
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

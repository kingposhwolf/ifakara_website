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

                                <h4 class="page-title">Schools</h4>
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
                                                    data-bs-target="#custom-modal-school"><a href="#"
                                                        data-bs-toggle="modal" data-bs-target="#custom-modal-school"
                                                        style="color:#fff">Add School</a> </Span>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th>sn</th>
                                                    <th>School Name</th>
                                                    <th>Image</th>
                                                    <th>Head of School</th>
                                                    <th>Location</th>
                                                    <th>P. O. Box</th>
                                                    <th style="width: 82px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($schools as $school)
                                                <tr>
                                                 <td class="table-user">
                                                     {{ $school->id }}
                                                 </td>
                                                 <td>
                                                     {{ $school->name }}
                                                 </td>
                                                 <td>
                                                     <img src="{{ asset('admin/assets/images/school/' . $school->image) }}" alt="table-user"
                                                     class="me-2" width="100px" height="50px">
                                                 </td>
                                                 <td>
                                                     {{ $school->head }}
                                                 </td>
                                                 <td>
                                                     {{ $school->location }}
                                                 </td>
                                                 <td>
                                                     {{ $school->p_o_box }}
                                                 </td>
                                                 <td>
                                                     <a href="{{ url('admin/edit_school/'. $school->id) }}" class="action-icon"> <i
                                                             class="mdi mdi-square-edit-outline"></i></a>
                                                     <a href="{{ url('admin/delete_school/'.$school->id) }}" onclick="return confirm('Are you sure you want to delete?');" class="action-icon"> <i
                                                             class="mdi mdi-delete"></i></a>
                                                 </td>
                                             </tr> 
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                    <ul class="pagination pagination-rounded justify-content-end mb-0 mt-2">
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                                <span aria-hidden="true">«</span>
                                                <span class="visually-hidden">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link"
                                                href="javascript: void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                                <span aria-hidden="true">»</span>
                                                <span class="visually-hidden">Next</span>
                                            </a>
                                        </li>
                                    </ul>

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
            <div class="modal fade" id="custom-modal-school" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-light">
                            <h4 class="modal-title" id="myCenterModalLabel">Add School</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                            <form action="{{ url('admin/add_school') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-12">
                                        <label for="name" class="form-label">School Name</label>
                                        <input type="text" class="form-control" id="name"
                                            placeholder="Enter School Name" name="name">
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="exampleInputEmail1" class="form-label">Image</label>
                                        <input type="file" class="form-control" id="exampleInputEmail1"
                                            name="image">
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="name" class="form-label">Head of School</label>
                                        <input type="text" class="form-control" id="name"
                                            placeholder="Enter Head Name" name="head">
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="name" class="form-label">Location</label>
                                        <input type="text" class="form-control" id="name"
                                            placeholder="Enter School Location" name="location">
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="name" class="form-label">P. O. Box</label>
                                        <input type="text" class="form-control" id="name"
                                            placeholder="Enter School Location" name="p_o_box">
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

</body>

</html>

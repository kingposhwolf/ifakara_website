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

                                <h4 class="page-title">Diocese Summary</h4>
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
                                                    data-bs-target="#custom-modal-infor"><a href="#"
                                                        data-bs-toggle="modal" data-bs-target="#custom-modal-infor"
                                                        style="color:#fff">Add Infor</a> </Span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        @foreach ($school as $school)
                                    <div class="col-6">
                                        <div class="card card-body text-xs-center">
                                            <h3 class="card-title">{{ $school->name }}</h3>
                                            <h4 class="card-text">{{ $school->amount }}</h4>

                                            {{-- <div>
                                                <a href="{{ url('admin/edit_events/'. $school->id) }}" class="action-icon"> <i
                                                    class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="{{ url('admin/delete_summary/'.$school->id) }}" onclick="return confirm('Are you sure you want to delete?');" class="action-icon"> <i
                                                    class="mdi mdi-delete"></i></a>
                                            </div> --}}
                                        </div>
                                        <hr>
                                    </div>
                                    @endforeach
                                    
                                    
                                    @foreach ($member as $member)
                                    <div class="col-6">
                                        <div class="card card-body text-xs-center">
                                            <h3 class="card-title">{{ $member->name }}</h3>
                                            <h4 class="card-text">{{ $member->amount }}</h4>
                                            {{-- <div>
                                                <a href="{{ url('admin/edit_events/'. $member->id) }}" class="action-icon"> <i
                                                    class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="{{ url('admin/delete_summary/'.$member->id) }}" onclick="return confirm('Are you sure you want to delete?');" class="action-icon"> <i
                                                    class="mdi mdi-delete"></i></a>
                                            </div> --}}
                                        </div>
                                        <hr>
                                    </div>
                                    @endforeach
                                    

                                    @foreach ($parish as $parish)
                                    <div class="col-6">
                                        <div class="card card-body text-xs-center">
                                            <h3 class="card-title">{{ $parish->name }}</h3>
                                            <h4 class="card-text">{{ $parish->amount }}</h4>
                                            {{-- <div>
                                                <a href="{{ url('admin/edit_events/'. $parish->id) }}" class="action-icon"> <i
                                                    class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="{{ url('admin/delete_summary/'.$parish->id) }}" onclick="return confirm('Are you sure you want to delete?');" class="action-icon"> <i
                                                    class="mdi mdi-delete"></i></a>
                                            </div> --}}
                                        </div>
                                        <hr>
                                    </div>
                                    @endforeach

                                    @foreach ($health as $health)
                                    <div class="col-6">
                                        <div class="card card-body text-xs-center">
                                            <h3 class="card-title">{{ $health->name }}</h3>
                                            <h4 class="card-text">{{ $health->amount }}</h4>
                                            {{-- <div>
                                                <a href="{{ url('admin/edit_events/'. $health->id) }}" class="action-icon"> <i
                                                    class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="{{ url('admin/delete_summary/'.$health->id) }}" onclick="return confirm('Are you sure you want to delete?');" class="action-icon"> <i
                                                    class="mdi mdi-delete"></i></a>
                                            </div> --}}
                                        </div>
                                        <hr>
                                    </div>
                                    @endforeach
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
                <!--Add Modal -->
            <div class="modal fade" id="custom-modal-infor" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-light">
                            <h4 class="modal-title" id="myCenterModalLabel">Add Dioceses Infor</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                            <form action="{{ url('/admin/add_summary') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-6 mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" required
                                            placeholder="Enter name">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <div class="dropdown">
                                            <label for="category" class="form-label">Category</label><br>
                                            <select name="category" id="category" class="form-control" style="width: 100%">
                                                <option selected>--Select Category--</option>
                                                <option value="Parishies">Parishies</option>
                                                <option value="Members">Members</option>
                                                <option value="Schools">Schools</option>
                                                <option value="Healths Center">Healths Center</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="name" class="form-label">Amounts</label>
                                        <input type="number" class="form-control" id="name" name="amount" required
                                            placeholder="Enter Amount">
                                    </div>
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="bg-info p-2">Publish </button>
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

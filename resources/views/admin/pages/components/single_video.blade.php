<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.admin.head')

    <!-- third party css -->
    <link href="../assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />
    <link href="../assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />
    <link href="../assets/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />
    <!-- third party css end -->



</head>

<!-- body start -->

<body class="loading"
    data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

    <!-- Begin page -->
    <div id="wrapper">

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

                                <h4 class="page-title">Library</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <a href="{{ route('admin_library_videos') }}"
                                class="btn btn-primary  waves-effect waves-light mb-3"><i
                                    class="mdi mdi-arrow-left-thick"></i>Video Library</a>
                        </div>
                        <div class="col-sm-4">
                            <div class="text-sm-end">
                                <div class="btn-group mb-3">
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target="#custom-modal-service{{ $video->id }}"
                                        class="btn btn-success"> <i
                                            class="mdi mdi-eyedropper-variant"></i>Update</button>
                                </div>

                                <div class="btn-group mb-3 ms-1">
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target="#delete-modal-service{{ $video->id }}"
                                        class="btn btn-danger"> <i class="mdi mdi-delete-circle"></i> Delete</button>
                                </div>

                            </div>
                        </div><!-- end col-->
                    </div>
                    <!-- end row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center">{{ $video->title }}</h5>
                                    <p class="card-text text-justify">{{ $video->description }}</p>
                                    <p class="card-text">
                                        <b>Pulish Date</b> <small class="text-muted">{{ $video->date }}</small>
                                    </p>
                                </div>
                                <img class="card-img-top img-fluid"
                                    src="{{ asset('admin/assets/images/videos/' . $video->image) }}" alt="Card imag">
                                <div class="card-footer">
                                    <a href="{{ $video->link }}" class="btn btn-danger d-grid"
                                        style="font-size: 20px"><i class="mdi mdi-youtube"></i></a>
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                        <div class="col-md-6">
                           
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Latest Uploads</h4>
                                </div>
                                <div class="row">
                                    @foreach ($videoLibrary as $latests)
                                    <div class="col-6">
                                   
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $latests->title }}</h5>
                                            <p class="card-text">{{ $latests->description }}.</p>
                                            <p class="card-text">
                                                <b>Published Dates:</b> <small
                                                    class="text-muted">{{ $latests->date }}</small>
                                            </p>
                                        </div>
                                        <img class="card-img-bottom img-fluid"
                                            src="{{ asset('admin/assets/images/videos/' . $latests->image) }}"
                                            alt="Card image cap">
                                   
                                    </div>
                                    @endforeach
                                </div>
                           

                            </div> <!-- end card-->
                        </div>
                        <div class="col-md-1"></div>
                        <!-- end col -->
                        <!-- end col -->

                    </div>
                    <!-- end row -->

                </div> <!-- container -->

            </div> <!-- content -->

            @include('layouts.admin.footer')

        </div>

    </div>
    <!-- END wrapper -->
    <div class="modal fade" id="delete-modal-service{{ $video->id }}" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-top modal-md">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h4 class="modal-title" id="myCenterModalLabel">Delete video Library</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <h4>Are sue to Delete</h4>
                    <form action="{{ route('deleteVideo', $video->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('DELETE')


                        <div class="text-end">
                            <button type="submit" class="bg-danger p-2">Yes!, Delete </button>
                        </div>

                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <div class="modal fade" id="custom-modal-service{{ $video->id }}" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h4 class="modal-title" id="myCenterModalLabel">Update video Library</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form action="{{ route('library_videos_update', $video->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 col-12">
                                    <label for="name" class="form-label">Title of package</label>
                                    <input type="text" class="form-control" id="name" name="title"
                                        placeholder="Enter title of service" value="{{ $video->title }}">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 col-12">
                                    <label for="name" class="form-label">Date</label>
                                    <input type="date" class="form-control" id="name" name="date"
                                        placeholder="Enter title of service" value="{{ $video->date }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="mb-3">
                                <label for="position" class="form-label">Initial description</label>
                                <textarea name="description" id="" cols="12" rows="5" class="form-control" required
                                    value="{{ $video->description }}"></textarea>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 col-12">
                                    <label for="name" class="form-label">Cover Image</label>
                                    <input type="file" class="form-control" id="name" name="image"
                                        placeholder="Enter title of service" value="{{ $video->image }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 col-12">
                                    <label for="name" class="form-label">Youtube Link</label>
                                    <input type="text" class="form-control" id="name" name="link"
                                        placeholder="enter youtube link" value="{{ $video->link }}">
                                </div>
                            </div>

                        </div>

                        <div class="text-end">
                            <button type="submit" class="bg-info p-2">Update </button>
                        </div>

                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <!-- Vendor js -->
    <script src="{{ asset('admin/assets/js/vendor.min.js') }}"></script>

    <!-- third party js -->
    <script src="../assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('admin/assets/js/pages/form-wizard.init.js') }}"></script>

    <script src="{{ asset('admin/assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>

    <script src="{{ asset('admin/assets/js/pages/datatables.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('admin/assets/js/app.min.js') }}"></script>

</body>

</html>

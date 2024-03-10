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
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#custom-modal-service">Create Photo Libary</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">


                                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>date</th>
                                                <th>Description</th>
                                                <th>Images</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            @foreach ($photosLibray as $photosLibray )
                                            <tr>
                                                <td>{{$photosLibray->title}}</td>
                                                <td>{{$photosLibray->date}}</td>
                                                <td>{{ Str::limit($photosLibray->description, 70) }}</td>
                                                <td>
                                                    <img src="{{ asset('admin/assets/images/photos/1/' . $photosLibray->image_one) }}" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                                    <img src="{{ asset('admin/assets/images/photos/2/' . $photosLibray->image_two) }}" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                                    <img src="{{ asset('admin/assets/images/photos/3/' . $photosLibray->image_three) }}" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />


                                                 </td>
                                                 <td>
                                                    <a href="{{route('single_photo',$photosLibray->id)}}" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                    {{-- <button class="btn btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#confirmDeleteModal{{$photosLibray->id}}"><i class="mdi mdi-delete"></i></button> --}}
                                                </td>
                                             
                                            </tr> 
                                            @endforeach
                                           
                                            

                                        </tbody>
                                    </table>

                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>
                    <!-- end row-->









                </div> <!-- container -->

            </div> <!-- content -->

            @include('layouts.admin.footer')


        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->


    <div class="modal fade" id="custom-modal-service" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h4 class="modal-title" id="myCenterModalLabel">Add Photo Library</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form action="{{route('library_photo_store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 col-12">
                                    <label for="name" class="form-label">Title of package</label>
                                    <input type="text" class="form-control" id="name" name="title"
                                        placeholder="Enter title of service">
                                </div>
    
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 col-12">
                                    <label for="name" class="form-label">Date</label>
                                    <input type="date" class="form-control" id="name" name="date"
                                        placeholder="Enter title of service">
                                </div> 
                            </div>
                        </div>
                       
                        <div class="row">
                          
                            <div class="mb-3">
                                <label for="position" class="form-label">Initial description</label>
                                <textarea name="description" id="" cols="12" rows="5" class="form-control" required></textarea>
                            </div>
                        

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3 col-12">
                                    <label for="name" class="form-label">Image 1</label>
                                    <input type="file" class="form-control" id="name" name="image_one"
                                        placeholder="Enter title of service">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 col-12">
                                    <label for="name" class="form-label">Image 2</label>
                                    <input type="file" class="form-control" id="name" name="image_two"
                                        placeholder="Enter title of service">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 col-12">
                                    <label for="name" class="form-label">Image 2</label>
                                    <input type="file" class="form-control" id="name" name="image_three"
                                        placeholder="Enter title of service">
                                </div>
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

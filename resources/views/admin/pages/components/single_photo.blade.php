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
                            <a href="{{ route('admin_library_photos') }}"
                                class="btn btn-primary  waves-effect waves-light mb-3"><i
                                    class="mdi mdi-arrow-left-thick"></i>Photo Library</a>
                        </div>
                        <div class="col-sm-4">
                            <div class="text-sm-end">
                                <div class="btn-group mb-3">
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target="#update-modal-service{{$photo->id}}"
                                        class="btn btn-success"> <i
                                            class="mdi mdi-eyedropper-variant"></i>Update</button>
                                </div>

                                <div class="btn-group mb-3 ms-1">
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target="#confirmDeleteModal{{$photo->id}}"
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
                                    <h5 class="card-title text-center">{{ $photo->title }}</h5>
                                    <p class="card-text text-justify">{{ $photo->description }}</p>
                                    <p class="card-text">
                                        <b>Pulish Date</b> <small class="text-muted">{{ $photo->date }}</small>
                                    </p>
                                </div>
                                
                                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img class="d-block img-fluid" src="{{ asset('admin/assets/images/photos/1/' . $photo->image_one) }}" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block img-fluid" src="{{ asset('admin/assets/images/photos/2/' . $photo->image_two) }}" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block img-fluid" src="{{ asset('admin/assets/images/photos/3/' . $photo->image_three) }}" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                                </div>
               
                                
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                        <div class="col-md-6">
                           
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Latest Uploads</h4>
                                </div>
                                <div class="row">
                                    @foreach ($photosLibray as $latests)
                                    <div class="col-6">
                                   
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $latests->title }}</h5>
                                            <p class="card-text">{{ $latests->description }}.</p>
                                            <p class="card-text">
                                                <b>Published Dates:</b> <small
                                                    class="text-muted">{{ $latests->date }}</small>
                                            </p>
                                        </div>
                                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                                                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                                                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <img class="d-block img-fluid" src="{{ asset('admin/assets/images/photos/1/' . $latests->image_one) }}" alt="First slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block img-fluid" src="{{ asset('admin/assets/images/photos/2/' . $latests->image_two) }}" alt="Second slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block img-fluid" src="{{ asset('admin/assets/images/photos/3/' . $latests->image_three) }}" alt="Third slide">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </a>
                                        </div>
                                   
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
    
    <div class="modal fade" tabindex="-1" role="dialog" id="confirmDeleteModal{{$photo->id}}">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmDeleteModal{{$photo->id}}Label">Confirm Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   
                    Are you sure you want to delete this blog? 
                    <h5> {{$photo->title}}.</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <form action="{{route('library_photos_delete',$photo->id )}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">yes!. Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="update-modal-service{{$photo->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h4 class="modal-title" id="myCenterModalLabel">Update Photo Library</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form action="{{route('library_photos_update',$photo->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 col-12">
                                    <label for="name" class="form-label">Title of package</label>
                                    <input type="text" class="form-control" id="name" name="title" value="{{$photo->title}}"
                                        placeholder="Enter title of service">
                                </div>
    
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 col-12">
                                    <label for="name" class="form-label">Date</label>
                                    <input type="date" class="form-control" id="name" name="date" value="{{$photo->date}}"
                                        placeholder="Enter title of service">
                                </div> 
                            </div>
                        </div>
                       
                        <div class="row">
                          
                            <div class="mb-3">
                                <label for="position" class="form-label">Initial description</label>
                                <textarea name="description" id="" cols="12" rows="5" class="form-control" required value={{$photo->description}}></textarea>
                            </div>
                        

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3 col-12">
                                    <label for="name" class="form-label">Image 1</label>
                                    <input type="file" class="form-control" id="name" name="image_one"
                                        placeholder="Enter title of service" value="{{$photo->image_one}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 col-12">
                                    <label for="name" class="form-label">Image 2</label>
                                    <input type="file" class="form-control" id="name" name="image_two"
                                        placeholder="Enter title of service" value="{{$photo->image_two}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 col-12">
                                    <label for="name" class="form-label">Image 2</label>
                                    <input type="file" class="form-control" id="name" name="image_three"
                                        placeholder="Enter title of service" value="{{$photo->image_three}}">
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

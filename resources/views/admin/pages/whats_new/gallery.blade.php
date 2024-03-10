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

                                <h4 class="page-title">Gallery</h4>
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
                                                    data-bs-target="#custom-modal-gallery"><a href="#"
                                                        data-bs-toggle="modal" data-bs-target="#custom-modal-gallery"
                                                        style="color:#fff">Add Gallery</a> </Span>
                                            </div>
                                        </div>

                                    </div>

                                    <ul class="nav nav-tabs nav-bordered nav-justified">
                                        <li class="nav-item">
                                            <a href="#home-b2" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                Photos
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#profile-b2" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                                                Video
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#messages-b2" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                                Audio
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane" id="home-b2">
                                            <div class="table-responsive">
                                                <table class="table table-centered table-nowrap table-hover mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Sn</th>
                                                            <th>Title</th>
                                                            <th>Media</th>
                                                            <th>Description</th>
                                                            <th style="width: 82px;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($photos as $photo)
                                                        <tr>
                                                            <td class="table-user">
                                                                {{ $photo->id }}
                                                            </td>
                                                            <td>
                                                                {{ $photo->name }}
                                                            </td>
                                                            <td>
                                                                
                                                                <img src="{{ asset('admin/assets/images/gallery/' . $photo->media) }}" alt="table-user"
                                                                    class="me-2" width="100px" height="50px">
                                                            </td>
                                                            <td>
                                                                {{ $photo->description }}
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('admin/edit_gallery/'. $photo->id) }}" class="action-icon"> <i
                                                                        class="mdi mdi-square-edit-outline"></i></a>
                                                                <a href="{{ url('admin/delete_gallery/'.$photo->id) }}" onclick="return confirm('Are you sure you want to delete?');" class="action-icon"> <i
                                                                        class="mdi mdi-delete"></i></a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane active" id="profile-b2">
                                            <div class="table-responsive">
                                                <table class="table table-centered table-nowrap table-hover mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Sn</th>
                                                            <th>Title</th>
                                                            <th>Media</th>
                                                            <th>Description</th>
                                                            <th style="width: 82px;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($videos as $video)
                                                        <tr>
                                                            <td class="table-user">
                                                                {{ $video->id }}
                                                            </td>
                                                            <td>
                                                                {{ $video->name }}
                                                            </td>
                                                            <td>
                                                                <video src="{{ asset('admin/assets/images/gallery/' . $video->media) }}" style="border-radius: 10px"
                                                                    height="80" width="150" controls></video>
                                                            </td>
                                                            <td>
                                                                {{ $video->description }}
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('admin/edit_gallery/'. $video->id) }}" class="action-icon"> <i
                                                                        class="mdi mdi-square-edit-outline"></i></a>
                                                                <a href="{{ url('admin/delete_gallery/'.$video->id) }}" onclick="return confirm('Are you sure you want to delete?');" class="action-icon"> <i
                                                                        class="mdi mdi-delete"></i></a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="messages-b2">
                                            <div class="table-responsive">
                                                <table class="table table-centered table-nowrap table-hover mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Sn</th>
                                                            <th>Title</th>
                                                            <th>Media</th>
                                                            <th>Description</th>
                                                            <th style="width: 82px;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($audios as $audio)
                                                        <tr>
                                                            <td class="table-user">
                                                                {{ $audio->id }}
                                                            </td>
                                                            <td>
                                                                {{ $audio->name }}
                                                            </td>
                                                            <td>
                                                                <audio src="{{ asset('admin/assets/images/gallery/' . $audio->media) }}"
                                                                     controls></audio>
                                                            </td>
                                                            <td>
                                                                {{ $audio->description }}
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('admin/edit_gallery/'. $audio->id) }}" class="action-icon"> <i
                                                                        class="mdi mdi-square-edit-outline"></i></a>
                                                                <a href="{{ url('admin/delete_gallery/'.$audio->id) }}" onclick="return confirm('Are you sure you want to delete?');" class="action-icon"> <i
                                                                        class="mdi mdi-delete"></i></a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
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
                 <!--Add Modal -->
            <div class="modal fade" id="custom-modal-gallery" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-light">
                            <h4 class="modal-title" id="myCenterModalLabel">Add Gallery</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                            <form action="{{ url('/admin/add_gallery') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-6 mb-3">
                                        <label for="name" class="form-label">Media Name</label>
                                        <input type="text" class="form-control" id="name" name="name" required
                                            placeholder="Enter name">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <div class="dropdown">
                                            <label for="category" class="form-label">Category</label><br>
                                            <select name="category" id="category" class="form-control" style="width: 100%">
                                                <option selected>--Select Category--</option>
                                                <option value="Photo">Photo</option>
                                                <option value="Video">Video</option>
                                                <option value="Audio">Audio</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="position" class="form-label">Media Description</label>
                                        <textarea name="description" id="" cols="12" rows="3" class="form-control" required></textarea>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Media</label>
                                        <input type="file" class="form-control" id="exampleInputEmail1" name="media" required
                                        >
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

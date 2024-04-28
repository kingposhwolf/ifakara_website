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

                                <h4 class="page-title">Update Health Institute</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form action="{{ url('admin/update_health/'.$health_institute->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="row">
                                                    <div class=" col-12 mb-3">
                                                        <label for="name" class="form-label">Institute Name</label>
                                                        <input type="text" class="form-control" id="name" name="name" required
                                                        value="{{ $health_institute->name }}">
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        @if ($health_institute->image)
                                                    <img src="{{ asset('admin/assets/images/health/'.$health_institute->image) }}" alt="News image" width="100" height="60" class="edicat-image" id="present-img">
                                                     @endif
                                                    <input type="file" name="image" class="form-control" onchange="var img = document.getElementById('present-img'); img.hidden = true;">
                                                    </div>
                                                    <div class=" col-12 mb-3">
                                                        <label for="name" class="form-label">Head of Institute</label>
                                                        <input type="text" class="form-control" id="name" name="head" required
                                                        value="{{ $health_institute->head }}">
                                                    </div>
                                                    <div class=" col-12 mb-3">
                                                        <label for="name" class="form-label">Location</label>
                                                        <input type="text" class="form-control" id="name" name="location" required
                                                        value="{{ $health_institute->location }}">
                                                    </div>
                                                    <div class="mb-3 col-12">
                                                        <label for="name" class="form-label">P. O. Box</label>
                                                        <input type="text" class="form-control" id="name"
                                                        name="p_o_box" value="{{ $health_institute->p_o_box }}">
                                                    </div>
                                                    <div class="mb-3 col-12">
                                                        <label for="name" class="form-label">Website Link</label>
                                                        <input type="text" class="form-control" id="name"
                                                            placeholder="Enter Hospital Website link" name="website_link" value="{{ $health_institute->website_link }}">
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <label for="company" class="form-label">Description</label>
                                                        <textarea name="description" id="" cols="12" rows="5" class="form-control" required>{{ $health_institute->description }}</textarea>
                                                    </div>
                                                    <div class="text-end">
                                                        <button type="submit" class="bg-info p-2">Publish </button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div> <!-- end col -->
                                    </div>
                                    <!-- end row-->

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

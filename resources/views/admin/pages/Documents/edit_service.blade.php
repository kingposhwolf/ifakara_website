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

                                <h4 class="page-title">Update Services</h4>
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
                                            <form action="{{ url('admin/update_service/'.$service->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="row">
                                                    <div class="col-6 mb-3">
                                                        <label for="name" class="form-label">Title</label>
                                                        <input type="text" class="form-control" id="name" name="title" required
                                                        value="{{ $service->title }}">
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <div class="dropdown">
                                                            <label for="category" class="form-label">Category</label><br>
                                                            <select name="category" id="category" class="form-control" style="width: 100%">
                                                                <option selected>{{ $service->category }}</option>
                                                                <option value="Education">Education</option>
                                                                <option value="Health">Health</option>
                                                                <option value="Bible">Bible</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <label for="position" class="form-label">Description</label>
                                                        <textarea name="description" id="" cols="12" rows="3" class="form-control" required>{{ $service->description }}</textarea>
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <label for="position" class="form-label">Initial Description</label>
                                                        <textarea name="initial_description" id="" cols="12" rows="3" class="form-control" required>{{ $service->initial_description }}</textarea>
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

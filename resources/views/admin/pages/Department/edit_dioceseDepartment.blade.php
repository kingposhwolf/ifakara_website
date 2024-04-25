<!DOCTYPE html>
<html lang="en">
@include('layouts.admin.head')

<!-- body start -->

<body class="loading"
    data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

    <!-- Begin page -->
    <div id="wrapper">
        <!-- Topbar Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <ul class="list-unstyled topnav-menu float-end mb-0">


                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light"
                            data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                            aria-expanded="false">
                            <span class="pro-user-name ms-1">
                                Admin <i class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-lock"></i>
                                <span>Lock Screen</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>

                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.html" class="logo logo-dark text-center">
                        <span class="logo-sm">
                            <img src="../assets/images/logo-sm.png" alt="" height="22">
                            <!-- <span class="logo-lg-text-light">IFAKARA</span> -->
                        </span>
                        <span class="logo-lg">
                            <img src="../assets/images/logo-dark.png" alt="" height="20">
                            <!-- <span class="logo-lg-text-light">I</span> -->
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light text-center">
                        <span class="logo-sm">
                            <img src="../assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="../assets/images/logo-light.png" alt="" height="20">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="fe-menu"></i>
                        </button>
                    </li>

                    <li>
                        <!-- Mobile menu toggle (Horizontal Layout)-->
                        <a class="navbar-toggle nav-link" data-bs-toggle="collapse"
                            data-bs-target="#topnav-menu-content">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>

                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- end Topbar -->

        @include('layouts.admin.sidebar')

        <!--Add Modal -->
        <div style="padding-top: 7%; padding-bottom:5%" id="custom-modal-staff" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    {{--  <div class="modal-header bg-light">
                        <h4 class="modal-title" id="myCenterModalLabel">Add Staff</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>  --}}
                    <div class="modal-body p-4">
                        <form action="{{ route('update_DioceseDepartment', ['id' => $department->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="mb-3 col-12">
                                    <label for="name" class="form-label">Department Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter Department Name" value="{{ $department->name }}">
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="head" class="form-label">Head of Department</label>
                                    <input type="text" class="form-control" id="head" name="head"
                                        placeholder="Enter Head of Department" value="{{ $department->head }}">
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="staffs" class="form-label">Number of Staffs</label>
                                    <input type="number" class="form-control" id="staffs" name="staffs"
                                        placeholder="Enter Number of staffs in the Department" value="{{ $department->staffs }}">
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="location" class="form-label">Location</label>
                                    <input type="text" class="form-control" id="location" name="location"
                                        placeholder="Enter Department Location" value="{{ $department->location }}">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="description" class="form-label">About Department</label>
                                    <textarea name="description" id="description" cols="12" rows="5" class="form-control" placeholder="Enter Department short Description" required>{{ $department->description }}</textarea>
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
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <b>IFAKARA DIOCESE Ⓒ 2023</b>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
        <!-- end Footer -->

    </div>




    </div>
    <!-- END wrapper -->



    <script src="{{ asset('admin/assets/js/vendor.min.js') }}"></script>


    <script src="{{ asset('admin/assets/js/pages/crm-dashboard.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('admin/assets/js/app.min.js') }}"></script>

    <script>
        function displaySelectedImage(event) {
            var input = event.target;
            var imageContainer = document.getElementById('imageContainer');
            var reader = new FileReader();
            reader.onload = function() {
                var dataURL = reader.result;
                var img = document.createElement('img');
                img.src = dataURL;
                img.style.maxWidth = '200px';
                imageContainer.innerHTML = '';
                imageContainer.appendChild(img);
            };
            reader.readAsDataURL(input.files[0]);
        }
    </script>

</body>

</html>

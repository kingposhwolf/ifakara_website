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
                            <!-- <span class="logo-lg-text-light">UBold</span> -->
                        </span>
                        <span class="logo-lg">
                            <img src="../assets/images/logo-dark.png" alt="" height="20">
                            <!-- <span class="logo-lg-text-light">U</span> -->
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



        <div class="content-page">
            <div class="content">
                <!-- Add this input field for the search bar -->
                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">

                            <h4 class="page-title">Exactive Staff</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-between">
                                    <div class="col-auto">
                                        <form>
                                            <div class="mb-2">
                                                <label for="search" class="visually-hidden">Search</label>
                                                <input type="search" class="form-control" id="searchInput"
                                                    placeholder="Search name/category ....">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="text-md-end mt-3 mt-md-0">

                                            <Span class="bg-info p-2 text-center" style="color:#fff"
                                                data-bs-toggle="modal" data-bs-target="#custom-modal-staff"><a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#custom-modal-staff"
                                                    style="color:#fff"><i class="mdi mdi-plus-circle me-1"></i> Add
                                                    Staff</a> </Span>
                                        </div>
                                    </div><!-- end col-->
                                </div> <!-- end row -->
                            </div>
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row -->

                <div class="row">
                    @foreach ($exactive_staffs as $exactive_staff)
                    <div class="col-lg-3 verse staff-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="{{ asset('admin/assets/images/staff/'. $exactive_staff->image) }}" height="150px" width="150px" alt="logo"
                                        class="mb-1">
                                    <h4 class="mb-1 font-20">{{ $exactive_staff->name }}</h4>
                                    <p class="text-muted  font-14">{{ $exactive_staff->category }}</p>
                                </div>
                                <div class="row mt-1 text-center">
                                    <div class="col-6">
                                        <a href="{{ url('admin/edit_staff/'.$exactive_staff->id) }}" class="action-icon"> <i
                                                class="mdi mdi-square-edit-outline"></i></a>

                                    </div>
                                    <div class="col-6">
                                        <a href="{{ url('admin/delete_staff/'.$exactive_staff->id) }}" class="action-icon"> <i
                                                class="mdi mdi-delete"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card -->
                    </div><!-- end col -->
                    @endforeach
                </div>
                <!-- end row -->
                <!-- Pagination -->
                                    <ul id="pagination" class="pagination pagination-rounded justify-content-end mb-0 mt-2">
                                        @php
                                            $totalStaffs = count($exactive_staffs); // Assuming $verses is the collection of all verses
                                            $staffsPerPage = 8; // Adjust this based on your desired number of verses per page
                                            $totalPages = ceil($totalStaffs / $staffsPerPage);
                                        @endphp
                                        @for ($i = 1; $i <= $totalPages; $i++)
                                            <li class="page-item cun{{ $i }}">
                                                <a class="page-link" href="#" data-page="{{ $i }}">{{ $i }}</a>
                                            </li>
                                        @endfor
                                    </ul>
            </div> <!-- container -->

        </div> <!-- content -->
        <!--Add Modal -->
        <div class="modal fade" id="custom-modal-staff" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-light">
                        <h4 class="modal-title" id="myCenterModalLabel">Add Staff</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-4">
                        <form action="{{ url('/admin/add_staff') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required
                                        placeholder="Enter name">
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="exampleInputEmail1" name="image" required
                                        placeholder="Enter email">
                                </div>
                                <div class="col-6 mb-3">
                                    <div class="dropdown">
                                        <label for="category" class="form-label">TiTle</label><br>
                                        <select name="category" id="category" class="form-control" style="width: 100%">
                                            <option selected>--Select Title--</option>
                                            <option value="Bishop">Bishop</option>
                                            <option value="Assistant Bishop">Assistant Bishop</option>
                                            <option value="Parishioner ">Parishioner</option>
                                            <option value="Assistant Parishioner">Assistant Parishioner</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <div class="dropdown">
                                        <label for="category" class="form-label">Status</label><br>
                                        <select name="status" id="category" class="form-control" style="width: 100%">
                                            <option selected>--Select Status--</option>
                                            <option value="Active">Active</option>
                                            <option value="In Active">In Active</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="position" class="form-label">Phone No</label>
                                    <input placeholder="Enter Phone Number" name="phone_no" class="form-control" required>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="position" class="form-label">Office No</label>
                                    <input name="office_no" placeholder="Enter Office" class="form-control" required>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="position" class="form-label">Start Date</label>
                                    <input type="date" name="start_date" class="form-control" required>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="position" class="form-label">End Date</label>
                                    <input type="date" name="end_date" class="form-control" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="company" class="form-label">Biography</label>
                                    <textarea name="biography" id="" cols="12" rows="5" class="form-control" required></textarea>
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
        document.addEventListener('click', function(event) {
            var alert = document.querySelector('.alert');
            if(alert && event.target.closest('.alert')) {
                alert.classList.add('hide');
                setTimeout(() => {
                    alert.remove();
                }, 500);
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            var versesPerPage = 8; // Update with the desired number of verses per page
            var $verses = $('.verse');
            var $actionIcons = $('.action-icons');
            var $paginationLinks = $('#pagination').find('.page-link');

            // Function to display verses and corresponding action icons for a given page
            function displayPage(pageNumber) {
                var startIndex = (pageNumber - 1) * versesPerPage;
                var endIndex = startIndex + versesPerPage;

                $verses.hide().slice(startIndex, endIndex).show();
                $actionIcons.hide().slice(startIndex, endIndex).show();

                $('.active').removeClass('active');

            $('.cun'+pageNumber).addClass('active');
            }

            // Initial display of first page
            displayPage(1);

            // Handle pagination click events
            $paginationLinks.on('click', function(event) {
                event.preventDefault();
                var pageNumber = parseInt($(this).data('page'));
                displayPage(pageNumber);
            });

             // Function to filter staff cards based on search input
            function filterStaff() {
                var input = $('#searchInput').val().toLowerCase(); // Get input value and convert to lowercase
                if (input === '') { // Check if input is empty
                    var currentPage = parseInt($('#pagination').find('.active').find('.page-link').data('page')); // Get current page number
                    displayPage(currentPage);
                } else {
                    $('.staff-card').each(function() { // Loop through each staff card
                        var staffName = $(this).find('.font-20').text().toLowerCase(); // Get staff name and convert to lowercase
                        var staffCategory = $(this).find('.font-14').text().toLowerCase(); // Get staff category and convert to lowercase
                        // Check if input matches staff name or category
                        if (staffName.indexOf(input) > -1 || staffCategory.indexOf(input) > -1) {
                            $(this).show(); // Show staff card if there's a match
                        } else {
                            $(this).hide(); // Hide staff card if there's no match
                        }
                    });
                }
            }

            // Call filterStaff function on keyup event in search input field
            $('#searchInput').on('keyup', filterStaff);
        });
        </script>

</body>

</html>

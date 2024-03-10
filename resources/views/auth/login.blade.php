<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Log In </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">

    <!-- App css -->
    <link href="{{ asset('admin/assets/css/config/default/bootstrap.min.css') }}" rel="stylesheet" type="text/css"
        id="bs-default-stylesheet" />

    <link href="{{ asset('admin/assets/css/config/default/app.min.css') }}" rel="stylesheet" type="text/css"
        id="app-default-stylesheet" />

    <link href="{{ asset('admin/assets/css/config/default/bootstrap-dark.min.css') }}" rel="stylesheet" type="text/css"
        id="bs-dark-stylesheet" />

    <link href="{{ asset('admin/assets/css/config/default/app-dark.min.css') }}" rel="stylesheet" type="text/css"
        id="app-dark-stylesheet" />

    <!-- icons -->
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body class="loading  authentication-bg-pattern">
    <div class="account-pages mt-sm-5 mt-1 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-8 col-12">
                    <div class="card bg-pattern"
                        style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;">
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="text-center w-75 m-auto">
                                        <div class="auth-logo">
                                            <a href="index.html" class="logo logo-dark text-center">
                                                <span class="logo-lg text-md" style="font-size: 20px; font-weight:700">
                                                    <img src="{{ asset('') }}" w-100 h-100 alt="">
                                                </span>
                                                <h4 style="font-weight: 700">Login Here</h4>
                                            </a>


                                            <a href="" class="logo logo-light text-center">
                                                <span class="logo-lg">
                                                    <img src="{{ asset('site/images/favicon.ico') }}" alt=""
                                                        height="22">
                                                </span>
                                            </a>
                                        </div>

                                    </div>
                                    <form method="POST" action="{{ route('admin_login') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="user_name" class="form-label">Email address</label>
                                            <input
                                                class="form-control  form-rounded @error('user_name') is-invalid @enderror"
                                                type="text" id="user_name" required=""
                                                placeholder="Enter your username" name="email"
                                                required autocomplete="user_name"
                                                autofocus>

                                           

                                        </div>

                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <div class="input-group input-group-merge">
                                                <input type="password" id="password"
                                                    class="form-control form-rounded  @error('password') is-invalid @enderror"
                                                    placeholder="Enter your password" name="password" required
                                                    autocomplete="current-password">
                                                <div class="input-group-text" data-password="false">
                                                    <span class="password-eye"></span>
                                                </div>
                                                
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" checked name="remember"
                                                    id="remember">
                                                <label class="form-check-label" for="remember">Remember
                                                    me</label>
                                            </div>
                                        </div>

                                        <div class="text-center d-grid">
                                            <button class="btn  rounded-pill "
                                                style="background-color: #51087E; color:#fff; font-weight:500"
                                                type="submit" style="border-radius: 20px">
                                                Log In
                                            </button>
                                        </div>
                                    </form>
                                    <div class="row mt-3">
                                        <div class="col-12 text-center">
                                           
                                                <p> <a href="#"
                                                        class="text-dark-50 ms-1">Forgot your
                                                        password?</a></p>
                                      
                                        </div> <!-- end col -->
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div id="carouselExampleCaption" class="" data-bs-ride="carousel">
                                        <div class="" role="listbox">
                                            <div class="carousel-item active">
                                                <img src="{{ asset('site/img/bg-img/login.jpeg') }}" alt="..."
                                                    class="d-block img-fluid">
                                               
                                            </div>
                                         
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->

                        <!-- end row -->

                    </div>

                    <!-- end col -->

                </div>

                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
        <footer class="footer footer-alt text-dark-50">
            <script>
                document.write(new Date().getFullYear())
            </script> &copy; | <a href="" class="text-dark-50">Ifakara catholic diocese</a>
        </footer>

        <!-- Vendor js -->
        <script src="{{ asset('admin/assets/js/vendor.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('admin/assets/js/app.min.js') }}"></script>

</body>

</html>

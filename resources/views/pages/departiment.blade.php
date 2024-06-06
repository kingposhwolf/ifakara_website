@include('assets.css')
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <!-- Navbar Start -->
    @include('layouts.header')
    <!-- Navbar End -->
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Idara </h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Nyumbani</a></li>
                    {{-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> --}}
                    <li class="breadcrumb-item text-primary active" aria-current="page">Taasisi</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <section class="intro-news-area  mb-70 mt-4">
        <div class="container">
            <div class="row justify-content-center mt-4">
                <!-- Intro News Tabs Area -->
                <div class="col-12 col-lg-12 col-md-12">
                    <div class="intro-news-tab mt-4">
                    @if ($departments->count() > 0)
                    @foreach ($departments as $department)
                        <div class="card mt-3">
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-4 col-md-3">
                                        <div class="single-blog-post style-2 ">
                                            <div class="blog-thumbnail mt-4">

                                                <h6 class="mt-3" style="font-weight:600; color: black;">{{ $department->name }}

                                                </h6>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8 col-md-9">
                                        <div class="single-blog-post style-2  mt-4">

                                            <h6 class="mb-2"> Head  :&nbsp;&nbsp;&nbsp;{{$department->head}}</h6>
                                            <p style="text-align: justify; color: black;">About :&nbsp;&nbsp;&nbsp;{{ $department->description }}</p>
                                            <p class="mb-2"> Staffs  :&nbsp;&nbsp;&nbsp;{{$department->staffs}}</p>
                                            <p><span class="text-primary">Office Location :&nbsp;&nbsp;&nbsp;{{ $department->location }}</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            </div>
                        </div>
                        @endforeach
                    @else
                        <div class="alert alert-info text-center">
                            There are no department available at the moment.
                        </div>
                    @endif

                    </div>


                </div>
                <div class="col-md-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination mt-4" style="float: right;">
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                              <span class="sr-only">Previous</span>
                            </a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                              <span class="sr-only">Next</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                </div>
            </div>


        </div>
        </div>
    </section>

    <!-- Footer Start -->
    @include('layouts.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    @include('assets.js')

</body>

</html>

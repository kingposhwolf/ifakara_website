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
            <h1 class="display-4 text-white animated slideInDown mb-4">Vituo vya afya</h1>
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


    <!-- About Start -->
    @foreach ($hospitals as $hospital)
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100 pt-2 pe-5"
                            src="{{ asset('admin/assets/images/health/' . $hospital->image) }}" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h3 class="display-6 mb-3">{{ $hospital->name }}</h3>
                        <h6 class="mb-2">Hospital Head :&nbsp;&nbsp;&nbsp;{{$hospital->head}}</h6>
                        <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                            <p class="text-dark mb-2">{{ $hospital->description }}</p>
                            <span class="text-primary">Hospital Address:&nbsp;&nbsp;&nbsp;{{ $hospital->p_o_box }}&nbsp;&nbsp;&nbsp; {{ $hospital->location }}</span>
                        </div>

                        <a class="btn btn-primary py-2 px-3 me-3" href="">
                            hospital website
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- About End -->

    <!-- Footer Start -->
    @include('layouts.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    @include('assets.js')

</body>

</html>

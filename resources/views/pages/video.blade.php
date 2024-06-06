@include('assets.css')
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    @include('layouts.header')
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Maktaba ya video</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Nyumbani</a></li>
                    {{-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> --}}
                    <li class="breadcrumb-item text-primary active" aria-current="page">Maktaba ya video</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Causes Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">video</div>
                <h1 class="display-6 mb-5">video za matukio Mbalimbali yaliyo kuishwa kutokea jimboni</h1>
            </div>

            <div class="row g-4 justify-content-center">
                @if ($videoLibrary->count() > 0)
                @foreach ($videoLibrary as $item)

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="causes-item d-flex flex-column bg-light border-top border-5 border-primary rounded-top overflow-hidden h-100">
                       <h5 class="text-center mt-4">{{$item->title}}</h5>
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('admin/assets/images/videos/' . $item->image) }}" alt="">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="{{$item->link}}">

                                    <div class="d-inline-flex btn-sm-square bg-primary text-white text-center rounded-circle">
                                        <i class="fa fa-play-circle" aria-hidden="true"></i>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
                @else
                    <div class="alert alert-info text-center">
                        There are no videos available at the moment.
                    </div>
                @endif

            </div>


        </div>
    </div>
    <!-- Causes End -->

    @include('layouts.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    @include('assets.js')
</body>

</html>

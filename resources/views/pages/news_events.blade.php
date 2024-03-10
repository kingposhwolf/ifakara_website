@include('assets.css')

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    @include('layouts.header')
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Habari na Matukio</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Nyumbani</a></li>
                    {{-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> --}}
                    <li class="breadcrumb-item text-primary active" aria-current="page">Habari na Matukio</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Causes Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                {{-- <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">habari </div> --}}
                <h1 class="display-6 mb-5">Habari na Matukio</h1>
            </div>
           

            <div class="row g-4 justify-content-center mt-5">
                @foreach ($news as $news)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div
                        class="causes-item d-flex flex-column bg-light border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>Habari</small>
                            </div>
                            <h5 class="mb-3">{{$news->news_title}}</h5>
                            <p>{{ $news->initial_description }}</p>
                            <h6 class="text-danger">The posted at : {{ $news->news_date }}<span> by
                                {{ $news->created_by }}</span></h6>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="{{ asset('admin/assets/images/news/' . $news->image) }}" alt="">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="{{ url('single_news/' . $news->id) }}">
                                    Soma zaidi
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>

        </div>
    </div>
    <!-- Causes End -->


    <!-- Footer Start -->
    @include('layouts.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    @include('assets.js')
</body>

</html>

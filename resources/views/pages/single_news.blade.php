@include('assets.css')

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100 pt-5 pe-5"
                            src="{{ asset('admin/assets/images/news/' . $news->image) }}" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 mb-5">{{ $news->news_title }}</h1>
                        <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                            <p class="text-dark mb-2">{{ $news->initial_description }}</p>
                            <span class="text-primary">Published date, {{ $news->news_date }}</span>
                        </div>
                        @php
                            $description = $news->news_description;
                            $paragraphs = str_split($description, 650);
                        @endphp

                        @foreach ($paragraphs as $paragraph)
                            <p class="mb-5" style="text-align: justify">{{ $paragraph }}</p>
                        @endforeach

                        {{-- <p class="mb-5" style="text-align:justify">{{ $news->news_description }}</p> --}}
                        <a class="btn btn-primary py-2 px-3 me-3" href="">
                            wasiliana nasi
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->






    <!-- Causes Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                {{-- <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Feature Causes</div> --}}
                <h1 class="display-6 mb-5">Habari na Matukio zilizopita</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($latest as $news)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div
                            class="causes-item d-flex flex-column bg-light border-top border-5 border-primary rounded-top overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                    <small>Habari</small>
                                </div>
                                <h5 class="mb-3"> {{ $news->news_title }}</h5>
                                <p>{{ $news->initial_description }}</p>

                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="{{ asset('admin/assets/images/news/' . $news->image) }}"
                                    alt="">
                                <div class="causes-overlay">
                                    <a class="btn btn-outline-primary" href="{{ url('single_news/' . $news->id) }}">
                                        Soma zaidi
                                        <div
                                            class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
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

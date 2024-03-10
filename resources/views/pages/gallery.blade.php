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
            <h1 class="display-4 text-white animated slideInDown mb-4">Maktaba ya picha</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Nyumbani</a></li>
                    {{-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> --}}
                    <li class="breadcrumb-item text-primary active" aria-current="page">Maktaba ya picha</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Causes Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">picha</div>
                <h1 class="display-6 mb-5">Picha za matukio Mbalimbali yaliyo kuishwa kutokea jimboni</h1>
            </div>

            @foreach ($photosLibrary as $photosLibrary )

            <div class="row g-4 justify-content-center">

                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-top:6%">
                    {{-- <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">picha</div> --}}
                    <h4>{{$photosLibrary->title}}</h6>
                    <p>{{$photosLibrary->description}} </p>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp " data-wow-delay="0.1s">
                    <div class="causes-item d-flex flex-column bg-light border-top border-5 border-primary rounded-top overflow-hidden h-100">
                       
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('admin/assets/images/photos/1/'.$photosLibrary->image_one) }}" alt="">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href=""data-bs-toggle="modal" data-bs-target="#imageone{{$photosLibrary->id}}">
                                    zoom
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>

                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="modal fade" id="imageone{{$photosLibrary->id}}" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="{{ asset('admin/assets/images/photos/1/'.$photosLibrary->image_one) }}" alt="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="causes-item d-flex flex-column bg-light border-top border-5 border-primary rounded-top overflow-hidden h-100">
                       
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('admin/assets/images/photos/2/'. $photosLibrary->image_two) }}" alt="">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="#" data-bs-toggle="modal" data-bs-target="#imagetwo{{$photosLibrary->id}}">
                                    Zoom 
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="modal fade" id="imagetwo{{$photosLibrary->id}}" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="{{ asset('admin/assets/images/photos/2/' . $photosLibrary->image_two) }}" alt="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="causes-item d-flex flex-column bg-light border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="{{ asset('admin/assets/images/photos/3/' . $photosLibrary->image_three) }}" alt="">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="" data-bs-toggle="modal" data-bs-target="#imagethree{{$photosLibrary->id}}">
                                    Zoom
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>

                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="modal fade" id="imagethree{{$photosLibrary->id}}" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="{{ asset('admin/assets/images/photos/3/' . $photosLibrary->image_three) }}" alt="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
           
            
        </div>
    </div>
    <!-- Causes End -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <img class="img-fluid" src="{{ asset('admin/assets/images/photos/2/' . $photosLibrary->image_two) }}" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    @include('assets.js')
</body>

</html>
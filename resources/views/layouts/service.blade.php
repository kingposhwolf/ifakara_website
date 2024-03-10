<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Huduma</div>
            <h1 class="display-6 mb-5">Huduma zetu</h1>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach ($education_service as $education_service)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="{{ asset('web/img/icon-1.png') }}" alt="">
                        <h4 class="mb-3">{{ $education_service->title }}</h4>
                        <p class="mb-4" style="text-align: justify"> {{ $education_service->initial_description }}</p>
                        <a class="btn btn-outline-primary px-3"
                            href="{{ url('single_service_education/' . $education_service->id) }}">
                            Soma zaidi
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
            @foreach ($health_service as $health_service)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="{{ asset('web/img/icon-2.png') }}" alt="">
                        <h4 class="mb-3">{{ $health_service->title }}</h4>
                        <p class="mb-4" style="text-align:justify">{{ $health_service->initial_description }}</p>
                        <a class="btn btn-outline-primary px-3"
                            href="{{ url('single_service_health/' . $health_service->id) }}">
                            soma zaidi
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach

            @foreach ($bible_service as $bible_service)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="{{ asset('web/img/icon-3.png') }}" alt="">
                        <h4 class="mb-3">{{ $bible_service->title }}i</h4>
                        <p class="mb-4" style="text-align: justify"> {{ $bible_service->initial_description }}</p>
                        <a class="btn btn-outline-primary px-3"
                            href="{{ url('single_service_bible/' . $bible_service->id) }}">
                            Soma zaidi
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
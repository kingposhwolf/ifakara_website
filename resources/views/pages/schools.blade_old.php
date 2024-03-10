@include('assets.css')

<body>

    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->

    <!-- ##### Header Area Start ##### -->
    
    @include('layouts.header')

    <!-- ##### Header Area End ##### -->
    <section class="intro-news-area mt-4 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Intro News Tabs Area -->
                <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="intro-news-tab">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active">
                                <div class="row">
                                    <div class="col-md-12 col-sm-8 col-md-12">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail " style="width: 100%">
                                                <div id="carouselExampleIndicators" class="carousel slide"
                                                    data-ride="carousel">

                                                    <div class="carousel-inner" style="margin-top: 80px;">
                                                        <div class="carousel-item active">

                                                            <img class="d-block w-100 h-50"
                                                                src="{{ asset('site/img/bg-img/schools.jpg') }}"
                                                                alt="First slide">
                                                            <div class="carousel-caption d-none d-md-block py-1"
                                                                style="background-color: rgb(170, 167, 167); opacity:0.8; ">
                                                                <h5 style="color:black; font-weight:700">CATHOLIC DIOCESE SCHOOLS
                                                                     </h5>
                                                                <h6
                                                                    style="color:#0b0b0a; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                                                    Ufununguzi la mafunzo ya walimu kuhusu kufundisha
                                                                    kwa
                                                                    kufata mutaala unaozingatia uamahili</h6>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ##### Intro News Area End ##### -->
    <section class="intro-news-area">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Intro News Tabs Area -->
                <div class="col-12 col-lg-12 col-md-12" style="margin-top:-8%">
                    <!-- ##### Accordians ##### -->
                    <div class="col-12 col-lg-12">
                        <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                            <!-- single accordian area -->
                            <div class="panel single-accordion">
                                <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseOne"
                                        data-toggle="collapse" data-parent="#accordion" href="#collapseOne">St.
                                        Augustine Kindergarten & Primary
                                        School
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a>
                                </h6>
                                {{-- <div id="collapseOne" class="accordion-content collapse show">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="mt-4">
                                                <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus
                                                    eu dolor eu
                                                    quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non
                                                    lacus.
                                                    Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit,
                                                    rutrum at
                                                    ipsum ac, dignissim iaculis ante.</p>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                                                    odit magni eveniet. Consequuntur, sequi amet! Expedita,
                                                    voluptatem nesciunt itaque minima aliquam illum impedit a,
                                                    distinctio, odit quaerat nostrum facere libero.</p>

                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mt-4">
                                                <div id="carouselExampleSlidesOnly" class="carousel slide"
                                                    data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_1.jpg') }}"
                                                                    alt="First slide">

                                                            </a>
                                                            <div class="text mt-3">

                                                                <span>Benignis</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_2.jpg') }}"
                                                                    alt="Second slide">
                                                            </a>
                                                            <div class="text mt-3">

                                                                <span>Benignis</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_3.jpg') }}"
                                                                    alt="Third slide">

                                                            </a>
                                                            <div class="text mt-3">
                                                                <span>Benignis Secondary School</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>



                                    </div>
                                </div> --}}
                                <!-- single accordian area -->
                                <div class="panel single-accordion">
                                    <h6>
                                        <a role="button" class="collapsed" aria-expanded="true"
                                            aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse"
                                            href="#collapseTwo">St. Benedict Montessori Nursery
                                            School
                                            <span class="accor-open"><i class="fa fa-plus"
                                                    aria-hidden="true"></i></span>
                                            <span class="accor-close"><i class="fa fa-minus"
                                                    aria-hidden="true"></i></span>
                                        </a>
                                    </h6>
                                    {{-- <div id="collapseTwo" class="accordion-content collapse">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="mt-4">
                                                    <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus
                                                        eu dolor eu
                                                        quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non
                                                        lacus.
                                                        Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit,
                                                        rutrum at
                                                        ipsum ac, dignissim iaculis ante.</p>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                                                        odit magni eveniet. Consequuntur, sequi amet! Expedita,
                                                        voluptatem nesciunt itaque minima aliquam illum impedit a,
                                                        distinctio, odit quaerat nostrum facere libero.</p>
    
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mt-4">
                                                    <div id="carouselExampleSlidesOnly" class="carousel slide"
                                                        data-ride="carousel">
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <a href="#">
                                                                    <img class="d-block w-100"
                                                                        src="{{ asset('site/img/bg-img/school_1.jpg') }}"
                                                                        alt="First slide">
    
                                                                </a>
                                                                <div class="text mt-3">
    
                                                                    <span>Benignis</span>
                                                                </div>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <a href="#">
                                                                    <img class="d-block w-100"
                                                                        src="{{ asset('site/img/bg-img/school_2.jpg') }}"
                                                                        alt="Second slide">
                                                                </a>
                                                                <div class="text mt-3">
    
                                                                    <span>Benignis</span>
                                                                </div>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <a href="#">
                                                                    <img class="d-block w-100"
                                                                        src="{{ asset('site/img/bg-img/school_3.jpg') }}"
                                                                        alt="Third slide">
    
                                                                </a>
                                                                <div class="text mt-3">
                                                                    <span>Benignis Secondary School</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
    
                                            </div>
    
    
    
                                        </div>
                                    </div> --}}
                                </div>
                                <!-- single accordian area -->
                                
                            </div>

                            <div class="panel single-accordion">
                                <h6>
                                    <a role="button" class="collapsed" aria-expanded="true"
                                        aria-controls="collapseThree" data-parent="#accordion" data-toggle="collapse"
                                        href="#collapseThree">Benignis Girls Secondary School
                                        <span class="accor-open"><i class="fa fa-plus"
                                                aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus"
                                                aria-hidden="true"></i></span>
                                    </a>
                                </h6>
                                {{-- <div id="collapseThree" class="accordion-content collapse">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="mt-4">
                                                <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus
                                                    eu dolor eu
                                                    quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non
                                                    lacus.
                                                    Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit,
                                                    rutrum at
                                                    ipsum ac, dignissim iaculis ante.</p>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                                                    odit magni eveniet. Consequuntur, sequi amet! Expedita,
                                                    voluptatem nesciunt itaque minima aliquam illum impedit a,
                                                    distinctio, odit quaerat nostrum facere libero.</p>

                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mt-4">
                                                <div id="carouselExampleSlidesOnly" class="carousel slide"
                                                    data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_1.jpg') }}"
                                                                    alt="First slide">

                                                            </a>
                                                            <div class="text mt-3">

                                                                <span>Benignis</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_2.jpg') }}"
                                                                    alt="Second slide">
                                                            </a>
                                                            <div class="text mt-3">

                                                                <span>Benignis</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_3.jpg') }}"
                                                                    alt="Third slide">

                                                            </a>
                                                            <div class="text mt-3">
                                                                <span>Benignis Secondary School</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>



                                    </div>
                                </div> --}}
                            </div>

                            <div class="panel single-accordion">
                                <h6>
                                    <a role="button" class="collapsed" aria-expanded="true"
                                        aria-controls="collapsefour" data-parent="#accordion" data-toggle="collapse"
                                        href="#collapsefour">Benignis Kindergarten & Primary
                                        Schoo
                                        <span class="accor-open"><i class="fa fa-plus"
                                                aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus"
                                                aria-hidden="true"></i></span>
                                    </a>
                                </h6>
                                {{-- <div id="collapsefour" class="accordion-content collapse">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="mt-4">
                                                <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus
                                                    eu dolor eu
                                                    quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non
                                                    lacus.
                                                    Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit,
                                                    rutrum at
                                                    ipsum ac, dignissim iaculis ante.</p>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                                                    odit magni eveniet. Consequuntur, sequi amet! Expedita,
                                                    voluptatem nesciunt itaque minima aliquam illum impedit a,
                                                    distinctio, odit quaerat nostrum facere libero.</p>

                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mt-4">
                                                <div id="carouselExampleSlidesOnly" class="carousel slide"
                                                    data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_1.jpg') }}"
                                                                    alt="First slide">

                                                            </a>
                                                            <div class="text mt-3">

                                                                <span>Benignis</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_2.jpg') }}"
                                                                    alt="Second slide">
                                                            </a>
                                                            <div class="text mt-3">

                                                                <span>Benignis</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_3.jpg') }}"
                                                                    alt="Third slide">

                                                            </a>
                                                            <div class="text mt-3">
                                                                <span>Benignis Secondary School</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>



                                    </div>
                                </div> --}}
                            </div>

                            <div class="panel single-accordion">
                                <h6>
                                    <a role="button" class="collapsed" aria-expanded="true"
                                        aria-controls="collapsefour" data-parent="#accordion" data-toggle="collapse"
                                        href="#collapsefour">St. Mary’s Catholic Nursery School
                                        <span class="accor-open"><i class="fa fa-plus"
                                                aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus"
                                                aria-hidden="true"></i></span>
                                    </a>
                                </h6>
                                {{-- <div id="collapsefour" class="accordion-content collapse">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="mt-4">
                                                <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus
                                                    eu dolor eu
                                                    quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non
                                                    lacus.
                                                    Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit,
                                                    rutrum at
                                                    ipsum ac, dignissim iaculis ante.</p>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                                                    odit magni eveniet. Consequuntur, sequi amet! Expedita,
                                                    voluptatem nesciunt itaque minima aliquam illum impedit a,
                                                    distinctio, odit quaerat nostrum facere libero.</p>

                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mt-4">
                                                <div id="carouselExampleSlidesOnly" class="carousel slide"
                                                    data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_1.jpg') }}"
                                                                    alt="First slide">

                                                            </a>
                                                            <div class="text mt-3">

                                                                <span>Benignis</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_2.jpg') }}"
                                                                    alt="Second slide">
                                                            </a>
                                                            <div class="text mt-3">

                                                                <span>Benignis</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_3.jpg') }}"
                                                                    alt="Third slide">

                                                            </a>
                                                            <div class="text mt-3">
                                                                <span>Benignis Secondary School</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>



                                    </div>
                                </div> --}}
                            </div>

                            <div class="panel single-accordion">
                                <h6>
                                    <a role="button" class="collapsed" aria-expanded="true"
                                        aria-controls="collapsefive" data-parent="#accordion" data-toggle="collapse"
                                        href="#collapsefive">St. Theresa Nursery school
                                        <span class="accor-open"><i class="fa fa-plus"
                                                aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus"
                                                aria-hidden="true"></i></span>
                                    </a>
                                </h6>
                                {{-- <div id="collapsefive" class="accordion-content collapse">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="mt-4">
                                                <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus
                                                    eu dolor eu
                                                    quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non
                                                    lacus.
                                                    Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit,
                                                    rutrum at
                                                    ipsum ac, dignissim iaculis ante.</p>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                                                    odit magni eveniet. Consequuntur, sequi amet! Expedita,
                                                    voluptatem nesciunt itaque minima aliquam illum impedit a,
                                                    distinctio, odit quaerat nostrum facere libero.</p>

                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mt-4">
                                                <div id="carouselExampleSlidesOnly" class="carousel slide"
                                                    data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_1.jpg') }}"
                                                                    alt="First slide">

                                                            </a>
                                                            <div class="text mt-3">

                                                                <span>Benignis</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_2.jpg') }}"
                                                                    alt="Second slide">
                                                            </a>
                                                            <div class="text mt-3">

                                                                <span>Benignis</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_3.jpg') }}"
                                                                    alt="Third slide">

                                                            </a>
                                                            <div class="text mt-3">
                                                                <span>Benignis Secondary School</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>



                                    </div>
                                </div> --}}
                            </div>

                            <div class="panel single-accordion">
                                <h6>
                                    <a role="button" class="collapsed" aria-expanded="true"
                                        aria-controls="collapsesix" data-parent="#accordion" data-toggle="collapse"
                                        href="#collapsesix">Mchombe Parish Kindergarten
                                        <span class="accor-open"><i class="fa fa-plus"
                                                aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus"
                                                aria-hidden="true"></i></span>
                                    </a>
                                </h6>
                                {{-- <div id="collapsesix" class="accordion-content collapse">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="mt-4">
                                                <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus
                                                    eu dolor eu
                                                    quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non
                                                    lacus.
                                                    Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit,
                                                    rutrum at
                                                    ipsum ac, dignissim iaculis ante.</p>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                                                    odit magni eveniet. Consequuntur, sequi amet! Expedita,
                                                    voluptatem nesciunt itaque minima aliquam illum impedit a,
                                                    distinctio, odit quaerat nostrum facere libero.</p>

                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mt-4">
                                                <div id="carouselExampleSlidesOnly" class="carousel slide"
                                                    data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_1.jpg') }}"
                                                                    alt="First slide">

                                                            </a>
                                                            <div class="text mt-3">

                                                                <span>Benignis</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_2.jpg') }}"
                                                                    alt="Second slide">
                                                            </a>
                                                            <div class="text mt-3">

                                                                <span>Benignis</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_3.jpg') }}"
                                                                    alt="Third slide">

                                                            </a>
                                                            <div class="text mt-3">
                                                                <span>Benignis Secondary School</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>



                                    </div>
                                </div> --}}
                            </div>

                            <div class="panel single-accordion">
                                <h6>
                                    <a role="button" class="collapsed" aria-expanded="true"
                                        aria-controls="collapsesevern" data-parent="#accordion" data-toggle="collapse"
                                        href="#collapsesevern">St. Raphael Secondary School
                                        <span class="accor-open"><i class="fa fa-plus"
                                                aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus"
                                                aria-hidden="true"></i></span>
                                    </a>
                                </h6>
                                {{-- <div id="collapsesevern" class="accordion-content collapse">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="mt-4">
                                                <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus
                                                    eu dolor eu
                                                    quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non
                                                    lacus.
                                                    Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit,
                                                    rutrum at
                                                    ipsum ac, dignissim iaculis ante.</p>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                                                    odit magni eveniet. Consequuntur, sequi amet! Expedita,
                                                    voluptatem nesciunt itaque minima aliquam illum impedit a,
                                                    distinctio, odit quaerat nostrum facere libero.</p>

                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mt-4">
                                                <div id="carouselExampleSlidesOnly" class="carousel slide"
                                                    data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_1.jpg') }}"
                                                                    alt="First slide">

                                                            </a>
                                                            <div class="text mt-3">

                                                                <span>Benignis</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_2.jpg') }}"
                                                                    alt="Second slide">
                                                            </a>
                                                            <div class="text mt-3">

                                                                <span>Benignis</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_3.jpg') }}"
                                                                    alt="Third slide">

                                                            </a>
                                                            <div class="text mt-3">
                                                                <span>Benignis Secondary School</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>



                                    </div>
                                </div> --}}
                            </div>

                            <div class="panel single-accordion">
                                <h6>
                                    <a role="button" class="collapsed" aria-expanded="true"
                                        aria-controls="collapse8" data-parent="#accordion" data-toggle="collapse"
                                        href="#collapse8">Malecela Secondary School
                                        <span class="accor-open"><i class="fa fa-plus"
                                                aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus"
                                                aria-hidden="true"></i></span>
                                    </a>
                                </h6>
                                {{-- <div id="collapse8" class="accordion-content collapse">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="mt-4">
                                                <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus
                                                    eu dolor eu
                                                    quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non
                                                    lacus.
                                                    Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit,
                                                    rutrum at
                                                    ipsum ac, dignissim iaculis ante.</p>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                                                    odit magni eveniet. Consequuntur, sequi amet! Expedita,
                                                    voluptatem nesciunt itaque minima aliquam illum impedit a,
                                                    distinctio, odit quaerat nostrum facere libero.</p>

                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mt-4">
                                                <div id="carouselExampleSlidesOnly" class="carousel slide"
                                                    data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_1.jpg') }}"
                                                                    alt="First slide">

                                                            </a>
                                                            <div class="text mt-3">

                                                                <span>Benignis</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_2.jpg') }}"
                                                                    alt="Second slide">
                                                            </a>
                                                            <div class="text mt-3">

                                                                <span>Benignis</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_3.jpg') }}"
                                                                    alt="Third slide">

                                                            </a>
                                                            <div class="text mt-3">
                                                                <span>Benignis Secondary School</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>



                                    </div>
                                </div> --}}
                            </div>

                            <div class="panel single-accordion">
                                <h6>
                                    <a role="button" class="collapsed" aria-expanded="true"
                                        aria-controls="collapse9" data-parent="#accordion" data-toggle="collapse"
                                        href="#collapse9">St. Francis Xavier Nursery School
                                        <span class="accor-open"><i class="fa fa-plus"
                                                aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus"
                                                aria-hidden="true"></i></span>
                                    </a>
                                </h6>
                                {{-- <div id="collapse9" class="accordion-content collapse">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="mt-4">
                                                <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus
                                                    eu dolor eu
                                                    quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non
                                                    lacus.
                                                    Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit,
                                                    rutrum at
                                                    ipsum ac, dignissim iaculis ante.</p>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                                                    odit magni eveniet. Consequuntur, sequi amet! Expedita,
                                                    voluptatem nesciunt itaque minima aliquam illum impedit a,
                                                    distinctio, odit quaerat nostrum facere libero.</p>

                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mt-4">
                                                <div id="carouselExampleSlidesOnly" class="carousel slide"
                                                    data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_1.jpg') }}"
                                                                    alt="First slide">

                                                            </a>
                                                            <div class="text mt-3">

                                                                <span>Benignis</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_2.jpg') }}"
                                                                    alt="Second slide">
                                                            </a>
                                                            <div class="text mt-3">

                                                                <span>Benignis</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_3.jpg') }}"
                                                                    alt="Third slide">

                                                            </a>
                                                            <div class="text mt-3">
                                                                <span>Benignis Secondary School</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>



                                    </div>
                                </div> --}}
                            </div>

                            <div class="panel single-accordion">
                                <h6>
                                    <a role="button" class="collapsed" aria-expanded="true"
                                        aria-controls="collapse10" data-parent="#accordion" data-toggle="collapse"
                                        href="#collapse10">Queen Mary Secondary School
                                        <span class="accor-open"><i class="fa fa-plus"
                                                aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus"
                                                aria-hidden="true"></i></span>
                                    </a>
                                </h6>
                                {{-- <div id="collapse10" class="accordion-content collapse">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="mt-4">
                                                <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus
                                                    eu dolor eu
                                                    quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non
                                                    lacus.
                                                    Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit,
                                                    rutrum at
                                                    ipsum ac, dignissim iaculis ante.</p>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                                                    odit magni eveniet. Consequuntur, sequi amet! Expedita,
                                                    voluptatem nesciunt itaque minima aliquam illum impedit a,
                                                    distinctio, odit quaerat nostrum facere libero.</p>

                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mt-4">
                                                <div id="carouselExampleSlidesOnly" class="carousel slide"
                                                    data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_1.jpg') }}"
                                                                    alt="First slide">

                                                            </a>
                                                            <div class="text mt-3">

                                                                <span>Benignis</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_2.jpg') }}"
                                                                    alt="Second slide">
                                                            </a>
                                                            <div class="text mt-3">

                                                                <span>Benignis</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_3.jpg') }}"
                                                                    alt="Third slide">

                                                            </a>
                                                            <div class="text mt-3">
                                                                <span>Benignis Secondary School</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>



                                    </div>
                                </div> --}}
                            </div>

                            <div class="panel single-accordion">
                                <h6>
                                    <a role="button" class="collapsed" aria-expanded="true"
                                        aria-controls="collapse11" data-parent="#accordion" data-toggle="collapse"
                                        href="#collapse11">St. Alphonsa Pre and Primary School
                                        <span class="accor-open"><i class="fa fa-plus"
                                                aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus"
                                                aria-hidden="true"></i></span>
                                    </a>
                                </h6>
                                {{-- <div id="collapse11" class="accordion-content collapse">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="mt-4">
                                                <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus
                                                    eu dolor eu
                                                    quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non
                                                    lacus.
                                                    Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit,
                                                    rutrum at
                                                    ipsum ac, dignissim iaculis ante.</p>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                                                    odit magni eveniet. Consequuntur, sequi amet! Expedita,
                                                    voluptatem nesciunt itaque minima aliquam illum impedit a,
                                                    distinctio, odit quaerat nostrum facere libero.</p>

                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mt-4">
                                                <div id="carouselExampleSlidesOnly" class="carousel slide"
                                                    data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_1.jpg') }}"
                                                                    alt="First slide">

                                                            </a>
                                                            <div class="text mt-3">

                                                                <span>Benignis</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_2.jpg') }}"
                                                                    alt="Second slide">
                                                            </a>
                                                            <div class="text mt-3">

                                                                <span>Benignis</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_3.jpg') }}"
                                                                    alt="Third slide">

                                                            </a>
                                                            <div class="text mt-3">
                                                                <span>Benignis Secondary School</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>



                                    </div>
                                </div> --}}
                            </div>

                            <div class="panel single-accordion">
                                <h6>
                                    <a role="button" class="collapsed" aria-expanded="true"
                                        aria-controls="collapse12" data-parent="#accordion" data-toggle="collapse"
                                        href="#collapse12">St. Martin Girls Secondary School
                                        <span class="accor-open"><i class="fa fa-plus"
                                                aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus"
                                                aria-hidden="true"></i></span>
                                    </a>
                                </h6>
                                {{-- <div id="collapse12" class="accordion-content collapse">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="mt-4">
                                                <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus
                                                    eu dolor eu
                                                    quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non
                                                    lacus.
                                                    Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit,
                                                    rutrum at
                                                    ipsum ac, dignissim iaculis ante.</p>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                                                    odit magni eveniet. Consequuntur, sequi amet! Expedita,
                                                    voluptatem nesciunt itaque minima aliquam illum impedit a,
                                                    distinctio, odit quaerat nostrum facere libero.</p>

                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mt-4">
                                                <div id="carouselExampleSlidesOnly" class="carousel slide"
                                                    data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_1.jpg') }}"
                                                                    alt="First slide">

                                                            </a>
                                                            <div class="text mt-3">

                                                                <span>Benignis</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_2.jpg') }}"
                                                                    alt="Second slide">
                                                            </a>
                                                            <div class="text mt-3">

                                                                <span>Benignis</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_3.jpg') }}"
                                                                    alt="Third slide">

                                                            </a>
                                                            <div class="text mt-3">
                                                                <span>Benignis Secondary School</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>



                                    </div>
                                </div> --}}
                            </div>

                            <div class="panel single-accordion">
                                <h6>
                                    <a role="button" class="collapsed" aria-expanded="true"
                                        aria-controls="collapse13" data-parent="#accordion" data-toggle="collapse"
                                        href="#collapse13">St. Theresa Nursery school
                                        <span class="accor-open"><i class="fa fa-plus"
                                                aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus"
                                                aria-hidden="true"></i></span>
                                    </a>
                                </h6>
                                {{-- <div id="collapse13" class="accordion-content collapse">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="mt-4">
                                                <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus
                                                    eu dolor eu
                                                    quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non
                                                    lacus.
                                                    Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit,
                                                    rutrum at
                                                    ipsum ac, dignissim iaculis ante.</p>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                                                    odit magni eveniet. Consequuntur, sequi amet! Expedita,
                                                    voluptatem nesciunt itaque minima aliquam illum impedit a,
                                                    distinctio, odit quaerat nostrum facere libero.</p>

                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mt-4">
                                                <div id="carouselExampleSlidesOnly" class="carousel slide"
                                                    data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_1.jpg') }}"
                                                                    alt="First slide">

                                                            </a>
                                                            <div class="text mt-3">

                                                                <span>Benignis</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_2.jpg') }}"
                                                                    alt="Second slide">
                                                            </a>
                                                            <div class="text mt-3">

                                                                <span>Benignis</span>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <a href="#">
                                                                <img class="d-block w-100"
                                                                    src="{{ asset('site/img/bg-img/school_3.jpg') }}"
                                                                    alt="Third slide">

                                                            </a>
                                                            <div class="text mt-3">
                                                                <span>Benignis Secondary School</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>



                                    </div>
                                </div> --}}
                            </div>
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


    <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="standard-modalLabel">Modal Heading</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>Text in a modal</h6>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                    <hr>
                    <h6>Overflowing text to show scroll behavior</h6>
                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                        egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel
                        augue laoreet rutrum faucibus dolor auctor.</p>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque
                        nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- ##### Add Area End ##### -->


    <!-- ##### Footer Area Start ##### -->
    @include('layouts.footer')
    <!-- ##### Footer Area Start ##### -->
    @include('assets.js')



</body>

</html>

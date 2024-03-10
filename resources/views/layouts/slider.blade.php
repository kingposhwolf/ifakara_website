<section class="intro-news-area mt-4 mb-70">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Intro News Tabs Area -->
            <div class="col-12 col-lg-12">
                <div class="intro-news-tab">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active">
                            <div class="row">
                                <div class="col-md-12 col-sm-8 col-md-12" id="blog-thumbnail">
                                    <div class="single-blog-post style-2 mb-5">
                                        <!-- Blog Thumbnail -->
                                        <div class="blog-thumbnail" style="width: 100%; height: 350px;">
                                            <div id="carouselExampleIndicators" class="carousel slide"
                                                data-ride="carousel">
                                                <div class="carousel-inner" style="margin-top: 80px;">
                                                    @foreach ($slider as $key => $slider)
                                                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">

                                                        <img class="d-block w-100 h-50"
                                                        src="{{ asset('admin/assets/images/slider/' . $slider->image) }}"
                                                            alt="First slide">
                                                        <div class="carousel-caption d-none d-md-block py-1"
                                                            style="background-color: rgb(170, 167, 167); opacity:0.8; ">
                                                            <h5 style="color:black; font-weight:700">{{ $slider->title }}</h5>
                                                            <h6
                                                                style="color:#0b0b0a; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                                                {{ $slider->small_description }}</h6>
                                                        </div>
                                                   @endforeach       </div>
                                              
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleIndicators"
                                                    role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleIndicators"
                                                    role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
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

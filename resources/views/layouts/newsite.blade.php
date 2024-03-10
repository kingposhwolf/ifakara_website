<section class="intro-news-area mt-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="intro-news-tab">
                    <div class="card">
                        <div class="card-header">
                            {{-- style="background-color:#fff; color:#ffff;  box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;" --}}
                            <div class="d-flex justify-content-between">
                                <h6
                                    style="color:#ff7b00; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                    Yote kwa Ujumla</h6>
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav1" data-toggle="tab"
                                            href="#nav-1" role="tab" aria-controls="nav-1" aria-selected="true"
                                            style="color:#000">Habari</a>
                                        <a class="nav-item nav-link" id="nav5" data-toggle="tab" href="#nav-5"
                                            role="tab" aria-controls="nav-5" aria-selected="false"
                                            style="color:#000">Matukio</a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- Intro News Filter -->

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav1">
                            <div class="card mt-3">
                                <div class="card-body">
                                    <div class="row">
                                        @foreach ($news as $news)
                                            <div class="col-12 col-sm-6">
                                                <div class="single-blog-post d-flex style-4 mb-30">
                                                    <!-- Blog Thumbnail -->
                                                    <div class="blog-thumbnail">
                                                        <a href="#"><img
                                                                src="{{ asset('admin/assets/images/news/' . $news->image) }}"
                                                                style="height: 120px; width:100%;" alt=""></a>
                                                    </div>

                                                    <!-- Blog Content -->
                                                    <div class="blog-content">

                                                        <a href="{{ url('single_news/' . $news->id) }}"
                                                            class="post-title"style="white-space:normal; text-overflow:ellipsis; max-width: 100%; overflow:hidden; max-height: 100px; font-size:14px;">{{ $news->initial_description }}</a>
                                                        <span class="post-date">{{ $news->created_at }}</span>
                                                        {{-- <span class="post-date" style="color:#ff7b00; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">{{ $news->news_date }}</span> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="nav-5" role="tabpanel" aria-labelledby="nav5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <!-- Single News Area -->
                                        @foreach ($events as $events)
                                            <div class="col-12 col-sm-6">
                                                <div class="single-blog-post d-flex style-4 mb-30">
                                                    <!-- Blog Thumbnail -->
                                                    <div class="blog-thumbnail">
                                                        <a href="#"><img
                                                                src="{{ asset('admin/assets/images/events/' . $events->image) }}"
                                                                style="height: 120px; width:100%;" alt=""></a>
                                                    </div>

                                                    <!-- Blog Content -->
                                                    <div class="blog-content">
                                                        <span class="post-date">{{ $events->news_date }}</span>
                                                        <a href="{{ url('single_events/' . $events->id) }}"
                                                            class="post-title"
                                                            style="white-space:normal; text-overflow:ellipsis; max-width: 100%; overflow:hidden; max-height: 100px; font-size:14px;">{{ $events->events_title }}</a>
                                                        <span class="post-date">By admin</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach



                                        <!-- Single News Area-->
                                        {{-- <div class="col-12 col-sm-6">
                                            <div class="single-blog-post d-flex style-4 mb-30">
                                                <!-- Blog Thumbnail -->
                                                <div class="blog-thumbnail">
                                                    <a href="#"><img
                                                            src="{{ asset('site/img/bg-img/n-6.jpg') }}"
                                                            alt=""></a>
                                                </div>

                                                <!-- Blog Content -->
                                                <div class="blog-content">

                                                    <a href="#" class="post-title">Mkufunzi akitoa mafunzo ya
                                                        taaluma kwa walimu</a>
                                                   
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar gallery -->
            <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                <div class="sidebar-area">
                    <div class="card">
                        <div class="card-header">
                            <h6
                                style="color:#ff7b00; font-weight:700; text-align:center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                Album ya picha</h6>
                        </div>
                    </div>
                    {{-- <div class="intro-news-filter d-flex justify-content-between"
                        style="background-color:#fff; color:#ffff;  box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;">
                      

                    </div> --}}
                    <!-- Newsletter Widget -->


                    <!-- Add Widget -->
                    <div class="single-widget-area add-widget mb-30 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($gallery_photo as $key => $gallery_photo)
                                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                                <a href="#">
                                                    <img class="d-block w-100"
                                                        src="{{ asset('admin/assets/images/gallery/' . $gallery_photo->media) }}"
                                                        alt="First slide" style="height: 260px;">
                                                </a>
                                            </div>
                                        @endforeach
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

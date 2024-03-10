@include('assets.css')

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    @include('layouts.header')


    <!-- ##### Post Details Area Start ##### -->
    <section class="post-news-area section-padding-100-0 mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Post Details Content Area -->
                <div class="col-12 col-lg-8">
                    <div class="post-details-content mb-100">
                        <div class="card">
                            <div class="card-header"
                                style="text-align:center;color:#ff7b00; font-weight:700; font-family:'Times New Roman', Times, serif;">
                                {{ $news->news_title }}

                            </div>

                            <div class="card-body">
                                <p
                                    style="text-align:justify; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:black">
                                    {{ $news->initial_description }}</p>
                                <img src="{{ asset('admin/assets/images/news/' . $news->image) }}" alt=""
                                    style="height: 300px; width: 100%; border-radius: 10px;">
                                <p class="mt-3"
                                    style="text-align:justify; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:16px; color:black">
                                    {{ $news->news_description }}</p>
                                <p style="color:black;font-size:14px;">Published date: <span
                                        style="text-align: end;text-align:center;color:#ff7b00;">{{ $news->news_date }}</span>
                                    By<span style="text-align: end;text-align:center;color:#ff7b00;"> admin</span></p>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area">
                        <!-- Latest News Widget -->
                        <div class="single-widget-area news-widget mb-30">
                            <div class="card">
                                <div
                                    class="card-header"style="text-align:center;color:#ff7b00; font-weight:700; font-family:'Times New Roman', Times, serif;">
                                    Latest News
                                </div>


                                <div class="card-body">
                                    <!-- Single News Area -->
                                    @foreach ($latest as $news)
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('admin/assets/images/news/' . $news->image) }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                
                                                <a href="{{ url('single_news/' . $news->id) }}" class="post-title"
                                                    style="white-space:normal; text-overflow:ellipsis; max-width: 100%; overflow:hidden; max-height: 80px; font-size:14px; font-family:Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:17px;">{{ $news->initial_description }}</a>
                                                    <p>Published date: <span class="post-date"  style="text-align: end;text-align:center;color:#ff7b00;">{{ $news->news_date }}</span></p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>



                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->


    <!-- ##### Footer Area Start ##### -->
    @include('layouts.footer')
    <!-- ##### Footer Area Start ##### -->
    @include('assets.js')
</body>

</html>

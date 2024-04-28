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
    @include('layouts.header')
    <!-- ##### Header Area End ##### -->
   <!-- ##### Header Area End ##### -->
   <section class="intro-news-area mt-4 mb-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                <div class="intro-news-tab">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active">
                            <div class="row">
                                <div class="col-md-12 col-sm-8 col-md-12">
                                    <div class="single-blog-post style-2 mb-5">
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
                                                            <h5 style="color:black; font-weight:700">TAASISI ZA UTAFITI
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

    <section class="intro-news-area  mb-70 mt-4">
        <div class="container">
            <div class="row justify-content-center mt-4">
                <div class="col-12 col-lg-12 col-md-12">
                    <div class="intro-news-tab mt-4">

                        <h4 style="color:rgb(3, 3, 3); font-size: medium;">Inachakatwa</h4>
                        {{-- <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-4 col-md-3">
                                        <div class="single-blog-post style-2 mb-5">
                                            <div class="blog-thumbnail">
                                                <a href="#" class=" justify-content-center">
                                                    <img src="site/img/bg-img/bishop.jpg" alt="" style="width: 60%">
                                                </a>
                                                <h6 class="mt-3" style="font-weight:600; color: black;">Reaserch
                                                    Institute
                                                </h6>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8 col-md-9">
                                        <div class="single-blog-post style-2 mb-5">
                                            <p style="text-align: justify; color: black;">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Iusto asperiores neque vitae officiis
                                                distinctio a
                                                adipisci, amet similique sit fuga ratione possimus temporibus tempore
                                                unde, modi nam totam eius qui. Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit. Illo voluptatum ipsa tempora incidunt, earum
                                                praesentium veritatis eveniet, commodi hic maiores molestias
                                                repellendus, natus facere quisquam repellat modi autem delectus fugit.
                                            </p>
                                            <p style="text-align: justify; color: black;">Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit. Eius sunt voluptates nam in fuga repellat
                                                velit aliquam illum cum quasi a eligendi, ratione cupiditate ad sed
                                                beatae aut. Amet, distinctio.</p>

                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="card mt-2">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-4 col-md-3">
                                        <div class="single-blog-post style-2 mb-5">
                                            <div class="blog-thumbnail">
                                                <a href="#" class=" justify-content-center">
                                                    <img src="site/img/bg-img/bishop.jpg" alt="" style="width: 60%">
                                                </a>
                                                <h6 class="mt-3" style="font-weight:600; color: black;">Reaserch
                                                    Institute
                                                </h6>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8 col-md-9">
                                        <div class="single-blog-post style-2 mb-5">
                                            <p style="text-align: justify; color: black;">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Iusto asperiores neque vitae officiis
                                                distinctio a
                                                adipisci, amet similique sit fuga ratione possimus temporibus tempore
                                                unde, modi nam totam eius qui. Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit. Illo voluptatum ipsa tempora incidunt, earum
                                                praesentium veritatis eveniet, commodi hic maiores molestias
                                                repellendus, natus facere quisquam repellat modi autem delectus fugit.
                                            </p>
                                            <p style="text-align: justify; color: black;">Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit. Eius sunt voluptates nam in fuga repellat
                                                velit aliquam illum cum quasi a eligendi, ratione cupiditate ad sed
                                                beatae aut. Amet, distinctio.</p>

                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="card mt-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-4 col-md-3">
                                        <div class="single-blog-post style-2 mb-5">
                                            <div class="blog-thumbnail">
                                                <a href="#" class=" justify-content-center">
                                                    <img src="site/img/bg-img/bishop.jpg" alt="" style="width: 60%">
                                                </a>
                                                <h6 class="mt-3" style="font-weight:600; color: black;">Reaserch
                                                    Institute
                                                </h6>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8 col-md-9">
                                        <div class="single-blog-post style-2 mb-5">
                                            <p style="text-align: justify; color: black;">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Iusto asperiores neque vitae officiis
                                                distinctio a
                                                adipisci, amet similique sit fuga ratione possimus temporibus tempore
                                                unde, modi nam totam eius qui. Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit. Illo voluptatum ipsa tempora incidunt, earum
                                                praesentium veritatis eveniet, commodi hic maiores molestias
                                                repellendus, natus facere quisquam repellat modi autem delectus fugit.
                                            </p>
                                            <p style="text-align: justify; color: black;">Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit. Eius sunt voluptates nam in fuga repellat
                                                velit aliquam illum cum quasi a eligendi, ratione cupiditate ad sed
                                                beatae aut. Amet, distinctio.</p>

                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="card mt-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-4 col-md-3">
                                        <div class="single-blog-post style-2 mb-5">
                                            <div class="blog-thumbnail">
                                                <a href="#" class=" justify-content-center">
                                                    <img src="site/img/bg-img/bishop.jpg" alt="" style="width: 60%">
                                                </a>
                                                <h6 class="mt-3" style="font-weight:600; color: black;">Reaserch
                                                    Institute
                                                </h6>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8 col-md-9">
                                        <div class="single-blog-post style-2 mb-5">
                                            <p style="text-align: justify; color: black;">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Iusto asperiores neque vitae officiis
                                                distinctio a
                                                adipisci, amet similique sit fuga ratione possimus temporibus tempore
                                                unde, modi nam totam eius qui. Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit. Illo voluptatum ipsa tempora incidunt, earum
                                                praesentium veritatis eveniet, commodi hic maiores molestias
                                                repellendus, natus facere quisquam repellat modi autem delectus fugit.
                                            </p>
                                            <p style="text-align: justify; color: black;">Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit. Eius sunt voluptates nam in fuga repellat
                                                velit aliquam illum cum quasi a eligendi, ratione cupiditate ad sed
                                                beatae aut. Amet, distinctio.</p>

                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div> --}}
                    </div>
                  
                </div>
                {{-- <div class="col-md-12">
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
                </div> --}}
            </div>


        </div>
        </div>
    </section>
 


    @include('layouts.footer')
    @include('assets.js')




</body>

</html>
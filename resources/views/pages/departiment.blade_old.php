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
                                                                <h5 style="color:black; font-weight:700">IDARA Zetu
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
    <section class="intro-news-area  mb-70 mt-4">
        <div class="container">
            <div class="row justify-content-center mt-4">
                <!-- Intro News Tabs Area -->
                <div class="col-12 col-lg-12 col-md-12">
                    <div class="intro-news-tab mt-4">

                        <h4 style="color:rgb(3, 3, 3); font-size: medium;" class="text-center">Inachakatwa</h4>
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
                                                <h6 class="mt-3" style="font-weight:600; color: black;">ICT
                                                    
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
                                                <h6 class="mt-3" style="font-weight:600; color: black;">MEDICINE
                                                    
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
                                                <h6 class="mt-3" style="font-weight:600; color: black;">PARISH
                                                    
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
            </div>
        </div>
    </div>

    <!-- ##### Add Area End ##### -->


    <!-- ##### Footer Area Start ##### -->
    @include('layouts.footer')
    <!-- ##### Footer Area Start ##### -->
    @include('assets.js')

   

</body>

</html>
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
            <h1 class="display-4 text-white animated slideInDown mb-4">Jimbo Ifakara</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Nyumbani</a></li>
                    {{-- <li class="breadcrumb-item"><a class="text-white" href="#">T</a></li> --}}
                    <li class="breadcrumb-item text-primary active" aria-current="page">Jimbo Ifakara</li>
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

                    <div class="card">
                        <div class="card-body">
                            <img class="w-100" src="{{asset('web/img/bishop_img.jpg')}}" alt="" style="height:100%;">

                        </div>
                    </div>

                    {{-- <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                        <img class="position-absolute w-50 h-100 pt-5 pe-5" src="{{asset('web/img/bishop_img.jpg')}}" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2" src="{{asset('web/img/about-2.jpg')}}" alt="" style="width: 200px; height: 200px;">
                    </div> --}}
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Kuhusu sisi</div>
                        <h1 class="display-6 mb-5"> Jimbo Katoliki Ifakara</h1>
                        <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                            <p class="text-dark mb-2">Baba Askofu wa jimbo Katoliki la Ifakara </p>
                            <span class="text-primary">   Right Rev. Salutaris Melchior Libena</span>
                        </div>
                        <p class="mb-5" style="text-align:justify">Jimbo Katoliki Ifakara lilitengwa kutoka jimbo katoliki Mahenge tarehe 14
                            Januari 2012. Liliwekwa rasmi tarehe 19 Machi 2012. Askofu wa kwanza ni
                            Mhashamu Salutaris M. Libena. Naibu wa Askofu ni Padre Hospitio Itatiro,
                            Katibu Mkuu ni Padre Godfrey Hongo,
                            Naibu Katibu Mkuu ni Padre Edwin Lyanga na Mtunza Hazina ni Sr. Patricia
                            Mtunga.
                            Jimbo lina ukubwa wa eneo la kitume ni kilomita za mraba 14,245 ya wilaya
                            yote ya Kilombero</p>
                            <p class="mb-5" style="text-align:justify">Jimbo Katoliki Ifakara ilianzishwa na parokia 19. Sasa jimbo ina parokia
                                26 na parokia moja iliyochaguliwa.
                                Dayosisi ina mapadre 32 wa dayosisi na mapadre 27 wa mashirika ya
                                kitawa. Vilevile kuna taasisi mbalimbali za kitawa za
                                wanaume na wanawake. Jimbo pia inatoa shughuli za kijamii kama afya,
                                elimu, na maisha ya kipato.</p>
                        {{-- <a class="btn btn-primary py-2 px-3 me-3" href="">
                            
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a> --}}
                        
                        <a class="btn btn-outline-primary py-2 px-3" href="{{route('contact')}}">
                            Mawasilano
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team and fathers -->
    <div class="container-xxl">
        <div class="container" style="margin-top:-2%;">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Padres</div>
                <h1 class="display-6 mb-5">Jimbo Katoliki na Paroko wake</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{asset('web/img/pr_marcus.jpg')}}" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>   Pd. Marcus Abell Mirwato</h5> 
                            <h6 class="text-primary"><span class="text-dark">Parokia : </span> Andrea Mtume-Ifakara</h6>
                            <h6 class="text-primary"><span class="text-dark"><i class="fa fa-envelope" aria-hidden="true"></i> :
                            </span>limanagani@gmail.com</h6>
                            <h6 class="text-primary"><span class="text-dark"><i class="fa fa-phone-square" aria-hidden="true"></i> :

                            </span> 0784050722</h6>
                                {{-- <div class="team-social text-center">
                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{asset('web/img/p_1.jpg')}}" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Pd. Benny Jullio Mtema</h5>
                            <h6 class="text-primary"><span class="text-dark">Parokia : </span>Mang’ula</h6>
                            <h6 class="text-primary"><span class="text-dark"><i class="fa fa-envelope" aria-hidden="true"></i> :
                            </span>bennyjulliomtema@gmail.com </h6>
                            <h6 class="text-primary"><span class="text-dark"><i class="fa fa-phone-square" aria-hidden="true"></i> :

                            </span> +255 686 580 500</h6>
                                {{-- <div class="team-social text-center">
                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{asset('web/img/p_3.jpg')}}" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Pd. Pius Rwegoshora</h5>
                            <h6 class="text-primary"><span class="text-dark">Parokia : </span> Takatifu-Chisano</h6>
                            <h6 class="text-primary"><span class="text-dark"><i class="fa fa-envelope" aria-hidden="true"></i> :
                            </span>rwegoshorapius21@gmail.com</h6>
                            <h6 class="text-primary"><span class="text-dark"><i class="fa fa-phone-square" aria-hidden="true"></i> :

                            </span> +255 755 912 902</h6>
                            {{-- <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{asset('web/img/p_4.png')}}" alt="" >
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5> Pd. Godfrey Hongo </h5>
                            <h6 class="text-primary"><span class="text-dark">Parokia : </span>Mt. Yohane Mbatizaji Viwanja Sitini-Ifakara</h6>
                            <h6 class="text-primary"><span class="text-dark"><i class="fa fa-envelope" aria-hidden="true"></i> :
                            </span></h6>
                            <h6 class="text-primary"><span class="text-dark"><i class="fa fa-phone-square" aria-hidden="true"></i> :

                            </span>  +255 786 627 114</h6>                           
                             {{-- <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 mt-3">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{asset('web/img/p_5.png')}}" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5> Fr. Benvolus Chinyala</h5> 
                            <h6 class="text-primary"><span class="text-dark">Parokia : </span>Idete</h6>
                            <h6 class="text-primary"><span class="text-dark"><i class="fa fa-envelope" aria-hidden="true"></i> :
                            </span>bchinyala@gmail.com </h6>
                            <h6 class="text-primary"><span class="text-dark"><i class="fa fa-phone-square" aria-hidden="true"></i> :

                            </span> +255 682 561 136</h6>
                                {{-- <div class="team-social text-center">
                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{asset('web/img/p_6.png')}}" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Fr. Ndelacho</h5>
                            <h6 class="text-primary"><span class="text-dark">Parokia : </span></h6>
                            <h6 class="text-primary"><span class="text-dark"><i class="fa fa-envelope" aria-hidden="true"></i> :
                            </span></h6>
                            <h6 class="text-primary"><span class="text-dark"><i class="fa fa-phone-square" aria-hidden="true"></i> :

                            </span>    </h6>
                                {{-- <div class="team-social text-center">
                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div> --}}
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Footer Start -->
    @include('layouts.footer')

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    @include('assets.js')
</body>

</html>
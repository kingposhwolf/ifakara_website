<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100 pt-5 pe-5" src="{{ asset('web/img/chrch_bg_2.jpg') }}"
                        alt="" style="object-fit: cover;">
                    <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2"
                        src="{{ asset('web/img/bishop_img.jpg') }}" alt=""
                        style="width: 125px; height: 200px;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Kuhusu sisi
                    </div>
                    <h1 class="display-6 mb-5">Jimbo Ifakara</h1>
                    <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                        <p class="text-dark mb-2">Baba Askofu katika Jimbo Katoliki Ifakara</p>
                        <span class="text-primary">Bishop. Salutaris Melchior Libena</span>
                    </div>
                    <p class="mb-5" style="text-align: justify"> Jimbo Katoliki Ifakara lilitengwa kutoka jimbo katoliki Mahenge tarehe 14
                        Januari 2012. Liliwekwa rasmi tarehe 19 Machi 2012. Askofu wa kwanza ni
                        Mhashamu Salutaris M. Libena. Naibu wa Askofu ni Padre Hospitio Itatiro,
                        Katibu Mkuu ni Padre Godfrey Hongo,
                        Naibu Katibu Mkuu ni Padre Edwin Lyanga na Mtunza Hazina ni Sr. Patricia
                        Mtunga.
                    </p>
                    {{-- <a class="btn btn-primary py-2 px-3 me-3" href="">
                        Soma zaidi
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a> --}}
                    <a class="btn btn-outline-primary py-2 px-3" href="{{ route('catholic_diocese') }}">
                        Soma zaidi
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
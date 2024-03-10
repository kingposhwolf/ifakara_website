<div class="container-fluid donate my-5 py-5" data-parallax="scroll" data-image-src="{{ asset('web/img/summarybg.png') }}">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Hali</div>
                <h1 class="display-6 text-white mb-5">Muhtasari wa Jimbo</h1>
                <p class="text-white-50 mb-0">Taarifa fupi inayoonesha idadi ya parokia na vituo vinavyotoa huduma za
                    kijamii Jimbo la Ifakara</p>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="h-100 bg-white p-5">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="row">
                                @foreach ($parish as $parish)
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="text-primary rounded text-center"> {{ $parish->name }}</h5>

                                            </div>
                                            <div class="card-body text-center">
                                                <h1 class="btn btn-light btn-block p-4 counter text-center"
                                                    for="btnradio1" data-duration="8000" style="font-size: 20px;">
                                                    {{ $parish->amount }}</h1>
                                            </div>
                                        </div>

                                    </div>
                                @endforeach

                                @foreach ($school as $school)
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="text-primary rounded text-center">{{ $school->name }}</h5>

                                            </div>
                                            <div class="card-body text-center">
                                                <h1 class="btn btn-light btn-block p-4 counter" for="btnradio1"
                                                data-duration="8000">{{ $school->amount }}</h1>
                                            </div>
                                        </div>
                                      
                                    </div>
                                @endforeach


                                @foreach ($health as $health)
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="text-primary rounded text-center"> {{ $health->name }}</h5>

                                            </div>
                                            <div class="card-body text-center">
                                                <h1 class="btn btn-light p-4 counter" for="btnradio1"
                                                    data-countto="{{ $health->amount }}" data-duration="8000">
                                                    {{ $health->amount }}</h1>
                                            </div>
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
</div>

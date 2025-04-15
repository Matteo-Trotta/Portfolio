<x-layout>



    <div class="container my-5 ">
        <div class="row text-center justify-content-center ">
            <div class="col-10 justify-content-center text-center">

                <hr class="pt-20 mt-20">
            </div>
        </div>
    </div>



    <div class="container-fluid px-0 my-0">
        <div class="row mx-0 md:mx-0 md:p-5 bg-white justify-content-between align-items-center">




            <div class="col-10 col-md-6  align-items-center justify-content-center text-start">

                <h2 class=" tangerine display-1 letter-spacing !fs-2  md:my-5 ">hello World !</h2>


                <p class="fs-5  bg-white md:p-5 bodoni text-justify justify-self-end w-50 ">

                    Ho iniziato con la passione per i mondi fantasy e il bartending, poi ho scoperto nella
                    programmazione web il modo perfetto per costruire realtà digitali eleganti e funzionali. Ora
                    unisco
                    creatività e codice per raccontare storie online.
                </p>
            </div>



            <div class="col-10 col-md-6 ">

                <img class="shadow-2xl img-fluid mx-auto rounded  "
                    src="{{ asset('storage/images/foto-cv-canva.jpg') }}">

            </div>

        </div>
    </div>





    <div class="container-fluid px-0">
        <div class="row mx-0 md:mx-0 md:p-5 bg-white justify-content-between align-items-center">





            {{-- DESCSRIZIONE CAROUSEL --}}

            <div class="col-12 col-md-6 align-items-center justify-content-center text-start">

                <h2 class="tangerine display-1 letter-spacing md:my-5">Presto.it</h2>

                <div id="slideDescription" class="fs-5 bg-white p-4 bodoni text-start animate-description">

                    <p class="mb-3">Testo descrittivo iniziale della prima slide.</p>
                    <p class="fw-bold">Canon EOS 400Digital</p>
                </div>
            </div>

            {{-- CAROUSEL PRESTO IT --}}

            <div class="col-12 col-md-6 order-2 order-md-1">


                <div id="carouselDescription" class="overflow-hidden relative carousel slide " data-bs-ride="carousel">
                    <div class="carousel-indicators">

                        <button type="button" data-bs-target="#carouselDescription" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>

                        <button type="button" data-bs-target="#carouselDescription" data-bs-slide-to="1"
                            aria-label="Slide 2">
                        </button>

                        <button type="button" data-bs-target="#carouselDescription" data-bs-slide-to="2"
                            aria-label="Slide 3">
                        </button>

                        <button type="button" data-bs-target="#carouselDescription" data-bs-slide-to="3"
                            aria-label="Slide 4">
                        </button>


                    </div>

                    <div class="carousel-inner sm-mb-1">
                        {{-- ITEM 1 --}}
                        <div class="carousel-item active">
                            <img class="" src="storage/images/presto.it/card-presto.jpg" class="d-block w-100"
                                alt="Slide 1">
                        </div>
                        {{-- ITEM 2 --}}
                        <div class="carousel-item">
                            <img src="storage/images/presto.it/footer-byte-buster.jpg" class="d-block w-100"
                                alt="Slide 2">
                        </div>
                        {{-- ITEM 3 --}}
                        <div class="carousel-item">
                            <img src="storage/images/presto.it/form-presto.jpg" class="d-block w-100" alt="Slide 3">
                        </div>

                        {{-- ITEM 4 --}}
                        <div class="carousel-item">
                            <img src="storage/images/presto.it/slide-scarpe.jpg" class="d-block w-100"
                                alt="Slide 3">
                        </div>



                    </div>


                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselDescription"
                        data-bs-slide="prev">

                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselDescription"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>



            </div>




        </div>
    </div>



    <div class="container-fluid px-0 border-5">
        <div class="row mx-0  md:mx-0 md:p-5 bg-white justify-content-between align-items-center">


            <div class="col-12 col-md-6  align-items-center justify-content-center text-start ">

                <h2 class=" tangerine display-1 letter-spacing  md:my-5 ">Fotografia</h2>

                <p class="fs-5  bg-white md:p-5 bodoni lg-text-justify justify-self-start ms-5 w-50">

                    Con la macchina fotografica ho portato quella stessa attenzione nell'immagine: raccontare
                    un’atmosfera, dare forma a un’emozione.
                    Scatto per raccontare storie, che siano luci soffuse, riflessi su una bottiglia o un paesaggio
                    urbano. Per me, la fotografia è il modo più diretto per fermare un momento e dargli voce.</p>
                <br>
                <p class="fs-5  bg-white md:p-5 bodoni text-justify justify-self-center me-5 w-75"> Canon EOS 400Digital
                </p>
            </div>


            <div class="col-12 col-md-6 my-2 ">

                <div id="carouselExample" class="overflow-hidden relative carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">

                        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>

                        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"
                            aria-label="Slide 2">
                        </button>

                        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"
                            aria-label="Slide 3">
                        </button>

                        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="3"
                            aria-label="Slide 4">
                        </button>


                    </div>

                    <div class="carousel-inner sm-mb-1">
                        {{-- ITEM 1 --}}
                        <div class="carousel-item active">
                            <img class="" src="storage/images/aboutMe/verticali/scimmia-scuro.JPG"
                                class="d-block w-100" alt="Slide 1">
                        </div>
                        {{-- ITEM 2 --}}
                        <div class="carousel-item">
                            <img src="storage/images/aboutMe/verticali/dettaglio-bottigliera.JPG"
                                class="d-block w-100" alt="Slide 2">
                        </div>
                        {{-- ITEM 3 --}}
                        <div class="carousel-item">
                            <img src="storage/images/aboutMe/verticali/bulldog.JPG" class="d-block w-100"
                                alt="Slide 3">
                        </div>

                        {{-- ITEM 4 --}}
                        <div class="carousel-item">
                            <img src="storage/images/aboutMe/verticali/montelobos.JPG" class="d-block w-100"
                                alt="Slide 3">
                        </div>



                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>


        </div>
    </div>


    <x-contatti />


</x-layout>

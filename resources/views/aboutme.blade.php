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
        <div class="row mx-0 md:mx-0 md:p-5 vh-100  bg-white justify-content-between align-items-center">





            {{-- DESCRIZIONE CAROUSEL --}}

            <div class="col-12 col-md-4 align-items-center justify-content-center text-start">

                <h2 class="tangerine display-1 letter-spacing md:my-5">Presto.it</h2>

                <div id="slideDescription" class="fs-5 bg-white p-4 bodoni text-start animate-description">

                    <p class="mb-3">Testo descrittivo iniziale della prima slide.</p>
                    <p class="fw-bold">Canon EOS 400Digital</p>
                </div>
            </div>

            {{-- CAROUSEL PRESTO IT --}}

            <div class="col-12 col-md-7 order-2 order-md-1 align-items-start">


                <div id="carouselDescription" class="overflow-hidden relative carousel slide " >
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

                    <div class="carousel-inner shadow-2xl ">
                        <!-- ITEM 1 -->
                        <div class="carousel-item active">
                            <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                <img src="storage/images/presto.it/card-presto.jpg" alt="Slide 1"
                                    style="object-fit: contain; max-width: 100%; max-height: 100%;">
                            </div>
                        </div>

                        <!-- ITEM 2 -->
                        <div class="carousel-item">
                            <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                <img src="storage/images/presto.it/footer-byte-buster.jpg" alt="Slide 2"
                                    style="object-fit: contain; max-width: 100%; max-height: 100%;">
                            </div>
                        </div>

                        <!-- ITEM 3 -->
                        <div class="carousel-item">
                            <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                <img src="storage/images/presto.it/form-presto.jpg" alt="Slide 3"
                                    style="object-fit: contain; max-width: 100%; max-height: 100%;">
                            </div>
                        </div>

                        <!-- ITEM 4 -->
                        <div class="carousel-item">
                            <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                <img src="storage/images/presto.it/slide-scarpe.jpg" alt="Slide 4"
                                    style="object-fit: contain; max-width: 100%; max-height: 100%;">
                            </div>
                        </div>
                    </div>




                    <button class=" carousel-control-prev" type="button" data-bs-target="#carouselDescription"
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

    {{-- DESCRIZIONE CAROUSEL FOTOGRAFIA --}}

    <div class="container-fluid px-0 border-5">
        <div class="row mx-0  md:mx-0 md:p-5 bg-white justify-content-between align-items-center">


            <div class="col-12 col-md-5  align-items-center justify-content-center text-start ">

                <h2 class=" tangerine display-1 letter-spacing ">Fotografia</h2>

                <p class="fs-5  bg-white md:p-5 bodoni lg-text-justify justify-self-start ms-5 w-50">

                    Con la macchina fotografica ho portato quella stessa attenzione nell'immagine: raccontare
                    un’atmosfera, dare forma a un’emozione.
                    Scatto per raccontare storie, che siano luci soffuse, riflessi su una bottiglia o un paesaggio
                    urbano. Per me, la fotografia è il modo più diretto per fermare un momento e dargli voce.</p>
                <br>
                <p class="fs-5  bg-white md:p-5 bodoni text-justify justify-self-center me-5 w-75"> Canon EOS 400Digital
                </p>
            </div>

            {{-- CAROUSEL FOTOGRAFIA --}}

            <div class="col-12 col-md-7 my-2 ">

                <div id="carouselExample" class="overflow-hidden relative carousel slide" >
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

                    <div class="carousel-inner sm-mb-1 vh-100">
                        <!-- ITEM 1 -->
                        <div class="carousel-item active slide-fullheight">
                            <div class="flex-center">
                                <img src="storage/images/aboutMe/verticali/scimmia-scuro.JPG" alt="Slide 1"
                                    class="img-responsive">
                            </div>
                        </div>

                        <!-- ITEM 2 -->
                        <div class="carousel-item slide-fullheight">
                            <div class="flex-center">
                                <img src="storage/images/aboutMe/verticali/dettaglio-bottigliera.JPG" alt="Slide 2"
                                    class="img-responsive">
                            </div>
                        </div>

                        <!-- ITEM 3 -->
                        <div class="carousel-item slide-fullheight">
                            <div class="flex-center">
                                <img src="storage/images/aboutMe/verticali/bulldog.JPG" alt="Slide 3"
                                    class="img-responsive">
                            </div>
                        </div>

                        <!-- ITEM 4 -->
                        <div class="carousel-item slide-fullheight">
                            <div class="flex-center">
                                <img src="storage/images/aboutMe/verticali/montelobos.JPG" alt="Slide 4"
                                    class="img-responsive">
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon custom-carousel-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon custom-carousel-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                </div>

            </div>


        </div>
    </div>


    <x-contatti />


</x-layout>

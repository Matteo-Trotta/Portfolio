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


            <div class="col-12 col-md-6 order-2 order-md-1">
                <img class="shadow-2xl img-fluid mx-auto rounded"
                    src="{{ asset('storage/images/presto.it/Slide Pagina-Intera-Home.jpg') }}">
            </div>

            <div class="col-12 col-md-6 align-items-center justify-content-center text-start order-1 order-md-2">
                <h2 class="tangerine display-1 letter-spacing md:my-5">Web Development</h2>

                <p class="fs-5 bg-white md:p-5 bodoni text-justify justify-self-start ms-5 w-50">
                    Dopo anni dietro il bancone, ho deciso di esplorare un nuovo linguaggio: quello del web. Ho iniziato
                    con un corso intensivo online, scoprendo che anche con il codice si possono creare esperienze.
                </p>
                <br>
                <p class="fs-5 bg-white md:p-5 bodoni text-justify justify-self-center me-5 w-75">
                    Ho lavorato in team utilizzando Git per il versionamento del codice e la collaborazione sullo
                    sviluppo,
                    con diversi linguaggi come HTML, CSS e JavaScript, PHP, framework Laravel e MySql per realizzare un
                    e-commerce di compra/vendita articoli, con integrazione di IA. Questo mi ha permesso di creare siti
                    web
                    che offrono un'esperienza utente intuitiva e coinvolgente.
                </p>
            </div>

        </div>
    </div>



    <div class="container-fluid mb-5 px-0">
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

                        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="4"
                            aria-label="Slide 5"></button>
                    </div>

                    <div class="carousel-inner sm-mb-1">
                        {{-- ITEM 1 --}}
                        <div class="carousel-item active">
                            <img class="" src="storage/images/aboutMe/verticali/scimmia-scuro.JPG"
                                class="d-block w-100" alt="Slide 1">
                        </div>
                        {{-- ITEM 2 --}}
                        <div class="carousel-item">
                            <img src="storage/images/aboutMe/verticali/dettaglio-bottigliera.JPG" class="d-block w-100"
                                alt="Slide 2">
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


</x-layout>

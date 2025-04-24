<x-layout>


    <div class="h-20 md:h-24"></div>
    
    <div class="container-fluid px-0 my-0 border-5">
        <div class="row md:mx-0 md:p-5 bg-white justify-content-center align-items-center">
            <div class="col-10 col-md-6 align-items-center justify-content-center text-center">
                <h2 class="tangerine display-1 letter-spacing !fs-2 md:my-5">hello World !</h2>
                <p class="fs-5 bg-white md:p-5 bodoni md:w-1/2">
                    Ho iniziato con la passione per i mondi fantasy e il bartending, poi ho scoperto nella
                    programmazione web il modo perfetto per costruire realtà digitali eleganti e funzionali. Ora
                    unisco creatività e codice per raccontare storie online.
                </p>
            </div>
            <div class="col-10 col-md-6 mx-auto">
                <img class="shadow-2xl img-fluid mx-auto rounded mb-4"
                    src="{{ asset('storage/images/foto-cv-canva.jpg') }}">
            </div>
        </div>
    </div>

    <div class="container-fluid px-0">
        <div class="row mx-0 md:mx-0 md:p-5 bg-white justify-content-between align-items-center">
            <div class="col-12 col-md-4 align-items-center justify-content-center text-start">
                <h2 class="tangerine display-1 md:my-5 rounded">Presto.it</h2>
                <div id="slideDescription" class="fs-5 bg-white p-4 bodoni text-start animate-description">
                    <p class="mb-3">Testo descrittivo iniziale della prima slide.</p>
                    <p class="fw-bold">Canon EOS 400Digital</p>
                </div>
            </div>

            <div class="col-12 col-md-7 order-2 order-md-1 align-items-start">
                <div id="carouselDescription" class="overflow-hidden carousel slide w-100">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselDescription" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselDescription" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselDescription" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselDescription" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                    </div>

                    <div class="carousel-inner dynamic-height w-100">
                        <div class="carousel-item active h-100">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <img src="storage/images/presto.it/homepage-presto.png" alt="Slide 1"
                                    class="img-fluid h-100 w-auto" style="object-fit: contain;">
                            </div>
                        </div>
                        <div class="carousel-item h-100">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <img src="storage/images/presto.it/card-presto.png" alt="Slide 2"
                                    class="img-fluid h-100 w-auto" style="object-fit: contain;">
                            </div>
                        </div>
                        <div class="carousel-item h-100">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <img src="{{ asset('storage/images/presto.it/form-presto.jpg') }}" alt="Slide 3"
                                    class="img-fluid h-100 w-auto" style="object-fit: contain;">
                            </div>
                        </div>
                        <div class="carousel-item h-100">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <img src="storage/images/presto.it/slide-scarpe.jpg" alt="Slide 4"
                                    class="img-fluid h-100 w-auto" style="object-fit: contain;">
                            </div>
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
        <div class="row mx-0 md:mx-0 md:p-5 bg-white justify-content-between align-items-center">
            <div class="col-12 col-md-5 mt-5 align-items-center justify-content-center text-start">
                <h2 class="tangerine display-1 letter-spacing">Fotografia</h2>
                <p class="fs-5 bg-white md:p-5 bodoni justify-self-start ms-5 w-50">
                    Con la macchina fotografica ho portato quella stessa attenzione nell'immagine: raccontare
                    un’atmosfera, dare forma a un’emozione. Scatto per raccontare storie, che siano luci soffuse,
                    riflessi su una bottiglia o un paesaggio urbano. Per me, la fotografia è il modo più diretto per
                    fermare un momento e dargli voce.
                </p>
                <br>
            </div>

            <div class="col-12 col-md-7 my-2">
                <div id="carouselExample" class="overflow-hidden carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                    </div>

                    <div class="carousel-inner dynamic-height w-100">
                        <div class="carousel-item active h-100">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <img src="storage/images/aboutMe/verticali/scimmia-scuro.JPG" alt="Slide 1"
                                    class="img-fluid h-100 w-auto" style="object-fit: contain;">
                            </div>
                        </div>
                        <div class="carousel-item h-100">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <img src="storage/images/aboutMe/verticali/dettaglio-bottigliera.JPG" alt="Slide 2"
                                    class="img-fluid h-100 w-auto" style="object-fit: contain;">
                            </div>
                        </div>
                        <div class="carousel-item h-100">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <img src="storage/images/aboutMe/verticali/bulldog.JPG" alt="Slide 3"
                                    class="img-fluid h-100 w-auto" style="object-fit: contain;">
                            </div>
                        </div>
                        <div class="carousel-item h-100">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <img src="storage/images/aboutMe/verticali/montelobos.JPG" alt="Slide 4"
                                    class="img-fluid h-100 w-auto" style="object-fit: contain;">
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

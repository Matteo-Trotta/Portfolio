<x-layout>


    <div class=" d-none d-sm-block h-40  md:h-24"></div>

    <section class="bg-white mt-5 py-2 px-4 md:px-10 lg:px-20">
        <div class="flex flex-col-reverse my-5 md:flex-row items-center gap-10 md:gap-20 max-w-7xl mx-auto">

            <!-- Testo -->
            <div class="w-full md:w-1/2 text-center md:text-left animate-fade-in-up border-1 shadow-lg my-2 p-4 rounded">
                <h2 class="text-4xl md:text-5xl font-serif text-gray-800 mb-4">Hello World!</h2>
           
                <p class="text-lg text-black space-y-4 bodoni">
                    Ciao, sono Matteo Trotta – sviluppatore web freelance con sede a Roma. Dopo un’esperienza
                    pluriennale in ambito operativo e gestionale, oggi mi dedico con passione alla creazione di siti web
                    performanti, responsive e orientati all’esperienza utente. Utilizzo HTML, CSS, JavaScript
                    (Bootstrap, Tailwind), PHP, MySQL e Laravel, e seguo ogni progetto con cura artigianale: dalla
                    progettazione al deploy su server LEMP.

                    Accanto allo sviluppo, sto approfondendo le logiche SEO per aiutare i miei clienti a ottenere
                    maggiore visibilità online, rendendo i siti non solo belli e funzionali, ma anche trovabili.
                    Utilizzo WordPress nei progetti più adatti alla gestione autonoma dei contenuti, imparando a
                    personalizzarlo a fondo per offrire soluzioni flessibili e su misura. Allo stesso tempo, mi sto
                    formando anche sulle pratiche DevOps, per comprendere e gestire in modo più solido l’intero ciclo di
                    vita di un’applicazione: dall’ambiente di sviluppo alla messa in produzione, fino al monitoraggio.

                    Credo nel design chiaro, nella funzionalità e nel codice pulito, perché ogni sito web deve essere un
                    percorso guidato, semplice da usare e pensato per convertire.
                </p>
            </div>

            <!-- Immagine -->
            <div class="w-full md:w-1/2 flex justify-center md:justify-end animate-fade-in ">
                <img src="{{ asset('storage/images/foto-cv-canva.jpg') }}" alt="foto di Matteo Trotta"
                    class="rounded-lg shadow-xl w-full max-w-sm p-3 border-2">
            </div>
        </div>
    </section>

    <style>
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 1s ease-out both;
        }

        .animate-fade-in {
            animation: fadeInUp 1.2s ease-out both;
        }
    </style>


    <div class="container-fluid px-0">
        <div class="row mx-0 md:mx-0 md:p-5 bg-white justify-content-between align-items-center">

            <div class="col-12 col-md-4 align-items-center justify-content-center text-center">
                <span class="lead bodoni ">scorri le slide per vedere i progetti</span>
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


                <div class="d-inline-block">

                    <h2 class="display-1">

                        <a href="" class="md:text-transparent hover:text-black" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="Guarda le mie foto"
                            style="text-shadow: 1px 1px 4px #000000;">
                            Fotografia
                        </a>
                    </h2>
                </div>




                <p class="fs-5 bg-white md:p-5 bodoni justify-self-start ms-5 w-50">
                    Con la macchina fotografica ho portato quella stessa attenzione nell'immagine: raccontare
                    un’atmosfera, dare forma a un’emozione. Scatto per raccontare storie, che siano luci soffuse,
                    riflessi su una bottiglia o un paesaggio urbano. Per me, la fotografia è il modo più diretto per
                    fermare un momento e dargli voce.
                </p>

                <a target="_blank" class="text-decoration underline text-blue-500 fs-4"
                    href="https://www.flickr.com/photos/202041132@N05/">profilo Flickr</a>

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

    {{-- <x-contatti /> --}}

</x-layout>

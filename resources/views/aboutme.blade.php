<x-layout>


    <div class=" d-none d-sm-block h-40  md:h-24"></div>

    <section id="about-me" class="bg-gray-50 py-16 px-4 md:px-8 lg:px-16">
        <div class="max-w-4xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8 items-center">

            <!-- Foto -->
            <div class="col-span-1 flex justify-center lg:justify-start  animate-fade-in-up">
                <img src="{{ asset('storage/images/foto-cv-canva.jpg') }}" alt="Foto di Matteo Trotta"
                    class="w-48 h-48 rounded-full border-4 border-indigo-600 shadow-lg object-cover">
            </div>

            <!-- Testi -->
            <div class="col-span-2 space-y-8">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800  animate-fade-in-up">
                    Ciao, sono <span class="text-indigo-600">Matteo Trotta</span>
                </h2>
                <p class="text-lg md:text-xl text-gray-700 animate-fade-in ">
                    Sviluppatore web freelance a Roma, trasformo le tue idee in
                    <span class="font-semibold text-gray-900">siti web efficaci, eleganti e facili da gestire</span>.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-4 animate-fade-in">
                        <h3 class="text-2xl font-semibold text-gray-800 p-2 bg-slate-500 bg-opacity-20 rounded-lg">🎯 Le mie competenze</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li><span class="font-medium">Realizzazione su misura</span>: HTML, CSS, JS, PHP, MySQL,
                                Laravel.</li>
                            <li><span class="font-medium">Performance veloci</span>: siti rapidi su desktop e mobile.
                            </li>
                            <li><span class="font-medium">SEO mirata</span>: per farti trovare online.</li>
                            <li><span class="font-medium">WordPress custom</span>: autonomia e flessibilità.</li>
                            <li><span class="font-medium">Dal deploy al server</span>: gestione completa su LEMP.</li>
                        </ul>
                    </div>
                    <div class="space-y-4 animate-fade-in-up">
                        <h3 class="p-2 bg-slate-500 bg-opacity-20 rounded-lg text-2xl font-semibold text-gray-800 animate-fade-in-right">💼 Ideale per</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li><span class="font-medium">Siti professionali senza complicazioni</span>.</li>
                            <li><span class="font-medium">Visibilità online e semplicità di gestione</span>.</li>
                            <li><span class="font-medium">Design pulito e attenzione ai dettagli</span>.</li>
                        </ul>
                    </div>
                </div>

                <div class="space-y-4">
                    <h3 class="p-2 bg-slate-500 bg-opacity-20 rounded-lg text-2xl  font-semibold text-gray-800">✨ Il mio approccio</h3>
                    <p class="text-gray-700">Precisione sartoriale: ogni progetto ha cura artigianale.</p>
                    <p class="text-gray-700">Design intuitivo e impattante.</p>
                    <p class="text-gray-700">Orientato alla conversione: più clienti dal web.</p>
                </div>

                <div class="space-y-4">
                    <p class="p-2 bg-slate-500 bg-opacity-20 rounded-lg text-xl text-gray-800 mb-4">📈 Il valore che porto:</p>
                    <ul class="list-disc list-inside text-gray-700 space-y-2 mb-6">
                        <li>Siti affidabili e sempre veloci.</li>
                        <li>Soluzioni per generare contatti o vendite.</li>
                        <li>Supporto continuo: assistenza e scalabilità.</li>
                    </ul>
                    <a class="d-lg-block d-none btn btn-lg transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 my-4 fs-3"
                        aria-label="Chat on WhatsApp" href="https://wa.me/393392222022">
                        <img alt="Chat on WhatsApp"
                            src="{{ asset('storage/images/ChatOnWhatsAppButton/WhatsAppButtonGreenMedium.svg') }}" />
                    </a>
                </div>
            </div>
        </div>
    </section>



    {{-- <div class="container-fluid px-0">
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
    </div> --}}

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

   

</x-layout>

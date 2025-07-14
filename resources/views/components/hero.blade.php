<div class="container-fluid p-0 mx-0 heroContainer ">

    <div class="row mx-0 text-center justify-content-center align-items-center">

        <div
            class="col-12 position-relative d-flex align-items-center justify-content-center vh-100 overflow-hidden px-0">


            {{-- video mostrato solamente su dispositivi lg --}}

            <video autoplay muted loop playsinline preload="metadata" aria-hidden="true"
                src="{{ asset('storage/video/video-hero.webm') }}" id="heroVideo"
                class="d-none d-lg-block position-absolute object-fit-cover">
            </video>

            {{-- <img src="{{ asset('storage/images/logo-portfolio.png') }}" alt="Sfondo digitale mobile"
                class="position-absolute  d-block d-lg-none " /> --}}



            <div class="position-relative text-center text-white bg-gray-500 bg-opacity-20 p-3 rounded">

                <h1 class="display-6 text-yellow-500 letter-spacing fw-bold text-uppercase text-shadow titolo bodoni">
                    Creazione Siti Web a Roma</h1>
                <h2 class="display-5 fw-bold text-uppercase text-shadow titolo">Trasforma le tue idee in esperienze
                    digitali
                </h2>

                <p class="lead  fs-3 mt-3 text-shadow bodoni letter-spacing">Siti web performanti e su misura per il tuo
                    business.
                </p>



            </div>


        </div>
    </div>



</div>

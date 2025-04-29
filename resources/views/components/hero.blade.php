<div class="container-fluid p-0 mx-0 heroContainer ">

    <div class="row mx-0 text-center justify-content-center align-items-center">

        <div class="col-12 position-relative d-flex align-items-center justify-content-center vh-100 overflow-hidden px-0">





            {{-- video mostrato solamente su dispositivi lg --}}
            <video aria-hidden="true" alt="video sfondo sezione" autoplay loop muted playsinline src="{{ asset('storage/video/video-hero.mp4') }}" id="heroVideo"
                class=" d-none d-lg-block position-absolute">
            </video>


            <div class="position-relative text-center text-white z-1">
                <h1 class="display-6 text-yellow-500 letter-spacing fw-bold text-uppercase text-shadow titolo bodoni">
                    Creazione Siti Web a Roma</h1>
                <h2 class="display-4 fw-bold text-uppercase text-shadow titolo">Trasforma le tue idee in esperienze
                    digitali
                </h2>

                <p class="lead  fs-3 mt-3 text-shadow bodoni letter-spacing">Siti web performanti e su misura per il tuo
                    business.
                </p>

                {{-- <a href="#scopridipiù" id="scrollButton"
                    class="btn btn-lg bg-yellow-500 transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 my-4">
                    <!-- Ricorda: applica tailwind con !important per forzare il conflitto con bootstrap -->
                    Scopri di più
                </a> --}}
                
                {{-- BOTTONE SMARTPHONE E DEKSTOP COMPORTAMENTO DIFFERENTE --}}
                <script>
                    function updateLink() {
                        const scrollButton = document.getElementById('scrollButton');

                        if (window.innerWidth <= 768) {

                            scrollButton.href = '{{ route('services') }}';
                        } else {

                            scrollButton.href = '#scopridipiù';
                        }
                    }


                    window.addEventListener('load', updateLink);
                    window.addEventListener('resize', updateLink);
                </script>
            </div>


        </div>
    </div>



</div>

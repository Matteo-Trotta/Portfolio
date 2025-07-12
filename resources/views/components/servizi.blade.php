{{-- video tech e titolo --}}


{{-- cards di bootstrap --}}
<div class="container-fluid">

    <x-cards />

</div>



{{-- animazione tavola bounceout  --}}
<div class="container-fluid bianco my-0  p-0">
    <div class="row m-0 align-items-center justify-content-end">

        <div class="col-md-5 my-5">

            <h2 class="tangerine-title fs-1 text-stone-900 avraiUnaMarcia">Avrai una marcia in più
            </h2>

            <h3 class="tangerine-title p-0 text-stone-800 fs-1 fw-normal">Siti web a costi contenuti <p
                    class="effettoGrafico">di effetto
                    grafico</p>
            </h3>

            <p class="my-5 fs-3 tangerine-regular text-stone-900 paragrafoAvraiUnaMarcia ">Scegliere uno <span
                    class=" evidenziatore rounded p-1 italic bodoni fw-bold">sviluppo custom</span> con PHP e Laravel
                significa liberare il potenziale digitale della tua attività. A differenza dei template standard, questo
                approccio ti offre un <span class=" evidenziatore rounded p-1 italic bodoni fw-bold">sito web su
                    misura</span>, come un abito sartoriale: ogni pixel, ogni funzionalità è pensata specificamente per
                te. La <span class=" evidenziatore rounded p-1 italic bodoni fw-bold">scalabilità del codice</span>
                garantisce che il tuo sito cresca insieme alla tua impresa, <span
                    class=" evidenziatore rounded p-1 italic bodoni fw-bold">adattandosi con agilità alle tue esigenze
                    future</span> di business, senza compromessi e con la massima flessibilità tecnica.Laravel
                implementa inoltre <span class=" evidenziatore rounded p-1 italic bodoni fw-bold">protocolli di
                    sicurezza avanzati</span> che proteggono il tuo spazio digitale da potenziali vulnerabilità,
                garantendo un'esperienza online robusta e affidabile.</p>

        </div>


        <div class="col-md-6 ms-5 px-0 align-items-center justify-content-end">

            <div class="lg:ms-5">

                <img class="belloEimmediato d-none d-md-block img-fluid" class="img-fluid"
                    src="{{ asset('storage/images/tolkien-animazione.png') }}" alt="Immagine animata con montagne">

            </div>

        </div>
    </div>
</div>

{{-- animazione smartphone ease-in --}}
<div class="container-fluid bianco p-4">
    <div class="row mx-0 my-5 align-items-center justify-content-center">
        <div class="col-lg-5 justify-content-center align-items-center px-0 ">


            <picture class="">
                <img class="img-fluid smartphone " class="img-fluid"
                    src="{{ asset('storage/images/mockup-smartphone-portfolio.png') }}" alt="immagine smartphone">
            </picture>


        </div>


        <div class="col-lg-5 p-0 mx-0 text-center sitiwebresponsive">

            <div class="my-2">

                <h2 class=" bodoni fw-semibold fs-1 fw-normal text-black my-1 ">
                    Siti Web Responsive
                </h2>

                <h3 class=" fs-3 letter.spacing underline tangerine-regular designsumisura text-black">
                    Design su misura per aziende, ristoratori e professionisti
                </h3>

                <p class="my-5 bodoni fs-3 fw-4">
                    Scegliere un sito web responsive significa creare una <span class="evidenziatore rounded">presenza
                        digitale </span>che risponde perfettamente a
                    <span class="evidenziatore rounded">ogni dispositivo</span>, ottimizzando
                    l’esperienza utente su smartphone, tablet e desktop. Offro <span
                        class="evidenziatore rounded">soluzioni personalizzate</span>, progettate per soddisfare le
                    specifiche esigenze di ristoranti, aziende, negozi e
                    liberi professionisti. Ogni sito è pensato per combinare <span class="evidenziatore rounded">design
                        moderno</span>, prestazioni elevate e
                    funzionalità pratiche, garantendo un'interfaccia user-friendly che cattura l’attenzione degli utenti
                    e li invita ad esplorare il contenuto.

                </p>

                <div class="">
                    <a href="{{ route('preventivo') }}">

                        <button class="btn btn-warning shadow-2xl bottone p-3" type="submit">Preventivo Web</button>
                    </a>


                </div>
            </div>

        </div>
    </div>
</div>

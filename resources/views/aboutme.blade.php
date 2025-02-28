<x-layout>


    <div class="container">
        <div class="row justify-content-center align-items-center">

            <div class="col-12 text-center my-2">


                <h2 class="tangerine-regular text-black">

                    Matteo Trotta

                </h2>

            </div>

        </div>
    </div>


    <div class="container my-2">
        <div class="row justify-content-center align-items-center">
            <div class="col-10 text-center">

                <h1 class="fs-2 italic">

                    Costruzione siti web e Mobile

                </h1>
                <hr>

            </div>
        </div>
    </div>

    <div class="container-fluid m-0 p-0">
        <div class="row  m-0 align-items-center text-center">

            {{-- sinistra --}}
            <div class="col-4 m-0 p-0 d-flex flex-column h-100">
                <h2 class="fs-1 italic bodoni">Barman</h2>
                <div class="border-3 boder-black p-1">

                    <p class="fs-3 playfair-display">

                        Con una solida esperienza nel bartending, ho sviluppato una forte attenzione al cliente e
                        competenze approfondite nel settore Food & Beverage. L'esperienza mi ha permesso di affinare
                        precisione e gestione dell'ambiente lavorativo, collaborando efficacemente in squadra e
                        rispettando gli standard aziendali per garantire un servizio ottimale.
                        Ho imparato l'importanza della dedizione, della cura dei dettagli e della capacità di lavorare
                        sotto pressione. Queste competenze, seppur acquisite in un contesto diverso, sono altamente
                        trasferibili e mi rendono entusiasta di applicarle nel campo dello sviluppo web.

                    </p>


                </div>

                {{-- LOGHI ESPERIENZA BARMAN --}}
                <div>
                    <h2 class="fs-1 bodoni my-5">
                        Esperienze passate
                    </h2>

                    <hr>
                </div>
                <div class="d-flex flex-row ustify-content-center align-items-center text-center m-0 my-3 p-0">

                    <x-logos />

                </div>
            </div>


            {{-- centro --}}
            <div class="col-4 m-0 p-0">

            </div>

            {{-- destra --}}

            <div class="col-4 m-0 p-0 h-100">
                <h2 class="fs-1 italic bodoni">


                    Programmatore


                </h2>

                <div>

                    <p class="fs-3 playfair-display">

                        Grazie alla mia esperienza con HTML, CSS e JavaScript, posso realizzare interfacce web moderne e
                        responsive, garantendo un'esperienza utente fluida su qualsiasi dispositivo.

                        Utilizzando PHP e Laravel, sviluppo applicazioni web dinamiche e scalabili, integrando
                        funzionalità avanzate come autenticazione, gestione dei dati e interazione con database.

                        Con MySQL, organizzo e gestisco i dati in modo efficiente, assicurando prestazioni ottimali e
                        sicurezza per qualsiasi tipo di progetto.

                    </p>

                </div>

                <div class="d-flex flex-row ustify-content-center align-items-center text-center m-0 my-3 p-0">

                    <div class="w-25 mx-1">
                        <img src="https://www.pngitem.com/pimgs/m/206-2069813_file-css-and-html-css-logo-svg-hd.png"
                            alt="">
                    </div>



                    <div class="w-25 mx-1">
                        <img class="rounded" src="https://vetores.org/wp-content/uploads/javascript.png" alt="">
                    </div>

                    <div class="w-25 mx-1">
                        <img class="rounded"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1280px-PHP-logo.svg.png"
                            alt="">
                    </div>

                    <div class="w-25 mx-1">
                        <img class="rounded" src="https://logowik.com/content/uploads/images/laravel8530.jpg"
                            alt="">
                    </div>


                    <div class="w-25 mx-1">
                        <img class="rounded" src="https://www.svgrepo.com/show/303251/mysql-logo.svg" alt="">
                    </div>




                </div>

                <div>
                    <h2 class="fs-1 bodoni my-5">
                        Cosa posso realizzare
                    </h2>

                    <hr>


                    <ul class="fs-4 p-5">

                        <li>Siti web vetrina e landing page personalizzate</li>
                        <li>Blog e piattaforme editoriali</li>
                        <li>Gestionali e applicazioni web interattive</li>
                        <li>E-commerce con sistemi di pagamento integrati</li>
                        <li>Menu digitali per ristoranti consultabili via QR code</li>

                    </ul>
                </div>

            </div>
        </div>

        {{-- ROW DELLO SWIPER --}}
        <div class="row justify-content-center align-items-center">


            <div class="col-6 m-0 p-0 d-block d:lg-block">

                <x-swiper class="my-5" />

            </div>



        </div>
        {{-- FINE ROW SWIPER --}}
    </div>







</x-layout>

<x-layout>
    <div class="h-20  md:h-24"></div>


    {{-- MENU QR CODE --}}
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-12 text-center text-white">

                <h1 class="display-1 bodoni">Menu Qr code</h1>

            </div>
        </div>


        <div class="row g-4">

            <div class="col-md-6 mt-5">


                <div class="card h-100 shadow border-0 rounded-4">
                    <div class="card h-100 shadow border-0 rounded-4">
                        <div class="card-body text-center">
                            <h3 class="card-title mb-3">Menu Statico (React)</h3>
                            <ul class="list-unstyled mb-4">
                                <li>✅ Design responsive e moderno</li>
                                <li>✅ QR code incluso</li>
                                <li>✅ Hosting incluso (1 anno)</li>
                                <li>❌ Nessuna modifica autonoma</li>
                            </ul>
                            <p class=" display-6 mb-3">a partire da
                            <p class="fw-bold display-6 mb-3">280 €</p>
                            </p>
                            <button href="" id=""
                                class="btn btn-primary scrollButtonPreventivo rounded-pill px-4">Richiedi
                                Preventivo</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-6 mt-5">

                <div class="card h-100 shadow border-0 rounded-4">
                    <div class="card-body text-center">
                        <h3 class="card-title mb-3">Menu Gestibile (Laravel)</h3>
                        <ul class="list-unstyled mb-4">
                            <li>✅ Design responsive</li>
                            <li>✅ QR code incluso</li>
                            <li>✅ Area riservata per modifiche</li>
                            <li>✅ Hosting incluso (1 anno)</li>
                        </ul>
                        <p class=" display-6 mb-3">a partire da
                        <p class="fw-bold display-6 mb-3">490 €</p>
                        </p>
                        <button href="" id="scrollButtonPreventivo"
                            class="btn btn-primary scrollButtonPreventivo rounded-pill px-4">Richiedi
                            Preventivo</button>
                    </div>
                </div>

            </div>

        </div>

        <div class="row mt-5 justify-content-center">
            <div class="col-md-6 text-center">
                <h4 class="mb-4 text-white display-4 text-center">Servizi Extra</h4>
                <ul class="list-group list-group-flush rounded-4">
                    <li class="list-group-item">Dominio personalizzato: 30€/anno</li>
                    <li class="list-group-item">Hosting e manutenzione dopo 1° anno: 100€/anno</li>
                    <li class="list-group-item">QR code personalizzato stampabile: 30€</li>
                    <li class="list-group-item">Supporto tecnico mensile: da 10€/mese</li>
                </ul>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12 text-center">
                <a href="{{ route('preventivo') }}" class="btn btn-warning btn-lg rounded-pill shadow-lg px-5">
                    Chiedi un Preventivo Personalizzato
                </a>
            </div>
        </div>
    </div>

    <hr class="border-5 border-white mt-5">

    {{-- LANDING PAGE --}}
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class=" display-4 fw-bold text-white">Landing Page Professionale</h2>
                <p class="lead  text-white italic">Soluzioni su misura per presentare al meglio la tua attività</p>
            </div>
        </div>

        <div class="row g-4">
            <!-- Landing Essenziale -->
            <div class="col-md-6">
                <div class="card h-100 shadow border-0 rounded-4">
                    <div class="card-body text-center">
                        <h3 class="card-title mb-3 ">Landing Essenziale</h3>
                        <ul class="list-unstyled mb-4 ">
                            <li>✅ Design moderno e responsive</li>
                            <li>✅ Sezione contatti + mappa</li>
                            <li>✅ Hosting incluso (1 anno)</li>
                            <li>❌ Nessuna gestione autonoma dei contenuti</li>
                        </ul>
                        <p class=" display-6 mb-3">a partire da
                        <p class="fw-bold display-6 mb-3">250 €</p>
                        </p>
                        <button href="" id="scrollButtonPreventivo"
                            class="btn btn-primary scrollButtonPreventivo rounded-pill px-4">Richiedi
                            Preventivo</button>
                    </div>
                </div>
            </div>

            <!-- Landing Personalizzabile -->
            <div class="col-md-6 ">
                <div class="card h-100 shadow border-0 rounded-4 ">
                    <div class="card-body text-center">
                        <h3 class="card-title mb-3">Landing Personalizzabile</h3>
                        <ul class="list-unstyled  mb-4 ">
                            <li>✅ Tutto incluso nella versione base</li>
                            <li>✅ Sezioni personalizzate (servizi, gallery, recensioni)</li>
                            <li>✅ Gestione contenuti semplice (Laravel CMS)</li>
                            <li>✅ Hosting incluso (1 anno)</li>
                        </ul>
                        <p class=" display-6 mb-3">a partire da
                        <p class="fw-bold display-6 mb-3">480 €</p>
                        </p>
                        <button href="" id="scrollButtonPreventivo"
                            class="btn btn-primary scrollButtonPreventivo rounded-pill px-4">Richiedi
                            Preventivo</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 justify-content-center">
            <div class="col-md-6 ">
                <h4 class="mb-4 text-white display-4 text-center">Servizi Extra</h4>
                <ul class="list-group list-group-flush rounded-4 text-center">
                    <li class="list-group-item">Dominio personalizzato: 20–30€/anno</li>
                    <li class="list-group-item">Hosting e manutenzione dopo 1° anno: 100€/anno</li>
                    <li class="list-group-item">Integrazione Google Analytics / Meta Pixel: 30€</li>
                    <li class="list-group-item">Form contatti collegato a email: 20€</li>
                </ul>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12 text-center">
                <a href="{{ route('preventivo') }}" class="btn btn-warning btn-lg rounded-pill shadow-lg px-5">
                    Chiedi un Preventivo Personalizzato
                </a>
            </div>
        </div>
    </div>

    <hr class="border-5 border-white mt-5">

    {{-- SITO WEB --}}
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-4 fw-bold text-white">Siti Web Professionali</h2>
                <p class="lead italic text-white">Realizzati su misura per rappresentare al meglio la tua attività
                    online</p>
            </div>
        </div>

        <div class="row g-4">
            <!-- Sito Vetrina Base -->
            <div class="col-md-6">
                <div class="card h-100 border-0 rounded-4 shadow-sm">
                    <div class="card-body text-center">
                        <h3 class="h4 fw-semibold mb-3">Sito Vetrina Base</h3>
                        <ul class="list-unstyled mb-4">
                            <li>✅ Home, chi siamo, servizi, contatti</li>
                            <li>✅ Design personalizzato e mobile-first</li>
                            <li>✅ Hosting incluso (1 anno)</li>
                            <li>❌ Nessuna gestione autonoma dei contenuti</li>
                        </ul>
                        <p class=" display-6 mb-3">a partire da
                            <p class="fw-bold display-6 mb-3">550 €</p>
                            </p>
                        <a href="{{ route('preventivo') }}" class="btn btn-primary rounded-pill px-4">Richiedi
                            Preventivo</a>
                    </div>
                </div>
            </div>

            <!-- Sito Avanzato Personalizzabile -->
            <div class="col-md-6">
                <div class="card h-100 border-0 rounded-4 shadow-sm">
                    <div class="card-body text-center">
                        <h3 class="h4 fw-semibold mb-3">Sito Avanzato Personalizzabile</h3>
                        <ul class="list-unstyled mb-4">
                            <li>✅ Tutte le pagine del pacchetto base</li>
                            <li>✅ Aggiunta sezione portfolio, blog o gallery</li>
                            <li>✅ Ottimizzazione SEO on-page</li>
                            <li>✅ Hosting incluso (1 anno)</li>
                        </ul>
                        <p class=" display-6 mb-3">a partire da
                            <p class="fw-bold display-6 mb-3">850 €</p>
                            </p>
                        <a href="{{ route('preventivo') }}" class="btn btn-primary rounded-pill px-4">Richiedi
                            Preventivo</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabella di confronto -->
        <div class="row">
            <div class="col-12">
                <h4 class="mt-5 mb-3 text-white text-center display-5">Confronto funzionalità</h4>
                <div class="table-responsive">
                    <table class="table table-bordered text-center align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Funzionalità</th>
                                <th>Vetrina Base</th>
                                <th>Avanzato</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Design mobile-first</td>
                                <td>✅</td>
                                <td>✅</td>
                            </tr>
                            <tr>
                                <td>Sezioni standard (home, contatti, servizi)</td>
                                <td>✅</td>
                                <td>✅</td>
                            </tr>
                            <tr>
                                <td>Sezioni avanzate (portfolio, blog...)</td>
                                <td>❌</td>
                                <td>✅</td>
                            </tr>
                            <tr>
                                <td>SEO on-page</td>
                                <td>❌</td>
                                <td>✅</td>
                            </tr>
                            <tr>
                                <td>Gestione autonoma contenuti</td>
                                <td>❌</td>
                                <td>❌</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row mt-5 justify-content-center">
            <div class="col-md-6">
                <h4 class="mb-4 text-white display-4 text-center">Servizi Extra</h4>
                <ul class="list-group list-group-flush rounded-4">
                    <li class="list-group-item">Dominio personalizzato: 20–30€/anno</li>
                    <li class="list-group-item">Hosting e manutenzione dopo 1° anno: 100€/anno</li>
                    <li class="list-group-item">Ottimizzazione immagini e prestazioni: 40€</li>
                    <li class="list-group-item">Analisi e report SEO iniziale: 50€</li>
                </ul>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12 text-center">
                <a href="{{ route('preventivo') }}" class="btn btn-warning btn-lg rounded-pill shadow px-5">
                    Chiedi un Preventivo Personalizzato
                </a>
            </div>
        </div>
    </div>

    <hr class="border-5 border-white mt-5">

    {{-- SERVIZI EXTRA --}}
    <div class="row mt-5 justify-content-center">

        <div class="col-md-6 text-center mb-4 text-white display-4">

            <h2 class="display-4 fw-bold fade-in">Servizi Visivi & Stampa</h2>
            <p class="lead italic ">Un tocco professionale per la tua immagine e la tua comunicazione</p>
        </div>
    </div>

    <div class="container">
    <div class="row g-4 justify-content-center g-4 mb-5 ">

        <div class="col-md-6">
            <div class="card border-0 shadow-sm rounded-4 hover-shadow transition h-100">
                <div class="card-body text-center">
                    <h3 class="h4 mb-3">Servizio Fotografico</h3>
                    <p class="mb-3 lead">Immagini professionali del tuo locale, dei piatti o dei prodotti per uso web,
                        social e stampa.</p>
                    <ul class="list-unstyled mb-4">
                        <li>📷 Scatti in alta definizione</li>
                        <li>🖼 Editing incluso</li>
                        <li>📦 Consegna in formato digitale</li>
                    </ul>
                    <p class=" display-6 mb-3">a partire da
                        <p class="fw-bold display-6 mb-3">150 €</p>
                        </p>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card border-0 shadow-sm rounded-4 hover-shadow transition h-100">
                <div class="card-body text-center">
                    <h3 class="h4 mb-3">Stampa QR Code & Biglietti da visita</h3>
                    <p class="mb-3 lead">Materiale stampato per completare la tua offerta digitale con elementi fisici
                        eleganti e funzionali.</p>
                    <ul class="list-unstyled mb-4">
                        <li>🔲 QR Code su cartoncino rigido</li>
                        <li>🎫 Biglietti da visita personalizzati</li>
                        <li>🖨️ Grafica inclusa</li>
                    </ul>
                    <p class=" display-6 mb-3">a partire da
                        <p class="fw-bold display-6 mb-3">50 €</p>
                        </p>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

    <x-contatti />

</x-layout>

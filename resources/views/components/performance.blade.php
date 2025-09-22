<section id="performance" class="py-5 bg-light">
    <div class="container">
        <h2 class="display-4 text-center mb-4 bodoni appearToYperformance text-shadow ">Performance del sito</h2>

        <p class="lead bodoni my-1 text-center fs-4">

            <a class="text-decoration underline text-black"
                href="https://developer.chrome.com/docs/lighthouse/overview?hl=it">Lighthouse</a>

            &

            <a class="text-decoration underline text-black" href="https://pagespeed.web.dev/">PageSpeedInsights</a>
            sono strumenti di Google che analizzano la qualità di un sito web in termini di Prestazioni, Accessibilità,
            SEO e Best Practice. Fornisce un punteggio chiaro e suggerimenti concreti per migliorare l’esperienza utente
            e la 'velocità' del sito, aspetti fondamentali sia per il posizionamento sui motori di ricerca che per la
            soddisfazione dei visitatori web accessibility.


            <hr>


        <p class="lead bodoni my-1 text-center fs-4"> Rientra tra le <span class="fw-bold">Pratiche Fondamentali</span>
            per garantire che tutti gli utenti, comprese le persone con disabilità
            visive, uditive, motorie o cognitive, possano navigare, comprendere e interagire con un sito</p> <br>
        <p class="lead bodoni my-1 text-end fs-5 italic">*di seguito l'analisi di questo sito web</p>
        </p>
        <div class="row gx-4 align-items-center mx-0 ">

            {{-- screenshot di lighthouse --}}
            <div class="col-md-6 mb-4 mb-md-0">
                <div class=" shadow-sm rounded">
                    <img src="{{ asset('storage/images/CoreWebVitals.png') }}" alt="Screenshot Lighthouse Performance"
                        class="img-fluid rounded appearToYperformanceRank">
                </div>
            </div>


            <div class="col-md-6">
                <h3 class="h4 mb-3">Punteggio Lighthouse | Page Speed insights</h3>
                <div class="d-flex align-items-baseline mb-3">
                    <span class="display-3 fw-bold text-success me-2">98</span>
                    <span class="fs-5 text-muted">/ 100</span>
                </div>

                <!-- Descrizioni delle categorie -->
                <ul class="list-group list-group-flush mb-3 appearToYperformanceRank">
                    <li class="list-group-item px-0">
                        <strong><a class="text-red-500"
                                href="https://developer.chrome.com/docs/lighthouse/performance/performance-scoring?hl=en"
                                target="_blank">Performance</a>:</strong>
                        misura la velocità di caricamento, interattività e stabilità visiva del sito.
                    </li>
                    <li class="list-group-item px-0  ">
                        <strong><a class="text-green-700"
                                href="https://developer.chrome.com/docs/lighthouse/accessibility/scoring?hl=it"
                                target="_blank">Accessibility</a>:</strong>
                        verifica che tutti gli utenti, anche con disabilità, possano fruire dei contenuti.
                    </li>
                    <li class="list-group-item px-0  ">
                        <strong><a class="text-yellow-500"
                                href="https://developers.google.com/web/tools/lighthouse/best-practices"
                                target="_blank">Best Practices</a>:</strong>
                        controlla sicurezza, uso corretto delle API e consigli per il web moderno.
                    </li>
                    <li class="list-group-item px-0  ">
                        <strong><a class="text-blue-600" href="https://developers.google.com/web/tools/lighthouse/seo"
                                target="_blank">SEO</a>:</strong>
                        analizza i fattori on-page che aiutano il posizionamento nei motori di ricerca.
                    </li>
                    <li class="list-group-item px-0 ">
                        <strong><a href="https://developers.google.com/web/tools/lighthouse/pwa"
                                target="_blank">PWA</a>:</strong>
                        verifica l’implementazione delle Progressive Web App per esperienza app-like.
                    </li>
                </ul>

                <p class="mt-2 text-muted">
                    Test eseguito su <strong>Desktop</strong> con Lighthouse 10.0 & PageSpeedInsights<br>
                    Ottimizzazioni principali: WebM per video hero, layout fixed, cache headers, lazy loading.
                </p>
                <a href="https://pagespeed.web.dev/analysis/https-sitiwebromatrottamatteo-com/yh4v772rmf?form_factor=desktop"
                    class="btn btn-sm btn-outline-primary mt-2 appearToYperformanceRank">
                    Vedi report completo
                </a>
            </div>

        </div>
    </div>
</section>

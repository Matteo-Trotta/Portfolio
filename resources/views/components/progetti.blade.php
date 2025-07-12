<div class="container my-5">


    <div class="row text-center align-items-center  my-5">
        <h3 class="tangerine-title text-white italic">i miei progetti</h3>
    </div>


    <div class="row justify-content-evenly align-items-center mt-5">
        <div class=" col-10 col-md-4 my-2">


            <div class="card shadow-lg border-blue-500 appearToY" style="height: 600px">
                <div class="img-container">

                    <img class="img-fluid rounded border-4"
                        src="{{ asset('storage/images/screenshot-progetti/cantina-sala.png') }}" class="card-img-top"
                        alt="foto di un progetto realizzato per Cantina Sala">

                </div>
                
                <div class="card-body overflow-scroll text-center align-items-center">
                    <h5 class="card-title fs-1 bodoni">Cantina Sala</h5>
                    <hr>
                    <p class="card-text playfair-display fs-4">Un sito elegante e responsive che racconta la tradizione
                        centenaria della cantina e ne valorizza l’identità territoriale. Gli utenti esplorano un
                        catalogo interattivo di etichette e annate, prenotano visite e degustazioni e vivono
                        un’esperienza immersiva tra filari e botti.</p>

                    <a href="{{ 'https://wordpress.sitiwebromatrottamatteo.com/' }}"
                        class="btn btn-warning shadow-2xl p-3 my-3  hover:scale-110 hover:bg-indigo-500  hover:text-white">Visita
                        la cantina</a>
                </div>

            </div>

        </div>

        <div class=" col-10 col-md-4 my-2">

            <div class="card shadow-lg border-blue-500 appearToY " style="height: 600px">
                <div class="img-container">

                    <img class="img-fluid rounded border-4"
                        src="{{ asset('storage/images/screenshot-progetti/blog-marketing.png') }}" class="card-img-top"
                        alt="foto di un progetto realizzato per un blog di web marketing">

                </div>
                <div class="card-body overflow-scroll text-center align-items-center">
                    <h5 class="card-title fs-1 bodoni">Blog Marketing</h5>
                    <hr>
                    <p class="card-text playfair-display fs-4">Un blog di web marketing ricco di contenuti strategici e
                        strumenti pratici. Guide approfondite su SEO, social media e campagne pubblicitarie per
                        potenziare la tua visibilità online e raggiungere nuovi clienti senza sforzi.</p>

                    <a href="{{ 'https://blog.sitiwebromatrottamatteo.com/' }}"
                        class="btn btn-warning shadow-2xl p-3 my-3  hover:scale-110 hover:bg-indigo-500  hover:text-white">Visita
                        il blog</a>
                </div>

            </div>

        </div>

        <div class="col-10 col-md-4 my-2">
            <div class="card shadow-lg border-blue-500 appearToY" style="height: 600px;">
                
                <!-- Immagine ottimizzata -->
                <div style="height: 250px; overflow: hidden;">
                    <img 
                        src="{{ asset('storage/images/screenshot-progetti/tipo.png') }}" 
                        alt="foto di un progetto realizzato per Cantina Sala" 
                        class="img-fluid w-100 h-100 rounded border-4" 
                        style="object-fit: cover;">
                </div>
                
                <!-- Corpo della card -->
                <div class="card-body overflow-auto text-center d-flex flex-column align-items-center">
                    <h5 class="card-title fs-1 bodoni">
                        Cocktail Bar 'TIPO'
                        <p class="fs-5 text-slate-700 mb-2">coming soon...</p>
                    </h5>
                    <hr class="w-100">
                    <p class="card-text playfair-display fs-4 flex-grow-1">
                        TIPO è un Ristorante dal design accogliente e raffinato, dove ogni drink è frutto di mixologie creative e ingredienti selezionati. Il menu propone signature cocktail e creazioni stagionali, accompagnati da piccole degustazioni e serate a tema, per vivere momenti conviviali in un’atmosfera elegante e contemporanea.
                    </p>
                    <a 
                        href="https://cocktailbartipo.sitiwebromatrottamatteo.com/"
                        class="btn btn-warning shadow-2xl p-3 my-3 hover:scale-110 hover:bg-indigo-500 hover:text-white"
                        target="_blank" 
                        rel="noopener noreferrer">
                        Visita
                    </a>
                </div>
        
            </div>
        </div>
        

    </div>
</div>

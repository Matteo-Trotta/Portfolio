<div class="container my-5 rounded p-5">
    <div class="row">
        <div class="col-6">

            <form method="POST" action="/contatti" class="p-4 border rounded-4 shadow-sm bg-light shadow-xl">
                <h4 class="mb-4 fs-4 text-center">Chiedi un preventivo</h4>

                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Il tuo nome"
                        required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="verrai ricontattato via email"
                        required>
                </div>

                <div class="mb-3">
                    <label for="messaggio" class="form-label">Messaggio</label>
                    <textarea class="form-control" id="messaggio" name="messaggio" rows="5"
                        placeholder="Raccontami di cosa hai bisogno . . ." required></textarea>
                </div>

                <button type="submit" class="btn btn-success px-4 py-2 rounded-pill">
                    Invia Messaggio
                </button>
            </form>

        </div>
        <div class="col-6"></div>
    </div>
</div>


<

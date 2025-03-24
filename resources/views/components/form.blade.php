<div class="container-fluid bg-stone-100 my-0">
    <div class="row mx-0  justify-content-center align-items-center">


        <div class="col-10 col-md-4 text-center">

            <h2 class="fs-1 tangerine-regular my-4 playfair-display ">Metodi di contatto</h2>

            <ul class="my-2">

                <li class="fs-3 tangerine-regular italic my-1">


                    <p>Telefono : +39 339 222 2022</p>

                </li>

                <li class="fs-3 tangerine-regular italic my-1">


                    <p>email : matteotrotta7@gmail.com</p>

                </li>


                <li class="fs-3 tangerine-regular px-0 my-1">


                    Linked <i class="fa-brands fa-linkedin fa-lg"></i> :

                    <a href="https://www.linkedin.com/in/matteo-trotta-5a9984278/" class="hover:underline text-blue-500">

                        Profilo LinkedIn

                    </a>

                </li>

            </ul>

        </div>


        <div class="col-10 col-md-6 my-5">

            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}
                </div>
            @endif

            <form action="{{ route('sendEmail') }}" method ="POST" id="contactForm"
                class="max-w-lg mx-auto p-6 bg-white shadow-lg rounded-2xl">
                @csrf

                <h2 class="text-xl font-semibold mb-4 text-center">Scrivi un messaggio</h2>

                <div class="mb-4">
                    <label class="block font-medium mb-1">Nome</label>
                    <input type="text" id="name" name="name" class="w-full p-2 border rounded-lg" required>
                </div>

                <div class="mb-4">
                    <label class="block font-medium mb-1">Email</label>
                    <input type="email" id="email" name="email" class="w-full p-2 border rounded-lg" required>
                </div>

                <div class="mb-4">
                    <label class="block font-medium mb-1">Messaggio</label>
                    <textarea id="description" name="desciption" rows="4" class="w-full p-2 border rounded-lg" required></textarea>
                </div>

                <button type="submit"
                    class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg">
                    Invia
                </button>
            </form>

            @if (session('success'))
                <p>{{ session('success') }}</p>
            @endif



        </div>
    </div>
</div>

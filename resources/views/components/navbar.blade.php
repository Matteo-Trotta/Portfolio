<nav class="flex justify-between items-center p-4 navbar z-1 absolute w-full text-white">
    <div class=" flex flex-wrap w-full  items-center justify-between">
        {{-- Menu Navigazione Desktop --}}
        <div class="hidden md:flex flex-grow justify-center ">
            <ul class="flex space-x-8 text-center">
                <li class="hover:translate-y-2">
                    <a href="{{ route('welcome') }}"
                        class="hover:underline fs-3 italic text-lg hover:text-yellow-500">home</a>
                </li>
                <li class="hover:translate-y-2">
                    <a href="{{ route('aboutMe') }}" class="hover:underline fs-3 italic text-lg hover:text-yellow-500">Chi
                        sono</a>
                </li>
                <li class="hover:translate-y-2">
                    <a href="{{ route('services') }}"
                        class="hover:underline fs-3 italic text-lg hover:text-yellow-500">Servizi</a>
                </li>
                {{-- <li class="hover:translate-y-2">
                    <a href="{{ route('preventivo') }}"
                        class="hover:underline fs-3 italic text-lg hover:text-yellow-500">Preventivi</a>
                </li> --}}
                <li class="hover:translate-y-2">
                    <a href="https://blog.sitiwebromatrottamatteo.com"
                        class="hover:underline fs-3 italic text-lg hover:text-yellow-500">Blog</a>
                </li>
            </ul>
        </div>


        <div class="md:ml-auto">
            <a class="d-lg-block d-none btn btn-lg transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 my-4 fs-3"
                aria-label="Chat on WhatsApp" href="https://wa.me/393392222022">
                <img alt="Chat on WhatsApp"
                    src="{{ asset('storage/images/ChatOnWhatsAppButton/WhatsAppButtonGreenMedium.svg') }}" />
            </a>
        </div>


        <!-- Contenitore bottone e menu mobile -->
        <div class="md:hidden fixed top-6 right-6 text-center z-50">
            
            
            <!-- Bottone Toggle animato -->
            <button id="mobileToggle"
                class="fixed top-6 right-6 w-10 h-10 my-1 flex flex-col justify-center items-center z-50 bg-yellow-500 rounded-full">
                <span class="bar top-bar w-6 h-0.5 bg-white mb-1 transition duration-300 ease-in-out"></span>
                <span class="bar middle-bar w-6 h-0.5 bg-white mb-1 transition duration-300 ease-in-out"></span>
                <span class="bar bottom-bar w-6 h-0.5 bg-white transition duration-300 ease-in-out"></span>
            </button>

            <!-- Menu mobile -->
            <nav id="navbar-cta"
                class="hidden mt-2 fixed top-16 right-4 bg-yellow-500 shadow-md text-indigo-500 rounded p-2 w-40 z-40 transition-all duration-300 ease-in-out">
                <ul>
                    <li>
                        <a href="{{ route('welcome') }}" class="fw-semibold fs-3 italic text-lg block py-1">home</a>
                    </li>

                    <hr>

                    <li>
                        <a href="{{ route('aboutMe') }}" class="fw-semibold fs-3 italic text-lg block py-1">Chi sono</a>
                    </li>

                    <hr>

                    <li>
                        <a href="{{ route('services') }}" class="fw-semibold fs-3 italic text-lg block py-1">Servizi</a>
                    </li>

                    <hr>

                    {{-- <li>
                        <a  href="{{ route('preventivo') }}"
                            class="fw-semibold fs-3 italic text-lg block py-1">Preventivi</a>
                    </li> --}}

                    <hr>

                    <li>
                        <a href="https://www.blog.sitiwebromatrottamatteo.com"
                            class="fw-semibold fs-3 italic text-lg block py-1">Blog</a>
                    </li>

                    <hr>
                </ul>
            </nav>
        </div>

    </div>
</nav>

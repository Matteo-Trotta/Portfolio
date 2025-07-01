<nav class=" flex justify-between items-center p-4 navbar z-1 position absolute w-full text-white">
    <div class="max-w-screen-xl flex flex-wrap w-full items-center">
        <!-- Menu Navigazione -->
        <div class="hidden md:flex flex-grow justify-center space-x-8">
            <ul class="flex space-x-6">
                <li class="hover:translate-y-2">
                    <a href="{{ 'welcome' }}"
                        class=" hover:underline fs-3 italic text-lg hover:text-yellow-500 ">home</a>
                </li>

                <li class="hover:translate-y-2">
                    <a href="{{ 'aboutMe' }}" class=" hover:underline fs-3 italic text-lg  hover:text-yellow-500 ">Chi
                        sono
                    </a>
                </li>



                <li class="hover:translate-y-2">
                    <a href="{{ 'services' }}"
                        class=" hover:underline fs-3 italic text-lg hover:text-yellow-500 ">Servizi
                    </a>
                </li>


                <li class="hover:translate-y-2">
                    <a href="{{ 'preventivo' }}"
                        class=" hover:underline fs-3 italic text-lg hover:text-yellow-500 ">Preventivi
                    </a>
                </li>

                <li class="hover:translate-y-2">
                    <a href="{{ 'https://blog.sitiwebromatrottamatteo.com' }}"
                        class=" hover:underline fs-3 italic text-lg hover:text-yellow-500 ">Blog
                    </a>
                </li>






            </ul>
        </div>


        <div class="md:ml-auto">
            <a class="  d-lg-block d-none btn btn-lg transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 my-4 fs-3" aria-label="Chat on WhatsApp" href="https://wa.me/1XXXXXXXXXX"><img alt="Chat on WhatsApp" src="{{ asset('storage/images/ChatOnWhatsAppButton/WhatsAppButtonGreenLarge.svg') }}" />
            </a>
        </div>

      
        {{-- menu mobile --}}
        <div class="md:hidden fixed top-10 left-2 right-0 z-50">
            <button data-collapse-toggle="navbar-cta" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-yellow-500 rounded-lg hover:bg-gray-100 focus:ring-2 focus:ring-gray-200">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>



        <nav id="navbar-cta" class="hidden hadow-md fixed ms-2 align-items-center top-20">
            <ul class="bg-yellow-500 ms-4 mt-2 text-indigo-500  rounded p-3">
                <li class="">
                    <a href="{{ route('welcome') }}" class=" fw-semibold fs-3 italic text-lg">home</a>
                </li>

                <li class="">
                    <a href="{{ route('aboutMe') }}" class=" fw-semibold fs-3 italic text-lg">Chi sono
                    </a>
                </li>


                <li class="">
                    <a href="{{ route('services') }}" class=" fw-semibold fs-3 italic text-lg">Servizi
                    </a>
                </li>

                <li class="hover:translate-y-2">
                    <a href="{{ 'preventivo' }}" class="fw-semibold fs-3 italic text-lg ">Preventivi
                    </a>
                </li>


            </ul>
        </nav>

    </div>
</nav>

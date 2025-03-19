<nav class=" flex justify-between items-center p-4 navbar z-1 position absolute w-full text-white">
    <div class="max-w-screen-xl flex flex-wrap w-full items-center">
        <!-- Menu Navigazione -->
        <div class="hidden md:flex flex-grow justify-center space-x-8">
            <ul class="flex space-x-6">
                <li class="hover:translate-y-4">
                    <a href="{{ 'welcome' }}" class=" hover:underline text-white fs-3 italic text-lg">home</a>
                </li>

                <li class="hover:translate-y-4">
                    <a href="{{ 'aboutMe' }}" class=" hover:underline text-white fs-3 italic text-lg">chi sono
                    </a>
                </li>

                <li class="hover:translate-y-4 text-white fs-3 italic text-lg ">
                    <a href="#" class="hover:underline text-white fs-3 italic text-lg ">Lavori

                    </a>
                </li>

                <li class="hover:translate-y-4">
                    <a href="{{ 'services' }}" class=" hover:underline text-white fs-3 italic text-lg">Servizi
                    </a>
                </li>



            </ul>
        </div>


        <div class="md:ml-auto">
            <button
                class="d-lg-block d-none bottonenavbar btn btn-warning shadow-lg p-3 contattami hover:bg-transparent hover:!text-white fs-3">Contattami</button>
        </div>


        <div class="md:hidden">
            <button data-collapse-toggle="navbar-cta" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:ring-2 focus:ring-gray-200">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>



        {{-- menu mobile --}}
        <nav id="navbar-cta" class="hidden">
            <ul class="bg-transparent ms-3  text-yellow-500  rounded p-2">
                <li class="">
                    <a href="{{ route('welcome') }}" class="  fs-3 italic text-lg">home</a>
                </li>

                <li class="">
                    <a href="{{ route('aboutMe') }}" class="  fs-3 italic text-lg">About Me
                    </a>
                </li>

                <li class="">
                    <a href="#" class=" fs-3 italic text-lg ">Works

                    </a>
                </li>

                <li class="">
                    <a href="{{ route('services') }}" class="  fs-3 italic text-lg">Services
                    </a>
                </li>

                <li class="">
                    <a href="#" class="  fs-3 italic text-lg ">Contact

                    </a>
                </li>
            </ul>
        </nav>

    </div>
</nav>

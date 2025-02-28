<nav class="bg-stone-800 flex justify-between items-center p-4">
    <div class="max-w-screen-xl flex flex-wrap w-full items-center">
        <!-- Menu Navigazione -->
        <div class="hidden md:flex flex-grow justify-center space-x-8">
            <ul class="flex space-x-6">
                <li ><a href="{{ 'welcome' }}" class="text-stone-400 text-lg">home</a></li>

                <li><a href="{{ 'aboutMe' }}" class="text-stone-400 text-lg">About Me</a></li>
                <li><a href="#" class="text-stone-400 text-lg">Works</a></li>
                <li><a href="{{ 'services' }}" class="text-stone-400 text-lg">Services</a></li>
                <li><a href="#" class="text-stone-400 text-lg">Contact</a></li>
            </ul>
        </div>

        <!-- Pulsante Contattami allineato a destra -->
        <div class="md:ml-auto">
            <button class="d-lg-block d-none bottonenavbar btn btn-warning shadow-lg p-3">Contattami</button>
        </div>

        <!-- Pulsante Menu Mobile -->
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
    </div>
</nav>

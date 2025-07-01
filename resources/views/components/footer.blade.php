<footer class="bg-gray-800 text-white">
    <div class="max-w-7xl mx-auto px-4 py-10 md:flex md:justify-between md:items-center space-y-8 md:space-y-0">

        <!-- Logo e Biglietto -->
        <div class="w-full md:w-1/3 flex justify-center md:justify-start">
            <img src="{{ asset('storage/images/biglietto-da-visita.png') }}" alt="Biglietto da visita Matteo Trotta"
                class="w-64 h-auto">
        </div>

        <!-- Contatti -->
        <div class="w-full md:w-1/3 text-center space-y-3">
            <ul class="space-y-6 ">

                <li>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=matteotrotta7@gmail.com" target="_blank"
                        rel="noopener noreferrer" class="italic text-lg hover:underline">
                        matteotrotta7@gmail.com
                    </a>
                </li>

                <li class="italic text-lg">

                    <a href="https://github.com/Matteo-Trotta"><i
                            class="fa-brands fa
                    -github text-white"></i> Profilo GitHub</a>
                </li>

                <li class="text-lg">
                    LinkedIn <i class="fa-brands fa-linkedin text-blue-400"></i> :
                    <a href="https://www.linkedin.com/in/matteo-trotta-5a9984278/"
                        class="text-blue-400 hover:underline">Visita profilo</a>
                </li>

                <li class="flex justify-center">
                    <a class="" aria-label="Chat on WhatsApp" href="https://wa.me/393392222022"><img alt="Chat on WhatsApp"
                            src="{{ asset('storage/images/ChatOnWhatsAppButton/WhatsAppButtonGreenMedium.svg') }}" />
                    </a>

                </li>

            </ul>
        </div>

        <!-- Link -->
        <div class="w-full md:w-1/3 text-center md:text-right space-y-3">
            <ul class="flex flex-wrap justify-center md:justify-end gap-4 text-sm text-gray-400">
                <li><a href="{{ route('welcome') }}" class="hover:underline">home</a></li>
                <li><a href="{{ route('aboutMe') }}" class="hover:underline">About Me</a></li>
                <li><a href="{{ route('services') }}" class="hover:underline">Servizi</a></li>
                <li><a href="{{ route('preventivo') }}" class="hover:underline">Preventivi</a></li>
                <li><a href="{{ 'https://blog.sitiwebromatrottamatteo.com' }}" class="hover:underline">Blog</a></li>


                <li><a href="https://www.iubenda.com/privacy-policy/58740088" class="hover:underline">Privacy Policy</a>
                </li>
                <li><a href="https://www.iubenda.com/privacy-policy/58740088/cookie-policy"
                        class="hover:underline">Cookie Policy</a></li>
            </ul>
            <p class="text-xs text-gray-500 mt-4">© 2025 Matteo Trotta™. All Rights Reserved.</p>
        </div>

    </div>
</footer>

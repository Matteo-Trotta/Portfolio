import { gsap } from "gsap";

import ScrollTrigger from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);

gsap.fromTo(
    ".soluzioniDigitali",
    {
        scrollTrigger: {
            trigger: ".soluzioniDigitali",
            start: "top center",
            toggleActions: "play reverse play reverse",
        },
        autoAlpha: 0,
        y: -50,
        ease: "ease-in",
    },
    {
        autoAlpha: 1,
        y: 0,
        duration: 1,
    }
);

gsap.from(".paragrafoSoluzioniDigitali", {
    scrollTrigger: {
        trigger: ".paragrafoSoluzioniDigitali",
        start: "top center",
        toggleActions: "play reverse play reverse",
    },
    autoAlpha: 0,
    x: -30,
    ease: "ease-in",
    duration: 1,
});

gsap.from(".lista", {
    scrollTrigger: {
        trigger: ".lista",
        start: "top center",
        toggleActions: "play reverse play reverse",
    },
    autoAlpha: 0,
    x: 50,
    ease: "ease-in",
    duration: 1,
});

gsap.from(".avraiUnaMarcia", {
    scrollTrigger: {
        trigger: ".avraiUnaMarcia",
        start: "center center",
        toggleActions: "play reverse play reverse",
    },
    autoAlpha: 0,
    x: -50,
    ease: "ease-in",
    duration: 1.5,
});

gsap.from(".paragrafoAvraiUnaMarcia", {
    scrollTrigger: {
        trigger: ".paragrafoAvraiUnaMarcia",
        toggleActions: "play reverse play reverse",
        start: "top center",

        // markers: false,
    },
    autoAlpha: 0,
    y: 50,
    ease: "ease-in",
    duration: 1.5,
});

gsap.from(".effettoGrafico", {
    scrollTrigger: {
        trigger: ".effettoGrafico",
        toggleActions: "play reverse play reverse",
        start: "top center",
    },
    autoAlpha: 0,
    y: 10,
    ease: "ease-inOut",
    duration: 1,
    delay: 1.5,
});

if (!window.matchMedia("(max-width: 767px)").matches) {
    gsap.from(".belloEimmediato", {
        scrollTrigger: {
            trigger: ".belloEimmediato",
            toggleActions: "play none play reverse",
            start: "top center",

            markers: false,
            //  scrub: false,
        },
        // skewX: -5, crea scorrimento asseX
        skewY: -15,
        autoAlpha: 0,
        repeat: 0,
        // yoyo: false,
        duration: 1.5,
        ease: "bounce.out",
        delay: 0.5,
    });

    gsap.to(".designsumisura", {
        scrollTrigger: {
            trigger: ".designsumisura",
            toggleActions: "play reverse play reverse",
            start: "top center",
        },
    });
    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: ".smartphone", // usa l'elemento principale
            start: "top center+=100", // punti di riferimento corretti
            toggleActions: "play reverse play reverse",
            // markers: true,                   // per debug visivo
        },
    });

    tl.from(".smartphone", {
        autoAlpha: 0,
        y: 200,
        duration: 0.4,
        ease: "ease-in",
    }).from(
        ".sitiwebresponsive",
        {
            autoAlpha: 0,
            y: 100,
            duration: 0.5,
            ease: "ease-in",
        },
        "-=0.2"
    );
}

gsap.fromTo(
    ".laptop",
    {
        autoAlpha: 0,
        x: 0,
        y: 300,
    },

    {
        autoAlpha: 1,
        duration: 1,
        ease: "bounce.out",
        x: 0,
        y: -100,
    }
);

gsap.from(".sitiwebdinamici", {
    autoAlpha: 0,
    duration: 1,
    ease: "ease-in",
    x: -20,
    delay: 1,
});

gsap.from(".prof", {
    autoAlpha: 0,
    duration: 1,
    ease: "bounce.out",
    y: -200,
    delay: 1,
});

gsap.from(".attiranuoviclienti", {
    opacity: 0,

    duration: 1.5,
    ease: "ease-in",
    x: 120,
    delay: 2,
});

gsap.from(".incrementavisibilità", {
    opacity: 0,
    duration: 1.5,
    ease: "ease-in",
    x: -120,
    delay: 2,
});

// animazioni esclusivamente da desktop
if (!window.matchMedia("(max-width: 767px)").matches) {
    gsap.from(".primafilacard", {
        scrollTrigger: {
            trigger: ".primafilacard",
            toggleActions: "play reverse play reverse",
            start: "-=300 center",
            markers: false,
        },
        opacity: 0,
        ease: "bounce.out",

        duration: 1.5,
        x: -200,
    });

    gsap.from(".secondafilacard", {
        scrollTrigger: {
            trigger: ".secondafilacard",
            toggleActions: "play reverse play reverse",
            start: "-=300 center",
            markers: false,
        },
        opacity: 0,
        ease: "ease.out",
        duration: 1,
        y: 100,
    });


}
// FINE ANIMAZIONI DA DESKTOP-LAPTOP


document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".scrollButtonPreventivo");

    buttons.forEach((button) => {
        button.addEventListener("click", () => {
            window.scrollTo({
                top: document.body.scrollHeight,
                behavior: "smooth",
            });
        });
    });
});

// MENU TOGGLE NAVBAR
document.addEventListener("DOMContentLoaded", function () {
    const toggleButton = document.getElementById("mobileToggle");
    const mobileMenu = document.getElementById("navbar-cta");

    toggleButton.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
        toggleButton.classList.toggle("menu-open");
    });
});



gsap.from(".bottonePill", {
    opacity: 0,
    y: 50,
    ease: "power1.out",
    duration: 2,
});

gsap.fromTo(
    ".fade-zoom",
    { opacity: 0, scale: 0.1 },
    { opacity: 1, scale: 1, duration: 1.5, delay: 1, ease: "back.out(1.7)" }
);

gsap.fromTo(
    ".titolo",
    { opacity: 0, y: 20 },
    { opacity: 1, y: 0, duration: 2, delay: 2, ease: "elastic.Inout(1, 0.5)" }
);

// NAVBAR
gsap.from(".navbar", {
    opacity: 0,

    ease: "power4.inOut",
    duration: 2,
    delay: 2,
});

gsap.from(".contattami", {
    opacity: 0,
    y: 50,
    ease: "power4.out",
    duration: 2,
    delay: 4,
});



gsap.fromTo(
    ".evidenziatore",
    {
        background: "transparent",
    },
    {
        duration: 1,
        delay: 2,
        scaleX: 20,
        background: "rgb(245, 158, 11)",
    }
);

gsap.fromTo(
    ".imgServices",
    {
        opacity: 0,
        x: 100,
    },
    {
        opacity: 1,
        x: 0,
    }
);

gsap.fromTo(
    ".sitiwebresponsive",
    { opacity: 0, scale: 0.1 },
    { opacity: 1, scale: 1, duration: 1.5, delay: 1, ease: "back.out(1.7)" }
);

// CAROSELLO PRESTO

document.addEventListener("DOMContentLoaded", () => {
    const carousel = document.querySelector("#carouselDescription");
    const descriptionBox = document.getElementById("slideDescription");

    const slideDescriptions = [
        // HOME PAGE

        `<h3 class="fs-1 my-3  underline fw-semibold ">
        home page
        </h3>

         <p class="italic bodoni fs-3">
         "in evidenza una serie di funzionalità chiave: supporto multilingua, ricerca testuale e per tag, e un comodo accesso tramite login. La pagina principale presenta inoltre una selezione degli articoli in vendita, ordinati cronologicamente per offrire agli utenti sempre le novità più recenti.
         "</h3>`,
        // VISUALIZZAZIONE CARDS
        `<h3 class="fs-1 my-3 underline fw-semibold ">
        Visualizzazione cards
        </h3>

         <p class="italic bodoni fs-3">
         "La schermata della scheda prodotto di presto.it evidenzia diverse funzionalità chiave: è possibile aggiungere il prodotto ai preferiti, visualizzare la lista dei preferiti direttamente dal menu del profilo personalizzabile (con foto) e le immagini dei prodotti sono protette da un watermark per garantire la sicurezza dei contenuti."
         </p>`,

        //  FORM REGISTRAZIONE UTENTE
        `<h3 class="fs-1 my-3  underline fw-semibold ">
        Form di registrazione utente
        </h3>

         <p class="italic bodoni fs-3">"Creazione di un proprio profilo personale da utilizzare per accedere alle funzionalità di Presto.it, come la possibilità di aggiungere annunci e visualizzare la lista dei preferiti."
         </p>`,

        //  RILEVAZIONE IA
        `<h3 class="fs-1 my-3 underline fw-semibold ">
        Rilevazione IA
        </h3>

         <p class="italic bodoni fs-3">
         "Uso di strumenti di intelligenza artificiale per analizzare gli annunci. Questo sistema potrebbe essere usato per vari scopi, ad esempio per rilevare contenuti inappropriati, oppure per suggerire delle modifiche che ne migliorino la chiarezza e l'efficacia."
         </p>`,
        ,
    ];

    const getActiveIndex = () => {
        const items = carousel.querySelectorAll(".carousel-item");
        return Array.from(items).findIndex((item) =>
            item.classList.contains("active")
        );
    };

    if (descriptionBox) {
        descriptionBox.innerHTML = slideDescriptions[0];
    }

    carousel.addEventListener("slid.bs.carousel", () => {
        const activeIndex = getActiveIndex();

        if (slideDescriptions[activeIndex] && descriptionBox) {
            gsap.to(descriptionBox, {
                opacity: 0,
                y: 20,
                duration: 0.3,
                onComplete: () => {
                    descriptionBox.innerHTML = slideDescriptions[activeIndex];
                    gsap.fromTo(
                        descriptionBox,
                        { opacity: 0, y: -20 },
                        { opacity: 1, y: 0, duration: 0.5 }
                    );
                },
            });
        }
    });
});

// tooltip fotografia
document.addEventListener("DOMContentLoaded", function () {
    var tooltipTriggerList = [].slice.call(
        document.querySelectorAll('[data-bs-toggle="tooltip"]')
    );
    tooltipTriggerList.forEach(function (el) {
        new bootstrap.Tooltip(el);
    });
});

gsap.utils.toArray(".appearToY").forEach((card) => {
    gsap.from(card, {
        y: 50,
        autoAlpha: 0,
        duration: 1,
        ease: "power2.out",
        scrollTrigger: {
            trigger: card,
            start: "top 55%",
            toggleActions: "play reverse play reverse",
        },
    });
});

gsap.from(".appearToYperformance", {
    scrollTrigger: {
        trigger: ".appearToYperformance",
        start: "top center",
        toggleActions: "play reverse play reverse",
    },
    autoAlpha: 0,
    y: 50,
    duration: 1,
});

gsap.from(".appearToYperformanceRank", {
    scrollTrigger: {
        trigger: ".appearToYperformanceRank",
        start: "top center",
        toggleActions: "play reverse play reverse",
    },
    autoAlpha: 0,
    y: 50,
    duration: 1,
});

// gsap.from("bigliettoAnimazione",{
//     scrollTrigger: {
//         trigger: ".bigliettoAnimazione",
//         start: "top center",
//         toggleActions: "play reverse play reverse"
//     },
//     autoAlpha: 0,
//     y: 50,
//     duration: 1
// })

ScrollTrigger.matchMedia({
    "(min-width: 768px)": function () {
        gsap.utils.toArray(".row").forEach((section, i) => {
            gsap.from(section, {
                y: 50,
                opacity: 0,
                duration: 1,
                ease: "power2.out",
                delay: i * 0.2, // effetto sequenziale
                scrollTrigger: {
                    trigger: section,
                    start: "top 80%",
                    toggleActions: "play none none none",
                },
            });
        });
    },
});

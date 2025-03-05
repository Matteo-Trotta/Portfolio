import { gsap } from "gsap";

import ScrollTrigger from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);

import Swiper from "swiper";
import { Navigation, Pagination, EffectCube } from "swiper/modules";
// import Swiper and modules styles
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import "swiper/css/effect-cube";

Swiper.use([Navigation, Pagination, EffectCube]);

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

        // markers: true,
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

gsap.from(".belloEimmediato", {
    scrollTrigger: {
        trigger: ".belloEimmediato",
        toggleActions: "play none play reverse",
        start: "+=400 center",

        markers: true,
        //  scrub: true,
    },
    // skewX: -5, crea scorrimento asseX
    skewY: -15,
    autoAlpha: 0,
    repeat: 0,
    // yoyo: true,
    duration: 1.5,
    ease: "bounce.out",
    delay: 0.5,
});

// gsap.from(".bottone", {
//     scrollTrigger: {
//         trigger: ".bottone",
//         start: "-200px center",
//         toggleActions: "play reverse play reverse",
//     },

//     autoAlpha: 0,
//     repeat: 0,
//     yoyo: true,
//     duration: 1.8,
//     scale: 3,
//     skewX: -80,
//     skewY: 10,
//     delay: 0,
//     ease: "bounce.out",
// });

gsap.to(".designsumisura", {
    scrollTrigger: {
        trigger: ".designsumisura",
        toggleActions: "play reverse play reverse",
        start: "top center",
    },
});

gsap.from(".smartphone", {
    scrollTrigger: {
        trigger: ".smartphone",
        toggleActions: "play reverse play reverse",
        start: "top center",
    },

    autoAlpha: 0,
    y: 100,
    ease: "ease-in",
    duration: 0.5,
});

gsap.to(".immagineHeader", {});

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

// SWIPER

var swiper = new Swiper(".welcomeSwiper", {
    effect: "cube",
    grabCursor: true,
    loop: true,
    cubeEffect: {
        shadow: true,
        slideShadows: true,
        shadowOffset: 50,
        shadowScale: 0.94,
    },
    pagination: {
        el: ".swiper-pagination",
    },
});

gsap.from(".welcomeSwiper", {
    autoAlpha: 0,
    duration: 1.5,
    ease: "power2.out",
    x: -20,
});

function autoRotateSwiper() {
    gsap.to(swiper, {
        duration: 5,
        ease: "power1.inOut",
        onRepeat: () => swiper.slideNext(),
        repeat: -1,
        delay: 1,
    });
}

setTimeout(autoRotateSwiper, 1500);

// FINE SWIPER

// animazioni esclusivamente da desktop
if (
    !/Mobi|Android/i.test(navigator.userAgent) &&
    window.matchMedia("(min-width: 1024px)").matches
) {
    gsap.from(".primafilacard", {
        scrollTrigger: {
            trigger: ".primafilacard",
            toggleActions: "play reverse play reverse",
            start: "-=300 center",
            markers: true,
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
            markers: true,
        },
        opacity: 0,
        ease: "ease.out",
        duration: 1,
        y: 200,
    });
} else {
    console.log("Animazioni disattivate su dispositivi mobili");
}

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
    { opacity: 0, y: 20 }, // Stato iniziale (invisibile e più in basso)
    { opacity: 1, y: 0, duration: 2, delay: 2, ease: "elastic.Inout(1, 0.5)" } // Effetto morbido di rimbalzo
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

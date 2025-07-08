import { gsap } from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);

// ATTIVA DOPO IL DOM COMPLETAMENTE CARICATO
document.addEventListener("DOMContentLoaded", () => {
    // Animazione corretta con fromTo
    gsap.fromTo(
        ".soluzioniDigitali",
        {
            autoAlpha: 0,
            y: -50,
        },
        {
            autoAlpha: 1,
            y: 0,
            duration: 1,
            ease: "ease-in",
            scrollTrigger: {
                trigger: ".soluzioniDigitali",
                start: "top center",
                toggleActions: "play reverse play reverse",
            },
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

    // Animazioni desktop only
    if (!window.matchMedia("(max-width: 767px)").matches) {
        gsap.from(".belloEimmediato", {
            scrollTrigger: {
                trigger: ".belloEimmediato",
                toggleActions: "play none play reverse",
                start: "top center",
            },
            skewY: -15,
            autoAlpha: 0,
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
                trigger: ".smartphone",
                start: "top center+=100",
                toggleActions: "play reverse play reverse",
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

        gsap.from(".primafilacard", {
            scrollTrigger: {
                trigger: ".primafilacard",
                toggleActions: "play reverse play reverse",
                start: "-=300 center",
            },
            opacity: 0,
            ease: "bounce.out",
            duration: 1.5,
            x: -200,
        });

        gsap.utils.toArray("[data-animate]").forEach((el) => {
            gsap.fromTo(
                el,
                {
                    autoAlpha: 0,
                    y: 50,
                },
                {
                    duration: 1,
                    autoAlpha: 1,
                    y: 0,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: el,
                        start: "top 85%",
                        toggleActions: "play none none none",
                        once: true,
                    },
                }
            );
        });

        gsap.from(".secondafilacard", {
            scrollTrigger: {
                trigger: ".secondafilacard",
                toggleActions: "play reverse play reverse",
                start: "-=300 center",
            },
            opacity: 0,
            ease: "ease.out",
            duration: 1,
            y: 100,
        });
    }

    // Altre animazioni generali
    gsap.fromTo(
        ".laptop",
        { autoAlpha: 0, x: 0, y: 300 },
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
        { background: "transparent" },
        {
            duration: 1,
            delay: 2,
            scaleX: 20,
            background: "rgb(245, 158, 11)",
        }
    );

    gsap.fromTo(
        ".imgServices",
        { opacity: 0, x: 100 },
        { opacity: 1, x: 0 }
    );

    gsap.fromTo(
        ".sitiwebresponsive",
        { opacity: 0, scale: 0.1 },
        { opacity: 1, scale: 1, duration: 1.5, delay: 1, ease: "back.out(1.7)" }
    );

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

    ScrollTrigger.matchMedia({
        "(min-width: 768px)": function () {
            gsap.utils.toArray(".row").forEach((section, i) => {
                gsap.from(section, {
                    y: 50,
                    opacity: 0,
                    duration: 1,
                    ease: "power2.out",
                    delay: i * 0.2,
                    scrollTrigger: {
                        trigger: section,
                        start: "top 80%",
                        toggleActions: "play none none none",
                    },
                });
            });
        },
    });
});

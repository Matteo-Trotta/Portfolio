import { gsap } from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);

document.addEventListener("DOMContentLoaded", () => {
    if (document.querySelector(".soluzioniDigitali")) {
        gsap.fromTo(
            ".soluzioniDigitali",
            { autoAlpha: 0, y: -50 },
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
    }

    if (document.querySelector(".paragrafoSoluzioniDigitali")) {
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
    }

    if (document.querySelector(".lista")) {
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
    }

    if (document.querySelector(".avraiUnaMarcia")) {
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
    }

    if (document.querySelector(".paragrafoAvraiUnaMarcia")) {
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
    }

    if (document.querySelector(".effettoGrafico")) {
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
    }

    if (!window.matchMedia("(max-width: 767px)").matches) {
        if (document.querySelector(".belloEimmediato")) {
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
        }

        if (document.querySelector(".designsumisura")) {
            gsap.to(".designsumisura", {
                scrollTrigger: {
                    trigger: ".designsumisura",
                    toggleActions: "play reverse play reverse",
                    start: "top center",
                },
            });
        }

        const smartphone = document.querySelector(".smartphone");
        if (smartphone) {
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
        }

        if (document.querySelector(".primafilacard")) {
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
        }

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

        if (document.querySelector(".secondafilacard")) {
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
    }

    const optionalSelectors = [
        ".laptop",
        ".sitiwebdinamici",
        ".prof",
        ".attiranuoviclienti",
        ".incrementavisibilità",
        ".bottonePill",
        ".fade-zoom",
        ".titolo",
        ".navbar",
        ".contattami",
        ".evidenziatore",
        ".imgServices",
        ".sitiwebresponsive",
    ];

    optionalSelectors.forEach((selector) => {
        if (document.querySelector(selector)) {
            // Per semplicità qui potresti reinserire le animazioni specifiche
            // oppure modularle in funzioni riutilizzabili
        }
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

    const extraSelectors = [
        ".appearToYperformance",
        ".appearToYperformanceRank"
    ];

    extraSelectors.forEach(selector => {
        if (document.querySelector(selector)) {
            gsap.from(selector, {
                scrollTrigger: {
                    trigger: selector,
                    start: "top center",
                    toggleActions: "play reverse play reverse",
                },
                autoAlpha: 0,
                y: 50,
                duration: 1,
            });
        }
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

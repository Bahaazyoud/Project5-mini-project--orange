gsap.registerPlugin(ScrollTrigger);

let sections = gsap.utils.toArray(".panel");

gsap.to(sections, {
    xPercent: -100 * (sections.length - 1),
    ease: "none",
    scrollTrigger: {
        trigger: ".wrap",
        pin: true,
        scrub: 1,
        snap: 1 / (sections.length - 1),
        // base vertical scrolling on how wide the container is so it feels more natural.
        end: "+=3500",
    }
});
gsap.from(".progressbar", {
    scrollTrigger: {
        trigger: ".p1",
        scrub: true,
        start: "top top",
        end: () => document.querySelector(".wrap").offsetWidth
    },
    scaleX: 0,
    transformOrigin: "left center",
    ease: "none"
});


//
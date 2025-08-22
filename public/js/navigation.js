document.addEventListener("DOMContentLoaded", () => {
    gsap.from(".navigation a", {
        y: -20,
        autoAlpha: 0,
        stagger: 0.4,
        delay: 0.5
    });

    gsap.from(".logobiz", {
        y: -20,
        autoAlpha: 0,
        stagger: 2,
        delay: 0.5
    });

    gsap.from(".logobiz2", {
        x: -50,
        autoAlpha: 0,
        stagger: 2,
        delay: 0.5
    });

    gsap.from(".notif", {
       scale: 0,          // mulai dari kecil
        autoAlpha: 0,      // transparan
        ease: "back.out(1.7)", // efek mantul pop-up
        duration: 0.6,     // durasi animasi
        delay: 0.5,         // muncul sedikit lebih lambat
        onComplete: () => {
            // setelah notif muncul, lonceng goyang
            gsap.to(".notification", {
                rotation: 15,       // miring kanan
                duration: 0.2,
                repeat: 5,          // geleng 5x
                yoyo: true,         // bolak-balik
                transformOrigin: "50% 0%", // putar dari atas (pangkal lonceng)
                ease: "power1.inOut"
            });
        }
    });
});
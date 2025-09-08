$(document).ready(function() {
        $('#autoWidth2').lightSlider({
        autoWidth: true,      // biar lebar menyesuaikan isi
        loop: true,           // biar looping
        auto: true,           // bisa auto jalan
        pause: 3000,          // jeda 3 detik
        slideMove: 1,         // geser 1 item per kali
        enableDrag: true,     // biar bisa drag geser manual
        swipeThreshold: 40,   // minimal geser 40px biar pindah        
        pager: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    item: 1,
                    slideMove: 1
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    item: 2,
                    slideMove: 1
                }
            }
        ],
        onSliderLoad: function() {
            $('#autoWidth2').removeClass('cs-hidden');
        }
    });  
// ...existing code...
$(document).ready(function() {
    // ...existing LightSlider code...

    // Show modal on view details click
    $('#autoWidth2').on('click', '.view', function(e) {
        e.preventDefault();
        $(this).closest('.box').siblings('.spec-modal').fadeIn(200);
    });

    // Hide modal on close
    $('#autoWidth2').on('click', '.close-spec', function() {
        $(this).closest('.spec-modal').fadeOut(200);
    });

    // Optional: hide modal when clicking outside content
    $('#autoWidth2').on('click', '.spec-modal', function(e) {
        if (e.target === this) {
            $(this).fadeOut(200);
        }
    });
});
});

document.addEventListener('DOMContentLoaded', function() {
    const wrapper = document.querySelector('.judul-confetti-wrapper');
    if (wrapper && window.confetti) {
        const myConfetti = confetti.create(wrapper, { resize: true, useWorker: true });
        myConfetti({
            particleCount: 100,
            spread: 90,
            startVelocity: 30,
            origin: { x: 0.5, y: 0.1 } // y: 0.1 so it starts at the top of the wrapper
        });
    }
});
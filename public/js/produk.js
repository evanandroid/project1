$(document).ready(function() {
    $('#autoWidth').lightSlider({
        autoWidth: true,      // biar lebar menyesuaikan isi
        loop: true,           // biar looping
        auto: true,           // bisa auto jalan
        pause: 3000,          // jeda 3 detik
        slideMove: 1,         // geser 1 item per kali
        enableDrag: true,     // biar bisa drag geser manual
        swipeThreshold: 40,   // minimal geser 40px biar pindah
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
            $('#autoWidth').removeClass('cs-hidden');
        }
    });  
});

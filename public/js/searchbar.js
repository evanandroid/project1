function searchToggle(obj, evt) {
    var container = $(obj).closest('.search-wrapper');

    if (!container.hasClass('active')) {
        container.addClass('active');
        evt.preventDefault();
    } 
    else if (container.hasClass('active') && 
            ($(obj).hasClass("close") || $(obj).closest('.input-holder').length === 0)) {
        closeSearch(container);
    }
}

function closeSearch(container) {
    container.removeClass('active');
    container.find('.search-input').val('');
}

// 👉 Biar otomatis aktif saat halaman load
$(document).ready(function() {
    var container = $(".search-wrapper");
    var input = $(".search-input");

    container.addClass("active");

});

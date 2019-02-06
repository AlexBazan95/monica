jQuery(function ($) {
    // --------------------------------------------------------------------
    // jQuery for page scrolling feature - requires jQuery Easing plugin
    // --------------------------------------------------------------------
    (function () {
        $('a.page-scroll').on('click', function (e) {
            e.preventDefault();
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop : $($anchor.attr('href')).offset().top
            }, 1500, 'easeInOutExpo');
        });
    }());
}); // JQuery end

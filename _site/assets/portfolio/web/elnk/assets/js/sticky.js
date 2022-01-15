$(document).ready(function(){

    if  ($(".bundle-filter-menu__wrapper").length) {

        var top = $(".cta-html-dark__wrapper").offset().top;

        $(window).scroll(function() {
            if ($(window).scrollTop() > top) {
                $(".bundle-filter-menu__wrapper").fadeOut("slow");
            } else {
               $(".bundle-filter-menu__wrapper").fadeIn("slow");
            }
        });
    }

     if ($( window ).width() > 950 ) {
         // stick bundles menu
        $(".bundle-filter-menu__wrapper").sticky({
            topSpacing:160,
            zIndex:10
        });

        $('.bundle-filter-menu__wrapper').on('sticky-start', function() {
            $('.bundle-filter-menu__label').css("padding", "0.25rem");
            $('.bundle-filter-menu__item').css("padding", "0.25rem");
        });

        $('.bundle-filter-menu__wrapper').on('sticky-end', function() {
            $('.bundle-filter-menu__label').css("padding", "1rem");
            $('.bundle-filter-menu__item').css("padding", "1rem");
        });

        $('.services__section').on('sticky-end', function() {
            $('.bundle-filter-menu__label').css("padding", "1rem");
            $('.bundle-filter-menu__item').css("padding", "1rem");
         });


     } else {
         return;
     }



}); // end ready

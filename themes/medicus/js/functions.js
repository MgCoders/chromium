/**
 * Theme functions file
 */
(function ($) {
    'use strict';

    var $document = $(document);
    var $window = $(window);


    /**
    * Document ready (jQuery)
    */
    $(function () {

        /**
         * Activate superfish menu.
         */
        $('.sf-menu').superfish({
            'speed': 'fast',
            'delay' : 0,
            'animation': {
                'height': 'show'
            }
        });

    });

        $("#menu-main-slide").mmenu({
            "slidingSubmenus": false,
            "offCanvas": {
               "position": "right"
            },
            "extensions": [
                "theme-dark",
                "pageshadow",
                "border-full"
            ]

        })

    $window.on('load', function() {
        /**
         * Activate main slider.
         */
        $('#wpzoom-featured-posts').sllider();

    });


    $.fn.sllider = function() {
        return this.each(function () {
            var $this = $(this);

            var flky = new Flickity('.slides', {
                autoPlay: (zoomOptions.slideshow_auto ? parseInt(zoomOptions.slideshow_speed, 10) : false),
                cellAlign: 'center',
                contain: true,
                percentPosition: false,
                //prevNextButtons: false,
                pageDots: true,
                wrapAround: true,
                accessibility: false
            });
        });
    };

})(jQuery);

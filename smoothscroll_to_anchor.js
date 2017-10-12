// Smooth Scroll to Anchor Link Location, Adjust for Sticky Header height and Responsive Breakpoint
jQuery( document ).ready(function($) {

    if ( window.location.hash ) scroll(0,0); // void some browsers issue
    setTimeout( function() { scroll(0,0); }, 1);

    $(function() {

        // *only* if we have anchor on the url and if it exists on the page.
        if($(window.location.hash).length) { 

            var hashPos = $(window.location.hash).offset().top;
            var headerOffset = 0;
            var scrollPos = hashPos - headerOffset;
            // change position to offset header height if not on mobile
            if ($(window).width() > 960) { // mobile breakpoint
                hashPos = $(window.location.hash).offset().top;
                headerOffset = 100; // header height
                scrollPos = hashPos - headerOffset;
            }
            // smooth scroll to the anchor id
            $('html, body').animate({
                scrollTop: scrollPos + 'px'
            }, 1000, 'swing');
        }

    });
});

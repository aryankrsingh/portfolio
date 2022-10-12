// new WOW().init();
AOS.init();

$('#mode').change(function(){
    if($(this).is(":checked")) {
        $('html').addClass("dark");
        $('.mode_slider').attr('title', 'Moon');
    } else {
        $('html').removeClass("dark");
        $('.mode_slider').attr('title', 'Sunny');
    }
});


$(window).scroll(function() {
    if ($(window).scrollTop()>=10) {
        $('.nav_sticky').addClass('header_fixed');
    } else {
        $('.nav_sticky').removeClass('header_fixed');
    }
});

// $('.banner_slider_box').owlCarousel({
//     loop: true,
//     margin: 0,
//     nav: true,
//     dots: false,
//     autoplay: false ,
//     smartSpeed: 1500,
//     // animateOut: 'fadeOut',
//     // animateIn: 'fadeIn',
//     autoplayHoverPause: false,
//     responsive: {
//         0: {
//             items: 1
//         },
//         600: {
//             items: 1
//         },
//         768: {
//             items: 1
//         },
//         1200: {
//             items: 1
//         }
//     }
// });

        // skill Js Start

$(function(){
    // Remove .skill_progress .complete inline styling
    $('.skill_progress').each(function( index, value ) { 
        $(this).find($('circle.complete')).removeAttr( 'style' );
    });
    // Activate progress animation on scroll
    $(window).scroll(function(){
        $('.skill_progress').each(function( index, value ) { 
            // If .skill_progress is approximately 25% vertically into the window when scrolling from the top or the bottom
            if ( 
                $(window).scrollTop() > $(this).offset().top - ($(window).height() * 0.75) &&
                $(window).scrollTop() < $(this).offset().top + $(this).height() - ($(window).height() * 0.25)
            ) {
                // Get percentage of progress
                percent = $(value).data('percentage');
                // Get radius of the svg's circle.complete
                radius = $(this).find($('circle.complete')).attr('r');
                // Get circumference (2πr)
                circumference = 2 * Math.PI * radius;
                // Get stroke-dashoffset value based on the percentage of the circumference
                strokeDashOffset = circumference - ((percent * circumference) / 100);
                // Transition progress for 1.25 seconds
                $(this).find($('circle.complete')).animate({'stroke-dashoffset': strokeDashOffset}, 1250);
            }
        });
    }).trigger('scroll');
});

        // skill Js End
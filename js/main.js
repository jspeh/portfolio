(function ($) {
	
	"use strict";

	$(document).ready(function() {
		
		$('#btn-menu').on('click', function() {
            console.log("clicked");
            $('.menu-wrapper').addClass('open');
            $('.menu-overlay').addClass('open');
        });

        $('.menu-overlay').on('click', function() {
            $('.menu-wrapper').removeClass('open');
            $('.menu-overlay').removeClass('open');
        });

        $('#nav-menu-close').on('click', function() {
            $('.menu-wrapper').removeClass('open');
            $('.menu-overlay').removeClass('open');
        });

	});

}(jQuery));


// Scroll Reveal
window.sr = ScrollReveal({ reset: false });
sr.reveal('.reveal1', { delay: 200, duration: 800, distance: '120px', orgin: 'left', easing: 'ease-in-out', });
sr.reveal('.reveal2', { delay: 200, duration: 800, distance: '120px', orgin: 'right', easing: 'ease-in-out', });
sr.reveal('.reveal3', { delay: 200, duration: 500, distance: '30px', orgin: 'bottom', easing: 'ease-in-out', });
sr.reveal('.reveal4', { delay: 200, duration: 500, distance: '30px', orgin: 'bottom', easing: 'ease-in-out', });
sr.reveal('.reveal5', { delay: 200, duration: 500, distance: '30px', orgin: 'bottom', easing: 'ease-in-out', });
sr.reveal('.reveal6', { delay: 200, duration: 500, distance: '30px', orgin: 'bottom', easing: 'ease-in-out', });
sr.reveal('.reveal7', { delay: 200, duration: 500, distance: '30px', orgin: 'bottom', easing: 'ease-in-out', });
sr.reveal('.reveal-headline', { delay: 200, duration: 600, distance: '100px', orgin: 'bottom', easing: 'ease-in-out', });
sr.reveal('.reveal-mov', { delay: 800, duration: 1000, distance: '60px', orgin: 'bottom', easing: 'ease-in-out', });
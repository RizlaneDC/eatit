import $ from 'jquery';
import owlCarousel from 'owl.carousel';
import 'bootstrap';

$(document).ready(function() {

    var owl = $(".carousel-restos");

    switchOwl(owl);

    $(window).on('resize', function() {
        switchOwl(owl);
    });

});

function switchOwl(slider) {
    var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    if (width >= 768 && slider.data('owlCarousel') == undefined) {
        slider.owlCarousel({
            loop: true,
            nav: true,
            navText: ['<i class="fa fa-angle-left fa-3x" aria-hidden="true"></i>', '<i class="fa fa-angle-right fa-3x" aria-hidden="true"></i>'],
            items: 3
        });
    } else if (width < 768) {
        slider.owlCarousel('destroy');
    }
}
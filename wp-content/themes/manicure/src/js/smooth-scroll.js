/* smooth scrolling */
jQuery(function ($) {
    $('a[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            // prevent conflict with tabs and other script used hash
            if ($(this).data("ignore-scroll")) return;

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                setTimeout(function () {
                    $('html, body').animate({

                        scrollTop: target.offset().top - 170
                    }, 600);
                }, 200);

                return false;
            }
        }
    });
    var lastScrollTop = 0;
    $(window).scroll(function (event) {
        var st = $(this).scrollTop();
        if (st > lastScrollTop) {

            $('.arrow-to-up').addClass('arrow-vissible')
        } else {
            $('.arrow-to-up').removeClass('arrow-vissible')
        }
        lastScrollTop = st;
    });
    // var el = document.getElementById('float-block');
    //
    // var scrollFloat = function() {
    //     'use strict';
    //
    //     var app = {};
    //
    //     app.init = function init(node) {
    //         if (!node || node.nodeType !== 1) {
    //             throw new Error(node + ' is not DOM element');
    //         }
    //         handleWindowScroll(node);
    //     };
    //
    //     function handleWindowScroll(floatElement) {
    //         window.onscroll = function() {
    //             console.log(window.scrollY);
    //             console.log(floatElement.offsetTop);
    //             if (window.scrollY > floatElement.offsetParent) {
    //                 if (floatElement.style.position !== 'fixed') {
    //                     floatElement.style.position = 'fixed';
    //                     floatElement.style.top = '0';
    //                 }
    //             } else {
    //                 if (floatElement.style.position === 'fixed') {
    //                     floatElement.style.position = '';
    //                     floatElement.style.top = '';
    //                 }
    //             }
    //         };
    //     }
    //
    //     return app;
    // }();
    // scrollFloat.init(el);
    $('#float-block').waypoint(function (direction) {
        if (direction === 'down') {
            $('#float-block').addClass('fixed-block')

        }
    }, {
        offset: '25%'
    }).waypoint(function (direction) {
        if (direction === 'up') {
            $('#float-block').removeClass('fixed-block')

        }
    }, {
        offset: '5%'
    });

    $('.hero-courses').waypoint(function (direction) {
        if (direction === 'down') {
            $('#float-block').removeClass('fixed-block')

        }
    }, {
        offset: '25%'
    })
});
/* smooth scrolling end*/
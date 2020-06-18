/**
 * Created by josed on 08/04/14.
 */
$(document)
    .ready(function() {





        $('.ui.dropdown')
            .dropdown({
                on: 'hover'
            })
        ;


        $('.ui.accordion')
            .accordion() ;

        $('#foobar').bxSlider({
            mode: 'fade',pager: false,
            captions: true
        });

        $('.demo.menu .item')
            .tab()   ;



    })
;


//$(function(){
//
//    $('.bxslider').bxSlider({
//        auto: true,
//        mode: 'fade'
//    });
//});

jQuery(function ($) {
    // $(window).on('load', function () {
        var list = $(".course_list");
        var item = $('.program_item');
        var button = $('.course-filtering button');
        var max = Math.max.apply(Math, list.find(item).map(
            function(){
                return $(this).height();
            }
        ));
        item.height(max);

        var $grid = list.isotope({
            itemSelector: '.program_item',
            layoutMode: 'fitRows'
        });
        button.on('click', function () {
            button.removeClass('active-filter')
            $(this).addClass('active-filter')
            if($(this).attr('data-filter') !== '*'){
                $('.virtical-course').find('.img-bg').css('display', 'none')
            }else{
                $('.virtical-course').find('.img-bg').css('display', 'block')
            }


            var elem = $(this).attr('data-filter');
            // setTimeout(function () {
                $grid.isotope({filter: elem});

            // }, 1000)
        })
    // })

});




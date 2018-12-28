
jQuery(function ($) {

    var input = $('.action_form').find('.form_hiiden')[0];
    var title = $('.hero_title').find('strong').html()
    if(title && input){
        input.value = title
    }

});
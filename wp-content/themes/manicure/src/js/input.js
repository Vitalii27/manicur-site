jQuery(function ($) {

    var input = $('.action_form').find('.form_hidden')[0];
    var inputAction = $('#form-action').find('.form_hidden')[0];

    var inputPopup = $('#form-popup').find('.form_hidden-popup')[0];
    if(!$('body').hasClass('home')){
        var title = $('.hero_title').find('p').html()
    }
    if(!$('body').hasClass('home') && $('body').hasClass('page-template-page-vip')){
        var vipTitle = $('.hero_title').html()
    }

    if (title && input) {
        input.value = title
    }
    if (title && inputPopup) {
        inputPopup.value = title
    }
    if (vipTitle && inputPopup ) {
        inputPopup.value = vipTitle
    }
    if (vipTitle && inputAction) {
        inputAction.value = vipTitle
    }

});
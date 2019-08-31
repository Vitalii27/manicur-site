jQuery(function ($) {

    var settings = {
        fullscreen: {
            iosNative: true
        },
        playsinline: true
    };


    var player = new Plyr('.video-custom', settings);
    var player1 = new Plyr('.video-custom1', settings);
    var player2 = new Plyr('.video-custom2', settings);
    var player3 = new Plyr('.video-custom3', settings);
    var player4 = new Plyr('.video-custom4', settings);
    var player5 = new Plyr('.video-custom5', settings);
    var player6 = new Plyr('.video-custom6', settings);
});
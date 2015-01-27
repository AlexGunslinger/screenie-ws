$(document).ready( function () {

    // Video Container Hover Effect(s)
    $('.cta-vid-container').hover(function () {
        var playButton = $('.cta-vid-container .vid-play-button');
        playButton.attr('src', playButton.attr('image-hover'));
    },
    function () {
        var playButton = $('.cta-vid-container .vid-play-button');
        playButton.attr('src', playButton.attr('image-resting'));
    });
    // Colorbox Youtube video popout
    $(".youtube-popout").colorbox({iframe:true, innerWidth:640, innerHeight:390}).css("outline","none");

    // Add class "currentPage" to any links pointing to "this page"
    $('a').each(function () {
        if (window.location.pathname.indexOf($(this).attr('href')) != -1 ){
            $(this).addClass('currentPage');
        }
    });
});
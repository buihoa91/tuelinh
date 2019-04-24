$(document).ready(function () {
    FlipClock.Lang.Custom = { days:'Ngày', hours:'Giờ', minutes:'Phút', seconds:'Giây' };
    var opts = {
        clockFace: 'DailyCounter',
        countdown: true,
        language: 'Custom',
        showSeconds: true
    };
    var countdown = 1557594000 - ((new Date().getTime())/1000); // from: 04/20/2019 12:00 pm +0700
    countdown = Math.max(1, countdown);
    $('.clock').FlipClock(countdown, opts);

    $(".flipster").flipster({
        style: 'carousel',
        enableNav: true,
        navPosition: 'after',
    });
    if($("#slider1").length > 0){
        $('#slider1').slick({
            autoplay: 1,
        });
    }
    $('#slider2').slick({
        autoplay: 1,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: false,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 6,
        slidesToScroll: 0,
        asNavFor: '.slider-for',
        dots: true,
        centerMode: true,
        focusOnSelect: true
    });
    $('#slider3').slick({
        autoplay: 1,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        dots: true,
        responsive: [
            {
                breakpoint: 1040,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll:1
                }
            }
            ]
    });
});//end document

function showPopupVideo(btnCall, popupName) {
    $(btnCall).click(function () {
        var src = $(this).data('src');
        $(popupName).fadeIn();
        $(popupName).find('iframe').attr('src', src);
        $(popupName + ' .close-popup').click(function () {
            $(popupName).find('iframe').attr('src', '');
            $(popupName).fadeOut();
        });
    });
}
function showPopupNotify(popupName, message) {
    $(popupName).fadeIn();
    $(popupName).find('.message').html(message);
    $(popupName + ' .close-popup').click(function () {
        $(popupName).fadeOut();
    });
}

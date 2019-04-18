$(document).ready(function () {
    var click = 0;
    $(".btn-fix").click(function () {
        if(click == 0){
            $(".time-box").addClass('active');
            click++;
        }else {
            $(".time-box").removeClass('active');
            click--;
        }
    });
});//end document

function showPopupVideo(btnCall, popupName) {
    $(btnCall).click(function () {
        var src = $(this).data('src');
        var title = $(this).data('title');
        $(popupName).fadeIn();
        $(popupName).find('iframe').attr('src', src);
        $(popupName).find('.title').text(title);
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

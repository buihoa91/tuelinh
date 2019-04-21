$(document).ready(function () {
    showPopupVideo('.play-btn','.popupVideo');
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
    $(".flipster").flipster({
        style: 'carousel',
        enableNav: true,
        navPosition: 'after'
    });
    if($("#slider1").length > 0){
        $('#slider1').slick();
    }
    $('#slider2').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
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
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
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
var labels = ['Tuần', 'Ngày', 'Giờ', 'Phút', 'Giây'],
    TimerCount = (new Date().getFullYear() + 1) + '/01/01',
    template = _.template( jQuery('#main-example-template').html()),
    currDate = '00:00:00:00:00',
    nextDate = '00:00:00:00:00',
    parser = /([0-9]{2})/gi,
    $example = jQuery('#main-example');

if( $example.data("timer").length ){
    TimerCount = $example.data("timer");
}

// Parse countdown string to an object
function strfobj(str) {
    var parsed = str.match(parser),
        obj = {};
    labels.forEach(function(label, i) {
        obj[label] = parsed[i]
    });
    return obj;
}
// Return the time components that diffs
function diff(obj1, obj2) {
    var diff = [];
    labels.forEach(function(key) {
        if (obj1[key] !== obj2[key]) {
            diff.push(key);
        }
    });
    return diff;
}
// Build the layout
var initData = strfobj(currDate);
labels.forEach(function(label, i) {
    $example.append(template({
        curr: initData[label],
        next: initData[label],
        label: label
    }));
});
// Starts the countdown
$example.countdown(TimerCount, function(event) {
    var newDate = event.strftime('%w:%d:%H:%M:%S'),
        data;

    if (newDate !== nextDate) {
        currDate = nextDate;
        nextDate = newDate;
        // Setup the data
        data = {
            'curr': strfobj(currDate),
            'next': strfobj(nextDate)
        };
        // Apply the new values to each node that changed
        diff(data.curr, data.next).forEach(function(label) {
            var selector = '.%s'.replace(/%s/, label),
                $node = $example.find(selector);
            // Update the node
            $node.removeClass('flip');
            $node.find('.curr').text(data.curr[label]);
            $node.find('.next').text(data.next[label]);
            // Wait for a repaint to then flip
            _.delay(function($node) {
                $node.addClass('flip');
            }, 50, $node);
        });
    }
});

/*----------------------------------------------------------------*/
$(function () {
$('.bubbleInfo1_1s').each(function () {
    var distance = 0;
    var time = 100;
    var hideDelay = 10;

    var hideDelayTimer = null;

    var beingShown = false;
    var shown = false;
    var btn = $('.btn', this);
    var info = $('.popup', this).css('opacity', 0);


    $([btn.get(0), info.get(0)]).mouseover(function () {
        if (hideDelayTimer) clearTimeout(hideDelayTimer);
        if (beingShown || shown) {
            // don't btn the animation again
            return;
        } else {
            // reset position of info box
            beingShown = true;

            info.css({
                top: 78,
                left: 365,
                display: 'block'
            }).animate({
                top: '-=' + distance + 'px',
                opacity: 1
            }, time, 'swing', function() {
                beingShown = false;
                shown = true;
            });
        }

        return false;
    }).mouseout(function () {
        if (hideDelayTimer) clearTimeout(hideDelayTimer);
        hideDelayTimer = setTimeout(function () {
            hideDelayTimer = null;
            info.animate({
                top: '-=' + distance + 'px',
                opacity: 0
            }, time, 'swing', function () {
                shown = false;
                info.css('display', 'none');
            });

        }, hideDelay);

        return false;
    });
});
});

/*----------------------------------------------------------------*/
$(function () {
$('.bubbleInfo1_2s').each(function () {
    var distance = 0;
    var time = 100;
    var hideDelay = 10;

    var hideDelayTimer = null;

    var beingShown = false;
    var shown = false;
    var btn = $('.btn', this);
    var info = $('.popup', this).css('opacity', 0);


    $([btn.get(0), info.get(0)]).mouseover(function () {
        if (hideDelayTimer) clearTimeout(hideDelayTimer);
        if (beingShown || shown) {
            // don't btn the animation again
            return;
        } else {
            // reset position of info box
            beingShown = true;

            info.css({
                top: 78,
                left: 680,
                display: 'block'
            }).animate({
                top: '-=' + distance + 'px',
                opacity: 1
            }, time, 'swing', function() {
                beingShown = false;
                shown = true;
            });
        }

        return false;
    }).mouseout(function () {
        if (hideDelayTimer) clearTimeout(hideDelayTimer);
        hideDelayTimer = setTimeout(function () {
            hideDelayTimer = null;
            info.animate({
                top: '-=' + distance + 'px',
                opacity: 0
            }, time, 'swing', function () {
                shown = false;
                info.css('display', 'none');
            });

        }, hideDelay);

        return false;
    });
});
});



/*----------------------------------------------------------------*/
$(function () {
$('.bubbleInfo0').each(function () {
    var distance = 0;
    var time = 100;
    var hideDelay = 10;

    var hideDelayTimer = null;

    var beingShown = false;
    var shown = false;
    var btn = $('.btn', this);
    var info = $('.popup', this).css('opacity', 0);


    $([btn.get(0), info.get(0)]).mouseover(function () {
        if (hideDelayTimer) clearTimeout(hideDelayTimer);
        if (beingShown || shown) {
            // don't btn the animation again
            return;
        } else {
            // reset position of info box
            beingShown = true;

            info.css({
                top: 30,
                left: 455,
                display: 'block'
            }).animate({
                top: '-=' + distance + 'px',
                opacity: 1
            }, time, 'swing', function() {
                beingShown = false;
                shown = true;
            });
        }

        return false;
    }).mouseout(function () {
        if (hideDelayTimer) clearTimeout(hideDelayTimer);
        hideDelayTimer = setTimeout(function () {
            hideDelayTimer = null;
            info.animate({
                top: '-=' + distance + 'px',
                opacity: 0
            }, time, 'swing', function () {
                shown = false;
                info.css('display', 'none');
            });

        }, hideDelay);

        return false;
    });
});
});

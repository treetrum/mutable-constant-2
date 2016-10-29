/*jshint esnext: true */

/** Instantiate Foundation */
$(document).foundation();

function makePostsMinHeight() {

    var $posts = $('.minHeightAdjusted');
    var totalHeight = $(window).height();
    var headerHeight = $('.header').height();
    var topnavHeight = $('.topnav').height();
    var footerHeight = 41;

    var paginationHeight;
    var paginationPaddingBottom;
    if ($('.pagination').length) {
        console.log("pagination found");
        paginationHeight = $('.pagination').height();
        paginationPaddingBottom = parseInt($('.pagination').css('padding-bottom').replace(/[^-\d\.]/g, ''));
    } else {
        console.log("pagination not found");
        paginationHeight = 0;
        paginationPaddingBottom = 0;
    }

    var minHeight = totalHeight - (headerHeight + topnavHeight + footerHeight + paginationHeight + paginationPaddingBottom);

    $posts.each(function() {
        console.log('Setting height to ' + minHeight);
        $(this).css({
            "min-height": minHeight
        });
    });

}

function handleFixedNav() {
    var currentHeight = $(window).scrollTop();
    var headerHeight = $('.header').height();

    if (currentHeight > headerHeight) {
        $('.topnav').addClass('fixed');
        $('.topnav-spacer').show();
    } else {
        $('.topnav').removeClass('fixed');
        $('.topnav-spacer').hide();
    }
}

/** On Document Load */
$(function() {

    // Set the min height of our posts area
    makePostsMinHeight();
    $(window).resize(makePostsMinHeight);

    console.log($(window).scrollTop());

    $('.topnav-spacer').css({
        height: $('.topnav').height()
    });
    handleFixedNav();
    $(window).scroll(() => {
        handleFixedNav();
    });

});
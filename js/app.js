/** Instantiate Foundation */
$(document).foundation();

/** On Document Load */
$(function() {

    // Set the min height of our posts area
    makePostsMinHeight();
    $(window).resize(makePostsMinHeight);

});

function makePostsMinHeight() {

    var $posts = $('.minHeightAdjusted');
    var totalHeight = $(window).height();
    var headerHeight = $('.header').height();
    var topnavHeight = $('.topnav').height();
    var paginationHeight = $('.pagination').height();
    var paginationPaddingBottom = parseInt($('.pagination').css('padding-bottom').replace(/[^-\d\.]/g, ''));
    var footerHeight = 41;

    var minHeight = totalHeight - (headerHeight + topnavHeight + footerHeight + paginationHeight + paginationPaddingBottom);

    $posts.each(function(index) {
        $(this).css({
            "min-height": minHeight
        });
    });

}
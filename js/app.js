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
    var footerHeight = 41;

    var minHeight = totalHeight - (headerHeight + topnavHeight + footerHeight);

    $posts.each(function(index) {
        $(this).css({
            "min-height": minHeight
        });
    });

}
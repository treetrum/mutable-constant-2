/** Instantiate Foundation */
$(document).foundation();

/** On Document Load */
$(function() {

    // Set the min height of our posts area
    makePostsMinHeight();
    $(window).resize(makePostsMinHeight);

});

function makePostsMinHeight() {

    var $posts = $('.posts');
    var totalHeight = $(window).height();
    var navHeight = 100;
    var footerHeight = 41;

    var minHeight = totalHeight - (footerHeight + navHeight);

    $posts.css({
        "min-height": minHeight
    });

}
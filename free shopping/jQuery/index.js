$(function(){
    $('.slideshow div:gt(0)').hide();
    setInterval(function(){
      $('.slideshow>div:first')
         .fadeOut(1000)
         .next()
         .fadeIn(1000)
         .end()
         .appendTo('.slideshow');
       },5000);
});

function set_body_height() { // set body height = window height
    $('.mySlides').width($(window).width());
}
$(document).ready(function() {
    $(window).bind('resize', set_body_height);
    set_body_height();
});

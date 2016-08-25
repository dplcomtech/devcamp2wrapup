$(document).ready(function () {
$(function() {
  $('#slides').slidesjs({
      width: 752,
      height: 422,
        play: {
          active: true,
          auto: true,
          interval: 4000,
          swap: true
        }
    });
  });

$('a[href^="#"]').on('click', function(event) {
    var target = $(this.getAttribute('href'));
    var targetId = target.prop('id');
    if( target.length ) {
        event.preventDefault();
        if($(window).width() > 768 || targetId == 'photos') {
            $('html, body').stop().animate({
            scrollTop: target.offset().top,
            }, 800);
        } else {
            $('html, body').stop().animate({
                scrollTop: target.offset().top,
                }, 800);
            $('html, body').animate({
                scrollTop: '-=200px',
            }, 400);
        };
    }
});
});

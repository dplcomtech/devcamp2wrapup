		var w = $(window).width(),
    toggle 		= $('#toggle-menu'),
    menu 		= $('nav ul'),
    dropdown = $('.dropdown');

$(function() {
  $(toggle).on('click', function(e) {
    e.preventDefault();
    menu.toggle();
  });
});

$(window).resize(function(){
  if(w > 320 && menu.is(':hidden')) {
    menu.removeAttr('style');}
});


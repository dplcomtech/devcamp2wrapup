$(document).ready(function(){
  $('nav').slideUp('0');
  $('header').hover(function(){
      $('nav').slideDown('100', 'linear');
    }, function () {
      $('nav').slideUp('100', 'linear');
  });
});
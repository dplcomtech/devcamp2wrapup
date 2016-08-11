$(document).ready(function(){

  $('#minimize').click(function(){
    $('.pyramid').fadeToggle(500);
      $(this).toggleClass("closed")
  });
  
  $('.logo').click(function(){
      window.location = "https://googledrive.com/host/0Bx-MYUhFRSvPLTNWa0xHRjc3NnM"
  })

  $('.pyramid_item:not(.blank)').click(function(){
    alert('Not Available Currently');
  });

});

jQuery(document).ready(function($) {


$(function() {
  var viewPortWidth = $(window).width();

  $(window).scroll(function(event) {
    event.preventDefault();
    if (viewPortWidth > 480) {
      if ($(this).scrollTop() > 180) {
        $('.scrolltop').fadeIn();
      } else {
        $('.scrolltop').fadeOut();
      }
    }
  });

  $('.scrolltop').click(function(event) {
    $('html, body').animate({scrollTop : 0 }, 600);
    event.preventDefault();
  });
});

    $('#secondary li.expanded a').addClass('disabled');

    $("#feature-category-img .feature-img.img-sm").parents().addClass('img-sm-wrap');

});
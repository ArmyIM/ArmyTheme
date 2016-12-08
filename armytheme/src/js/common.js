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
    if( $('#feature-category-img').hasClass('img-sm') ) { $(document.body).addClass('has-img-sm'); }

});
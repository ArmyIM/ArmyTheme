jQuery(document).ready(function($) {

  var $slider = $('#feature-slides')
        .on('init', function(slick) {
            $('#feature-slides').fadeIn(1000);
        })
  .slick({
                  focusOnSelect: true,
            autoPlay: true,
            lazyLoad: 'ondemand',
            dots: true,
            centerMode: true,
            pauseOnDotsHover: true,
            infinite: true,
            speed: 300,
            arrows:true,
            height: 450,
            centerPadding: 0,
            appendDots: $('#dots-nav')
  });

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


  $('#secondary li.expanded a').addClass('disabled');

  if($(".feature-img").hasClass("img-sm")) 
     $("body").addClass("has-img-sm");

    $('.gallery').featherlightGallery({
            gallery: {
                fadeIn: 300,
                fadeOut: 300,
                next: 'next »',
                previous: '« previous'
            },
            openSpeed:    300,
            closeSpeed:   300
        });

});
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

  if($(".feature-img").hasClass("img-sm")) 
     $("body").addClass("has-img-sm");

    $('.gallery').featherlightGallery();


    $('#mobile-nav').mmenu({
        extensions: ["effect-menu-slide", "effect-listitems-slide"],
        slidingSubmenus: true,
        toggleText: '<span class="sr-only">toggle submenu</span>',
    },

     {
         offCanvas:
          {
              pageSelector: "#page"
          }

     });

    $("#mobile-nav-btn").click(function () {
        $("#mobile-nav").data("mmenu").close();

    });


});


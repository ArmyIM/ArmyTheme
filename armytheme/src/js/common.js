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

    var $menu = $('#mobile-nav');
    $menu.mmenu({
        slidingSubmenus:        true,
        toggleText:             '<span class="sr-only">toggle submenu</span>',
        extensions:             ["effect-menu-slide", "effect-listitems-slide","theme-dark"],
        dragOpen:               true,
        setSelected:        
            {
                                hover: true,
                                parent: true
            },     
        searchfield: 
            {
                                resultsPanel: true,
                                clear: true
            },
        navbars: 
            [
                {
                               position: top
                },
                {
                               position: top,
                               content: ["searchfield"]
                },
                {
                               position: bottom,
                               content: [
                                  "<a class='fa fa-facebook' href='https://www.facebook.com/TheAustralianArmy'></a>",
                                  "<a class='fa fa-twitter' href='http://twitter.com/AustralianArmy'></a>",
                                  "<a class='fa fa-youtube' href='http://www.youtube.com/user/AustralianArmyHQ'></a>"
                               ]
                }
            ]
        });
 
    var $icon = $("#mobile-nav-btn");
    var API = $menu.data( "mmenu" );

    $icon.on( "click", function() {
       API.open();
    });

    API.bind( "opened", function() {
       setTimeout(function() {
          $icon.addClass( "is-active" );
       }, 100);
    });
    API.bind( "closed", function() {
       setTimeout(function() {
          $icon.removeClass( "is-active" );
       }, 100);
    });

  });


 var gallery = document.getElementsByClassName('gallery');
    var mc = new Hammer(gallery);
    mc.on("panleft panright tap press", function(ev) {
        gallery.textContent = ev.type +" gesture detected.";
    });

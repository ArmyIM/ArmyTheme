
jQuery(document).ready(function($){

    $('#feature-slides').slick({
        dots: true,
        centerMode: true,
        pauseOnDotsHover: true,
        infinite: true,
        speed: 300,
        height: 450,
        centerPadding: 0
    });

    
$('#secondary .menu li.dropdown-submenu a').removeAttribute("data-toggle");
$(this).removeData('toggle');

});
    

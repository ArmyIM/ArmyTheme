jQuery(document).ready(function($){
  var $slider = $('#feature-slides')
        .on('init', function(slick) {
            $('#feature-slides').fadeIn(1000);
            })
        .slick({
            
            focusOnSelect: true,
            lazyLoad: 'ondemand',
            dots: true,
		    centerMode: true,
		    pauseOnDotsHover: true,
		    infinite: true,
		    speed: 300,
		    height: 450,
		    centerPadding: 0
        });

       // $('.caption').fadeIn(1000);

    $('#secondary .menu li.dropdown-submenu a').removeAttribute("data-toggle");
	$(this).removeData('toggle');
});
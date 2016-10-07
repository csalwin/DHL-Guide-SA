(function ($, root, undefined) {

	$(function () {

		'use strict';

		// Nav bar JS
		$('ul.navbar-nav').before('<button type="button" class="navbar-toggle sidebar"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar transparent"></span><span class="icon-bar"></span></button>');


		$('.navbar-toggle').click(function (){
			$('.navbar-collapse').toggleClass('showsidebar');
			$('body').toggleClass('mobileshowsidebar');
		});


		if ($("body").hasClass('mobileshowsidebar')) {
			$(window).click(function () {
				$('.navbar-collapse').removeClass('showsidebar');
				$('body').removeClass('mobileshowsidebar');
			})
		}


		//Slider
		$('.bxslider').bxSlider();


        //Search Bar js for desktop

        $('.showSearch').click(function () {
            $(this).toggleClass('active');
            $('#formComponents').slideToggle();

        });






	});



})(jQuery, this);

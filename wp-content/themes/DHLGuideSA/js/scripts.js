(function ($, root, undefined) {

	$(function () {

		'use strict';

		// Nav bar JS
		// $('ul.navbar-nav').before('<button type="button" class="navbar-toggle sidebar"><span class="sr-only">Toggle navigation</span><span class="icon-bar left"></span><span class="icon-bar transparent"></span><span class="icon-bar right"></span></button>');


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
		$('.bxslider').bxSlider(
            {
                auto: true,
                controls: false
            }
        );


        //Search Bar js for desktop
        $('.showSearch').click(function () {
            $(this).toggleClass('active');
            $('#formComponents').slideToggle();

        });


       // FeedbackBar

        if ($(document).height() <= $(window).height()) {
            $('.feedbackBar').show();
        }
        $(window).scroll(function() {

                if ($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
                        $('.feedbackBar').slideDown();
                } else {
                        $('.feedbackBar').slideUp();
                }

        });

        if(location.hash != null && location.hash != ""){
            var url = document.location.toString();
            var urlSplit = $('#'+url.split('#')[1]);
            if ( url.match('#') ) {
                urlSplit.addClass('in');
                var cPanelHeading = urlSplit.prev();
                cPanelHeading.find( ".panel-title a" ).removeClass('collapsed');
            }

        }

	});

    //TODO add this to the line to check if its already shown
    // if ($('.feedbackBar').offsetParent === null) {



})(jQuery, this);

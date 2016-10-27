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

        $(".panel-collapse").on("shown.bs.collapse", function () {
            var selected = $(this);
            var collapseh = $(".collapse .in").height();
            $('html, body').animate({
                scrollTop: selected.offset().top - 50
            }, 500);

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
                $('html, body').animate({
                    scrollTop: urlSplit.offset().top - 50
                }, 500);
                var cPanelHeading = urlSplit.prev();
                cPanelHeading.find( ".panel-title a" ).removeClass('collapsed');
            }

        }

        // tablet "one touch (click)" X "hover" > link redirection
        $('a').on('touchmove touchend', function(e) {

            // if touchmove>touchend, set the data() for this element to true. then leave touchmove & let touchend fail(data=true) redirection
            if (e.type == 'touchmove') {
                $.data(this, "touchmove_cancel_redirection", true );
                return;
            }

            // if it's a simple touchend, data() for this element doesn't exist.
            if (e.type == 'touchend' && !$.data(this, "touchmove_cancel_redirection")) {
                var el = $(this);
                var link = el.attr('href');
                if (el.target == '_blank'){
                    window.open(link, '_blank').focus();
                }else{
                    window.location = link;
                }

            }

            // if touchmove>touchend, to be redirected on a future simple touchend for this element
            $.data(this, "touchmove_cancel_redirection", false );
        });

	});

    //TODO add this to the line to check if its already shown
    // if ($('.feedbackBar').offsetParent === null) {











})(jQuery, this);

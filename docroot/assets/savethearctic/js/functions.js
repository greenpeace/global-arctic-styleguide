;(function($, window, document, undefined) {
	var $win = $(window);
	var $doc = $(document);

	$doc.ready(function() {
		// Fullscreener
		$('.section-head .section-image img').fullscreener();

		// Fixed Navigation
		var $widgetNav = $('.widget-nav');
		var $header = $('.header').height();
		$win.scroll(function () {
			if ($(this).scrollTop() > $header) {
				$widgetNav.addClass('fixed');				
			} else {
				$widgetNav.removeClass('fixed');
			}
		});

		// Credits Overlay
		var $footerOverlay = $('.footer-overlay');
		$('.btn-credits').on('click', function(e) {
			$footerOverlay.addClass('visible');

			e.preventDefault();
		});

		$('.btn-exit').on('click', function(e) {
			$footerOverlay.removeClass('visible');

			e.preventDefault();
		});

		// Nav Mobile
		$('.nav-mobile').on('click', function(e) {
			$(this).toggleClass('active');

			$('.container').toggleClass('mobile');

			$('.sidebar').toggleClass('visible');

			e.preventDefault();

			e.stopPropagation();
		});

		$doc.on('click', function(event) {
			var $clickedElement = $(event.target);

			if ( !$clickedElement.parents('.sidebar').length ) {
				$('.sidebar.visible').removeClass('visible');
				$('.container.mobile').removeClass('mobile');
				$('.nav-mobile.active').removeClass('active');
			}
		});

		// Scroll To Section
        active_state();

        $win.scroll( function(){
            active_state();
        });

        //Active state
        function active_state(){
            $('.section').each( function (){
                var sectOffset = $(this).offset().top;

                if( $win.width() < 1024 ) {
					if ( sectOffset < $win.scrollTop() + 44 ){
	                    var id = $(this).attr('id');

	                    $('.nav li').removeClass('current');
	                    $('.nav').find('a[href="#' + id + '"]').closest('li').addClass('current');

	                    if ( sectOffset == 0 ){
	                        $('.nav li').removeClass('current')
	                    }
	                };
				} else {
					if ( sectOffset < $win.scrollTop() ){
	                    var id = $(this).attr('id');

	                    $('.nav li').removeClass('current');
	                    $('.nav').find('a[href="#' + id + '"]').closest('li').addClass('current');

	                    if ( sectOffset == 0 ){
	                        $('.nav li').removeClass('current')
	                    }
	                };
				}
            })
        };

        var waypoint;

        $('nav a').on('click', function(e){
            waypoint = $(this).attr('href')

            if( $win.width() < 1024 ) {
				$('html, body').animate({scrollTop: $(waypoint).offset().top  - 43}, 700);
			} else {
				$('html, body').animate({scrollTop: $(waypoint).offset().top  + 1}, 700);
			}

            e.preventDefault();
        });

	});
})(jQuery, window, document);

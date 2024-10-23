	 $(document).ready(function() {
	 	window.setTimeout('fadeout();', 300);
	 });

	 function fadeout() {
	 	$('.rz-loader-wrapper').fadeOut('', function() {});
	 }

	 (function($) {

	 	'use strict';

	 	var $window = $(window),
	 		$body = $('body'),
	 		$html = $('html');

	 	const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
	 	const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

	 	function wraprzNav() {
	 		if ($window.width() < 992) {
	 			$('.rz-left-nav').wrapAll('<div class="offcanvas offcanvas-start" tabindex="-1" id="rznavOffcanvas" aria-labelledby="rznavOffcanvasLabel"></div>');
	 		} else {
	 			$('.rz-left-nav').unwrap('<div class="offcanvas offcanvas-start" tabindex="-1" id="rznavOffcanvas" aria-labelledby="rznavOffcanvasLabel"></div>');
	 		}
	 	}
	 	// $window.on('load', function() {		
	 	// 	wraprzNav();
	 	// });

	 	$(function() {
	 		var resizeTimer;
	 		var initialSize = $(window).width();
	 		$(window).resize(function() {
	 			clearTimeout(resizeTimer);
	 			resizeTimer = setTimeout(function() {
	 				var delayedSize = $(window).width();
	 				// if we resize the page but we don't cross the 650 threshold, do nothing
	 				if ((initialSize > 992 && delayedSize > 992) || (initialSize < 992 && delayedSize < 992)) {
	 					return
	 				}
	 				// else if we resize the page and cross the 650 threshold, do something
	 				else {
	 					if (delayedSize > 992) {
	 						// $('#cat-container').unwrap('#cat-area');
	 						$('.rz-left-nav').unwrap('#rznavOffcanvas');
	 					} else if (delayedSize <= 992) {
	 						$('.rz-left-nav').wrapAll('<div class="offcanvas offcanvas-start" tabindex="-1" id="rznavOffcanvas" aria-labelledby="rznavOffcanvasLabel"></div>');
	 					}
	 				}

	 				initialSize = delayedSize;
	 			}, 0);
	 		});
	 	});

	 })(jQuery);
// Menu Script for Primal Template //

jQuery(document).ready(function($){
  "use strict";
	var $lateral_menu_trigger = $('#nav-trigger'),
		$content_wrapper = $('.main'),
		$navigation = $('header');

	//open-close lateral menu clicking on the menu icon
	$lateral_menu_trigger.on('click', function(event){
		event.preventDefault();

		$lateral_menu_trigger.toggleClass('is-clicked');
		$navigation.toggleClass('is-active');
		$content_wrapper.toggleClass('is-active').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
			// firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
			$('body').toggleClass('overflow-hidden');
		});
		$('#nav-menu').toggleClass('is-active');

		//check if transitions are not supported - i.e. in IE9
		if($('html').hasClass('no-csstransitions')) {
			$('body').toggleClass('overflow-hidden');
		}
	});

	//close lateral menu clicking outside the menu itself
	$content_wrapper.on('mouseover', function(event){
		if( !$(event.target).is('#nav-trigger, #nav-trigger span') ) {
			$lateral_menu_trigger.removeClass('open');
			$navigation.removeClass('is-active');
			$content_wrapper.removeClass('is-active').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
				$('body').removeClass('overflow-hidden');
			});
			$('#nav-menu').removeClass('is-active');
			//check if transitions are not supported
			if($('html').hasClass('no-csstransitions')) {
				$('body').removeClass('overflow-hidden');
			}

		}
	});
});

$(document).ready(function(){
	$('.nav-trigger').click(function(){
		$(this).toggleClass('open');
	});
});

$('#nav-menu a').on('click', function(){
    $('.nav-trigger').click(); //bootstrap 2.x
});

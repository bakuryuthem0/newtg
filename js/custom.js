jQuery(document).ready(function($) {
	$(document).bind('DOMNodeInserted', function(event) {
		
		$(document).on('click','.service', function(event) {
			var $boton = $(this);
			$boton.fadeOut('fast');
			$('.content-aside').addClass('active');
			$('.content-image img').attr('src',$boton.data('img'));
			$('.content-text p').html($boton.data('texto'));
		});
		$(document).on('click','.get-back', function(event) {
			$('.service').fadeIn('fast')
			$('.content-aside').removeClass('active');
			$('#index-content').addClass('hidden');
		});
		$(document).on('click','.project', function(event) {
			var $boton = $(this);
			$('.project-name').html($boton.data('titulo'))
			$('.project-text').html($boton.data('dec'))
		});
		$(document).on('scroll','.scrollable', function() {

			if ($('.content-aside').offset().top <= 0) {
				if (!$('.get-back').hasClass('fixed')) {
					$('.get-back').addClass('fixed');
				}
				$('.get-back').css({'top': -1*$('.content-aside').offset().top})
			}else
			{
				$('.get-back').removeClass('fixed');
				$('.get-back').css({'top': 0})
			}
		});
		$(document).on('submit','.validateDontSubmit',function (e) {
		    //prevent the form from doing a submit
		    e.preventDefault();
		    return false;
		})
	});
});
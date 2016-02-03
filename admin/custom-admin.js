function activeteStatus (inp,toHidden,toShow,toRemove,toAdd) {
	inp.prevAll(toHidden).addClass('hidden');
	inp.prevAll(toShow).removeClass('hidden');
	inp.parent().removeClass(toRemove);
	inp.parent().addClass(toAdd);
	inp.nextAll('.form-control-feedback').addClass('active');
}
function checkEmpty(inp) {
	if (inp.val() == "") {
		activeteStatus(inp,'.control-label','.label-control-danger','has-success','has-error');
		return 0;
	}else
	{
		activeteStatus(inp,'.control-label','.label-control-success','has-error','has-success');
		return 1;
	}
}
function removeResponseAjax() {
	$('.responseAjax').removeClass('alert-success');
	$('.responseAjax').removeClass('alert-danger');
	$('.responseAjax').removeClass('active');

}
jQuery(document).ready(function($) {
	var baseUrl = $('.baseUrl').val();
	$('.form-control').on('blur', function(event) {
		checkEmpty($(this));
	});
	$('.logMeIn').on('click', function(event) {
		var proceed = 1;

		proceed = checkEmpty($('.email'));
		proceed = checkEmpty($('.password'));

		if (proceed == 1) {
			removeResponseAjax();
			var boton = $(this);
			var remember;
			if ($('.remember:checked').length > 0) {
				remember = 1;
			}else
			{
				remember = 0;
			}
			var dataPost = {
				'username' : $('.email').val(),
				'password' : $('.password').val(),
				'remember' : remember,
			}
			$('.miniLoader').addClass('active');
			boton.addClass('disabled').prop('disabled',true);
			$.ajax({
				headers: {'csrftoken': $('input[name = _token]').val()},
				url: baseUrl+'/administrador/login/enviar',
				type: 'POST',
				dataType: 'json',
				data: dataPost,
				success: function(response){
					$('.miniLoader').removeClass('active');
					$('.responseAjax').children('p').html(response.msg);
					$('.responseAjax').addClass('alert-'+response.type).addClass('active')

					if (response.type == 'danger') {
						boton.removeClass('disabled').prop('disabled',false);
					}else
					{
						setTimeout(function() {
							window.location.reload();	
						},2000);
					}
				},
				error: function() {
					$('.responseAjax').children('p').html('Ups, ha habido un error.');
					$('.responseAjax').addClass('alert-danger').addClass('active')
					$('.miniLoader').removeClass('active');
					boton.removeClass('disabled').prop('disabled',false);
				}
			})
			
		};
	});
});
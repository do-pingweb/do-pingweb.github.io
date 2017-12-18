(function ($) {
  $(document).ready(function () {
	$(".order").on('submit', function (e) {
	  var th = $(this);
	  $.ajax({
		type: "POST",
		url: "form/form.php",
		data: th.serialize()
	  }).done(function () {
		$('.order').css('display','none');
		$('.tagline__copyright').css('display','none');
		$('.form-success').css('display','flex');
		setTimeout(function() {
		  $('.form-success').css('display','none'); 
		  $('.order').css('display','block');
		  $('.tagline__copyright').css('display','block');
		  $('.order input[type="text"]').val('');
		  $('.callback').val('Заказать обратный звонок');
		  $('.remodal').css('display','none');
		  $('.remodal-wrapper').css('display','none');
		  $('.remodal-overlay').css('display','none');
		}, 2000);
	  });
	  return false;
	});
  });	
})(jQuery);
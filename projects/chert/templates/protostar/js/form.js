(function ($) {
  $(document).ready(function () {
	$("form").on('submit', function (e) { 
	  e.preventDefault();
      var fd = new FormData( this );
		$.ajax({
		  type: "POST",
		  contentType: false,
      	  processData: false,
			url: "http://0067.ru/chertenok/templates/protostar/form/form.php", 
			data: fd
		  }).done(function () {
			/*$('.tagline__copyright').css('display','none');
			$('.our-designer__copyright').css('display','none');
			$('input[type="submit"]').css('display','none');*/
			$('.form-success').css('display','flex');
			setTimeout(function() {
			  $('.form-success').css('display','none'); 
			  /*$('input[type="submit"]').css('display','block');
			  $('.tagline__copyright').css('display','block');
			  $('.our-designer__copyright').css('display','block');*/
		      $('.remodal-wrapper').css('display','none');
		      $('.remodal-overlay').css('display','none');
			  $('input[type="text"]').val('');
			  if (location.pathname.indexOf('#modal')){
				$('html').removeClass('remodal-is-locked');
				window.location.href="http://0067.ru/chertenok";
			  }
			}, 2000);
		  });
		return false;
	  });


		$('.modal-wrap').click(function(event) {
		if ($(event.target).closest(".flip-container").length) return;
			$(".modal-wrap").hide();
			$('.flipper').removeClass('fliphover');
			$('.modal-wrap').removeClass('active-modal')
			event.stopPropagation();
		});
	});


})(jQuery);
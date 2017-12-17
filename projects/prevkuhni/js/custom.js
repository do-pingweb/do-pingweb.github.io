$(document).ready(function(){
  $('.advantages__item').mouseenter(function(){
	$(this).find('img').removeClass('animated-ico--default');   
	$(this).find('img').addClass('animated-ico--hover'); 
  });
  $('.advantages__item').mouseleave(function(){
	$(this).find('img').removeClass('animated-ico--hover');
    $(this).find('img').addClass('animated-ico--default');	
  });
  $('.why-cheaper__item').mouseenter(function(){
	$(this).find('img').removeClass('animated-ico--default');   
	$(this).find('img').addClass('animated-ico--hover'); 
  });
  $('.why-cheaper__item').mouseleave(function(){
	$(this).find('img').removeClass('animated-ico--hover');
    $(this).find('img').addClass('animated-ico--default');	
  });
  $('.our-designer__adv-item').mouseenter(function(){
	$(this).find('img').removeClass('animated-ico--default');   
	$(this).find('img').addClass('animated-ico--hover'); 
  });
  $('.our-designer__adv-item').mouseleave(function(){
	$(this).find('img').removeClass('animated-ico--hover');
    $(this).find('img').addClass('animated-ico--default');	
  });
  var rate;
  $('.model__free-calc').click(function(){
	rate = $(this).data("target");
	$('.rates option').filter(function(i, e) { return $(e).text() == rate}).prop("selected", true);
  })
  $('.model-for--optima').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: true,
	fade: true,
	asNavFor: '.model-nav--optima'
  });
  $('.model-nav--optima').slick({
	arrows: false,	
	slidesToShow: 4,
	slidesToScroll: 1,
	asNavFor: '.model-for--optima',
	dots: false,
	centerMode: false,
	focusOnSelect: true
  });
  $('.model-for--good').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: true,
	fade: true,
	asNavFor: '.model-nav--good'
  });
  $('.model-nav--good').slick({
	arrows: false,	
	slidesToShow: 4,
	slidesToScroll: 1,
	asNavFor: '.model-for--good',
	dots: false,
	centerMode: false,
	focusOnSelect: true,
	infinite: true
  });
  $('.model-for--rich').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: true,
	fade: true,
	asNavFor: '.model-nav--rich'
  });
  $('.model-nav--rich').slick({
	arrows: false,	
	slidesToShow: 4,
	slidesToScroll: 1,
	asNavFor: '.model-for--rich',
	dots: false,
	centerMode: false,
	focusOnSelect: true,
	infinite: true
  });
  $('.model-for--exclusive').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: true,
	fade: true,
	asNavFor: '.model-nav--exclusive'
  });
  $('.model-nav--exclusive').slick({
	arrows: false,	
	slidesToShow: 4,
	slidesToScroll: 1,
	asNavFor: '.model-for--exclusive',
	dots: false,
	centerMode: false,
	focusOnSelect: true,
	infinite: true
  });
  $('.production__form').on('submit', function(e){
    e.preventDefault();
	window.location = "/print.php";
  });
  $('.radio').change(function(){ 
    if ($('.radio-time').is(':checked')){
	  //$('.hours').prop('disabled', false);
      //$('.hours').prop('required', true);	
	  //$(this).siblings('.hours').prop('disabled', false);
	  //$(this).siblings('.hours').prop('required', true);
	}		
    else {
	  //$('.hours').prop('disabled', true); 
      //$(this).siblings('.hours').prop('disabled', true); 
      //$(this).siblings('.hours').prop('required', false);
    } 	  
  });
/*$('.radio').change(function(){ 
    if ($('.radio-time').is(':checked')){
	  $('.hours').prop('disabled', false);
      $('.hours').prop('required', true);	
	}		
    else
	  $('.hours').prop('disabled', true);   
  });*/
  
});
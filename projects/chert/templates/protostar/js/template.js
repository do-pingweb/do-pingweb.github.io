jQuery(document).ready(function(){
jQuery.fn.animate_Text = function() {
  string = this.text();
  return this.each(function(){
	var jQuerythis = jQuery(this);
	  jQuerythis.html(string.replace(/./g, '<span class="new">$&</span>'));
	  jQuerythis.find('span.new').each(function(i, el){
	  setTimeout(function(){ jQuery(el).addClass('div_opacity'); }, 100 * i);
	});
  });
};
jQuery('#example').show();
jQuery('#example').animate_Text();
});
/*
jQuery(document).mouseup(function (e){
  var hiddenmenu = jQuery(".hidden-menu");
  if (!hiddenmenu.is(e.target) && hiddenmenu.has(e.target).length === 0) {
	jQuery(".hidden-menu").hide(800, "linear");
	jQuery('.top').css('margin-bottom','0');
	jQuery('.itemid-101 .top').css('margin-bottom','170px');
	jQuery('.itemid-106 .top').css('margin-bottom','170px');
  }
});  
jQuery('.burger').click(function(){
  if (jQuery('.hidden-menu').is(":visible")) {
	jQuery('.hidden-menu').hide(800, "linear");
	jQuery('.top').css('margin-bottom','0');
	jQuery('.itemid-101 .top').css('margin-bottom','170px');
	jQuery('.itemid-106 .top').css('margin-bottom','170px');
  }
  else {
	jQuery('.hidden-menu').show(800, "linear");
	jQuery('.top').css('margin-bottom','170px');
  }
});*/
	
jQuery(document).ready(function ($) {
	
    //init Flex Slider
    $('.flexslider').each(function(){

	 	var flex_slidewidth = $(this).data('flex-slidewidth');
		var flex_minslides = $(this).data('flex-minslides');
		var flex_maxslides = $(this).data('flex-maxslides');
		var flex_slidemargin = $(this).data('flex-slidemargin');
		var flex_pager = $(this).data('flex-pager');
		//var flex_captions = $(this).data('flex-captions');
		var flex_moveslides = $(this).data('flex-moveslides');
		console.log($(this).data('flex-slidemargin'));
	 	$(this).flexslider({
			animation : "slide",
			animationLoop : true,
			minItems : flex_minslides,
			maxItems : flex_maxslides,
			itemMargin : flex_slidemargin,
			itemWidth : flex_slidewidth,
			move : flex_moveslides,
			controlNav : flex_pager
		});
   });	
});

(function($) {
    "use strict";
    jQuery(document).ready(function() {
	 var top_news = jQuery('#featured-slider');
		
		top_news.show().owlCarousel({
			items : 1,
			singleItem : true,
			responsive: true,
			navigation : true,
			navigationText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		});		
    });
})(jQuery);
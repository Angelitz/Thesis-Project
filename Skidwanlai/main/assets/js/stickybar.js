jQuery(document).ready(function(){
		var topbar = jQuery(".top-bar").offset().top;
		jQuery(".top-bar").wrap('<div class="top-bar-placeholder"></div>');
		jQuery(".top-bar-placeholder").height(jQuery(".top-bar").outerHeight());
			
		var headernav = jQuery(".header-nav").offset().top;
		jQuery(".header-nav").wrap('<div class="header-nav-placeholder"></div>');
		jQuery(".header-nav-placeholder").height(jQuery(".header-nav").outerHeight());
			
		var mainheader = jQuery(".main-header").offset().top;
			
		jQuery(window).scroll(function(){
			var topbarposition = jQuery(window).scrollTop();
				
			if(topbarposition >= topbar){
				jQuery(".top-bar").addClass("top-bar-fixed");
			}
			else {
				jQuery(".top-bar").removeClass("top-bar-fixed");
			}
		});
			
		jQuery(window).scroll(function(){
			var headernavposition = jQuery(window).scrollTop();
				
			if(headernavposition >= (headernav-mainheader)){
				jQuery(".header-nav").addClass("header-nav-fixed");
			}
			else {
				jQuery(".header-nav").removeClass("header-nav-fixed");
			}
		});
	});
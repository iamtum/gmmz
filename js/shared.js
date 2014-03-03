/**
 * shared.js
 */


/* !stack ------------------------------------------------------------------- */
jQuery(document).ready(function($) {
	gobalNav();
});

/* !gobal navigation -------------------------------------------------------------------- */
var gobalNav = (function(){
	//gobal navigation
	$("#gNavi li").hover(function(){
		 $(this).children('div.subNav').stop().slideDown(500); 

	},function(){ 
		$(this).children('div.subNav').stop().slideUp(100);
	});
});

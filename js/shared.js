/**
 * shared.js
 */

/* !stack ------------------------------------------------------------------- */
jQuery(document).ready(function($) {
	gobalNav();
	$(".slides a:last-child").css("margin-right","0px")
	$("#contents .pagination li:first-child").css("padding-right","10px")
	$("#contents .pagination li:last-child").css("padding-left","0px")
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

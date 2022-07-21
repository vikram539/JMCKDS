$(document).ready(function(){	
	"use strict";	
//================= Main Menu fixed on scroll 
	$(window).on("scroll",function(){
		let posTop=$(window).scrollTop();
		if(posTop > 60)
		{
			$(".top-primary-menu").addClass("menu-resize");
		}
		else
		{
			$(".top-primary-menu").removeClass("menu-resize");
		}
		
		
	if(posTop  > 350)
	{
		$("#b247SearchBoxContainer").addClass('widgetPos');
	}
	else
	{
		$("#b247SearchBoxContainer").removeClass('widgetPos');
	}
	
	});
	setTimeout(function(){
		$(".tweenty4-outer").animate({right:"20px"}, 1000);
	}, 2000);
});
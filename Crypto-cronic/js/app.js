$(function(){
	setTimeout(() =>{
	  $("#homeBtn, #video_1").fadeIn();
	 
	}, 1500);
	
	$(document).on("click", ".linkButton", function(e){
	  e.preventDefault();
	  let this_ = $(this);
	  let signatureImg = $(".row>.signatureImg");
	  let signatureText = $(".row>.signatureText");
	  $(this).closest("#homeBtn").fadeOut();
	  $(".row>.signatureImg>img").animate({marginLeft: 640}, 1000);
	  $(".row>.signatureText").animate({left: 0, zIndex: 999}, 1000, function(){
		$(this).css({"opacity": 1, "transition":"all linear 0.5s"});
	  });

	  $(".row>.signatureBtnBlock").animate({bottom: 0, opacity: 1}, 1000);
	  $("#video_2").fadeIn();
	})

	// Icon bar function
	$(document).on("click", "#iconBar>a", function(e){
		e.preventDefault();
	  $("#iconBar>a>img").toggleClass("iconRotate");
	  $(".menuItems").fadeToggle();
	})
	
	$(".animateText>.animateHeading:first-child").addClass("active");	

	function changeClass() {
		if ($(".animateText>.animateHeading.active").next(".cssClass").length > 0) {
			$(".animateText>.animateHeading.active").removeClass("active").next(".cssClass").addClass("active");
		}
		else {
			$(".animateText").fadeOut();
		// 	$(".animateText>.animateHeading.active").removeClass("active");
		// 	$(".cssClass").first().addClass("active");
		}

		setTimeout(changeClass, 1500); // 2000ms = 1sec
	}
	setTimeout( () =>{

		changeClass();
	}, 2000)


	
	$(document).on("click", ".grid_token", function(){
		$(".tokenPup_up").fadeIn();

		let _curentId = $(this).attr("data-id");
		$.ajax({
			url: "assets/ajax/tokenData.php",
			type: "GET",
			data: {pageId: _curentId},
			success: function(result){
			$(".tokentContent").html(result);

				console.log(result);
			}
		})
	});

	// close grid
	$(document).on("click", ".tokenPup_up .close", function(){
		$(".tokenPup_up").fadeOut();
	})
  })
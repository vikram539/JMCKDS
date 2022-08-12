$(document).ready(function(){
    
    // About us dropDown
    $(document).on("click",".ul-listing>li>span>img", function(){
       
        $(this).closest("li").addClass("active").siblings().removeClass("active");
        $(".ul-listing>li.active").find(".dropDownContent").slideDown();
        $(".ul-listing>li").not('.active').find(".dropDownContent").slideUp();

        $(".ul-listing>li.active").find("img").css({"transform":"rotate(45deg)"});
        $(".ul-listing>li").not('.active').find("img").css({"transform":"rotate(0deg)"});
        
    })
})
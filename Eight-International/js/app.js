$(document).ready(function(){  

    // Portfolio page    
    $(document).on("click", ".portfolio ul>li", function(){
        $(this).addClass("active").siblings().removeClass("active"); 
    })
    

    // Reach us Page
    $(document).on("click", ".reach-us ul>li", function(){
        $(this).addClass("active").siblings().removeClass("active");  
        let _servicesName = $(document).find(".contact-us-form .contactForm form input#servicesName");      
        let getText = $(this).find(".border-box>h4").text();
        $(_servicesName).val(getText);
    })
    
    // About us dropDown
    $(document).on("click",".ul-listing>li>span>img", function(){
       
        $(this).closest("li").addClass("active").siblings().removeClass("active");
        $(".ul-listing>li.active").find(".dropDownContent").slideDown();
        $(".ul-listing>li").not('.active').find(".dropDownContent").slideUp();

        $(".ul-listing>li.active").find("img").css({"transform":"rotate(45deg)"});
        $(".ul-listing>li").not('.active').find("img").css({"transform":"rotate(0deg)"});        
    })

    

    // Contact us form
    $(document).on("submit", function(){
        let inputName = $("#inputName").val();
        let inpuEmail = $("#inpuEmail").val();
        let Message = $("#Message").val();
        let _validation = $(".contact-us-form .contactForm #formId>[class*='col-']").children().last();
        console.log(_validation);

        // validation
        if(inputName == ""){
            $("#inputName").addClass("boxShadow");
            return false;
        }
        else{
            $("#inputName").removeClass("boxShadow");
        }
        
        if(inpuEmail == ""){
            $("#inpuEmail").addClass("boxShadow");
            return false;
        }
        else{
            $("#inpuEmail").removeClass("boxShadow");
        }
        
        if(Message == ""){
            $("#Message").addClass("boxShadow");
            return false;
        }
        else{
            $("#Message").removeClass("boxShadow");
        }
    })
    
})
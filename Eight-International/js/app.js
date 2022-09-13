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
        $(".ul-listing>li.active").find(".dropDownContent").slideToggle();
        // $(".ul-listing>li").not('.active').find(".dropDownContent").slideUp();

        $(".ul-listing>li.active").find("img").toggleClass("imgRotateToggle");
        // $(".ul-listing>li").not('.active').find("img").toggleClass("imgRotateZero");        
    })

    

    // Contact us form
    $("#formId").on("submit", function(e){       

        let inputName = $("#inputName").val();
        let inpuEmail = $("#inpuEmail").val();
        let Message = $("#Message").val();
        let _validation = $(".contact-us-form .contactForm #formId>[class*='col-']").children().last();
        let _htmlBody = $("html, body");

        // validation
        if(inputName == "" || inpuEmail == "" || Message == ""){
            if(inputName == ""){
                $("#inputName").addClass("boxShadow");
                $(_htmlBody).animate({scrollTop: $("#inputName").offset().top - 80+"px"}, 1000);          

                return false;
            }
            else{
                $("#inputName").removeClass("boxShadow");
            }
            
            if(inpuEmail == ""){
                $("#inpuEmail").addClass("boxShadow");
                $(_htmlBody).animate({scrollTop: $("#inpuEmail").offset().top - 80+"px"}, 1000);
                return false;
            }
            else{
                $("#inpuEmail").removeClass("boxShadow");
            }
            
            if(Message == ""){
                $("#Message").addClass("boxShadow");
                $(_htmlBody).animate({scrollTop: $("#Message").offset().top - 80+"px"}, 1000);
                return false;
            }
            else{
                $("#Message").removeClass("boxShadow");
            }
        }
        else{
                $.ajax({
                    type: "POST",
                    url: "assets/form-submit-ajax.php",
                    data: {
                        fname: inputName,
                        email: inpuEmail,
                        mesage: Message,
                        servicesName: $("#servicesName").val(),
                        token_generate: $("#token_generate").val()
                    },                    

                    success: function(html){
                        if(html == 1){
                            $(".formSuccess").html(html);
                            $("#formId").trigger('reset');
                            $(".contact-us-form .row>.col-6").addClass("reduceHeight");
                        }
                        else{
                            alert("fail to execute...");
                        }
                    }
                    
                })
        }
        e.preventDefault();
    })
    
})
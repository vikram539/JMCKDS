$(document).ready(function(){
    $(".navRight").on("click", function(){
        $(".menuOptions").slideToggle();
        $(this).find(".menuBarWrap .menuBorderLine").each(function(data){
            $(this).toggleClass('menuBorderIcon');
        })
    })

    // About us tab panel
    $(document).on('click', '.listTab>ul>li', function(){
        $(this).find(".tabContent").slideToggle();
        $(this).find('span>img').toggleClass("rotateImg");
    })

    // Client slider
    // Next....
    $(document).on("click", "#nextItem", function(){
        // console.log("click");
        // console.log($(this).parents("ul").children("li").length);
        
        if($(this).parents("ul").children("li.active").next("li").length > 0){            
            $(this).parents("ul").children("li.active").removeClass('active').next("li").addClass('active');            
        }        
    })
    
    // Previous...
    $(document).on("click", "#prevItem", function(){
        // console.log("click");
        // console.log($(this).parents("ul").children("li").length);
        if($(this).parents("ul").children("li.active").prev("li").length > 0){            
            $(this).parents("ul").children("li.active").removeClass('active').prev("li").addClass('active');
        }        
    })
})
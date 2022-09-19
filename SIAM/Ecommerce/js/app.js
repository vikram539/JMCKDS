$(document).ready(function(){

    // selectItem
    $(document).on("click", "#selectItem", function(e){
        e.preventDefault();
        $(this).toggleClass("active");
        if($(this).is(".active")){
           $(".filterDropdown").slideDown();
        }
        else{           
            $(".filterDropdown").slideUp();
        }
    })
    $(document).on("click", ".closeFilter", function(){
        $(".filterDropdown").slideUp();
        $("#selectItem").removeClass("active");
    })

    $(document).on("click", ".productDescription h4", function(){
        
        $(".dropdownBlock").slideToggle();
    })
})
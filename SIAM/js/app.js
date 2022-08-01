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
})
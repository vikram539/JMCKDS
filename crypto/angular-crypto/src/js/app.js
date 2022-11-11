$(document).ready(function(){
       
        var $animation_elements = $('.roadMileStone ul li');
        var $window = $(window);

        function check_if_in_view(event) {                

                var window_height = $window.height();
                var window_top_position = $window.scrollTop();
                var window_bottom_position = (window_top_position + window_height);
                $animation_elements.addClass("active").siblings().removeClass("active");
                $.each($animation_elements, function() {                       

                        var $element = $(this);
                        const $iconScale = $element.find("img");
                        var element_height = $element.outerHeight();
                        var element_top_position = $element.offset().top;
                        var element_bottom_position = (element_top_position + element_height);
                
                        // console.log(element_bottom_position);
                        
                        //check to see if this current container is within viewport
                        if ((window_top_position >= element_top_position && window_top_position <= element_bottom_position)) {
                                $element.addClass('in-view');
                                $iconScale.css({"transform":"scale(0.5)", "transition":"all linear 0.5s"});
                                
                        } else {
                                $element.removeClass('in-view');
                                $iconScale.css({transform:"scale(2)", "transition":"all linear 0.5s"});
                        }
                });
        }

        $(".road").on('scroll resize', check_if_in_view);
        $window.trigger('scroll');
})
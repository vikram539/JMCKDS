<?php $page_id = 1; ?>
<?php include("assets/header.php"); ?>
</head>
<body>
    <main>
        <header class="headerSection">
            <?php include("assets/navbar.php");  ?>
        </header>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="mainContent marginTop_150 text-center">
                            <h2>HQ'd in Mauritius</h2>
                            <h4>we in work with global clients for access to European securities. </h4>
                            <p>Incorporating Swiss principles into our Financial approach empowers our clients with stability in their portfolios. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="mapWrapper mt-5">
                            <div class="mapImage">
                                <img src="<?= $images ?>Frame.svg" alt="<?= $name ?>" class='img-fluid' />

                                <!-- animation -->
                                <div class="locationWrap">
                                    <div class="animateImg">
                                        <img src="<?= $images ?>plane.png" alt="<?= $name ?>" class='img-fluid' />
                                    </div>
                                    <div class="fixedPathImg">                                        
                                        <img src="<?= $images ?>location.png" alt="<?= $name ?>" class='img-fluid' />                                          
                                        <img src="<?= $images ?>sign.png" alt="<?= $name ?>" class='img-fluid' />   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include("assets/add-value.php");  ?>
        <?php include("assets/our-clients.php");  ?>
        <?php include("assets/footer.php");  ?>
    </main> 
</body>
</html>
<script>
    // On scroll
    $(window).on("scroll", function(){

        let _onScroll = $(window).scrollTop();        
        let _offset = $(document).find(".mapImage").offset().top;
        let _innerHeight = $(document).find(".mapImage").outerHeight();
        let _totalHeight = _innerHeight + _offset;
        const _animateElement = $(document).find("#animateElement").offset().top;
        const _animateElement2 = $(document).find("#animateElement2").offset().top;

        if(_onScroll > 400 && _onScroll <= _totalHeight){
            if($(window).width() > 767){
                $(document).find(".animateImg>img").addClass("planeMove");
                setTimeout(function(){
                    // $(".planeMove").fadeOut();
                    $(".fixedPathImg img:last-child").addClass("locationIcon_opacity");                    
                    $(".planeMove").css({"opacity": "0", "transform": "translate(80%, -90%) rotate(-90deg)"});
                    
                }, 2000);
            }
        }
        // else{            
        //     $(document).find(".animateImg>img").removeClass("planeMove");  
        //     setTimeout(function(){
        //         $(".animateImg>img").fadeIn();
                
        //         $(".fixedPathImg img:last-child").removeClass("locationIcon_opacity");
        //     }, 1000);          
        // }

        // Animate block section
        if(_onScroll > _animateElement - 200){
            $(".detailBoxWrapper").animate({top: 0}, 500);
        }

        if(_onScroll > _animateElement2 - 400){
            $(".clientList").animate({top: 0}, 500);
        }

        // Add Value Animate
        let animateElement = document.getElementById("animateElement");
        console.log($(animateElement).offset().top);
    })
</script>
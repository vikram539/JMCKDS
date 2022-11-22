<?php
    $page_ID = 3;
    require("assets/header.php");
?>
</head>
    <body>
        <?php require("assets/navbar.php"); ?>
        <section id="ourPastSection" class="HomeWrap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading_text">
                            <?php if($h2[0] != '' ) echo "<h2>".$h2[0]."<span>".$span[0]."</span></h2>"; ?>
                            <?php if($p[0] != '' ) echo "<p>".$p[0]."</p>"; ?>
                            
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="heading_img">
                            <img src="<?=$imgPath?>our-past.png" alt="our past" class="img-fluid invisible" />
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="heading_text w-100">
                        <?php
                           $getPage = $fun_obj->commonSelect_table("cms_pages", "page_ID^page_name^filename", "WHERE flag=$page_ID ORDER BY page_order ASC");
                            while($fetchPage =  mysqli_fetch_array($getPage)){
                                $pageID = $fetchPage['page_ID'];
                                $pageName = $fetchPage['page_name'];
                                $pageUrl = $fetchPage['filename'];

                                $future_h2 = $fun_obj->TextArray($pageID, "h2");
                                $future_span = $fun_obj->TextArray($pageID, "span");
                                $future_p = $fun_obj->TextArray($pageID, "p");

                                $span = @$future_span[0] != '' ? "<span>".$future_span[0]."</span>" : "";
                                echo"<div class='our-future mt-5 mb-5 pt-5 pb-5'>";
                                    if($future_h2[0] != '' ) echo "<h2>".$future_h2[0].$span."</h2>";
                                    for($i = 0; $i <= count($future_p); $i++){
                                        if(@$future_p[$i] != '' ) echo "<p>".$future_p[$i]."</p>";
                                    }
                                echo"</div>";
                            }
                                
                            ?>
                        </div>
                    </div>

                    
                    <div class="col-12">
                        <div class="cardWrap">
                            <div class="row">
                                <div class="col-12 col-lg-4 mb-4">
                                    <div class="cardInnerOutlet active">
                                        <div class="cardFlex">
                                            <h4>Germany: The HotBox, new dawn and horizon for the European Financial and Regulatory Landscape</h4>
                                            <p>European liberal values and economic principles are prominently on display in German commerce.</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-12 col-lg-4 mb-4">
                                    <div class="cardInnerOutlet">
                                        <div class="cardFlex">
                                            <h4>Classical <span class="w-100 d-block">Management</span></h4>
                                            <p>European liberal values and economic principles are prominently on display in German commerce.</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-12 col-lg-4 mb-4">
                                    <div class="cardInnerOutlet">
                                        <div class="cardFlex">
                                            <h4><span class="">Finance</span> & Real Estate</h4>
                                            <p>European liberal values and economic principles are prominently on display in German commerce.</p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </section>
        
        <?php require("assets/footer-content.php"); ?>
        <?php require("assets/footer.php"); ?>
        <div class="animateText">
            <?php
                $getPageAnimate = $fun_obj->commonSelect_table("cms_pages", "page_ID^page_name^filename", "WHERE flag=$page_ID ORDER BY page_order ASC");
                while($fetchPageAnimate =  mysqli_fetch_array($getPageAnimate)){
                    $pageIDAnimate = $fetchPageAnimate['page_ID'];

                    $animate_h2 = $fun_obj->TextArray($pageIDAnimate, "h2");

                    $span = @$animate_span[0] != '' ? "<span>".$animate_span[0]."</span>" : "";
                    echo"<div class='our-future mt-5 mb-5 pt-5 pb-5 animateHeading cssClass'>";
                        if($animate_h2[0] != '' ) echo "<h2>".$animate_h2[0].$span."</h2>";
                       
                    echo"</div>";
                }
                    
            ?>
        </div>
    </body>
</html>

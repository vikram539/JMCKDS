<?php
    $page_ID = 5;
    require("assets/header.php");
?>
</head>
    <body>
        <?php require("assets/navbar.php"); ?>
        <section id="ourPastSection">            
            <div class="roadMapWrapper">
                <div class="roadMapBox"> 
                    <div class="row d-flex w-100 m-0">  
                        <div class='col-12'>                            
                            <div class="heading_text mt-5 pt-5">
                                <?php if($p[0] != '' ) echo "<p>".$p[0]."</p>"; ?>
                            </div>
                        </div>                                
                        <div class='road'>    
                            <div class="roadMileStone">
                                <ul>
                                    <li class='in-view'>
                                        <img src="images/mapmark.png" alt="" class="img-fluid" />
                                    </li>
                                    <li>
                                        <img src="images/mapmark.png" alt="" class="img-fluid" />
                                    </li>
                                    <li>
                                        <img src="images/mapmark.png" alt="" class="img-fluid" />
                                    </li>
                                    <li>
                                        <img src="images/mapmark.png" alt="" class="img-fluid" />
                                    </li>
                                    <li>
                                        <img src="images/mapmark.png" alt="" class="img-fluid" />
                                    </li>
                                </ul>
                            </div>
                        </div>       
                    </div>
                </div>
            </div>
        </section>

        
        <?php require("assets/footer.php"); ?>
    </body>
</html>

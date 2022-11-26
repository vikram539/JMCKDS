<?php
    $page_ID = 7;
    require("assets/header.php");
?>
</head>
    <body>
        <?php require("assets/navbar.php"); ?>
        <section id="ourTokenSection" class="HomeWrap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading_text">
                            <?php if($h2[0] != '' ) echo "<h2>".$h2[0]."</h2>"; ?>
                            <?php if($p[0] != '' ) echo "<p>".$p[0]."</p>"; ?>
                            
                            <div class="contact_form">
                                <form>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="InputName" placeholder="Name*" />
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" id="InputEmail1"  placeholder="Email*" />
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="InputPhone" placeholder="Phone Number*" />
                                    </div>
                                    <div class="mb-3">
                                    <input type="text" class="form-control" id="InputMessage" placeholder="Message*" />
                                    </div>
                                    <button type="submit" class="btn submit_btn">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </section>
        
        <?php require("assets/footer-content.php"); ?>
        <?php require("assets/footer.php"); ?>
        
    </body>
</html>
<?php include("components/header.php"); ?>
<link rel="stylesheet" href="<?=$root?>scripts/css/main.css">
</head>
<body class='bodyBg'>
    <main>
        <header>
            <?php include("components/top-rate.php") ?>
            <?php include("components/top-logo.php") ?>
            <?php include("components/top-navbar.php") ?>
        </header>
        <div class="productDetailWrap mtb">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="productThumbNail">
                            <div class="show" href="<?=$images?>product/01.png">
                                <img src="<?=$images?>product/01.png" id="show-img">
                            </div>
                            <div class="small-img">
                                <img src="images/online_icon_right@2x.png" class="icon-left" alt="" id="prev-img">
                                <div class="small-container">
                                    <div id="small-img-roll">
                                        <img src="<?=$images?>product/01.png" class="show-small-img" alt="">
                                        <img src="<?=$images?>product/02.png" class="show-small-img" alt="">
                                       
                                        <img src="<?=$images?>product/01.png" class="show-small-img" alt="">
                                        <img src="<?=$images?>product/02.png" class="show-small-img" alt="">
                                       
                                        <img src="<?=$images?>product/01.png" class="show-small-img" alt="">
                                       
                                    </div>
                                </div>
                                <img src="<?=$images?>online_icon_right@2x.png" class="icon-right" alt="" id="next-img">  
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7">
                        <div class="productDescription">
                            <h2>250 Gram Gold Bar</h2>
                            <p>Low premium 250 Gram investment grade gold bullion bar - brand of our choice.</p>
                        </div>                        
                    </div>
                </div>
            </div>
        </div> 

        <!-- Product List -->
        <?php //include("components/product-list.php") ?>
        
    </main>
    <?php include("components/footer.php") ?>
</body>
</html>
  <script src="<?=$root?>scripts/zoom-image.js"></script>
  <script src="<?=$root?>scripts/main.js"></script>
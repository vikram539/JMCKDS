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
                    <div class="col-12 col-lg-6">
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

                            <ul class='row list-unstyled mt-5 p-0'>
                                <li class='col-12 col-lg-6 mb-2'><p>Sku</p></li>
                                <li class='col-12 col-lg-6 mb-2'><p>623acd016c824</p></li>
                                
                                <li class='col-12 col-lg-6 mb-2'><p>Weight</p></li>
                                <li class='col-12 col-lg-6 mb-2'><p>623acd016c824</p></li>
                                
                                <li class='col-12 col-lg-6 mb-2'><p>Serial Number</p></li>
                                <li class='col-12 col-lg-6 mb-2'><p>623acd016c824</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="productDescription">
                            <h2>250 Gram Gold Bar</h2>
                            <p>Low premium 250 Gram investment grade gold bullion bar - brand of our choice.</p>
                        </div> 
                        
                        <div class="productDetail">
                           <div class="productPrice">
                                <h3>$120 <span>In Stock</span></h3>
                            </div>
                        </div>
                        <div class="addCartwrap">
                            <a href="<?=$root?>detail.php">
                                <span>Add to Cart</span>
                                <img src="<?=$images?>+.png" alt='Add to Cart' class='img-fluid' />
                            </a>
                            <input Type="number" id="cartQty" min='1' value='1' />
                        </div>                       
                    </div>
                    <div class='col-12 mt-4'>
                        <div class='productDescription'>
                            <h4>Description <span>+</span></h4>
                            <div class="dropdownBlock">
                                <p>Low premium 250 Gram investment grade gold bullion bar - brand of our choice.</p>

                                <p>Each bar contains 250 grams of 999 fine investment grade gold bullion.</p>

                                <p>All bars sold are marked with the weight, size and purity of the metal. Bars may or may not come with a matching assay certificate. Some brands do not provide serial numbers.</p>

                                <p>Sample brands which may be provided include:</p>

                                <p>Argor Heraeus
                                Asahi
                                Credit Suisse
                                Heraeus
                                PAMP
                                Perth Mint
                                RCM
                                UBS
                                Valcambi
                                Other brands not listed above may also be provided. All bars sold are guaranteed to be from an LBMA approved refinery. </p>

                                <p>These bars are very low premium 250 gram gold bars and are an excellent option for individuals looking to buy gold bars or to increase a position in gold bullion. Low premium 250 gram gold bars are popular among gold investors in Europe. </p>

                                <p>View today's gold price per gram. 

                                Sell 250 gram gold bars to us.

                                Price includes free insured storage in our vault for up to one year from purchase date.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

        <!-- Product List -->
        <section class="productListWrap">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Product Block -->
                <div class="productCategoryWrap">
                    <h4 class='mb-5'>Related Pieces</h4>
                    <div class="row">
                        <?php
                            for($i = 1; $i<=3; $i++){
                        ?>
                        <div class="col-12 col-lg-4">
                            <div class="productBlock">
                                <div class="productImg">
                                    <img src="<?=$images?>product/01.png" alt='' class="img-fluid" />
                                </div>
                                <div class="productDetail">
                                    <h4>1 kilo Gold, Type of Our Purchase</h4>
                                    <div class="productPrice">
                                        <h3>$120 <span>In Stock</span></h3>
                                    </div>
                                </div>
                                <div class="addCartwrap">
                                    <a href="<?=$root?>detail.php">
                                        <span>Add to Cart</span>
                                        <img src="<?=$images?>+.png" alt='Add to Cart' class='img-fluid' />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        
    </main>
    <?php include("components/footer.php") ?>
</body>
</html>
  <script src="<?=$root?>scripts/zoom-image.js"></script>
  <script src="<?=$root?>scripts/main.js"></script>
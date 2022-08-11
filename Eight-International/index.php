<?php $page_id = 1; ?>
<?php include("assets/header.php"); ?>
</head>
<body>
    <main>
        <header class="headerSection">
            <?php include("assets/navbar.php");  ?>
        </header>
        <section>
            <div class="container"
                <div class="row">
                    <div class="col-12">
                        <div class="mainContent marginTop_150 text-center">
                            <h2>HQ'd in Mauritius</h2>
                            <h4>we in work with global clients for access to European securities. </h4>
                            <p>Incorporating Swiss principles into our Financial approach empowers our clients with stability in their portfolios. </p>
                        </div>
                        <div class="mapWrapper mt-5">
                            <div class="mapImage">
                                <img src="<?= $images ?>Frame.svg" alt="<?= $name ?>" class='img-fluid' />

                                <!-- animation -->
                                <div class="locationWrap">
                                    <div class="animateImg"></div>
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
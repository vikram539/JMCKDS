<?php $page_id = 4; ?>
<?php include("assets/header.php"); ?>
</head>
<body>
    <main>
        <header class="headerSection">
            <?php include("assets/navbar.php");  ?>
            <div class="bannerTextWrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="bannerTextWrap">
                                <div class="typography">
                                    <h2>Industry Neutral investment strategies through Sector Agnostic partnerships.</h2>
                                    <p>We work with various companies active in the fields of finance, mining, banking, technology and law to gain an additional competitive advantage.</p>

                                    <p>We also work with logistics companies, metal purifiers and commodity firms in mutually beneficial value exchanges. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class='w-100'>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="partnersList">
                                <ul class='partners'>
                                    <li><a href="<?=$root?>">Financial Institutions</a></li>
                                    <li><a href="<?=$root?>">Mining Companies</a></li>
                                    <li><a href="<?=$root?>">Metal Purifiers</a></li>
                                    <li><a href="<?=$root?>">Commodity Firms</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php include("assets/footer.php");  ?>
        </header>
    </main>  
</body>
</html>
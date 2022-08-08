<?php $page_id = 1; ?>
<?php include("assets/header.php"); ?>
</head>
<body>
    <main>
        <header class="headerSection">
            <?php include("assets/navbar.php");  ?>
            <div class="bannerTextWrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="bannerTextWrap">
                                <div class="typography">
                                    <h2>Sophisticated is the new Swiss</h2>
                                    <p>Forward-thinking brands use Passbase to securely verify their customers’ identities through ID documents, selfies, and government databases</p>
                                </div>
                                <div class="btn-group">
                                    <div class="comm_btn">
                                        <a href="<?=$root?>reach-us.php" class="d-flex">contact</a>
                                    </div>
                                    <div class="btn-transparent ms-4">
                                        <a href="<?=$root?>clients.php" class="d-flex">Book Demo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="bannerVideoWrap">
                                <div class="imgBanner">
                                    <img src="<?=$images ?>Veil.gif" alt="Logo" class="img-fluid" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include("assets/footer.php");  ?>
        </header>
    </main>     
    
</body>
</html>
<?php include("components/header.php"); ?>
</head>
<body class='bodyBg'>
    <main>
        <header>
            <?php include("components/top-rate.php") ?>
            <?php include("components/top-logo.php") ?>
            <?php include("components/top-navbar.php") ?>
        </header>
        <div class="secureSavingWrape mtb">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="secureSavingText">
                            <h2 class='mb-4'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                            <p class='mt-4'>Our inspiration is boundless, yet always grounded by a vision of timeless and luxurious beauty guiding everything we do.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <!-- <img src="<?=$images?>gold.png" class='img-fluid' /> -->
                    </div>
                </div>
            </div>
        </div> 

        <!-- Product List -->
        <?php include("components/product-list.php") ?>
        
    </main>
    <?php include("components/footer.php") ?>
</body>
</html>
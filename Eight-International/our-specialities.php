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
                            <object data="<?=$images?>portfolia.svg" class="responsive_object"> </object>
                            <h2>Bringing Prosperity to your Portfolio!</h2>                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include("assets/our-portfolio.php");  ?>
        
        <?php include("assets/modals.php");  ?>

        <?php include("assets/footer.php");  ?>
    </main> 
</body>
</html>

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
                            <img src="<?= $images ?>sign.png" alt="<?= $name ?>" class='img-fluid' /> 
                            <h2>About us</h2>
                            <p>Mauritius is a thriving offshore financial hub, with its formation market being one of the world's fastest-growing company registers due to its efficiency, creativity, and extensive variety of offshore services. As a suitable platform for wealth management, Mauritius has the appropriate features in terms of trustworthy solution offerings, risk reduction, and confidentiality protections.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include("assets/aboutUs.php");  ?>
        <section>
            <div class="waveLine">
                <object data="<?=$images?>line1.svg" > </object>
                <object data="<?=$images?>line2.svg" > </object>
            </div>
        </section>
        <?php include("assets/footer.php");  ?>
    </main> 
</body>
</html>
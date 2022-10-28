<?php
    $page_ID = 1;
    require("assets/header.php");
?>
</head>
    <body>
        <?php
            $pageBgImg = $fun_obj->commonSelect_table("cms_gallery","page_id^img_order^pagename^small_img","WHERE page_id='$page_ID'");           
            $num_row = mysqli_num_rows($pageBgImg);
            if($num_row > 0){
                $fetchGalery = mysqli_fetch_assoc($pageBgImg);
                $pagename = str_replace(" ", "-", $fetchGalery['pagename']);
                $imgName = $fetchGalery['small_img'];
            }
        ?>
        <section class="homeHeader" style="background-image: url('<?=$imgPath.$pagename."/".$imgName?>')">
            <?php require("assets/navbar.php"); ?>
            <?php require("assets/home-header-caption.php"); ?>
        </section>         
        <?php require("assets/services.php"); ?>
        <section class="prestwickFlight">
            <img src="<?=$imgPath?>1920x820.jpg" alt="<?=$name?>" class='img-fluid w-100' />
            <div class="homeContent">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="prestwickContent">
                                <?php if($p[0] != "") echo"<p class='text-center'>$p[0]</p>"; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php require("assets/footer.php"); ?>
    </body>
</html>
<?php
    $page_ID = 1;
    require("assets/header.php");
?>
</head>
    <body>
        <video autoplay muted loop id="video_1" width='100%'>
            <source src="<?=$imgPath?>video/CryptoCronic1.mp4" type="video/mp4">
        </video>
        <main class="position_main_div">
            <?php require("assets/navbar.php"); ?>
            <section id="homeSection" class="active HomeWrap">    
                <div class="container">            
                    <div class="row position-relative">                
                        <div class="signatureBlock signatureText col-12">
                            <h1>a decentralised,</h1>
                            <h2>autonomous society,</h2>
                            <h3>disrupting both crypto and chronic.</h3>
                        </div>
                        <div class="signatureBlock signatureImg col-12 d-flex justify-content-center">
                            <img src="<?=$imgPath ?>goat.png" alt="Goat" class="img-fluid">
                        </div>
                        <div class="signatureBtnBlock">
                            <div class="buttonWrap">
                                <a href="" class="btnBg">Expoler</a>
                                <a href="" class="transparentBg buttonBorder">Creat</a>
                            </div> 
                        </div>
                        <div class="buttonWrap absolutePos buttonBorder" id="homeBtn">
                            <a href="" class="linkButton">Welcome to the Realm</a>
                        </div> 
                    </div>
                </div> 
            </section>
            
            <?php require("assets/footer.php"); ?>
        </mian>
        
        <video autoplay muted loop id="video_2" width='100%'>
            <source src="<?=$imgPath?>video/CryptoCronic2.mp4" type="video/mp4">
        </video>
    </body>
</html>

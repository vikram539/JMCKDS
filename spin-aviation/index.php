<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SBCM - AG</title>
    <link href="bootstrap5/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap5/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/css/owl.theme.default.min.css">
    
    <script  src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>
<body>
    <main>
        <header class="top_header">
            <div class="topHeader_img_wrapper">
                <div class="header_img">
                    <img src="images/slider.jpg" alt="Spin Aviation" class="img-fluid" />
                </div> 
                <div class="menu_section">     
                    <?php include("assets/top-bar.php");  ?>
                    <?php include("assets/banner-text.php");  ?>
                </div>
            </div>
        </header>          
        <?php include("assets/booking.php");  ?>
    </main>    
    <?php include("assets/footer.php");  ?>
</body>
</html>
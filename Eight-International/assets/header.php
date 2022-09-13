<?php include("functions/functions.php"); ?>
<?php include("variables.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' type='image/png' href='<?= $images ?>favicon.png' size='25x25' />
    <title><?= $name; ?></title>
    <link href="bootstrap5/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap5/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="<?= $root ?>css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="<?= $root ?>owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= $root ?>owlcarousel/css/owl.theme.default.min.css">
    
    <script  src="https://code.jquery.com/jquery-3.6.0.js"></script>
    
    <!-- javascript -->
    <script src="<?= $root ?>owlcarousel/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function(){
            var path = window.location.href;
            console.log(path);
            // if ( path == '' ) {
            //     path = 'index.php';       
            // }
        
            var target = $(document).find('nav #navbarNav ul li a[href="'+path+'"]').closest("li");
            // Add active class to target link
            target.addClass('active');
        })
    </script>
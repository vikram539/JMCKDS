<!DOCTYPE html>

<html lang="en">

	<head>

	<meta charset="utf-8">

    <meta name="robots" content="index, follow"> 

	<link rel='icon' type='image/png' href='<?=$website_images?>favicon.png' size='25x25' />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="keywords" content="<?php if($keywords[0]!='') echo $keywords[0]; ?>" />

	<meta name="description" content="<?php if($description[0]!='') echo $description[0]; ?>" />

		

	<title><?php if($title[0]!='') echo $title[0]; ?></title>

<!--############## Google Fonta ######################-->

	<link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400&family=Nunito:wght@400;600&display=swap" rel="stylesheet">

<!--############## Google Fonta End ######################-->

	

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>              

  		

			

<!--################ Common-css-style CSS #################-->

	<link rel="stylesheet" href="<?=$website_domain."css/".$property_css."?=".rand(); ?>">

	<link rel="stylesheet" href="<?=$website_domain;?>css/responsive.css?='0988'">

<!--################ font-awesome #################-->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
<link rel="stylesheet" href="<?=$website_domain;?>owlcarousel/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?=$website_domain;?>owlcarousel/css/owl.theme.default.min.css?="<?= rand() ?>">
	

<!--################ Ligh Box CSS Link #################-->
<script type="text/javascript">
	
	function getBase64Image(img) {
  var canvas = document.createElement("canvas");
  canvas.width = img.width;
  canvas.height = img.height;
  var ctx = canvas.getContext("2d");
  ctx.drawImage(img, 0, 0);
  var dataURL = canvas.toDataURL("image/png");
  return dataURL.replace(/^data:image\/(png|jpg);base64,/, "");
}

var base64 = getBase64Image(document.getElementById("imageid"));
</script>
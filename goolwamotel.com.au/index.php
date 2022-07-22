<?php
$page_ID=1;
include("assets/variables.php");
include("assets/header.php");
?>
</head>
<body>
<header>
<?php include("assets/primary-menu.php"); ?>

<?php include("assets/carousel.php"); ?>
<?php include("assets/widget.php"); ?>
</header>
<section class="contents">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="txt-formation">
				<?php /* <img src="<?=$website_images;?>24hrs.png" alt="Check-in 24hrs" class="img-fluid hrs" /> */?>
					<?php if($h2[0]!='') echo"<h2>".$h2[0]."</h2>";?>
					<?php if($h4[0]!='') echo"<h4>".$h4[0]."</h4>";?>
					<?php 
					for($i=0; $i<count($p); $i++)
					{
						if($p[$i]!='') echo"<p>".$p[$i]."</p>";
					}
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include("assets/facility-icons.php"); ?>
<?php include("assets/room-thumb.php"); ?>
<?php include("assets/guest-facilities-features.php"); ?> 
<?php include("assets/things-to-do.php"); ?>
<?php //include("assets/prime-location.php"); ?>

<?php include("assets/footer.php"); ?>
</body>
</html>
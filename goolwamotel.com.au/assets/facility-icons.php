<?php 

$facilityIcon_id=3;



$facilityIcon_h2=$fun_obj->TextArray($facilityIcon_id, "h2");

?>

<section class="bg-light mt-4 mb-4 pt-4 pb-4">

	<div class="container">

	<div class="row">		

			<div class="col-12">

				<div class="txt-formation">

					<?php if($facilityIcon_h2[0]!='') echo"<h2>".$facilityIcon_h2[0]."</h2>";?>

				</div>

			</div>

			

			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 receptions">

				<?php include("assets/receptions.php"); ?>

			</div>	

		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">

			<ul class="d-flex flex-wrap icon-img">

			<hr>

			<?php 

				

			$icon_sel=$fun_obj->commonSelect_table("cms_hotel_facility_icons","hotel_facility_id^facility_name^facility_page_id^facility_img^flag^facility_alt_name","WHERE FIND_IN_SET('$facilityIcon_id',facility_page_id) order by facility_icon_order ASC");

				while($run_icon=mysqli_fetch_array($icon_sel))

				{

					$alt_name=$run_icon['facility_alt_name'];

					$icon_image=$run_icon['facility_img'];

					$path = $website_images."facility-img-icons/".$icon_image;
					$type = pathinfo($path, PATHINFO_EXTENSION);
					$data = file_get_contents($path);
					$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);


					echo"<li class=''><img src='$base64'  alt='' title='' /><span>".$alt_name."</span></li>";

				}

			?>									

			</ul>

		</div>

		

		</div>

	</div>

</section>
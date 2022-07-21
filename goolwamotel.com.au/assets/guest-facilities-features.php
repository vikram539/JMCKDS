<section class="features pt-4 pb-4 mt-4 mb-4">

	<div class="container">

		<div class="row">

		<?php 

			$guest_facility_id=21;

			$guest_facility_h3=$fun_obj->TextArray($guest_facility_id, "h2");

			$guest_facility_h4=$fun_obj->TextArray($guest_facility_id, "h4");

			$guest_facility_p=$fun_obj->TextArray($guest_facility_id, "p");

			$guest_facility_li=$fun_obj->TextArray($guest_facility_id, "li");

		?>

			<div class="col-12 pt-4 pb-4 mt-4 mb-4">

				<div class="txt-formation">					

					<?php if($guest_facility_h3[0]!='') echo"<h2>".$guest_facility_h3[0]."</h2>";?>

				</div>

			</div>

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">

				<div class="guest-features">

				

					<?php if($guest_facility_h4[0]!='') echo"<h4 class='mb-4'>".$guest_facility_h4[0]."</h4>";?>

					<?php if($guest_facility_p[0]!='') echo"<p class='text-left'>".$guest_facility_p[0]."</p>";?>

					<ul class='d-flex flex-wrap'>

					<?php 

					for($i=0; $i <= 7; $i++)

					{

						if($guest_facility_li[$i]!='') echo"<li class='col-xs-6 w-50'><i class='fa fa-check' aria-hidden='true'></i><label>".$guest_facility_li[$i]."</label></li>";

					}

					?>

					</ul>

				</div>

			</div>

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">

				<div class="guest-features">

					<?php

					$facility_gallery_id=3;



					$gallery_sel=$fun_obj->commonSelect_table("cms_gallery","gallery_id^pagename^small_img","where page_id='$facility_gallery_id' AND flag='1' and img_for_slider='1' order by img_order ASC");

					$run_gallery=mysqli_fetch_array($gallery_sel);

						$path = $website_images.str_replace(" ","-",strtolower(trim($run_gallery['pagename'])))."/".$run_gallery['small_img'];
						$type = pathinfo($path, PATHINFO_EXTENSION);
						$data = file_get_contents($path);
						$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);


					echo"<img src='$base64' alt='".$run_gallery['pagename']."' class='img-fluid' />";

											

					?>	

					<?php

					$facility_Pagename=$fun_obj->commonSelect_table("cms_pages","page_ID^page_name^filename^page_order^for_menu^flag","WHERE page_ID='$facility_gallery_id'");

					$facility_fetch_href=mysqli_fetch_array($facility_Pagename);



						?>						

                    <a href="<?=$website_domain.$facility_fetch_href['filename']; ?>" title="" class="btn btn-danger">read more</a> 

				</div>

			</div>

			

			</div>

		</div>

	</div>

</section>
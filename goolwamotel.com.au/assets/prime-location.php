<section class="map pt-4 pb-4 mt-4 mb-4">
	<div class="container">
		<div class="row">
		<?php 
			$prime_location_id=6;
			$prime_location_h3=$fun_obj->TextArray($prime_location_id, "h3");
			$prime_location_h4=$fun_obj->TextArray($prime_location_id, "h4");
			$prime_location_p=$fun_obj->TextArray($prime_location_id, "p");
			$prime_location_li=$fun_obj->TextArray($prime_location_id, "li");
		?>
			<div class="col-12 pt-4 pb-4 mt-4 mb-4">
				<div class="txt-formation">					
					<?php if($prime_location_h3[0]!='') echo"<h2>".$prime_location_h3[0]."</h2>";?>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
				<div class="map-location">
					<?php




					$gallery_sel=$fun_obj->commonSelect_table("cms_gallery","gallery_id^pagename^small_img","where page_id='$prime_location_id' AND flag='1' and img_for_slider='1' order by img_order ASC");

					$run_gallery=mysqli_fetch_array($gallery_sel);

						$path = $website_images.str_replace(" ","-",strtolower(trim($run_gallery['pagename'])))."/".$run_gallery['small_img'];
						$type = pathinfo($path, PATHINFO_EXTENSION);
						$data = file_get_contents($path);
						$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);


						echo"<img src='$base64' alt='".$run_gallery['pagename']."' class='img-fluid' />";

											

					?>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
				<div class="map-location">
					<?php if($prime_location_h4[0]!='') echo"<h4>".$prime_location_h4[0]."</h4>";?>
					<?php if($prime_location_p[0]!='') echo"<p class='text-left'>".$prime_location_p[0]."</p>";?>
					<?php if($prime_location_p[1]!='') echo"<p class='text-left'>".$prime_location_p[1]."</p>";?>
					<ul>
					<?php 
					for($i=0; $i<count($prime_location_li); $i++)
					{
						if($prime_location_li[$i]!='') echo"<li><i class='fa fa-check' aria-hidden='true'></i><label>".$prime_location_li[$i]."</label></li>";
					}
					?>
					</ul>
				</div>
			</div>
			</div>
		</div>
	</div>
</section>